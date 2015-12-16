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
		if ($array == null || count($array) == 0)
			return;

		$listKey = array_keys($array[0]);
		for ($i = 0; $i < count($listKey); $i++) {
			$e = $listKey[$i];
			switch ($e) {
				case 'sohieuchuan':
					
					break;
				
				default:
					
					break;
			}
		}
	}

}

?>