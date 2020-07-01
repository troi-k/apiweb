<?php

    $method = $_SERVER ['REQUEST_METHOD'];
    if ($method === 'DELETE') {
        include_once ('db_conection.php');
        //get incoming data, get recive los archivos
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data->id;
        $sql = "DELETE FROM property  WHERE id= {$id}" ;
        $result = $conn->query($sql);
        echo json_encode(array('response' => 'property deleted succesfully'));

     


    }


?>