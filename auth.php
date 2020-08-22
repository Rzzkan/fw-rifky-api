<?php
    include "connection.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = mysqli_query($connect,"SELECT * FROM users where email='$email' and password='$password'");
    $data =[];

	if ($query->num_rows>0) {
        $row = $query->fetch_assoc();
        $data = [
            'id_user' => $row["id_user"],
            'email' => $row["email"],
            'role' => (int)$row["role"],
            'name' => $row["name"],
            'address' => $row["address"],
            'phone' => $row["phone"],
            'password' => $row["password"],
            'img' => $row["img"]
        ];
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