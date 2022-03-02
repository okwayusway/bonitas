<?php
    $dbServerName = "localhost:3325";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bonitas";

    // Create connection
    $conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);

    // Check connection
    if($conn) {
      //echo "<script>alert('Connected Successfully..');</script>"; 
    }
    else
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>