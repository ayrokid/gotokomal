<?php

require_once APPPATH.'libraries/Phpmailer.php';

class SendMail extends PHPMailer {

	private $from,
			$to,
			$subject,
			$message;

	public function send_mail($params){
		$call = false;
		$message = 'Kosong';
		$email = 'info.silvanix@gmail.com';
        $subject = "Notification";
		if(isset($params['message'])){
			$message = $params['message'];
		}
		if(isset($params['email'])){
			$email = $params['email'];
		}
        if(isset($params['subject'])){
            $subject = $params['subject'];
        }
		try {
			$html  = "<html><body>$message</body></html>";
            $pesan = preg_replace('/\\\\/', '', $html);
            $this->IsSMTP();
			$this->Port       = 465; // or 587
            $this->priority   = 1;
            $this->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $this->SMTPAuth = true; // authentication enabled
            $this->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
			$this->Username   = "info.silvanix@gmail.com";
			$this->Password   = "ni4wulan";
			$this->IsSendmail();
			$this->From       = "noreplay@gotoko.id";
			$this->FromName   = "Gotoko.id";
			$this->AddAddress($email);
			$this->Subject    = $subject;
			$this->WordWrap   = 50;
            $this->MsgHTML($pesan);
            $this->IsHTML(true);
            if(!$this->send())
            {	$msg = $this->ErrorInfo;
			} else {
				$msg  = 'Message has been sent';
				$call = true;
			}
		} catch (Exception $e) {
			$msg = $e->getMessage();
            break;
		}

		return array('back' => $call, 'msg' => $msg);
	}

	protected function format_message($data){
	}

	public function send_origin(){
		 $to = "muh.yanun@gmail.com";
         $subject = "This is subject";

         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";

         $header = "From:noreplay@silvanix.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
	}

}