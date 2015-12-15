<?php 


class SendMailController {

	public function sendOneMail ($mail, $subject, $content) {
		Mail::send([], array('firstname'=>'DaihocBachKhoaHaNoi'), function($message) {
			$message->to($mail, $mail)->subject($subject)->setBody($content);
		});

	}

	public function sendListMail ($list_mail) {
		for ($i = 0; $i < count($list_mail); $i++) {
			$this->sendOneMail($list_mail);
		}
	}
	

}

?>