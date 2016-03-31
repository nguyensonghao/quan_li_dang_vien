<?php 

	class SearchController extends BaseController {

		public $exportData;
		public $user;
		public $servicesController;

		public function __construct () {
			$this->beforeFilter('member');
			$this->user = new User();
			$this->servicesController = new ServicesController();
			$this->exportData = new ExportDataController();
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
			if (!Session::has('conditionSearchSimple') && !Session::has('conditionSearchAdvance')) {
				return Redirect::to('timkiem');
			} else {
				if (Session::has('conditionSearchAdvance')) {
					$list = $this->user->danhmucTimkiem();
					$condition = Session::get('conditionSearchAdvance');
					$result = $this->user->timkiemDangvienNangcao($condition);
					$list['ds_dv'] = $result['result'];
					$list['type'] = 1;
					$list['number_ds_dv'] = $result['numberResult'];
					return View::make('module.search.timkiem-ketqua', $list);	
				} else {
					$list = $this->user->danhmucTimkiem();
					$list['type'] = 0;
					$list['ds_dv'] = $this->querySearchSimple()['result'];
					$list['number_ds_dv'] = $this->querySearchSimple()['numberResult'];
					return View::make('module.search.timkiem-ketqua', $list);	
				}
			}
		}

		// Hàm xử lí tìm kiếm cơ bản
		public function actionSearchSimple () {
			$condition = Input::all();
			Session::set('conditionSearchSimple', $condition);
			Session::forget('conditionSearchAdvance');
			return Redirect::to('ket-qua-tim-kiem');
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
			$date = array();
			$condition = Session::get('conditionSearchSimple');
			if (!Session::has('chibotructhuoc') || is_null($condition['chibotructhuoc'])) {
				$cqtd = 'Trường Đại học Bách Khoa Hà Nội';
			} else {
				$cqtd = DB::table('dm_chibo')->where('ma_dv', $condition['chibotructhuoc'])->first()->dv;	
			}

			if ($condition['tuoitu'] != null && $condition['tuoiden'] != null) {

				$tuoitu = $this->servicesController->subDateCurrentYear($condition['tuoitu']);
				$tuoiden = $this->servicesController->subDateCurrentYear($condition['tuoiden']);
				$date = array(
					'tu' => $tuoitu,
					'den' => $tuoiden
				);
			} else {
				$date = null;
			}

			$listOfField = ["*"];
			$data = $this->user->timkiemDangvien($condition, $cqtd, $date, $listOfField);
			return $data;
		}

		// Hàm tìm kiếm kết quả theo danh sách trường thông tin để in
		public function querySearchSimpleToPrint($listOfField) {
			$date = array();
			$condition = Session::get('conditionSearchSimple');
			if (!Session::has('chibotructhuoc') || is_null($condition['chibotructhuoc'])) {
				$cqtd = 'Trường Đại học Bách Khoa Hà Nội';
			} else {
				$cqtd = DB::table('dm_chibo')->where('ma_dv', $condition['chibotructhuoc'])->first()->dv;	
			}

			if ($condition['tuoitu'] != null && $condition['tuoiden'] != null) {

				$tuoitu = $this->servicesController->subDateCurrentYear($condition['tuoitu']);
				$tuoiden = $this->servicesController->subDateCurrentYear($condition['tuoiden']);
				$date = array(
					'tu' => $tuoitu,
					'den' => $tuoiden
				);
			} else {
				$date = null;
			}
			$data = $this->user->timkiemDangvien($condition, $cqtd, $date, $listOfField);
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
			// $this->exportData->actionExportExcelFromArray($data);
			echo '<pre>';
			print_r($data[0]);
			echo '</pre>';
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
			Session::set('conditionSearchAdvance', $condition);
			Session::forget('conditionSearchSimple');
			return Redirect::to('timkiem/ketqua');
		}

		public function actionPrintSocai () {
			$this->exportData = new ExportDataController();
			$result = $this->querySearchSimple()['all'];
			$data = [];
			foreach ($result as $key => $value) {
				$data[$key] = (array) $value;
			}
			$this->exportData->inSocai($data);
		}


	}

?>