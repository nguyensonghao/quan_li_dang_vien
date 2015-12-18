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
		$listNgoaingu 	    = $this->showTrinhdoNgoaingu();
		$list['dm_tdnn']    = $listNgoaingu['dm_tdnn'];
		$list['dm_tnn']     = $listNgoaingu['dm_tnn'];
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
		$list = array();
		$list['dm_tdnn'] = DB::table('dm_tdnn')->get();
		$list['dm_tnn'] = DB::table('dm_tnn')->get();
		return $list;
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

	public function actionThongtinChinhsua () {
		$id = $_POST['id'];
		$table = $_POST['table'];
		$result = DB::table($table)->where('id', $id)->first();
		return json_encode($result);	
	}

	/*Begin Insert*/
	public function actionInsertNgoaingu () {
	   //Lấy thông tin từ form
	   $tdnn_tbl = Input::all();
	   
	   //Insert vào dm_tdnn
	   $check = DB::table("tdnn_tbl")->insert($tdnn_tbl);
	  
	}

	//Thiếu 2 cột: lcd, cdcn
	public function actionInsertChucdanh(){
	    //Lấy thông tin từ form
	    $qtcd_tbl = Input::all();
	    
	    
	    $npdh_arr = explode('-', $qtcd_tbl['ntnpdh']);
            
	    //Năm
	    $npdh = $npdh_arr[0];
	   
	    $qtcd_tbl['npdh'] = $npdh;
	    
	    //đề mặc định là Đảng - SỬA CÁI NÀY SAU.
	    $lcd = 0;
	    $qtcd_tbl['lcd'] = $lcd;
	    	   	    
	    //Insert vào dm_tdnn
	    $check = DB::table("qtcd_tbl")->insert($qtcd_tbl);
	    
	    if($check){
	        echo "inserted successful !";
	    }
	     
	}
	
	public function actionInsertChucvuchinhquyen(){
	    //Lấy dữ liệu từ form post lên
	    $qtcvkn = Input::all();
	    
	    //$chưa biết dữ liệu cột này lấy từ đâu ? SỬA Ở ĐÂY
	    $ma_dvqlcvkn = 0;
	    
	    //Đương nhiệm - Suy ra từ ngày kết thúc và thời gin hiện tại
	    //Nếu ngày kết thúc nhỏ hơn thời gian hiện tại thì đương nhiệm = 0 
	    //ngược lại đương nhiệm = 1;
	    $currentDate = date("Y-m-d");
	    
	    if(strcmp($qtcvkn['nktcvkn'], $currentDate) < 0){
	        $dn = 0;
	    } else {
	        $dn = 1;
	    }
	    

	    $qtcvkn['dn'] = $dn;
	    $qtcvkn['ma_dvqlcvkn'] = $ma_dvqlcvkn;
	    
	    //Thêm vào database
	    $check = DB::table('qtcvkn_tbl')->insert($qtcvkn);
	    
        if($check){
            echo "ok";
        }
	}
	
	public function actionInsertKhenthuong(){
	    //lấy dữ liệu post lên từ form
	    $khenthuong = Input::all();
	    
	   //insert vào bảng qtkt_tbl
	   $check = DB::table('qtkt_tbl')->insert($khenthuong);
	   
	   echo "inserted";
	}
	
	public function actionInsertKyluat(){
	    //Lấy dữ liệu post lên từ form
	    $kyluat = Input::all();
	    
	    //insert vào bảng qtkl_tbl
	    $check = DB::table('qtkl_tbl')->insert($kyluat);
	    
	    if($check){
	        echo "inserted";
	    }
	}
	
	public function actionInsertDienbienluong(){
	    //Lấy dữ liệu post lên từ form
	    $Dienbl = Input::all();
	     	    
	    //insert vào bảng qtkl_tbl
	   $check = DB::table('qtdbl_tbl')->insert($Dienbl);
	     
	   if($check){
	       echo "inserted";
	   }
	}
	
	public function actionInsertQuanhe(){
	    //Lấy dữ liệu post lên từ form
	    $quanhe = Input::all();
	      
	    $check = DB::table('qhgd_tbl')->insert($quanhe);
	    
	    if($check){
	        echo "inserted !";
	    }
	}
	
	public function actionInsertDoanthe(){
	    //Lấy dữ liệu post lên từ form
	    $doanthe = Input::all();
	    
	    $currentDate = date("Y-m-d");
	    if(strcmp($doanthe['nktcvdt'], $currentDate) < 0){
	        $dn = 0;
	    } else {
	        $dn = 1;
	    }
	    

	    //Hai tham số này ko biết
	    $doanthe['dn'] = $dn;
	    
	    //giá trị này ko biết tính như thế nào ?
	    $doanthe['lcd'] = 1;
	    
	    $check = DB::table('qtcvdt_tbl')->insert($doanthe);
	     
	    if($check){
	        echo "inserted !";
	    }
	}

}

?>