<?php 

class ThongtinDangvienController extends BaseController {

	public $user;

	public function __construct () {
		$this->user = new User();
	}

	public function showDangvien ($shc) {
		$dangvien = User::dangvienTheoSohieuchuan($shc);
		$shcc = $dangvien->shcc;

		$list = array();

		// Lấy các danh mục thông tin đảng viên
		$list = $this->user->danhmucCobanDangvien();

		// Lấy thông tin đảng viên
		$list['ngoaingu']   = $this->user->ngoainguDangvien($shcc);
		$list['khenthuong'] = $this->user->khenthuongDangvien($shcc);
		$list['kyluat']     = $this->user->kyluatDangvien($shcc);
		$list['quanhe']     = $this->user->quanheDangvien($shcc);
		$list['nuocngoai']  = $this->user->nuocngoaiDangvien($shcc);
		$list['doanthe']    = $this->user->chucvuDoantheDangvien($shcc);
		$list['chucvucq']   = $this->user->chucvuChinhquyenDangvien($shcc);

		// Lấy thông tin danh mục để hiển thị dữ liệu
		$list['dm_tdnn']    = $this->showTrinhdoNgoaingu();
		$list['dm_kt']      = $this->showKhenThuong();
		$list['dm_kl']      = $this->showKyLuat();
		$list['dm_cv']      = $this->showChucvuChinhquyen();
		$list['dm_cu']      = $this->showChucvuDoanthe();
		$list['dm_cud']     = $this->showChucvuDang();
		$list['dm_dhdp']    = $this->showChucdanh();
		$list['dm_ngach']   = $this->showDienbieLuong();
		$listNuocngoai      = $this->showNuocngoai();
		$list['dm_ttnndd']  = $listNuocngoai['dm_ttnndd'];
		$list['dm_qg']      = $listNuocngoai['dm_qg'];
		$list['dm_nkpnndd'] = $listNuocngoai['dm_nkpnndd'];
		$list['dm_mdnndd']  = $listNuocngoai['dm_mdnndd'];
		$list['dm_qhgd']    = $this->showQuanhe();
		return View::make('module.manager.member.dangvien-thongtin', $list)
		->with('dangvien', $dangvien);
	}

	public function showTrinhdoNgoaingu () {
		return DB::table('dm_tdnn')->get();
	}	

	public function showKhenThuong () {
		return DB::table('dm_kt')->get();
	}

	public function showKyLuat () {
		return DB::table('dm_kl')->get();
	}

	public function showChucvuChinhquyen () {
		return DB::table('dm_cv')->get();
	}

	public function showChucvuDoanthe () {
		return DB::table('dm_cu')->get();
	}

	public function showChucvuDang () {
		return DB::table('dm_cud')->get();
	}

	public function showChucdanh () {
		return DB::table('dm_dhdp')->get();
	}

	public function showDienbieLuong () {
		return DB::table('dm_ngach')->get();
	}

	public function showNuocngoai () {
		$list = array();
		$list['dm_qg'] = DB::table('dm_qg')->get();
		$list['dm_ttnndd'] = DB::table('dm_ttnndd')->get();
		$list['dm_nkpnndd'] = DB::table('dm_nkpnndd')->get();
		$list['dm_mdnndd'] = DB::table('dm_mdnndd')->get();
		return $list;
	}

	public function showQuanhe () {
		return DB::table('dm_qhgd')->get();
	}

	public function actionDeleteQuatrinh ($qt_btl, $id) {
		if (DB::table($qt_btl)->where('id', $id)->delete()) {
			return Redirect::back()->with('success-delete', 1);
		} else {
			return Redirect::back()->with('success-delete', -1);
		}
	}

}

?>