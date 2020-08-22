<?php
	include "connection.php";

	//Generate ID
	$gen_query = "SELECT max(id_location) as maxID FROM locations";
	$gen_result = mysqli_query($connect,$gen_query);
	$gen_data = mysqli_fetch_array($gen_result);
	$id_location = $gen_data['maxID'];
	$counter = (int) substr($id_user, 4, 4);
	$counter++;
	$char = "LOCA";
	$id_location = $char . sprintf("%04s", $counter);

	// Insert Data
	$name = $_POST['name'];
	$address = $_POST['address'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	
	$query = mysqli_query($connect,"INSERT INTO locations (id_location,name,address,latitude,longitude) VALUES('$id_location','$name','$address','$latitude','$longitude')");

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