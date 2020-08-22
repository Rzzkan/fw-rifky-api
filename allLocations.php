<?php
    include "connection.php";
	
    $query = "SELECT * FROM locations";
    $result = $connect->query($query);
    $data =[];
    $i=0;

	if ($result->num_rows>0) {

        while($row = $result->fetch_assoc()) {
            $data[$i] = [
            'id_location' => $row["id_location"],
            'name' => $row["name"],
            'address' => $row["address"],
            'latitude' => $row["latitude"],
            'longitude' => $row["longitude"]
            ];
            $i = $i + 1;
        }
        $response->success = 1;
        $response->message = "Get Data Success";
        $response->data = $data;
	    die(json_encode($response));
	}else{ 
		$response->success = 0;
		$response->message = "Data Empty";
		die(json_encode($response)); 
	}	

?>