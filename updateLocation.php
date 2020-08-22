<?php
	include "connection.php";

	$id_location = $_POST['id_location'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	
	$query = mysqli_query($connect,"UPDATE locations SET name='$name', address='$address', latitude='$latitude', longitude='$longitude' WHERE id_location='$id_location'");
	
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