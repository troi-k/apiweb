<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    include_once('db_conection.php');
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $title = $data-> title;
        $type = $data-> type;
        $address = $data-> address;
        $rooms = $data-> rooms;
        $price =$data-> price;
        $area = $data-> area;
        $iduser =$data-> iduser;

        $sql= "INSERT INTO property (title,type, address, rooms ,price , area , iduser) VALUES 
        ( '{$title}','{$type}', '{$address}','{$rooms}','{$price}','{$area}','{$iduser}')";
    $result = $conn->query($sql);
    echo json_encode(array('response'=> 'property added succesfully'));
}

?>