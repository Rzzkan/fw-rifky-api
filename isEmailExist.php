<?php
    include "connection.php";
	
    $email = $_POST['email'];
    
    $query = mysqli_query($connect,"SELECT * FROM users where email='$email'");

	if ($query->num_rows>0) {
        $response->data = true;
        $response->message = "Email Exist";
	    die(json_encode($response));
	}else{ 
        $response->data = false;
        $response->message = "Email not Exist";
		die(json_encode($response)); 
	}	

?>