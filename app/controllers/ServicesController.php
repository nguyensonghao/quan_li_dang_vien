<?php 

class ServicesController {

	public function subDateCurrent ($date) {
		$currentDate = date_create(date("h:i:s"));
		$date = date_create($date);
		return date_diff($currentDate, $date)->y; 
	}

	public function subDateCurrentYear ($numberYear) {
		$year = $numberYear * 365;
		$currentDate = date_create(date("h:i:s")); 
		$string = $year . ' days';
		$date = $currentDate->sub(date_interval_create_from_date_string($string)); 
		return $date->format('Y-m-d');
	}

	public function checkExits ($var) {
		if (!isset($var) || $var == null){
			return false;
		}

		return true;
	}

	// Hàm chuyển key của mảng chi tiết
	public function convertKeyArraySearch ($array) {
		$result = array();
		$listKey = array_keys($array[0]);
		foreach($listKey as $key => $value) {
			switch ($value) {
				case 'sohieuchuan':
				     array_push($result, 'Số hiệu chuẩn');
					 break;
				 case 'cmnv': 
				     array_push($result, 'Quá trình bồi dưỡng');
					 break;	 
				 case 'cqtd':
				     array_push($result, 'Cơ quan tiếp nhận làm việc');
					 break;	
				 case 'cthktt':
				     array_push($result, 'Chi tiết hộ khẩu thường chú');
					 break;	 				
				 case 'ctqq':
				     array_push($result, 'Chi tiết quê quán');
					 break;
				 case 'cvdn':
				     array_push($result, 'Công việc đảm nhiệm');
					 break;	 
				 case 'cvdv_ngt1':
				     array_push($result, 'Chức vụ dv người giới thiệu 1');
					 break;	 
				 case 'cvdn_ngt2':
				     array_push($result, 'Chức vụ dv người giới thiệu 2');
					 break;	 
				 case 'dcb':
				     array_push($result, 'Diện cán bộ');
					 break;	 
				 case 'dctt':
				     array_push($result, 'Địa chỉ thường trú');
					 break;	 
				 case 'đlsbt': 
				     array_push($result, 'Lịch sử bản thân');
					 break;	 
				 case 'email':  
				     array_push($result, 'Email');
					 break;	 
				 case 'gt':
				     array_push($result, 'Giới tính');
					 break;
				 case 'hodem':
				     array_push($result, 'Họ đệm');
					 break;	 
				 case 'kcb':
				     array_push($result, 'Khối cán bộ');
					 break;	 
				 case 'kn_tht': 
				     array_push($result, '');
					 break;	 
				 case 'ld_kthd':
				     array_push($result, 'Lý do kết thúc hợp đồng');
					 break;	 
				 case 'ma_cbql':
				     array_push($result, 'Mã cán bộ quản lý');
					 break;	 
				 case 'ma_dantoc':
				     array_push($result, 'Mã dân tộc');
					 break;
				 case 'ma_dvql':
				     array_push($result, 'Mã đơn vị quản lý');
					 break;	 
				 case 'ma_gdtdcs':
				     array_push($result, 'Mã gia đình theo diện chính sách');
					 break;	 
				 case 'ma_hktt':
				     array_push($result, 'Mã hộ khẩu thường trú');
					 break;	 
				 case 'ma_nm':
				     array_push($result, 'Mã nhóm máu');
					 break;
                 case 'ma_qq':
				     array_push($result, 'Mã quê quán');
					 break;
                 case 'ma_tb':
				     array_push($result, 'Mã thương binh - diện ưu tiên');
					 break;
            	 case 'ma_tdhv':
				     array_push($result, 'Mã trình độ học vấn');
					 break;				 
				 case 'ma_tdllct':
				     array_push($result, 'Mã trình độ llct');
					 break;	 	
                 case 'ma_tdth':
				     array_push($result, 'Mã trình độ tin học');
					 break;					 
				 case 'ma_tg':
				     array_push($result, 'Mã tôn giáo');
					 break;	
				 case 'ma_tpxt':
				     array_push($result, 'Mã thành phần xuất thân');
					 break;	
				 case 'ma_ttsk':
				     array_push($result, 'Mã tình trang sức khỏe');
					 break;
				 case 'mans':
				     array_push($result, 'Mã nơi sinh');
					 break;
				 case 'moc_tinh':
				     array_push($result, 'Mốc tính');
					 break;
				 case 'mochuongtn':
				     array_push($result, 'Mốc hưởng thâm niên');
					 break;
				 case 'ndbh':
				     array_push($result, 'Ngày đóng bảo hiểm');
					 break;
				 case 'nc':
				     array_push($result, 'Nơi cấp');
					 break;
				 case 'nct':
				     array_push($result, 'Ngày chính thức');
					 break;
				 case 'nvcqhn':
				     array_push($result, 'Ngày về cơ quan hiện nay');
					 break;
				 case 'ngay_cap':
				     array_push($result, 'Ngày cấp');
					 break;
				 case 'ngay_kthd':
				     array_push($result, 'Ngày kết thúc hợp đồng');
					 break;
				 case 'ngay_mien_shd': 
				     array_push($result, '');
					 break;
				 case 'ngay_vao_doan':
				     array_push($result, 'Ngày vào đoàn');
					 break;
				 case 'ngaybh': 
				     array_push($result, 'Ngày vào bảo hiểm');
					 break;
				 case 'ngaybhct': 
				     array_push($result, 'Ngày vào bảo hiểm chính thức');
					 break;
				 case 'ngt1':
				     array_push($result, 'Người giới thiệu 1');
					 break;
				 case 'ngt2':
				     array_push($result, 'Người giới thiệu 2');
					 break;
				 case 'nlstnk':
				     array_push($result, 'Sở trường năng khiếu');
					 break;
				 case 'nnn':
				     array_push($result, 'Ngày nhập ngũ');
					 break;
				 case 'ntgcm':
				     array_push($result, 'Ngày tham gia cách mạng');
					 break;
				 case 'ntns':
				     array_push($result, 'Ngày tháng năm sinh');
					 break;
				 case 'nvbc':
				     array_push($result, 'Ngày vào biên chế - thi tuyển viên chức');
					 break;
				 case 'nvd':
				     array_push($result, 'Ngày vào đảng');
					 break;
				 case 'nxn':
				     array_push($result, 'Ngày xuất ngũ');
					 break;
				 case 'qh':
				     array_push($result, 'Quan hệ');
					 break;
				 case 'sbh':
				     array_push($result, 'Sổ bảo hiểm');
					 break;
				 case 'scmnd':
				     array_push($result, 'Số chứng minh nhân dân');
					 break;
				 case 'shcc':
				     array_push($result, 'Số hiệu công chức');
					 break;
				 case 'so_ly_lich':
				     array_push($result, 'Số lý lịch');
					 break;
				 case 'so_the_dv':
				     array_push($result, 'Số thẻ đảng viên');
					 break;
				 case 'status':  
				     array_push($result, '');
					 break;	 
				 case 'tdnn':
				     array_push($result, 'Trình độ ngoại ngữ');
					 break;
				 case 'tel':
				     array_push($result, 'Số điện thoại');
					 break;
				 case 'ten':
				     array_push($result, 'Tên');
					 break;
				 case 'thanggd':
				     array_push($result, 'Số tháng gián đoạn');
					 break;
				 case 'thuongbinhloai':
				     array_push($result, 'Loại thương binh');
					 break;
				 case 'to_chuc_khac':
				     array_push($result, 'Tổ chức khác');
					 break;
				 case 'tt':
				     array_push($result, 'Trạng thái');
					 break;
				 case 'ttc': 
				     array_push($result, '');
					 break;
				 case 'ttd':
				     array_push($result, 'Tên thường dùng');
					 break;
				 case 'tthn':
				     array_push($result, 'Tình trạng hôn nhân');
					 break;
				 case 'ttht':
				     array_push($result, 'Tình trạng hiện tại');
					 break;
				 case 'ttk':
				     array_push($result, 'Thông tin khác');
					 break;
				 case 'vdpc':
				     array_push($result, 'Công việc được giao');
					 				 
				 break;									
				 default:
					 array_push($result, '');
				 break;
			}
		}

		return $result;
	}

	public static function typeOfUser () {
		if (!Auth::check()) {
			return 'Chưa đăng nhập';
		} else {
			$token = Auth::user()->token;
			switch ($token) {
				case 1:
					return 'Lãnh đạo khoa viện';
					break;

				case 2:
					return 'Cán bộ tác nghiệp khoa viện';
					break;

				case 3:
					return 'Lãnh đạo trường';
					break;

				case 4:
					return 'Cán bộ tác nghiệp trường';
					break;

				default:
					return 'Đảng viên';
					break;
			}
		}
	}

}

?>