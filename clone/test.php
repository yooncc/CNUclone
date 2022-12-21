<?php
/*$host    = '127.0.0.1';
$port    = '5432';
$dbname  = 'yooncc';
$user    = 'yooncc';
$password= '40314031';*/

$conn = pg_connect("host=127.0.0.1 port=5432 dbname=board1 user=yooncc password=40314031");

$res = pg_query("SELECT CURRENT_TIMESTAMP");
$arr = pg_fetch_all($res);
if ( $conn ) { 
	print_r($arr); }
else { echo 'Could not connect';}
?>
