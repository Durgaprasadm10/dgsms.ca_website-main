<?php
//Database credentials
if($env_var == "live"){
	// Turn off error reporting
	error_reporting(0);
	$dbHost = 'ideabytesdb.c6hujshgwzfd.us-east-1.rds.amazonaws.com';
	$dbUsername = 'dgmobi_cart';
	$dbPassword = 'dgmobi_cart';
	$dbName = 'dgmobi_cart';
}else{
	// Report all errors
	error_reporting(E_ALL);
	$dbHost = 'ideabytesdb.c6hujshgwzfd.us-east-1.rds.amazonaws.com';
	$dbUsername = 'dgmobi_cart';
	$dbPassword = 'dgmobi_cart';
	$dbName = 'dgmobi_cart';
}
//Connect with the database
//echo "A";
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//echo "B";
//Display error if failed to connect
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>