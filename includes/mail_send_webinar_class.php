<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Kolkata');

require "class-phpmailer.php";
require "class-smtp.php";
define("ADMIN_EMAIL_WEBINAR", "annie.tylor@ideabyte.net");
define("ADMIN_PASSWORD_WEBINAR", 'anNbyteS2k21^$');
class Phpmailsend {

    public function send($to, $subject, $body) {
        $result = array();
        $result['result'] = false;
        $result['error'] = true;
        $result['errorMessage'] = "";
        try {
            $mail = new PHPMailer(TRUE);
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'tls';
            $mail->Host = "smtp.office365.com";
            $mail->Port = 587; // or 587 || 465
            $mail->IsHTML(true);
            $mail->Username = ADMIN_EMAIL_WEBINAR;
            $mail->Password = ADMIN_PASSWORD_WEBINAR;
            $mail->From = ADMIN_EMAIL_WEBINAR;
            $mail->Subject = $subject;
            $mail->Body = $body;

            if (is_array($to)) {
                foreach ($to as $toAddress) {
                    $mail->AddAddress($toAddress);
                }
            } else {
                $mail->AddAddress($to);
            }

            $mail->Send();
            $result['result'] = true;
            $result['error'] = false;
        } catch (phpmailerException $mailerException) {
            $result['result'] = false;
            $result['error'] = true;
            $result['errorMessage'] = $mailerException->getMessage();
        } catch (Exception $e) {
            $result['result'] = false;
            $result['error'] = true;
            $result['errorMessage'] = $e->getMessage();
        }
        return $result;
    }

}
