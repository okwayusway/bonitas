<?php
 include 'connection.php';

 function getMenuCategory(){
    include'connection.php';
    $sql = "SELECT id, category FROM menucategory ORDER By Id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'Could not run query: ' . mysqli_error();
        exit;
    }
    $categories = array();
    
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[$row["id"]] = $row["category"];
        array_push($categories, $categories[$row["id"]]);
    }

    return json_encode($categories);
 }
?>