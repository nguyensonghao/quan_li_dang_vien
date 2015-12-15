<?php 

require_once public_path().'/libs/PHPExcel/Classes/PHPExcel.php';
require_once public_path().'/libs/PHPWord/PHPWord.php';

class ExportDataController{

	public $objPHPExcel;	

	public function __construct () {
		$this->objPHPExcel = new PHPExcel();
	}

	public function test () {
		$PHPWord = new PHPWord();

		// Every element you want to append to the word document is placed in a section. So you need a section:
		$section = $PHPWord->createSection();

		// After creating a section, you can append elements:
		$section->addText('Xin chào các bạn!');

		// // You can directly style your text by giving the addText function an array:
		// $section->addText('Hello world! I am formatted.', array('name'=>'Tahoma', 'size'=>16, 'bold'=>true));

		// // If you often need the same style again you can create a user defined style to the word document
		// // and give the addText function the name of the style:
		// $PHPWord->addFontStyle('myOwnStyle', array('name'=>'Verdana', 'size'=>14, 'color'=>'1B2232'));
		// $section->addText('Hello world! I am formatted by a user defined style', 'myOwnStyle');

		// // You can also putthe appended element to local object an call functions like this:
		// $myTextElement = $section->addText('Hello World!');
		// $myTextElement->setBold();
		// $myTextElement->setName('Verdana');
		// $myTextElement->setSize(22);

		// At least write the document to webspace:
		$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
		$objWriter->save('helloWorld.docx');
	}

	public function actionExportExcelFromArray ($array) {
		$this->objPHPExcel->getProperties()->setCreator("Daihocbachkhoahanoi");

		// Add some data

		$listkey = array_keys($array[0]);

		$char = 'A';
		$excel = $this->objPHPExcel->setActiveSheetIndex(0);
		for ($i = 0; $i < count($listkey); $i++) {
		    $excel->setCellValue($char.'1', $listkey[$i]);    
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
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$this->objPHPExcel->setActiveSheetIndex(0);
		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');
		 
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="baocao.xls"');
		if (isset($objWriter)) {
		    $objWriter->save('php://output');
		}


	}

}


?>