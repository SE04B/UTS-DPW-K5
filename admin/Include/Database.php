<?php
$server = 'database';
$username = 'lamp';
$password = 'lamp';
$db_name = 'lamp';
$con;

try{
	$con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connect_errno());
	
}catch(Exception $e){
	echo $e->getMessage();
}

?>