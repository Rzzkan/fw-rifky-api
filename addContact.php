<?php
	include "connection.php";
	
	//Generate ID
	$gen_query = "SELECT max(id_contact) as maxID FROM contacts";
	$gen_result = mysqli_query($connect,$gen_query);
	$gen_data = mysqli_fetch_array($gen_result);
	$id_contact = $gen_data['maxID'];
	$counter = (int) substr($id_contact, 4, 4);
	$counter++;
	$char = "CONT";
	$id_contact = $char . sprintf("%04s", $counter);

	//Insert

	$phone = $_POST['phone'];
	$division = $_POST['division'];
	$address = $_POST['address'];

	$query = mysqli_query($connect,"INSERT INTO contacts (id_contact,phone,division,address) VALUES('$id_contact','$phone','$division','$address')");

	if ($query) {
		$response->success = 1;
		$response->message = "Save Data Success";
		die(json_encode($response));
	} else{ 
		$response->success = 0;
		$response->message = "Failed to Save Data";
		die(json_encode($response)); 
	}	

?>