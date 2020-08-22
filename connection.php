<?php
    header('Content-Type: application/json');
	error_reporting(0);
	
	// disesuaikan dengan database local / database di hosting

	$server		= "localhost"; 
	$user		= "u6117788_rzzkan"; 
	$password	= ""; 
	$database	= "u6117788_report";  
	
	$connect = mysqli_connect($server, $user, $password, $database) or die ("Connection Failed !");

?>