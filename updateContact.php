<?php
	include "connection.php";

	$id_contact = $_POST['id_contact'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$division = $_POST['division'];

	
	$query = mysqli_query($connect,"UPDATE contacts SET division='$division', address='$address', phone='$phone' WHERE id_contact='$id_contact'");
	
    //Handle Response
	if ($query) {
		$response->success = 1;
		$response->message = "Update Data Success";
		die(json_encode($response));
	} else{ 
		$response->success = 0;
		$response->message = "Failed to Update Data";
		die(json_encode($response)); 
	}	

?>