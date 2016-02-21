<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function danhsachDangVien () {
		$listDv = DB::table('soyeu_tbl')
		->select('sohieuchuan', 'nvcqhn', 'scmnd', 'nc', 'ngay_cap', 'soyeu_tbl.ma_nm',
		'hodem', 'ten', 'ttd', 'gt', 'ntns', 'ma_ns', 'ctqq', 'soyeu_tbl.ma_dt',
		'dctt', 'dt', 'tg', 'tpxt', 'ntgcm', 'vdpc', 'nvbc', 'cqtd', 'soyeu_tbl.ma_tpxt',
		'cvdn', 'nvd', 'nct', 'nnn', 'nxn', 'qh', 'tb', 'tdhv', 'tdth', 'soyeu_tbl.ma_tg',
		'tdll', 'tdql', 'ttsk', 'nm', 'ttk', 'dm_dcb.dcb', 'dm_tt.tt', 'soyeu_tbl.ma_tb',
		'dm_ttht.ttht', 'sbh', 'ndbh', 'email', 'tel', 'soyeu_tbl.tthn', 'soyeu_tbl.ma_ttsk',
		'shcc', 'cthktt', 'dm_kcb.kcb', 'ngay_kthd', 'ld_kthd', 'ngaybh', 'soyeu_tbl.ma_tdhv',
		'ngaybhct', 'mochuongtn', 'moc_tinh', 'so_ly_lich', 'so_the_dv', 'soyeu_tbl.ma_tdllct',
		'to_chuc_khac', 'ngay_vao_doan', 'ngay_mien_shd', 'thuongbinhloai', 'soyeu_tbl.ma_tdqlnn',
		'status', 'ngt1', 'ngt2', 'cvdv_ngt1', 'cvdv_ngt2', 'ddlsbt', 'ttk', 'nlstnk',
		'soyeu_tbl.ma_tdth', 'ctqq', 'ma_qq', 'ma_hktt', 'soyeu_tbl.ma_gdtdcs',
		'soyeu_tbl.ma_dvql')
		->leftJoin('dm_nm', 'soyeu_tbl.ma_nm', '=', 'dm_nm.ma_nm') // Lấy nhóm máu
		->leftJoin('dm_dt', 'soyeu_tbl.ma_dt', '=', 'dm_dt.ma_dt') // lấy dân tộc 
		->leftJoin('dm_tg', 'soyeu_tbl.ma_tg', '=', 'dm_tg.ma_tg') // Lấy mã tôn giáo
		->leftJoin('dm_tpxt', 'soyeu_tbl.ma_tpxt', '=', 'dm_tpxt.ma_tpxt') // Lấy mã thành phần xuất thân
		->leftJoin('dm_tb', 'soyeu_tbl.ma_tb', '=', 'dm_tb.ma_tb') // Lấy mã thương binh 
		->leftJoin('dm_tdhv', 'soyeu_tbl.ma_tdhv', '=', 'dm_tdhv.ma_tdhv') // Lấy mã trình độ học vấn
		->leftJoin('dm_tdth', 'soyeu_tbl.ma_tdth', '=', 'dm_tdth.ma_tdth') // Lấy mã trình tin học
		->leftJoin('dm_tdll', 'soyeu_tbl.ma_tdllct', '=', 'dm_tdll.ma_tdll') // Lấy mã trình độ lí luận
		->leftJoin('dm_tdql', 'soyeu_tbl.ma_tdqlnn', '=', 'dm_tdql.ma_tdql') // Lấy mã trình độ quả lí
		->leftJoin('dm_ttsk', 'soyeu_tbl.ma_ttsk', '=', 'dm_ttsk.ma_ttsk') // Lấy tình trạng sức khỏe
		->leftJoin('dm_dcb', 'soyeu_tbl.dcb', '=', 'dm_dcb.ma_dcb') // Lấy diện cán bộ
		->leftJoin('dm_tt', 'soyeu_tbl.tt', '=', 'dm_tt.ma_tt') // Lấy tình trạng.. nghỉ hưu..
		->leftJoin('dm_ttht', 'soyeu_tbl.ttht', '=', 'dm_ttht.ma_ttht') // Lấy tình trang hiện tại .. nghỉ thai sản, đi nước ngoài
		->leftJoin('dm_tthn', 'soyeu_tbl.tthn', '=', 'dm_tthn.ma_tthn') // Lấy tình trạng hôn nhân
		->leftJoin('dm_kcb', 'soyeu_tbl.kcb', '=', 'dm_kcb.ma_kcb') // Lấy khối cán bộ .. giảng dạy, hình chính
		->leftJoin('dm_dd', 'soyeu_tbl.ma_hktt', '=', 'dm_dd.ma_huyen')
		->leftJoin('dm_gdcs', 'soyeu_tbl.ma_gdtdcs', '=', 'dm_gdcs.ma_gdcs')
		->leftJoin('dm_dv', 'soyeu_tbl.ma_dvql', '=', 'dm_dv.ma_dv')
		->get();
		return $listDv;
	}

	public static function dangvienTheoSohieuchuan ($sohieuchuan) {
		$dangvien = DB::table('soyeu_tbl')
		->select('sohieuchuan', 'nvcqhn', 'scmnd', 'nc', 'ngay_cap', 'soyeu_tbl.ma_nm',
		'hodem', 'ten', 'ttd', 'gt', 'ntns', 'ma_ns', 'ctqq', 'soyeu_tbl.ma_dt',
		'dctt', 'dt', 'tg', 'tpxt', 'ntgcm', 'vdpc', 'nvbc', 'cqtd', 'soyeu_tbl.ma_tpxt',
		'cvdn', 'nvd', 'nct', 'nnn', 'nxn', 'qh', 'tb', 'tdhv', 'tdth', 'soyeu_tbl.ma_tg',
		'tdll', 'tdql', 'ttsk', 'nm', 'ttk', 'dm_dcb.dcb', 'dm_tt.tt', 'soyeu_tbl.ma_tb',
		'dm_ttht.ttht', 'sbh', 'ndbh', 'email', 'tel', 'soyeu_tbl.tthn', 'soyeu_tbl.ma_ttsk',
		'shcc', 'cthktt', 'dm_kcb.kcb', 'ngay_kthd', 'ld_kthd', 'ngaybh', 'soyeu_tbl.ma_tdhv',
		'ngaybhct', 'mochuongtn', 'moc_tinh', 'so_ly_lich', 'so_the_dv', 'soyeu_tbl.ma_tdllct',
		'to_chuc_khac', 'ngay_vao_doan', 'ngay_mien_shd', 'thuongbinhloai', 'soyeu_tbl.ma_tdqlnn',
		'status', 'ngt1', 'ngt2', 'cvdv_ngt1', 'cvdv_ngt2', 'ddlsbt', 'ttk', 'nlstnk',
		'soyeu_tbl.ma_tdth', 'ctqq', 'ma_qq', 'ma_hktt', 'soyeu_tbl.ma_gdtdcs',
		'soyeu_tbl.ma_dvql')
		->where('sohieuchuan', $sohieuchuan)
		->leftJoin('dm_nm', 'soyeu_tbl.ma_nm', '=', 'dm_nm.ma_nm') // Lấy nhóm máu
		->leftJoin('dm_dt', 'soyeu_tbl.ma_dt', '=', 'dm_dt.ma_dt') // lấy dân tộc 
		->leftJoin('dm_tg', 'soyeu_tbl.ma_tg', '=', 'dm_tg.ma_tg') // Lấy mã tôn giáo
		->leftJoin('dm_tpxt', 'soyeu_tbl.ma_tpxt', '=', 'dm_tpxt.ma_tpxt') // Lấy mã thành phần xuất thân
		->leftJoin('dm_tb', 'soyeu_tbl.ma_tb', '=', 'dm_tb.ma_tb') // Lấy mã thương binh 
		->leftJoin('dm_tdhv', 'soyeu_tbl.ma_tdhv', '=', 'dm_tdhv.ma_tdhv') // Lấy mã trình độ học vấn
		->leftJoin('dm_tdth', 'soyeu_tbl.ma_tdth', '=', 'dm_tdth.ma_tdth') // Lấy mã trình tin học
		->leftJoin('dm_tdll', 'soyeu_tbl.ma_tdllct', '=', 'dm_tdll.ma_tdll') // Lấy mã trình độ lí luận
		->leftJoin('dm_tdql', 'soyeu_tbl.ma_tdqlnn', '=', 'dm_tdql.ma_tdql') // Lấy mã trình độ quả lí
		->leftJoin('dm_ttsk', 'soyeu_tbl.ma_ttsk', '=', 'dm_ttsk.ma_ttsk') // Lấy tình trạng sức khỏe
		->leftJoin('dm_dcb', 'soyeu_tbl.dcb', '=', 'dm_dcb.ma_dcb') // Lấy diện cán bộ
		->leftJoin('dm_tt', 'soyeu_tbl.tt', '=', 'dm_tt.ma_tt') // Lấy tình trạng.. nghỉ hưu..
		->leftJoin('dm_ttht', 'soyeu_tbl.ttht', '=', 'dm_ttht.ma_ttht') // Lấy tình trang hiện tại .. nghỉ thai sản, đi nước ngoài
		->leftJoin('dm_tthn', 'soyeu_tbl.tthn', '=', 'dm_tthn.ma_tthn') // Lấy tình trạng hôn nhân
		->leftJoin('dm_kcb', 'soyeu_tbl.kcb', '=', 'dm_kcb.ma_kcb') // Lấy khối cán bộ .. giảng dạy, hình chính
		->leftJoin('dm_dd', 'soyeu_tbl.ma_hktt', '=', 'dm_dd.ma_huyen')
		->leftJoin('dm_gdcs', 'soyeu_tbl.ma_gdtdcs', '=', 'dm_gdcs.ma_gdcs')
		->leftJoin('dm_dv', 'soyeu_tbl.ma_dvql', '=', 'dm_dv.ma_dv')
		->first();
		return $dangvien;
	}

	public function ngoainguDangvien ($shcc) {
		$ngoaingu = DB::table('tdnn_tbl')
		->where('shcc', $shcc)
		->leftJoin('dm_tdnn', 'dm_tdnn.ma_tdnn', '=', 'tdnn_tbl.ma_td')
		->leftJoin('dm_tnn', 'dm_tnn.ma_tnn', '=', 'tdnn_tbl.ma_nn')
		->get();
		return $ngoaingu;
	}

	public function khenthuongDangvien ($shcc) {
		$khenthuong = DB::table('qtkt_tbl')
		->where('shcc', $shcc)
		->join('dm_kt', 'qtkt_tbl.ma_htkt', '=', 'dm_kt.ma_kt')
		->get();
		return $khenthuong;
	}

	public function kyluatDangvien ($shcc) {
		$kyluat = DB::table('qtkl_tbl')
		->where('shcc', $shcc)
		->join('dm_kl', 'qtkl_tbl.ma_htkl', '=', 'dm_kl.ma_kl')
		->get();
		return $kyluat;	
	}

	public function quanheDangvien ($shcc) {
		$quanhe = DB::table('qhgd_tbl')
		->where('shcc', $shcc)
		->join('dm_qhgd', 'qhgd_tbl.qhgd', '=', 'dm_qhgd.ma_qhgd')
		->get();
		return $quanhe;
	}

	public function nuocngoaiDangvien ($shcc) {
		$nuocngoai = DB::table('nndd_tbl')
		->where('shcc', $shcc)
		->join('dm_mdnndd', 'dm_mdnndd.ma_mdnndd', '=', 'nndd_tbl.md_nndd')
		->join('dm_ttnndd', 'dm_ttnndd.ma_ttnndd', '=', 'nndd_tbl.tt_nndd')
		->join('dm_qg', 'dm_qg.ma_qg', '=', 'nndd_tbl.ndd')
		->get();
		return $nuocngoai;
	}

	public function chucvuDoantheDangvien ($shcc) {
		$doanthe = DB::table('qtcvdt_tbl')
		->where('shcc', $shcc)
		->join('dm_cu', 'dm_cu.ma_cu', '=', 'qtcvdt_tbl.ma_cv')
		->get();
		return $doanthe;
	}

	public function chucvuChinhquyenDangvien ($shcc) {
		$chucvu = DB::table('qtcvkn_tbl')
		->where('shcc', $shcc)
		->join('dm_cv', 'dm_cv.ma_cv', '=', 'qtcvkn_tbl.ma_cv')
		->get();
		return $chucvu;
	}

	// Hàm trả về danh muc đảng viên
	public function danhmucCobanDangvien () {
		$list = array();
		$list['kcb']  = DB::table('dm_kcb')->get();
		$list['cud']  = DB::table('dm_cud')->get();
		$list['cu']   = DB::table('dm_cu')->get();
		$list['qg']   = DB::table('dm_qg')->get();
		$list['dv']   = DB::table('dm_dv')->get();
		$list['tdnn'] = DB::table('dm_tdnn')->get();
		$list['tb']   = DB::table('dm_tb')->get();
		$list['dt']   = DB::table('dm_dt')->get();
		$list['tg']   = DB::table('dm_tg')->get();
		$list['ttp']  = DB::table('dm_ttp')->get();
		$list['dcb']  = DB::table('dm_dcb')->get();
		$list['tthn'] = DB::table('dm_tthn')->get();
		$list['ttht'] = DB::table('dm_ttht')->get();
		$list['tpxt'] = DB::table('dm_tpxt')->get();
		$list['gdcs'] = DB::table('dm_gdcs')->get();
		$list['nm']   = DB::table('dm_nm')->get();
		$list['tdth'] = DB::table('dm_tdth')->get();
		$list['tdll'] = DB::table('dm_tdll')->get();
		$list['tdql'] = DB::table('dm_tdql')->get();
		$list['tt']   = DB::table('dm_tt')->get();
		$list['cv']   = DB::table('dm_cv')->get();
		$list['hh']   = DB::table('dm_hh')->get();
		$list['tb']   = DB::table('dm_tb')->get();
		$list['tdhv'] = DB::table('dm_tdhv')->get();
		$list['ttsk'] = DB::table('dm_ttsk')->get();
		$list['dhdp'] = DB::table('dm_dhdp')->get();
		$list['cndt'] = DB::table('dm_cn')->get();
		$list['htdt'] = DB::table('dm_htdt')->get();
		$list['vbdt'] = DB::table('dm_vbdt')->get();
		$list['kt'] = DB::table('dm_kt')->get();
		$list['kl'] = DB::table('dm_kl')->get();
		$list['quequan'] = DB::table('dm_dd')->join('dm_ttp', 'dm_dd.ma_tinh', '=', 'dm_ttp.ma_ttp', 'left')->get();
		$list['qq'] = DB::table('dm_ttp')->get();
		$list['ngach'] = DB::table('dm_ngach')->get();
		return $list;
	}

	public function danhmucTimkiem () {
		$list = array();
		$list['dm_chibo'] = DB::table('dm_chibo')->get();
		$list['dm_kcb'] = DB::table('dm_kcb')->get();
		$list['dm_dcb'] = DB::table('dm_dcb')->get();
		$list['dm_tt'] = DB::table('dm_tt')->get();
		return $list;
	}

	public function timkiemDangvien ($condition, $cqtd, $date, $listOfField) {
		// Kiểm tra thông tin tìm kiếm giới tính
		if (!isset($condition['gt-nu']))
			$condition['gt-nu'] = -1;
		if (!isset($condition['gt-nam'])) 
			$condition['gt-nam'] = -1;

		$gtNu  = $condition['gt-nu'];
		$gtNam = $condition['gt-nam'];

		// Kiểm tra số tuổi nhập vào
		if ($date == null) {
			$query = DB::table('soyeu_tbl')
			->leftJoin('dm_nm', 'soyeu_tbl.ma_nm', '=', 'dm_nm.ma_nm') // Lấy nhóm máu
			->leftJoin('dm_dt', 'soyeu_tbl.ma_dt', '=', 'dm_dt.ma_dt') // lấy dân tộc 
			->leftJoin('dm_tg', 'soyeu_tbl.ma_tg', '=', 'dm_tg.ma_tg') // Lấy mã tôn giáo
			->leftJoin('dm_tpxt', 'soyeu_tbl.ma_tpxt', '=', 'dm_tpxt.ma_tpxt') // Lấy mã thành phần xuất thân
			->leftJoin('dm_tb', 'soyeu_tbl.ma_tb', '=', 'dm_tb.ma_tb') // Lấy mã thương binh 
			->leftJoin('dm_tdhv', 'soyeu_tbl.ma_tdhv', '=', 'dm_tdhv.ma_tdhv') // Lấy mã trình độ học vấn
			->leftJoin('dm_tdth', 'soyeu_tbl.ma_tdth', '=', 'dm_tdth.ma_tdth') // Lấy mã trình tin học
			->leftJoin('dm_tdll', 'soyeu_tbl.ma_tdllct', '=', 'dm_tdll.ma_tdll') // Lấy mã trình độ lí luận
			->leftJoin('dm_tdql', 'soyeu_tbl.ma_tdqlnn', '=', 'dm_tdql.ma_tdql') // Lấy mã trình độ quả lí
			->leftJoin('dm_ttsk', 'soyeu_tbl.ma_ttsk', '=', 'dm_ttsk.ma_ttsk') // Lấy tình trạng sức khỏe
			->leftJoin('dm_dcb', 'soyeu_tbl.dcb', '=', 'dm_dcb.ma_dcb') // Lấy diện cán bộ
			->leftJoin('dm_tt', 'soyeu_tbl.tt', '=', 'dm_tt.ma_tt') // Lấy tình trạng.. nghỉ hưu..
			->leftJoin('dm_ttht', 'soyeu_tbl.ttht', '=', 'dm_ttht.ma_ttht') // Lấy tình trang hiện tại .. nghỉ thai sản, đi nước ngoài
			->leftJoin('dm_tthn', 'soyeu_tbl.tthn', '=', 'dm_tthn.ma_tthn') // Lấy tình trạng hôn nhân
			->leftJoin('dm_kcb', 'soyeu_tbl.kcb', '=', 'dm_kcb.ma_kcb') // Lấy khối cán bộ .. giảng dạy, hình chính
			->leftJoin('dm_dd', 'soyeu_tbl.ma_hktt', '=', 'dm_dd.ma_huyen')
			->leftJoin('dm_gdcs', 'soyeu_tbl.ma_gdtdcs', '=', 'dm_gdcs.ma_gdcs')
			->leftJoin('dm_dv', 'soyeu_tbl.ma_dvql', '=', 'dm_dv.ma_dv')
			->leftJoin('dm_ttp', 'soyeu_tbl.ma_ns', '=', 'dm_ttp.ma_ttp')
			->where("ttd", "like", "%".$condition['hoten']."%")->where("cqtd", $cqtd)->where("sohieuchuan", "like", "%".$condition['shc']."%")->where("soyeu_tbl.tt", "like", "%".$condition['tt']."%")->where("soyeu_tbl.kcb", "like", "%".$condition['kcb']."%")->where("soyeu_tbl.dcb", "like", "%".$condition['dcb']."%")
			->where(function ($query) use ($gtNu, $gtNam) {
				$query->where('gt', $gtNu)
   				->orWhere('gt', $gtNam);	
   			});

			// Thêm các trường thông tin cần lấy khi tìm kiếm
   			foreach ($listOfField as $key => $value) {
   				$query = $query->addSelect($value);
   			}

   			$all    = $query->get();
   			$result = $query->paginate(20);
			$number = count($all);
			$data   = array(
				'result'       => $result, 
				'numberResult' => $number,
				'all'          => $all
			);
		} else {
			$query = DB::table('soyeu_tbl')
			->leftJoin('dm_nm', 'soyeu_tbl.ma_nm', '=', 'dm_nm.ma_nm') // Lấy nhóm máu
			->leftJoin('dm_dt', 'soyeu_tbl.ma_dt', '=', 'dm_dt.ma_dt') // lấy dân tộc 
			->leftJoin('dm_tg', 'soyeu_tbl.ma_tg', '=', 'dm_tg.ma_tg') // Lấy mã tôn giáo
			->leftJoin('dm_tpxt', 'soyeu_tbl.ma_tpxt', '=', 'dm_tpxt.ma_tpxt') // Lấy mã thành phần xuất thân
			->leftJoin('dm_tb', 'soyeu_tbl.ma_tb', '=', 'dm_tb.ma_tb') // Lấy mã thương binh 
			->leftJoin('dm_tdhv', 'soyeu_tbl.ma_tdhv', '=', 'dm_tdhv.ma_tdhv') // Lấy mã trình độ học vấn
			->leftJoin('dm_tdth', 'soyeu_tbl.ma_tdth', '=', 'dm_tdth.ma_tdth') // Lấy mã trình tin học
			->leftJoin('dm_tdll', 'soyeu_tbl.ma_tdllct', '=', 'dm_tdll.ma_tdll') // Lấy mã trình độ lí luận
			->leftJoin('dm_tdql', 'soyeu_tbl.ma_tdqlnn', '=', 'dm_tdql.ma_tdql') // Lấy mã trình độ quả lí
			->leftJoin('dm_ttsk', 'soyeu_tbl.ma_ttsk', '=', 'dm_ttsk.ma_ttsk') // Lấy tình trạng sức khỏe
			->leftJoin('dm_dcb', 'soyeu_tbl.dcb', '=', 'dm_dcb.ma_dcb') // Lấy diện cán bộ
			->leftJoin('dm_tt', 'soyeu_tbl.tt', '=', 'dm_tt.ma_tt') // Lấy tình trạng.. nghỉ hưu..
			->leftJoin('dm_ttht', 'soyeu_tbl.ttht', '=', 'dm_ttht.ma_ttht') // Lấy tình trang hiện tại .. nghỉ thai sản, đi nước ngoài
			->leftJoin('dm_tthn', 'soyeu_tbl.tthn', '=', 'dm_tthn.ma_tthn') // Lấy tình trạng hôn nhân
			->leftJoin('dm_kcb', 'soyeu_tbl.kcb', '=', 'dm_kcb.ma_kcb') // Lấy khối cán bộ .. giảng dạy, hình chính
			->leftJoin('dm_dd', 'soyeu_tbl.ma_hktt', '=', 'dm_dd.ma_huyen')
			->leftJoin('dm_gdcs', 'soyeu_tbl.ma_gdtdcs', '=', 'dm_gdcs.ma_gdcs')
			->leftJoin('dm_dv', 'soyeu_tbl.ma_dvql', '=', 'dm_dv.ma_dv')
			->leftJoin('dm_ttp', 'soyeu_tbl.ma_ns', '=', 'dm_ttp.ma_ttp')
			->where("ttd", "like", "%".$condition['hoten']."%")->where("cqtd", $cqtd)->where("sohieuchuan", "like", "%".$condition['shc']."%")->where("soyeu_tbl.tt", "like", "%".$condition['tt']."%")->where("soyeu_tbl.kcb", "like", "%".$condition['kcb']."%")->where("soyeu_tbl.dcb", "like", "%".$condition['dcb']."%")
			->where(function ($query) use ($gtNu, $gtNam) {
				$query->where('gt', $gtNu)
   				->orWhere('gt', $gtNam);	
   			})
			->where('ntns', '<', $date['tu'])->Where('ntns', '>', $date['den']);

			// Thêm các trường thông tin cần lấy khi tìm kiếm
   			foreach ($listOfField as $key => $value) {
   				$query = $query->addSelect($value);
   			}

			$all    = $query->get();
			$result = $query->paginate(20);
			$number = count($all);
			$data   = array(
				'result'       => $result, 
				'numberResult' => $number,
				'all'          => $all
			);
		}

		
		return $data;
	}

	public function timkiemDangvienNangcao ($condition) {
		$query = DB::table('soyeu_tbl');
		foreach ($condition as $key => $value) {
			if ($key == 'gt' || $key == 'donvi' || $key == 'kcb' || $key == 'tthn' 
				|| $key == 'ttht' || $key == 'qq' || $key == 'dt' || $key == 'tdth'
				|| $key == 'tdllct' || $key == 'tdqlnn' || $key == 'tnn' 
				|| $key == 'tdnn' || $key == 'cvd' || $key == 'cvdt'
				|| $key == 'hh' || $key == 'dhdp' || $key == 'cvcq'
				|| $key == 'ncc' || $key == 'cndt' || $key == 'htdt'
				|| $key == 'vbdt' || $key == 'ndt' || $key == 'htkt'
				|| $key == 'htkl' || $key == 'tndt' || $key == 'ndbd') {
				switch ($key) {
					case 'gt':
						$query = $query->where('gt', $value);
						break;
					
					case 'donvi':
						$query = $query->where('ma_dvql', $value);

					case 'kcb':
						$query = $query->where('kcb', $value);
						break;

					case 'tthn':
						$query = $query->where('ttht', $value);
						break;

					case 'ttht':
						$query = $query->where('tt', $value);
						break;

					case 'qq':
						$query = $query->where('ma_qq', $value);
						break;

					case 'dt':
						$query = $query->where('ma_dt', $value);
						break;

					case 'tdth':
						$query = $query->where('ma_tdth', $value);
						break;

					case 'tdllct':
						$query = $query->where('ma_tdllct', $value);
						break;

					case 'tdqlnn':
						$query = $query->where('ma_tdqlnn', $value);
						break;

					case 'tnn':
						$query = $query->leftJoin('tdnn_tbl', 'tdnn_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('tdnn_tbl.ma_nn', $value);
						break;

					case 'tdnn':
						$query = $query->where('tdnn', $value);
						break;

					case 'cvd':
						$query = $query->leftJoin('qtcvdt_tbl', 'qtcvdt_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtcvdt_tbl.ma_cv', $value)->where('qtcvdt_tbl.lcd', '#', 1);
						break;							

					case 'cvdt':
						$query = $query->leftJoin('qtcvdt_tbl', 'qtcvdt_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtcvdt_tbl.ma_cv', $value)->where('qtcvdt_tbl.lcd', 1);
						break;	

					case 'hh':
						$query = $query->leftJoin('qtcd_tbl', 'qtcd_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('ma_dh', $value)->where('lcd', '=', 0);
						break;

					case 'dhdp':
						$query = $query->leftJoin('qtcd_tbl', 'qtcd_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('ma_dh', $value);
						break;

					case 'cvcq':
						$query = $query->leftJoin('qtcvkn_tbl', 'qtcvkn_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtcvkn_tbl.ma_cv', $value);
						break;	

					case 'htkt':
						$query = $query->leftJoin('qtkt_tbl', 'qtkt_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtkt_tbl.ma_htkt', $value);
						break;

					case 'htkl':
						$query = $query->leftJoin('qtkl_tbl', 'qtkl_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtkl_tbl.ma_htkl', $value);
						break;

					case 'tdth':
						$query = $query->leftJoin('nndd_tbl', 'nndd_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtkl_tbl.ndd', $value);
						break;							

					case 'ncc':
						$query = $query->leftJoin('qtdbl_tbl', 'qtdbl_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtdbl_tbl.ma_ngach', $value);
						break;	

					case 'cndt':
						$query = $query->leftJoin('qtdtcm_tbl', 'qtdtcm_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtdtcm_tbl.ma_cndt', $value);
						break;	

					case 'htdt':
						$query = $query->leftJoin('qtdtcm_tbl', 'qtdtcm_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtdtcm_tbl.htdtcm ', $value);
						break;	

					case 'vbdt':
						$query = $query->leftJoin('qtdtcm_tbl', 'qtdtcm_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtdtcm_tbl.vbdtcm ', $value);
						break;	

					case 'ndt':
						$query = $query->leftJoin('qtdtcm_tbl', 'qtdtcm_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtdtcm_tbl.ndtcm  ', $value);
						break;	

					case 'ndbd':
						$query = $query->leftJoin('qtbd_tbl', 'qtbd_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('qtbd_tbl.ndbd', 'like', '%'.$value.'%');
						break;	

					case 'tndt':
						$query = $query->leftJoin('nndd_tbl', 'nndd_tbl.shcc', '=', 'soyeu_tbl.shcc')
						->where('nndd_tbl.ndd', $value);
						break;	

					default:
						# code...
						break;
				}
			} else if ($key == 'hoten' || $key == 'shcc') {
				switch ($key) {
					case 'hoten':
						if (!isset($value->bang) || $value->bang == null) {
							$bang = '-1';
						} else {
							$bang = $value->bang;
						}

						if (!isset($value->chua) || $value->chua == null) {
							$chua = '-1';
						} else {
							$chua = $value->chua;
						}

						$query = $query->where(function ($query) use ($bang, $chua) {
	 					    $query->where('ttd', $bang)
	           				->orWhere('ttd', 'like', '%'.$chua.'%');	
	           			});

						break;
					
					case 'shcc':
						if (!isset($value->bang) || $value->bang == null) {
							$bang = '-1';
						} else {
							$bang = $value->bang;
						}

						if (!isset($value->chua) || $value->chua == null) {
							$chua = '-1';
						} else {
							$chua = $value->chua;
						}

						$query = $query->where(function ($query) use ($bang, $chua) {
	 					    $query->where('shcc', $bang)
	           				->orWhere('shcc', 'like', '%'.$chua.'%');	
	           			});

						break;

					default:
						# code...
						break;
				}
			} else {
				switch ($key) {
					case 'tuoi':
						// Không nhập tuổi bằng
						if (!isset($value->bang) || $value->bang == null) {
							if (isset($value->tu) && $value->tu != null) {
								$year = (int)$value->den - (int)$value->tu;
								$query = $query->where(function ($query) use ($year) {
			 					   $query->whereRaw('year(now()) - year(ntns) > 0')
			           				->whereRaw('year(now()) - year(ntns)  < ' . $year);	 
			           			});
							}
						} else {
						// Nhập tuổi bằng
							if (isset($value->tu) && $value->tu != null) {
								$year = (int)$value->den - (int)$value->tu;
								$query = $query->whereRaw('year(now()) - year(ntns) = ' . $value->bang);
								$query = $query->where(function ($query) use ($year) {
			 					   $query->whereRaw('year(now()) - year(ntns) > 0')
			           				->whereRaw('year(now()) - year(ntns)  < ' . $year);	 
			           			});
							} else {
								$query = $query->whereRaw('year(now()) - year(ntns) = '.$value->bang);
							}
						}
						break;
					
					case 'nvd':
						if (!isset($value->bang) || $value->bang == null) {
							if (isset($value->tu) && $value->tu != null) {
								$tu = $value->tu;
								$den = $value->den;
								$query = $query->where(function ($query) use ($tu, $den) {
			 					   $query->where('ntns', '>', $tu)
			           				->where('ntns', '<', $den);	 
			           			});
							}
						} else {
							if (isset($value->tu) && $value->tu != null) {
								$tu = $value->tu;
								$den = $value->den;
								$query = $query->whereRaw('year(now()) - year(ntns) = ' . $value->bang);
								$query = $query->where(function ($query) use ($tu, $den) {
			 					   $query->where('ntns', '>', $tu)
			           				->where('ntns', '<', $den);	 
			           			});
							} else {
								$query = $query->where('ntns', $value);
							}
						}
						break;
					default:
						# code...
						break;
				}
			}

		}

		$result = array (
			'result' => $query->paginate(20),
			'numberResult' => $query->count(),
			'all' => $query->get()
		);

		return $result;
	}

	public function thongtinChucvu ($shcc) {
		$result =  DB::table('soyeu_tbl')->where('soyeu_tbl.shcc', $shcc)
		->leftJoin('qtcvkn_tbl', 'soyeu_tbl.shcc', '=', 'qtcvkn_tbl.shcc')
		->leftJoin('dm_cv', 'qtcvkn_tbl.ma_cv', '=', 'dm_cv.ma_cv')
		->get();
		
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;
	}

	public function thongtinQuequan ($ma_ns) {
		$result = DB::table('dm_dd')->where('ma_huyen', $ma_ns)
		->join('dm_ttp', 'dm_dd.ma_tinh', '=', 'dm_ttp.ma_ttp', 'left')->get();
		
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;
	}

	public function quatrinhDienbienLuong ($shcc) {
		$result = DB::table('qtdbl_tbl')->where('shcc', $shcc)
		->leftJoin('dm_ngach', 'dm_ngach.ma_ngach', '=', 'qtdbl_tbl.ma_ngach')->get();
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;
	}	

	public function quatrinhDaotao ($shcc) {
		$result = DB::table('qtdtcm_tbl')->where('shcc', $shcc)
		->leftJoin('dm_cn', 'dm_cn.ma_cn', '=', 'qtdtcm_tbl.ma_cndt')
		->leftJoin('dm_vbdt', 'dm_vbdt.ma_vbdt', '=', 'qtdtcm_tbl.vbdtcm')
		->get();
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;
	}

	public function quatrinhCongtac ($shcc) {
		$result = DB::table('qtct_tbl')->where('shcc', $shcc)
		->leftJoin('dm_dcb', 'dm_dcb.ma_dcb', '=', 'qtct_tbl.ma_dcb')
		->leftJoin('dm_tt', 'dm_tt.ma_tt', '=', 'qtct_tbl.ma_ttct')->get();
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;
	}

	public function quatrinhBoiDuong ($shcc) {
		$result = DB::table('qtbd_tbl')->where('shcc', $shcc)->get();
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;	
	}

	public function quatrinhKhenthuong ($shcc) {
		$result = $this->khenthuongDangvien($shcc);
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;	
	}

	public function quatrinhNuocngoai ($shcc) {
		$result = $this->nuocngoaiDangvien($shcc);
		$data = [];
		foreach ($result as $key => $value) {
			$data[$key] = (array) $value;
		}
		return $data;	
	}
}
