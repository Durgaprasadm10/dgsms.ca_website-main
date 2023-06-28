<?php
include("checklist_includes/dbconfig.php");


$ipAddress = (@$_SERVER['REMOTE_ADDR'] != "") ? @$_SERVER['REMOTE_ADDR'] : "";
$browserName = isset($_POST["browserName"]) ? $_POST["browserName"] : "";
$regulation = isset($_POST["regulation"]) ? $_POST["regulation"] : "";
$userName = isset($_POST["userName"]) ? $_POST["userName"] : "";
$userEmail = isset($_POST["userEmail"]) ? $_POST["userEmail"] : "";
$userPhone = isset($_POST["userPhone"]) ? $_POST["userPhone"] : "";
$userCompany = isset($_POST["userCompany"]) ? $_POST["userCompany"] : "";

$insert_q = "INSERT INTO `checklist_count` (`ip_address`, `browser`, `regulation`, `name`, `email`, `phone`, `company`) VALUES (:ip_address, :browser, :regulation, :name, :email, :phone, :company)";
$insert_query = $db->prepare($insert_q);
$insert_query->bindParam(":ip_address",$ipAddress);
$insert_query->bindParam(":browser",$browserName);
$insert_query->bindParam(":regulation",$regulation);
$insert_query->bindParam(":name",$userName);
$insert_query->bindParam(":email",$userEmail);
$insert_query->bindParam(":phone",$userPhone);
$insert_query->bindParam(":company",$userCompany);

try{ 
	$insert_query->execute();
	echo "success";
}
catch(PDOException $e){
	$e->getMessage();
	echo "fail";
}
?>