<?php
    include "connection.php";
	
    $query = "SELECT * FROM users WHERE role=2";
    $result = $connect->query($query);
    $data =[];
    $i=0;

	if ($result->num_rows>0) {

        while($row = $result->fetch_assoc()) {
            $data[$i] = [
            'id_user' => $row["id_user"],
            'name' => $row["name"],
            'email' => $row["email"],
            'address' => $row["address"],
            'phone' => $row["phone"],
            'password' => "null",
            'img' => $row["img"],
            'role' => (int)$row["role"]
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