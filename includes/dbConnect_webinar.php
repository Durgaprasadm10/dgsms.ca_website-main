<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Connect to a MySQL database using driver invocation */
$dbHostWeb = "ideabytesdb.c6hujshgwzfd.us-east-1.rds.amazonaws.com";
$dbNameWeb = "dgsms_site";
$userNameWeb = 'dgsms_site';
$passwordWeb = '&(site_dgsms)&';

$dsnWeb = 'mysql:dbname=' . $userNameWeb . ';host=' . $dbHostWeb;

try {
    $dbConWeb = new PDO($dsnWeb, $userNameWeb, $passwordWeb);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

function saveWebinarData($dbConWeb, $name, $email, $company_name, $designation, $country, $webinar_name, $webinar_date) {
    $query = "INSERT INTO `webinar_reg_data` (`name`,`email`,`company_name`,`designation`,`country`,`webinar_name`,`webinar_date`) VALUES(:name,:email,:company_name,:designation,:country,:webinar_name,:webinar_date)";
    $insert_query = $dbConWeb->prepare($query);
    $insert_query->bindParam(":name", $name);
    $insert_query->bindParam(":email", $email);
    $insert_query->bindParam(":company_name", $company_name);
    $insert_query->bindParam(":designation", $designation);
    $insert_query->bindParam(":country", $country);
    $insert_query->bindParam(":webinar_name", $webinar_name);
    $insert_query->bindParam(":webinar_date", $webinar_date);
    $insert_query->execute();
}

function filterpost($protocol) {
    return trim(filter_input(INPUT_POST, $protocol, FILTER_SANITIZE_STRING));
}
