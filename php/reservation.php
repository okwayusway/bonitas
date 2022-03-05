<?php
    session_start();
    include'connection.php';

    if(isset($_POST['check_data'])){
        if(!empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['guest'])){
            $date = date("l, F d, Y", strtotime($_POST['date']));
            $time = $_POST['time'];
            $guest = $_POST['guest'] . " persons";
            
            $result = array(
                "status" => "success",
                "date" => $date,
                "time" => $time,
                "guest" => $guest
            );
        } else {
            $result = array(
                "status" => "All field are required!"
            );
        }
        echo json_encode($result);
    }

    if(isset($_POST['book'])){
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $guest = mysqli_real_escape_string($conn, $_POST['guest']);

        $insertBookingQuery = mysqli_query($conn, "INSERT INTO reservation(customer_id, reservation_date, reservation_time, no_person) 
                                VALUES ('{$_SESSION['userid']}', '$date', '$time', '$guest')");
        if($insertBookingQuery){
            echo "success";
        } else{
            echo "failed";
        }
    }
?>