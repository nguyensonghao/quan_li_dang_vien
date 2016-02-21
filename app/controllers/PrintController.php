<?php 

	class PrintController extends BaseController {

		public $exportData;

		public function __construct () {
			$this->beforeFilter('manager.school');
			$this->exportData = new ExportDataController();
		}

		public function showPrint () {
			// Get list file of folder docx
			$despath = public_path().'/source/print';
			$listFileName = $this->getFileInFolerPrint($despath);
			return View::make('module.print.print')->with('listFileName', $listFileName);
		}

		public function showAddPrint () {
			return View::make('module.print.print-add');	
		}

		public function actionPrint ($name) {
			$url = public_path().'/source/print/' . $name;
			$headers = array(
			    'Content-Type: application/docx'
			);
			return Response::download($url, $name, $headers);
		}

		public function actionPrintExcel () {
			$this->exportData = new ExportDataController();
			$this->exportData->actionExportExcelFromArray($list);
		}


		public function actionAddPrint () {
			$file = Input::file('file');
			$name = Input::get('name');
			if ($name == '' || !Input::hasFile('file')) {
				return Redirect::to('add-file')->with('error-add-print', -1);
			} else {
				$extension = Input::file('file')->getClientOriginalExtension();
				if ($extension != 'docx' && $extension != 'doc' ) {
					
					return Redirect::to('add-file')->with('error-add-print', 1);
				} else {
					$despath = public_path().'/source/print';
					$filename = $name . '.docx';
					$file->move($despath, $filename);
					return Redirect::to('add-file')->with('success-add-print', 1);
				}	
			}
			
		}

		public function actionPrintArrayByField () {
			$listOfField = Input::get('listoffields');
			$listDienbien = Input::get('listDienbien');			
			$listOfField = substr($listOfField, 0, strlen($listOfField) - 1);
			$listOfField = explode(',', $listOfField);
			$searchController = new SearchController();
			$listDangvien = $searchController->querySearchSimpleToPrint($listOfField);
			$data = [];
			foreach ($listDangvien['all'] as $key => $value) {
				$data[$key] = (array) $value;
			}
			$this->exportData->xuatDulieuDangvien($data, $listDienbien);
		}

	}

?>