<?php
	include "connection.php";

	$id_schedule = $_POST['id_schedule'];
	$id_user = $_POST['id_user'];


	
	$query = mysqli_query($connect,"UPDATE schedules SET id_user='$id_user' WHERE id_schedule='$id_schedule'");
	
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