<?php
include'dbconnection.php';

try{
    if(isset($_POST["preparing"])){
        $orderId = $_POST["orderId"];
        $sql = "UPDATE orders set order_status = 'PREPAIRING' where id = $orderId";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            http_response_code(500);
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
        $conn -> close(); 

        http_response_code(200);
        $result = array("message" => "successfully changed");
        $json_response = json_encode($result);
        echo $json_response;
    }
    }
    catch(Exception $ex){
        echo $ex;
    }

?>