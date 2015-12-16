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

}

?>