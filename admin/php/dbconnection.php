<?php
    $dbServerName = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bonitas";

    // Create connection
    $conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);

    // Check connection
    if(!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

?>