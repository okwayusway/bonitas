<?php
include 'connection.php';
session_start();
$userid = ctype_digit($_SESSION["userid"]);
$menuIds = json_decode($_POST["menuIds"], true);
$orderTotals = json_decode($_POST["orderTotal"], true);
$rawDetails = $_POST["rawDetails"];
$orderedAt= $_POST["orderedAt"];
$orderStatus= $_POST["orderStatus"];
$orderTotalPrice=$_POST["orderTotalPrice"];

$encodedRawDetails = json_encode($rawDetails);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn->begin_transaction();

$sql = "INSERT INTO orders(ordered_by, ordered_at, order_status, order_raw_details, total_price, order_notes)
VALUES($userid, NOW(),'PENDING','$rawDetails', $orderTotalPrice, null)";

if(!mysqli_query($conn, $sql)){
    echo("Error description: " . mysqli_error($conn));
    $conn -> rollback();
}

$latestIds = $conn->insert_id;
$x = 0;
foreach($menuIds as $menuid){
    $sql = "INSERT INTO menuordermapping(order_id, menu_id, total_count)
    VALUES($latestIds,$menuid,$orderTotals[$x])";
    $x++;
    if(!mysqli_query($conn, $sql)){
        echo("Error description: " . mysqli_error($conn));
        $conn -> rollback();
    }
}

$conn -> commit();
$conn -> close();
$result = "Successfully Added";
echo json_encode("{message:successfully order}");
?>