<?php
 include 'dbconnection.php';

 header('Content-Type: application/json; charset=utf-8');
 try{
    $menus = array();
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        include 'dbconnection.php';
        $sql = "Select m.id, m.name, m.thumbnailurl, m.description, c.category,  m.price, m.issuggested, m.isfeatured FROM menu m INNER JOIN\n"
        . "menucategory c ON m.Category = c.Id where m.IsDeleted = 0;";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }

        while($row = $result->fetch_assoc()) {
          $menus[] = $row;
        }

      $conn -> close(); 
    }

    http_response_code(200);
    $json_response = json_encode($menus);
	echo $json_response;
}
catch(Exception $ex){
    echo $ex;
}
