<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    include_once('db_conection.php');
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $name = "";
    $lastname = "";
    $email = "";
    $type_id = "";
    $identification = "";
    $password = "";
    if (
        isset($data->name) && isset($data->lastname) && isset($data->email)
        && isset($data->type_id) && isset($data->identification) && isset($data->password)
    ) {
        $name =  $data->name;
        $lastname = $data->lastname;
        $email = $data->email;
        $type_id = $data->type_id;       
        $identification = $data->identification;
        $password  = $data->password;

        if (
            $name == "" || $lastname == "" ||  $identification == "" || $password == "" || $type_id == ""
            || strlen($name) > 40 || strlen($lastname) > 40 || strlen($password) >= 8 && strlen($password) <= 16 ) {
            echo json_encode(array('response' => 'invalid format ', 'state' => false));
        } else {
            $sql = "INSERT INTO user (name,lastname,email,identification,type_id,password) VALUES 
            ('{$name}' , '{$lastname}' ,'{$email}','{$type_id}' ,'{$identification}', '{$password}')";
            $result = $conn->query($sql);
            echo json_encode(array('response' => 'user registered succesfully', 'state' => true));
        }
        
    } else {
        echo json_encode(array('response' => 'invalid format', 'state' => false));
    }
}

?>

