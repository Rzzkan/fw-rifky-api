<?php
    include "connection.php";

    $query = "SELECT schedules.id_schedule, users.name, users.phone, users.address, schedules.day FROM schedules JOIN users ON schedules.id_user = users.id_user";

    $result = $connect->query($query);
    $data =[];
    $i=0;

    if ($result->num_rows>0) {

        while($row = $result->fetch_assoc()) {
            $data[$i] = [
            'id_schedule' => $row["id_schedule"],
            'name' => $row["name"],
            'phone' => $row["phone"],
            'address' => $row["address"],
            'day' => $row["day"]
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