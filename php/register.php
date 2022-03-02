<?php
    session_start();
    // Function for checking if email is valid or not
    function validateEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        else {
            return true;
        }
    }

    //  Function for Sanitizing all input data 
    function validate_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['registerPhase1'])){
        $no = 1;
        $errorMessage = "";
        // Input validation
        if(empty($_POST['email'])){
            $errorMessage .= "<br>" .$no++. ". The email is required.";
        } elseif(validateEmail($_POST['email'])){
            $errorMessage .= "<br>" .$no++. ". The email is invalid.";
        } else{
            $email = validate_input($_POST['email']);
        }
        
         //  First name validation
        if(empty($_POST["firstname"])){
            $errorMessage .= "<br>" .$no++. ". The firstname is required.";
        } elseif(ctype_space($_POST["firstname"])){
            $errorMessage .= "<br>" .$no++. ". The firstname is invalid.";;
        } elseif(!preg_match("/^[a-zA-Z\s]+$/",$_POST["firstname"])){
            $errorMessage .= "<br>" .$no++. ". The firstname only allowed letters only.";;        
        } else {
            $firstname = validate_input($_POST["firstname"]); 
        }
         //  Last name validation
         if(empty($_POST["lastname"])){
            $errorMessage .= "<br>" .$no++. ". The lastname is required.";
        } elseif(ctype_space($_POST["lastname"])){
            $errorMessage .= "<br>" .$no++. ". The lastname is invalid.";;
        } elseif(!preg_match("/^[a-zA-Z\s]+$/",$_POST["lastname"])){
            $errorMessage .= "<br>" .$no++. ". The lastname only allowed letters only.";;        
        } else {
            $lastname = validate_input($_POST["lastname"]); 
        }
          //  PASSWORD validation
          if(empty($_POST["password"]) || empty($_POST["cpassword"])){
            $errorMessage .= "<br>" .$no++.". The password/confirm password is required!";
        } elseif(ctype_space($_POST["password"])){
            $errorMessage .= "<br>" .$no++.". The password is invalid!";
        } elseif(strlen($_POST["password"]) > 30){
            $errorMessage .= "<br>" .$no++.". The password must be atleast 8 characters long and not more than 30";
        } elseif(strlen($_POST["password"]) < 8){
            $errorMessage .= "<br>" .$no++.". The password must be atleast 8 characters long and not more than 30";
        } elseif($_POST["cpassword"] != $_POST["password"]){
            $errorMessage .= "<br>" .$no++.". the password and confirm password not matched!";
        } else {
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
        }

        // Check if error message is null, else throw error message
        if(empty($errorMessage)){
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['password'] = $password;

            echo "success";
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