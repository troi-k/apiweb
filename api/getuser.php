<?php
    $method = $_SERVER ['REQUEST_METHOD'];
    if ($method === 'GET'){
        include_once ('db_conection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data->id;
        $sql = "SELECT * FROM user where id = {$id}"; 
        $result = $conn->query($sql);
        $user=array();

        if ($result->num_rows > 0){
            while ($row = $result ->fetch_assoc()) {
                $property [] = $row;
                                
            }
            echo json_encode(array ('response' => "user exist", "state" => true,"data" => $user));             

        }

        
    }
    
    else{
        echo json_encode(array ('response' =>  'bad request, try again'));

    }
?>