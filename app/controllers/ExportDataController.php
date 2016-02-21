<?php 

require_once public_path().'/libs/PHPExcel/Classes/PHPExcel.php';
require_once public_path().'/libs/PHPWord/PHPWord.php';

class ExportDataController{

	public $objPHPExcel;	
	public $serviceController;
	public $user;

	public function __construct () {
		$this->objPHPExcel = new PHPExcel();
		$this->serviceController = new ServicesController();
		$this->user = new User();
	}

	public function actionExportExcelFromArray ($array) {
		$this->objPHPExcel->getProperties()->setCreator("Daihocbachkhoahanoi");

		$listkeyCurrent = $this->serviceController->convertKeyArraySearch($array);
		$listkey = array_keys($array[0]);

		$char = 'A';
		$excel = $this->objPHPExcel->setActiveSheetIndex(0);

		foreach ($listkeyCurrent as $key => $value) {
			$excel->setCellValue($char.'1', $value);    
		    $char ++;
		}

		$j = 2;
		foreach ($array as $key => $value) {
			$char = 'A';
			$excel = $this->objPHPExcel->setActiveSheetIndex(0);
			for ($i = 0; $i < count($listkey); $i++) {
			    $excel->setCellValue($char.$j, $value[$listkey[$i]]);    
			    $char ++;
			}

			$j++;
		}

		$this->objPHPExcel->getActiveSheet()->setTitle('Baocao');
		$this->objPHPExcel->setActiveSheetIndex(0);
		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');
		 
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="baocao.xls"');
		if (isset($objWriter)) {
		    $objWriter->save('php://output');
		}

	}

	public function inSocai ($listDangvien) {
		$tableString = "
		<style>
			td {
				border-right : 1px solid #716F6F;
    			border-bottom : 1px solid #716F6F;
    			text-align : left;
    			min-width : 50px;
    			max-width : 2000px;
    			font-family : Arial;
    		}

    		.center {
    			text-align : center;
    		}
		</style>
		<table style='font-size: 13px'>
			<tr>
				<td rowspan='2'><b>STT</b></td>
				<td rowspan='2'><b>Quê quán - chỗ ở</b></td>
				<td rowspan='2'><b>Ngày vào Đảng</b></td>
				<td rowspan='2'><b>Chức vụ</b></td>
				<td rowspan='2'><b>Học hàm - học vị</b></td>
				<td rowspan='2'><b>Công việc hiện nay</b></td>
				<td rowspan='2'><b>Diện cán bộ</b></td>
				<td colspan='4' class='center'><b>Quá trình lương</b></td>
			</tr>		
			<tr>
				<td>Thời gian</td>
				<td>Hệ số</td>
				<td>Mốc</td>
				<td>TT khác</td>
			</tr>
		";

		$tableData = '';
		foreach ($listDangvien as $key => $value) {
			if ($value['gt'] == 0) $gt = 'nữ';
			else $gt = 'nam';

			$chucvu  = $this->user->thongtinChucvu($value['shcc']);
			$quequan = $this->user->thongtinQuequan($value['ma_huyen']);			
			$dienbienLuong = $this->user->quatrinhDienbienLuong($value['shcc']);

			foreach ($quequan as $keyQuequan => $valueQuequan) {
				$chitietQuequan = $valueQuequan['ten_huyen'] .' - '. $valueQuequan['ttp'];	
			}

			if (is_string($value['vdpc']) && $value['vdpc'] != null && $value['vdpc'] != '0' && $value['vdpc'] != 1)
				$viecdamNhiem = "Việc đảm nhiệm : " . $value['vdpc'] . "<br>";
			else
				$viecdamNhiem = "Việc đảm nhiệm : Không <br>";

			$string = "
			<tr>
				<td>".++$key."</td>
				<td>
					" . $value['ttd'] . "<br>
					Giới tính : " . $gt . "<br>
					Năm sinh  : " . $value['ntns'] . "<br>
					Số hiệu   : " . $value['sohieuchuan'] . "<br>
					Số BHXH   : " . $value['sbh']  . "<br>
					Đóng từ   : " . $value['ndbh'] ."<br>
				</td>
				<td>
					" . $value['nc']    . "<br>
					" . $chitietQuequan . "<br>
					" . $value['dctt']  . "<br>
					GD chính sách : " . $value['gdcs'] . "<br>
					Dân tộc       : " . $value['dt']   . "<br>
					Tôn giáo      : " . $value['tg']   . "<br>
				</td>
				<td>
					" . $value['nvd'] . "<br>
					Nhập ngũ : " . $value['nnn'] . "<br>
					Xuất ngũ : " . $value['nxn'] . "<br>
					TB hạng  : " . $value['tb']  . "<br>
				</td><td>";

			foreach ($chucvu as $key => $value) {
				if ($value['cv'] != null) {
					$string .= ++$key . ". " .$value['cv'] . " => " . $value['nbncvkn'] . "<br>";
				}
			}
			
			$string .=	
				"</td><td>
					" . $value['cqtd'] . "<br>
					" . $viecdamNhiem  . "
				</td>
				<td>
					" . $value['dcb']  . "<br>
				</td>";

			$tdThoigian = '<td>';
			$tdMoc      = '<td>';
			$tdHeso     = '<td>';
			$tdTTkhac   = '<td>';
			foreach ($dienbienLuong as $key => $value) {
				$tdThoigian .= $value['tgbd_dbl']  . '<br>';
				$tdHeso     .= $value['hsl']       . '<br>';
				$tdMoc      .= $value['tgkt_dbl']  . '<br>';
				$tdTTkhac   .= $value['ttk_qtdbl'] . '<br>';
			}

			$tdThoigian .= '</td>';
			$tdHeso     .= '</td>';
			$tdMoc      .= '</td>';
			$tdTTkhac   .= '</td>';
			$string     .= $tdThoigian . $tdHeso . $tdMoc . $tdTTkhac . "</tr>";

			$tableString .= $string;
		}

		$tableString .= "</table>";

		$file = "socai.xls";
		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=$file");
		echo $tableString;
	}

