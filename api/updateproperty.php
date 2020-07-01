<?php

    $method = $_SERVER ['REQUEST_METHOD'];
    if ($method === 'PUT') {
        include_once ('db_conection.php');
        //get incoming data, get recive los archivos
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data->id;
        $title = $data-> title;
        $type = $data-> type;
        $address = $data-> address;
        $rooms = $data-> rooms;
       
        $sql = "UPDATE property SET title = '{$title}', type = '{$type}' , address = '{$address}' , rooms = '{$rooms}' WHERE id= {$id}" ;
        $result = $conn->query($sql);
        echo json_encode(array('response' => 'property update succesfully'));

     


    }


?>