<?php
include 'dbconnection.php';

if(isset($_POST["suggested"])){
try{
    $newVal = $_POST["newVal"];
    $id = $_POST["id"];


    $sql = "UPDATE menu set issuggested = $newVal where id = $id";
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
    catch(Exception $ex){
        echo $ex;
    }
}

if(isset($_POST["featured"])){
    try{
        $newVal = $_POST["newVal"];
        $id = $_POST["id"];
    
        $sql = "UPDATE menu set isfeatured = $newVal where id = $id";
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
        catch(Exception $ex){
            echo $ex;
        }
}

if(isset($_POST["action"])){
    try{
        $id = $_POST["id"];
    
        $sql = "UPDATE menu set isdeleted = 1 where id = $id";
                $result = mysqli_query($conn, $sql);
        
                if (!$result) {
                    http_response_code(500);
                    echo 'Could not run query: ' . mysqli_error();
                    exit;
                }
              $conn -> close(); 
        
            http_response_code(200);
            $result = array("message" => "successfully deleted");
            $json_response = json_encode($result);
            echo $json_response;
        }
        catch(Exception $ex){
            echo $ex;
        }
}

?>