	public function xuatDulieuDangvien ($listDangvien, $quatrinh) {
		// $listDangvien = $this->serviceController->convertKeyArraySearch($listDangvien);
		$tableString = "
		<style>
			td {
    			text-align : left;
    			min-width : 50px;
    			max-width : 2000px;
    			font-family : Arial;
    			font-size : 13px;
    			border-bottom-color : #ccc;
    		}

    		.center {
    			text-align : center;
    		}
		</style>
		<table><tr>";
		$listKey = $this->serviceController->convertKeyArraySearch($listDangvien);
		foreach ($listKey as $key => $value) {
			$tableString .= "<td><b>" . $value . "</b></td>";
		}

		if ($quatrinh == '' || $quatrinh == null) {
			$tableString .= "</tr><tr>";
			foreach ($listDangvien as $key => $dangvien) {
				foreach ($dangvien as $key => $value) {
					$tableString .= "<td>" . $value . "</td>";
				}
				$tableString .= "</tr>";
			}
			
		} else {
			switch ($quatrinh) {
				case 'dienbienluong':
					$tableString .= "<td><b>Thời gian</b></td>";					
					$tableString .= "<td><b>Ngạch</b></td>";					
					$tableString .= "<td><b>Bậc</b></td>";					
					$tableString .= "<td><b>Hệ số</b></td>";					
					$tableString .= "<td><b>Phần trăm lương</b></td>";					
					$tableString .= "<td><b>Các phụ cấp</b></td>";					
					$tableString .= "<td><b>Thông tin khác</b></td></tr>";					

					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhDienbienLuong = $this->user->quatrinhDienbienLuong($shcc);
						foreach ($quatrinhDienbienLuong as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}
							$tableString .= "<td>" . $quatrinhValue['tgbd_dbl'] . ">" . $quatrinhValue['tgkt_dbl'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['ten_ngach'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['bl_dbl'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['hsl'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['hsl'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['hsl'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['ttk_qtdbl'] . "</td>";
							$tableString .= "</tr>";
						}
					}
					break;
				
				case 'quatrinhdaotao':
					$tableString .= "<td><b>Thời gian</b></td>";					
					$tableString .= "<td><b>Văn bằng</b></td>";					
					$tableString .= "<td><b>Chuyên ngành</b></td></tr>";					

					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhDaotao = $this->user->quatrinhDaotao($shcc);
						foreach ($quatrinhDaotao as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}

							$tableString .= "<td>" . $quatrinhValue['tgbd_dtcm'] . ">" . $quatrinhValue['tgkt_dtcm'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['vbdt'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['cn'] . "</td>";
							$tableString .= "</tr>";
						}
					}
					
					break;

				case 'quatrinhcongtac':
					$tableString .= "<td><b>Thời gian</b></td>";					
					$tableString .= "<td><b>Biên chế tại đơn vị</b></td>";					
					$tableString .= "<td><b>Nơi làm việc</b></td>";					
					$tableString .= "<td><b>Công việc đảm nhiệm</b></td>";					
					$tableString .= "<td><b>Diện cán bộ/Tình trạng công tác</b></td>/<tr>";					
					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhCongtac = $this->user->quatrinhCongtac($shcc);
						foreach ($quatrinhCongtac as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}

							$tableString .= "<td>" . $quatrinhValue['tgbd_qtct'] . ">" . $quatrinhValue['tgkt_qtct'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['bctdv'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['nlv'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['cvdn'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['dcb'] . "/" . $quatrinhValue['tt'] . "</td>";
							$tableString .= "</tr>";
						}	
					}
					break;

				case 'quatrinhboiduong':
					$tableString .= "<td><b>Thời gian</b></td>";					
					$tableString .= "<td><b>Nơi bồi dưỡng>/b></td>";					
					$tableString .= "<td><b>Nội dung</b></td></tr>";					
					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhBoiduong = $this->user->quatrinhBoiduong($shcc);
						foreach ($quatrinhBoiduong as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}

							$tableString .= "<td>" . $quatrinhValue['tgbd_bd'] . ">" . $quatrinhValue['tgkt_bd'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['nbd_qtbd'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['ndbd'] . "</td>";
							$tableString .= "</tr>";
						}	
					}
					break;

				case 'quatrinhkhenthuong':
					$tableString .= "<td><b>Hình thức khen thưởng</b></td>";					
					$tableString .= "<td><b>Năm khen thưởng</b></td>";					
					$tableString .= "<td><b>Quyết định khen thưởng</b></td></tr>";					
					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhKhenthuong = $this->user->quatrinhKhenthuong($shcc);
						foreach ($quatrinhKhenthuong as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}

							$tableString .= "<td>" . $quatrinhValue['kt'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['nkt_qtkt'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['ttk_qtkt'] . "</td>";
							$tableString .= "</tr>";
						}	
					}
					break;

				case 'nuocngoaidaden':
					$tableString .= "<td><b>Ngày về thực tế</b></td>";					
					$tableString .= "<td><b>Nước đã đến</b></td>";					
					$tableString .= "<td><b>Mục đích đến</b></td>";					
					$tableString .= "<td><b>Trạng thái</b></td></tr>";					
					foreach ($listDangvien as $key => $dangvien) {
						$shcc = DB::table('soyeu_tbl')->where('sohieuchuan', $dangvien['sohieuchuan'])->first()->shcc;
						$quatrinhNuocngoai = $this->user->quatrinhNuocngoai($shcc);
						foreach ($quatrinhNuocngoai as $quatrinhKey => $quatrinhValue) {
							$tableString .= "<tr>";
							foreach ($dangvien as $key => $value) {
								$tableString .= "<td>" . $value . "</td>";
							}

							$tableString .= "<td>" . $quatrinhValue['nvtt_nndd'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['qg'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['mdnndd'] . "</td>";
							$tableString .= "<td>" . $quatrinhValue['ttnndd'] . "</td>";
							$tableString .= "</tr>";
						}	
					}
					break;

				
				default:
					# code...
					break;
			}		
		}

		$tableString .= "</table>";		
		$file = "socai.xls";
		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=$file");
		echo $tableString;
	}

}


?>