<?php 
$server_nm="Pettes-pc";
$connection=array("Database"=>"testDB");
$conn = sqlsrv_connect($server_nm, $connection);

if(!$conn){
	echo "Connection error";
	die(print_r($sqlsrv_errors(),true));
}
?>