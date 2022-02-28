<?php
 include './connection.php';

function getMenuList(){
    
    $result = mysql_query($conn,"Select * From menu");
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }
    $row = mysql_fetch_row($result);
    return $row;
}


function addMenu(){
    
    $result = mysql_query($conn,"Select * From menu");
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }
    $row = mysql_fetch_row($result);
    return $row;
}

?>