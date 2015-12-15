<?php 

	class NotifyController extends BaseController {

		public function __construct () {
			$this->beforeFilter('manager.school');
		}

		public function showListNotify () {
			return View::make('module.notify.list-notify');
		}

		public function showDetailNotify () {
			return View::make('module.notify.details-notify');
		}

	}

?>