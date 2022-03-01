<?php
 ob_start();
 session_start();
 include './php/connection.php';
 
 //  Function for displaying errorMessage
 function error_message($field){
     return "<div class='error-message'><i class='fas fa-exclamation-circle'></i> Error:" . $field . "</div>";
 }

 if(isset($_POST["submit"])){
     //  Escape input data to prevent sql injector  
     $email = mysqli_real_escape_string($conn, $_POST["email"]);
     $password = mysqli_real_escape_string($conn, $_POST["password"]);
     //  Check if email is existing in our database
     $email_query = "SELECT * FROM users WHERE email = '$email'";
     $email_query_result = mysqli_query($conn, $email_query);
     //  Store number of result
     $email_count = mysqli_num_rows($email_query_result);

     // Check if email is existing, if not return else clause
     if($email_count > 0){
         //  Access row content of selected email
         $row = mysqli_fetch_assoc($email_query_result);
         $fetch_password = $row["password"];
         $fetch_user_id = $row["userid"];
         
         // Check if inputted password matches the password from database
         if(password_verify($password, $fetch_password)){
            $_SESSION["userid"] = $fetch_user_id;
             echo "<script>window.location.replace('./index.html')</script>";
         }else {
             echo error_message("Password is incorrect!");
         }
     } else {
         echo error_message(" Couldn't find your email account!");
     }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bonitas | Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="Images/taxi-coffee-break-1.png">
		</div>
		<div class="login-content">
			<form action = "<?php  htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post" role="form">
				<h2 class="title">Welcome to <br>Bonitas</h2>
				<div class="warning_error">
					<p class="error_messages"> Incorrect password or email</p>
				</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="forget_pass.html">Forgot Password?</a>
            	<a href="register.php">Create an account</a>
            	<input type="submit" name="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
