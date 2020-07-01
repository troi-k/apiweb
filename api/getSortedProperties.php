<?php
    $method = $_SERVER ['REQUEST_METHOD'];
    if ($method === 'GET'){
        include_once ('db_conection.php');
        $sql = "SELECT * FROM  property order by price "; 
        $result = $conn->query($sql);
        $property = array ();
        if ($result->num_rows > 0){
            while ($row = $result ->fetch_assoc()) {
                $property [] = $row;
                                
            }
            echo json_encode(array ('property' => $property));             

        }

        
    }
    
    else{
        echo json_encode(array ('response' =>  'bad request, try again'));

    }
?>