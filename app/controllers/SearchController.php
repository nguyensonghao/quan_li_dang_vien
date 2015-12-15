<?php 

	class SearchController extends BaseController {

		public $exportData;
		public $user;

		public function __construct () {
			$this->user = new User();
		}
		
		// Hiển thị tìm kiếm cơ bản
		public function showSearchSimple () {
			$list = $this->user->danhmucTimkiem();
			Session::forget('conditionSearchSimple');
			return View::make('module.search.timkiem', $list);
		}

		// Hiển thị tìm kiếm nâng cao
		public function showSearchAdvance () {
			$list = $this->user->danhmucCobanDangvien();
			return View::make('module.search.timkiem-nangcao', $list);
		}

		// Hiển thị kết quả tìm kiếm cơ bản
		public function showSearchResult () {
			if (!Session::has('conditionSearchSimple')) {
				return Redirect::to('search');
			} else {
				$list = $this->user->danhmucTimkiem();
				$list['ds_dv'] = $this->querySearchSimple()['result'];
				$list['number_ds_dv'] = $this->querySearchSimple()['numberResult'];
				return View::make('module.search.timkiem-ketqua', $list);	
			}
			
		}

		// Hàm xử lí tìm kiếm cơ bản
		public function actionSearchSimple () {
			$condition = Input::all();
			Session::set('conditionSearchSimple', $condition);
			return Redirect::to('timkiem/ketqua');
		}

		// Hàm gửi email
		public function actionSendMail () {
			if (!Session::has('conditionSearchSimple')) {
				return View::make('module.result-search.guimail');
			} else {
				$ds_dv = $this->querySearchSimple()['all'];	
				return View::make('module.result-search.guimail')->with('ds_dv', $ds_dv);
			}		
		}

		// Hàm tìm kiếm cơ bản trong cơ sở dữ liệu
		public function querySearchSimple () {
			$condition = Session::get('conditionSearchSimple');
			if (!Session::has('chibotructhuoc') || is_null($condition['chibotructhuoc'])) {
				$cqtd = 'Trường Đại học Bách Khoa Hà Nội';
			} else {
				$cqtd = DB::table('dm_chibo')->where('ma_dv', $condition['chibotructhuoc'])->first()->dv;	
			}
			$data = $this->user->timkiemDangvien($condition, $cqtd);
			return $data;
		}

		// Hàm tìm kiếm kết quả theo danh sách trường thông tin để in
		public function querySearchSimpleToPrint($listOfField) {
			$condition = Session::get('conditionSearchSimple');
			if (!Session::has('chibotructhuoc') || is_null($condition['chibotructhuoc'])) {
				$cqtd = 'Trường Đại học Bách Khoa Hà Nội';
			} else {
				$cqtd = DB::table('dm_chibo')->where('ma_dv', $condition['chibotructhuoc'])->first()->dv;	
			}
			$data = $this->user->timkiemDangvienTheoTruong($condition, $cqtd, $listOfField);
			return $data;
		}

		// In danh sách đảng viên
		public function actionExportExcel () {
			$this->exportData = new ExportDataController();
			$result = $this->querySearchSimple()['all'];
			$data = [];
			foreach ($result as $key => $value) {
				$data[$key] = (array) $value;
			}
			$this->exportData->actionExportExcelFromArray($data);
		}

		public function exportInformationOfOneMember ($shc) {
			$member = DB::table('soyeu_tbl')->where('sohieuchuan', $shc)->first();
			$list_key = array_keys(json_decode(json_encode($member), true));
			return View::make('module.search.export-data')->with('member', $member)
			->with('list_key', $list_key);
		}

		public function exportListDv () {
			if (!Session::has('conditionSearchSimple')) {
				return Redirect::to('search');
			} else {
				$list = $this->user->danhmucTimkiem();
				$list['ds_dv'] = $this->querySearchSimple()['result'];
				$list['dm_dv'] = DB::table('dm_search')->get();
				$list['number_ds_dv'] = $this->querySearchSimple()['numberResult'];
				return View::make('module.search.export-data', $list);	
			}
		}

		public function actionSearchAdvance () {
			$condition = json_decode(Input::get('condition'));
			// foreach ($condition as $key => $value) {
			// 	switch ($value) {
			// 		case 'hoten':
			// 			break;
					
			// 		default:
			// 			break;
			// 	}				
			// }
			print_r($condition);
		}


	}

?>