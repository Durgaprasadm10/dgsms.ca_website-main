<?php
//ini_set("display_errors",TRUE);
//error_reporting(E_ALL);
include "dbconnect2.php";
include "mail_class.php";

$product = $_POST['product'];
$name = $_POST['firstname']." ".$_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone_number_trial'];
$message = $_POST['country'];
$pLanguage = 'English';

storeContacts($dbCon2, $name, $email, $phone, $product, $message, $pLanguage);

$subject = "Message from contact page dgsms.ca";

	$body = "<table>
	<tr><td>Name</td><td>:</td><td>$name</td></tr>
	<tr><td>Email</td><td>:</td><td>$email</td></tr>
	<tr><td>Phone No</td><td>:</td><td>$phone</td></tr>
	<tr><td>Interested In</td><td>:</td><td>$product</td></tr>
	<tr><td>country</td><td>:</td><td>$message</td></tr>
	</table>";

	$subjectToUser = "Message from dgsms.ca";
	/*$bodyToUser = "<table>
	<tr><td>Name</td><td>:</td><td>$name</td></tr>
	<tr><td>Email</td><td>:</td><td>$email</td></tr>
	<tr><td>Phone No</td><td>:</td><td>$phone</td></tr>
	<tr><td>Interested In</td><td>:</td><td>$select</td></tr>
	<tr><td>Message</td><td>:</td><td>$mess</td></tr>
	</table>
	Our team will contact you soon.
	";*/
	$bodyToUser = "Hi $name,
	Thank you for contacting us.
	Our team will reach you soon.";
	
    $mail12 = new Phpmailsend();
    //$to="kishore.putrevu@ideabytes.com";
    //$email = "kishore.putrevu@ideabytes.com";
	try{
		$result1 = $mail12->send($sesHost, $sesKey, $sesSecret, $senderMail, $subject, $body, $to);
		$result2 = $mail12->send($sesHost, $sesKey, $sesSecret, $senderMail, $subjectToUser, $bodyToUser, $email);
	}catch(Exception $e){
		echo "hello from exception".$e->getMessage();
	}
	echo $succ = "Thank you for your interest. Our team will contact you soon.";

?>