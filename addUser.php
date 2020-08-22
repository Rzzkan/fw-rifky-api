<?php
	include "connection.php";

	//Generate ID
	$gen_query = "SELECT max(id_user) as maxID FROM users";
	$gen_result = mysqli_query($connect,$gen_query);
	$gen_data = mysqli_fetch_array($gen_result);
	$id_user = $gen_data['maxID'];
	$counter = (int) substr($id_user, 4, 4);
	$counter++;
	$char = "USER";
	$id_user = $char . sprintf("%04s", $counter);

	// Insert Data
	// $id_user = $_POST['id_user'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$img = $_POST['img'];
	
	$query = mysqli_query($connect,"INSERT INTO users (id_user,email,role,name,address,phone,password,img) VALUES('$id_user','$email','$role','$name','$address','$phone','$password','$img')");

	//Handle Response
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