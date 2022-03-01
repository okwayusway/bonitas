<?php
    session_start();
    include 'connection.php';
    
    //  Function for displaying errorMessage
    function error_message($field){
        return "<div class='error-message'><i class='fas fa-exclamation-circle'></i> Error:" . $field . "</div>";
    }

    if(isset($_POST["submit"])){
        //  Escape input data to prevent sql injector  
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        //  Check if email is existing in our database
        $email_query = "SELECT * FROM users WHERE email_add = '$email'";
        $email_query_result = mysqli_query($conn, $email_query);
        //  Store number of result
        $email_count = mysqli_num_rows($email_query_result);

        // Check if email is existing, if not return else clause
        if($email_count > 0){
            //  Access row content of selected email
            $row = mysqli_fetch_assoc($email_query_result);
            $fetch_password = $row["password"];
            $fetch_user_id = $row["user_id"];
            
            // Check if inputted password matches the password from database
            if(password_verify($password, $fetch_password)){
                echo "<script>window.location.replace('./index.html')</script>";
            }else {
                echo error_message(" Password is incorrect!");
            }
        } else {
            echo error_message(" Couldn't find your email account!");
        }
    }
?>