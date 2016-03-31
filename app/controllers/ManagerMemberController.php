<?php 

	class ManagerMemberController extends BaseController {
		public $user;

		public function __construct () {
			$this->beforeFilter('member');
			$this->user = new User();
		}

		public function showListMember () {
			$list['ds_dv'] = $this->user->listDangvien();
			return View::make('module.manager.member.dangvien-danhsach', $list);
		}

		public function showInformationMember ($shcc) {
			$dv     = DB::table('soyeu_tbl')->where('shcc', $shcc)->first();
			$qhgd   = DB::table('qhgd_tbl')->where('shcc', $shcc)->get();
			$qtcc   = DB::table('qtct_tbl')->where('shcc', $shcc)->get();
			$qtbd   = DB::table('qtbd_tbl')->where('shcc', $shcc)->get();
			$qtdbl  = DB::table('qtdbl_tbl')->where('shcc', $shcc)->get();
			$qtkl   = DB::table('qtkl_tbl')->where('shcc', $shcc)->get();
			$qtkt   = DB::table('qtkt_tbl')->where('shcc', $shcc)->get();
			$dt     = DB::table('qtdtcm_tbl')->where('shcc', $shcc)->get();
			$qtcvdt = DB::table('qtcvdt_tbl')->where('shcc', $shcc)->get();
			$qtcvkn = DB::table('qtcvkn_tbl')->where('shcc', $shcc)->get();
			if ($dv == null) {
				return View::make('module.manager.member.information-member')->with('flag', 0);
			} else {
				return View::make('module.manager.member.information-member')
				->with('dv', $dv)->with('flag', 1)
				->with('qhgd', $qhgd)->with('qtcc', $qtcc)->with('qtbd', $qtbd)
				->with('qtdbl', $qtdbl)->with('qtkl', $qtkl)->with('qtkt', $qtkt)
				->with('dt', $dt)->with('qtcvdt', $qtcvdt)->with('qtcvkn', $qtcvkn);
			}
		}

		public function showAddMember () {
			$list = $this->user->danhmucCobanDangvien();
			return View::make('module.manager.member.dangvien-them', $list);
		}

		public function showAddMemberTeacher () {
			$list = $this->user->danhmucCobanDangvien();
			$list['ds_dv'] = $this->user->danhsachDangVien();
			return View::make('module.manager.member.dangvien-them-giaovien', $list);	
		}

		public function showExportMember () {
			$ds_dv = DB::table('soyeu_tbl')->get();
			$ds_dv_kt = DB::table('soyeu_tbl')->where('status', 1)->get();
			return View::make('module.manager.member.export-member')
			->with('ds_dv', $ds_dv)->with('ds_dv_kt', $ds_dv_kt);
		}

		public function showChangeDepartmentMember () {
			$ds_dv = DB::table('soyeu_tbl')->get();
			$dm_chibo = DB::table('dm_chibo')->get();
			return View::make('module.manager.member.dangvien-chuyenvien')
			->with('ds_dv', $ds_dv)->with('dm_chibo', $dm_chibo);
		}

		public function showRateMember () {
			$ds_dv = DB::table('soyeu_tbl')->get();
			return View::make('module.manager.member.rate-member')->with('ds_dv', $ds_dv);
		}

		public function showXuatDulieuTimKiem () {
			return View::make('module.excel.xuatdulieutimkiem');
		}		

		public function actionChangedepartmentMember () {
			if (!Input::has('ds_dv') || !Input::has('dm_chibo')) {
				return Redirect::back()->with('result-change-department', -1);
			} else {
				DB::table('soyeu_tbl')->where('ttd', Input::get('ds_dv'))
				->update(array('ma_cbql' => Input::get('dm_chibo')));
				return Redirect::back()->with('result-change-department', 1);
			}
		}

		public function actionExportMember () {
			DB::table('soyeu_tbl')->where('ttd', Input::get('ds_dv'))
			->update(array('status' => 1));
			return Redirect::back()->with('result-export-member', 1)
			->with('name-member-export', Input::get('ds_dv'));
		}

		public function actionBackupMember ($shc) {
			DB::table('soyeu_tbl')->where('sohieuchuan', $shc)
			->update(array('status' => 0));
			$dv = DB::table('soyeu_tbl')->where('sohieuchuan', $shc)
			->first();

			return Redirect::back()->with('result-backup-member', 1)
			->with('name-member-backup', $dv->ttd);	
		}

		public function actionGetChibo () {
			$ma_cb = $_POST['ma_cb'];
			$cap = DB::table('dm_chibo')->where('ma_dv', $ma_cb)->first()->cap;
			$result = [];
			if ($cap == 1) {
				$ds_cb = DB::table('dm_chibo')->where('cha', $ma_cb)->get();
				$result = $ds_cb;
				for ($i = 0; $i < count($ds_cb); $i++) {
					$cb = DB::table('dm_chibo')->where('cha', $ds_cb[$i]->ma_dv)->get();
					$result = array_merge($result, $cb);
				}
			} else {
				$result = DB::table('dm_chibo')->where('cha', $ma_cb)->get();
			}

			return Response::json($result);
		}

		public function getDvBySohieuchuan ($sohieuchuan) {
			$list_dv = $this->getListDv();
			for ($i = 0; $i < count($list_dv); $i++) {
				if ($list_dv[$i]->sohieuchuan == $sohieuchuan) {
					return $list_dv[$i];
				}
			}

			return array();
		}

		public function getInformationtoJson () {
			$nameDangvien = $_POST['dv'];
			$listDangvien = $this->user->danhsachDangVien();
			for ($i = 0; $i < count($listDangvien); $i++) {
				if ($listDangvien[$i]->ttd == $nameDangvien) {
					return Response::json($listDangvien[$i]);
				}
			}

			return null;
		}

		public function actionAddMember () {
			$shcc = Input::get('sohieuchuan');
			// Nếu số hiệu công chức trùng
			if (DB::table('soyeu_tbl')->where('sohieuchuan', $shcc)->count() > 0) {
				return Redirect::back()->with('result-add-member', -1);
			} else {
				if (!Input::hasFile('img')) {
					return Redirect::back()->with('result-add-member', -4);
				} else {	
					$image = Input::file('img');
					$extension = Input::file('img')->getClientOriginalExtension();
					if ($extension != 'png' && $extension != 'jpg') {
						return Redirect::back()->with('result-add-member', -3);
					} else {
						$destinationPath = public_path().'/thongtindangvien/image';
						$fileName = Input::get('sohieuchuan').'.jpg';
						Input::file('img')->move($destinationPath, $fileName);
						$dv = Input::all();
						$hoten = Input::get('hoten');
						$tach_hoten = $this->tachHoten($hoten);
						$dv['hodem'] = $tach_hoten['hodem'];
						$dv['ten'] = $tach_hoten['ten'];
						unset($dv['hoten']);
						unset($dv['img']);
						if (DB::table('soyeu_tbl')->insert($dv)) {
							return Redirect::back()->with('result-add-member', 1);
						} else {
							return Redirect::back()->with('result-add-member', -2);
						}
					}
				}
			}
		}

		// Ham tach ten cua Dang vien
		public function tachHoten ($hoten) {
			$size = strlen($hoten) - 1;
			for ($i = $size; $i > 0; $i--) {
				if ($hoten[$i] == ' ') {
					$j = $size - $i;
					$ten = substr($hoten, -$j);
					$hodem = substr($hoten, 0, $i);
					return array('hodem' => $hodem, 'ten' => $ten);
				}
			}

			return array('hodem' => '', 'ten' => $ten);
		}



	}

?>