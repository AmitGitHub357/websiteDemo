<?php 
    include "dbconfig.php";
    header("content-type : Application/json");
    $method = $_SERVER["REQUEST_METHOD"];
    $input = json_encode(file_get_contents('php://input'),true);

    switch($method)
    {
        case 'GET' :
        {
            $query = "select * from register";
            $result = mysqli_query($conn,$query);
            $list = [];
            while($row = mysqli_fetch_assoc($result))
            {
                $list[] = $row;
            }
            echo json_encode($list);
        } 
        break;

        default : {
            echo "Select Valid Request";
        }
    }
?>