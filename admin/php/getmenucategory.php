<?php
 include 'dbconnection.php';

 header('Content-Type: application/json; charset=utf-8');
 try{
    $categories = array();
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        include 'dbconnection.php';
        $sql = "SELECT id, category FROM menucategory ORDER By Id";
        $result = mysqli_query($conn, $sql);
    
        if (!$result) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }

        while($row = $result->fetch_assoc()) {
          $categories[] = $row;
        }

      $conn -> close();
     
    }
    http_response_code(200);
    $json_response = json_encode($categories);
	echo $json_response;
}
catch(Exception $ex){
    echo $ex;
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>

