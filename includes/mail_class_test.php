<?php
error_reporting(E_ALL);
ini_set('display_errors',TRUE);
require 'lib123/PHPMailer/PHPMailerAutoload.php';

 $sesHost = "smtp.gmail.com";//'email-smtp.us-east-1.amazonaws.com'; 
 $sesKey = 'services@sangati.org';//'AKIAJHIFVCROXZ6BSOUQ';
 $sesSecret = 'Sangati123#';//'At2D8LtaUE8tn2asTa2CG3Jujb/R3c14V7hRVTe2qCsg'; 
 $senderMail = 'services@sangati.org';
 
$to1 = 'sales@dgsms.ca';
$to2 = 'contact@dgsms.ca';
$to = array("kishore.putrevu@ideabytes.com");
//$to = array("sales@dgsms.ca", "contact@dgsms.ca");
	
class Phpmailsend
{
	public function send($sesHost, $sesKey, $sesSecret, $senderMail, $subject, $body, $to, $attachment = NULL){
		$result = array();
		$result['result'] = false;
		$result['error'] = true;
		$result['errorMessage'] = "";
        try {
            $mail = new PHPMailer(TRUE);
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'tls';
            $mail->Host = $sesHost;
            $mail->Port = 587; // or 587 || 465
            $mail->IsHTML(true);
            $mail->Username = $sesKey;
            $mail->Password = $sesSecret;
            $mail->SetFrom($senderMail);
            $mail->Subject = $subject;
            $mail->Body = $body;            
           
			if(is_array($to)){
				foreach ($to as $toAddress) {
					$mail->AddAddress($toAddress);
				}
			}else{
				$mail->AddAddress($to);
			}
			
			if($attachment) {
                $mail->addAttachment($attachment);
            }
			$mail->Send();
			$result['result'] = true;
			$result['error'] = false;
        } catch(phpmailerException $mailerException) {
			$result['result'] = false;
			$result['error'] = true;
			$result['errorMessage'] = $mailerException->getMessage();
        } catch(Exception $e) {
			$result['result'] = false;
			$result['error'] = true;
           	$result['errorMessage'] = $e->getMessage();	
        }
		return $result;
	}
}

$subject = "hello test ses support@dgsms.ca mail"; 
 $body = "dgsms website mail test"; 
 $to = "admin@sangati.org";
$mail12 = new Phpmailsend();
try{
	$result = $mail12->send($sesHost, $sesKey, $sesSecret, $senderMail, $subject, $body, $to);
}catch(Exception $e){
	echo "hello from exception".$e->getMessage();
}

echo "<pre>";
var_dump($result);
echo "</pre>";

?>
