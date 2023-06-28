<?php
/* Connect to a MySQL database using driver invocation */
$dbHost= "ideabytesdb.c6hujshgwzfd.us-east-1.rds.amazonaws.com";
$dbName = "dgmobi_cart";
$userName = 'dgmobi_cart';
$password = 'dgmobi_cart';

$dsn = 'mysql:dbname='.$dbName.';host='.$dbHost;


try {
    $db = new PDO($dsn, $userName, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>