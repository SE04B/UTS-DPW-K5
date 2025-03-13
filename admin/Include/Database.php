<?php
$server = '51.79.192.199';
$username = 'ponpes_admin';
$password = 'ustt7s47YzHyFT';
$db_name = 'ponpes';
$port = 6033; // Define your MySQL port here
$con;

try{
	$con = mysqli_connect($server, $username, $password, $db_name, $port) or die(mysqli_connect_errno());
	
}catch(Exception $e){
	echo $e->getMessage();
}

?>