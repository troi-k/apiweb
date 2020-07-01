<?php
//endpoint
//http://localhost/api1php/addtask.php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    include_once('db_conection.php');
    //get incoming data, get recive los archivos
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $title = "";
    $type= "";
    $address= "";
    $rooms= "";
    
    if (isset($data->title) && isset($data->type) && isset ($data->address) && isset ($data->rooms)) {
        $prueba = "hola una prueba";
        $clave ="*$%&#";
        $title = $data-> title;
        $type = $data-> type;
        $address = $data-> address;
        $rooms = $data-> rooms;
      
        if ($title == "" || $type == "" || $address == "" ||  $rooms == "" || strlen($title)> 10 ) {
            echo json_encode(array('response' => 'invalid format '.$prueba[1] , 'state' => false));
        } else {
            //echo "ingresa a la base de datos ";
            $sql = "INSERT INTO property (title,type,address,rooms) VALUES ('{$title}','{$type}' , {$address} ,{$rooms})";
            $result = $conn->query($sql);
            echo json_encode(array('response' => 'property added succesfully'));
        }
    } else {

        echo json_encode(array('response' => 'invalid format', 'state' => false));
    }


    //    $task = $data->task;
    //$date = $data->date;
    //if ($task == "" || $date == "") {
    //    echo json_encode(array('response' => 'invalid format', 'state' => false));
    //} else {
    //    $sql = "INSERT INTO tasks (task,date) VALUES ('{$task}','{$date}')";
    //    $result = $conn->query($sql);
    //    echo json_encode(array('response' => 'task added succesfully'));
    //}
}
