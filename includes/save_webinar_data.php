<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set("display_errors", TRUE);
error_reporting(E_ALL);
include "dbConnect_webinar.php";
include "mail_send_webinar_class.php";

switch ($_POST['action']) {
    case "dg_hazmat":
        $name_dg = filterpost('widget-contact-form-name');
        $email_dg = filterpost('widget-contact-form-email');
        $companyName_dg = filterpost('widget-contact-form-company');
        $designation_dg = filterpost('widget-contact-form-designation');
        $country_dg = filterpost('widget-contact-form-country');
        $webinar_name = "DG / HAZMAT HAULING SOLUTION FOR 3PL";
        $webinar_date = "October 5th 2021, 3:00 PM CET";

//        Save Data In Db
        saveWebinarData($dbConWeb, $name_dg, $email_dg, $companyName_dg, $designation_dg, $country_dg, $webinar_name, $webinar_date);

        $subject = "Message from Webinar Registration page dgsms.ca";

        $body = "<table>
	<tr><td>Name</td><td>:</td><td>$name_dg</td></tr>
	<tr><td>Email</td><td>:</td><td>$email_dg</td></tr>
	<tr><td>Company Name</td><td>:</td><td>$companyName_dg</td></tr>
	<tr><td>Designation</td><td>:</td><td>$designation_dg</td></tr>
	<tr><td>Country</td><td>:</td><td>$country_dg</td></tr>
	</table>";

        $subjectToUser = "Message from dgsms.ca";

        $bodyToUser = "Hi $name_dg,
        <br> <br> 
        Thank you for registering for the webinar on DG / HAZMAT HAULING AUTOMATION.  <br>
        Please find the below given zoom link for the webinar which will be held on October 19th at 03 PM (CET).
        <br><br>
        Click on the link to join the event via Zoom:
        <br> <br>
        <a href='https://ideabytes.zoom.us/j/83975123537'>Join the Webinar on October 19th at 03 PM (CET)</a>
    
        <br> <br>
        
        Meeting ID: 839 7512 3537 <br>
    One tap mobile <br>
    +13017158592,,83975123537# US (Washington DC)<br>
    +13126266799,,83975123537# US (Chicago) <br>
    
    <br>  <br>
    
    Dial by your location<br>
    +1 301 715 8592 US (Washington DC)<br>
    +1 312 626 6799 US (Chicago)<br>
    +1 346 248 7799 US (Houston)<br>
    +1 646 876 9923 US (New York)<br>
    +1 669 900 6833 US (San Jose)<br>
    +1 253 215 8782 US (Tacoma)<br>
    +1 438 809 7799 Canada<br>
    +1 587 328 1099 Canada<br>
    +1 647 374 4685 Canada<br>
    +1 647 558 0588 Canada<br>
    +1 778 907 2071 Canada<br>
    +1 204 272 7920 Canada<br>
    Meeting ID: 839 7512 3537 <br>
         
        <br> <br>
        Looking forward to seeing you!
        <br> <br>
        Best Regards, <br>
        Webinar Team";

        $mail12 = new Phpmailsend();
        $to = "annie.tylor@ideabyte.net";
        //$email = "kishore.putrevu@ideabytes.com";
        try {
            $result1 = $mail12->send($to, $subject, $body);
            $result2 = $mail12->send($email_dg, $subjectToUser, $bodyToUser);
            if ($result1['result'] && $result2['result'] == 1) {
                echo "success";
            }
        } catch (Exception $e) {
            echo "hello from exception" . $e->getMessage();
        }

        break;

    default:
        break;
}
