<?php
	include "connection.php";
	
	//Generate ID
	$gen_query = "SELECT max(id_report) as maxID FROM reports";
	$gen_result = mysqli_query($connect,$gen_query);
	$gen_data = mysqli_fetch_array($gen_result);
	$id_report = $gen_data['maxID'];
	$counter = (int) substr($id_report, 4, 4);
	$counter++;
	$char = "REPO";
	$id_report = $char . sprintf("%04s", $counter);

	//Insert
	$id_user = $_POST['id_user'];
	$date = $_POST['date'];
	$report = $_POST['report'];
	$img = $_POST['img'];
	$img_name = "$id_report.jpg";
	$img_path = "Report/$img_name";
	file_put_contents($img_path,base64_decode($img));
	$query = mysqli_query($connect,"INSERT INTO reports (id_report,id_user,date,img,report) VALUES('$id_report','$id_user','$date','$img_path','$report')");

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