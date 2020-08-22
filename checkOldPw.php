<?php
	include "connection.php";

	$id_user = $_POST['id_user'];
	$password = $_POST['password'];
	
	$query = mysqli_query($connect,"SELECT * FROM users where id_user='$id_user' and password='$password'");
	
    //Handle Response
    if ($query->num_rows>0) {
        $response->data = true;
        $response->message = "Match";
	    die(json_encode($response));
	}else{ 
        $response->data = false;
        $response->message = "Not Match";
		die(json_encode($response)); 
	}	
?>