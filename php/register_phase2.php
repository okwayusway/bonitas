<?php 
    session_start();
    include'connection.php';
    //  Function for Sanitizing all input data 
    function validate_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['registerPhase2'])){
        $errorMessage = '';
        $no = 1;

        //  Number validation
        if(empty($_POST["num"])){
            $errorMessage .= "<br>" .$no++. ". The Phone Number is required.";
        } elseif(ctype_space($_POST["num"])){ 
            $errorMessage .= "<br>" .$no++. ". The Phone Number is Invalid.";
        } elseif(!preg_match('/^[0-9]*$/',$_POST["num"])){
            $errorMessage .= "<br>" .$no++. ". The Phone Number is allowing a Number.";;
        } elseif(strlen($_POST["num"]) != 11){
            $errorMessage .= "<br>" .$no++. ". The Phone Number is only allowing 11 digit number.";
        } else {
            $num = validate_input($_POST["num"]);
        }

        if(empty($_POST["household_num"])){
            $errorMessage .= "<br>" .$no++. ". The household number is required.";
        } else {
            $household_num = validate_input($_POST['household_num']);
        }

        if(empty($_POST["street"])){
            $errorMessage .= "<br>" .$no++. ". The street is required.";
        } else {
            $street = validate_input($_POST['street']);
        }

        if(empty($_POST["barangay"])){
            $errorMessage .= "<br>" .$no++. ". The barangay is required.";
        } else {
            $barangay = validate_input($_POST['barangay']);
        }

        if(empty($_POST["city"])){
            $errorMessage .= "<br>" .$no++. ". The city is required.";
        } else {
            $city = validate_input($_POST['city']);
        }

        // Check if error message is null, else throw error message
        if(empty($errorMessage)){
            $email = mysqli_real_escape_string($conn, $_SESSION['email']);
            $firstname = mysqli_real_escape_string($conn, $_SESSION['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_SESSION['lastname']);
            $hash_password = mysqli_real_escape_string($conn, password_hash($_SESSION['password'],PASSWORD_DEFAULT));
            $num = mysqli_real_escape_string($conn, $num);
            $household_num = mysqli_real_escape_string($conn, $household_num);
            $street = mysqli_real_escape_string($conn, $street);
            $barangay = mysqli_real_escape_string($conn, $barangay);
            $city = mysqli_real_escape_string($conn, $city);
            $datetime_created = date('Y-m-d H:i:s');

            // Inserting into database
            $insertInfosQuery = mysqli_query($conn, "INSERT INTO users(email, first_name, last_name, password, phone_number, household_no, street, barangay, city, datetime_created, roleId) 
                                VALUES ('$email', '$firstname', '$lastname', '$hash_password', '$num', '$household_num', '$street', '$barangay', '$city', '$datetime_created', 2)");
             if (!$insertInfosQuery) {
                echo 'Could not run query: ' . mysqli_error();
                exit;
            }                   
            echo "<script>toastr['success']('Successfully Registered');setTimeout(()=>{window.location.replace('./login.php')},1500)</script>";
        } else {
            echo 
            "<div class='warning_error'>
                <p class='error_messages'>The error may contain the following:
                    " .$errorMessage. "
                </p>
            </div>";
        }
    }
?>