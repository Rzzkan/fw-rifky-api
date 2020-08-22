<?php
    include "connection.php";

    $query = "SELECT reports.id_report, users.name, users.phone, users.address, reports.date, reports.img, reports.report FROM reports JOIN users ON reports.id_user = users.id_user";
    $result = $connect->query($query);
    $data =[];
    $i=0;

    if ($result->num_rows>0) {

        while($row = $result->fetch_assoc()) {
            $data[$i] = [
            'id_report' => $row["id_report"],
            'name' => $row["name"],
            'phone' => $row["phone"],
            'address' => $row["address"],
            'date' => $row["date"],
            'img' => $row["img"],
            'report' => $row["report"]
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