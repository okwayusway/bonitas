<?php
	$error = NULL;
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$confirm_pass = $_POST['c_password'];

		if(strlen($name) < 5){
			$error = "<p>Your username must be atleast 5 characters</p>";
		}elseif($password != $confirm_pass){
			$error = "<p>Password and Confirm Password did not match.</p>";
		}else{
			//Form is valid
			//Connect to database
			$mysqli = NEW MySQLi('localhost', 'root', '', 'registration');

			//Sanitize the form data
			$name = $mysqli->real_escape_string($name);
			$email = $mysqli->real_escape_string($email);
			$password = $mysqli->real_escape_string($password);
			$confirm_pass = $mysqli->real_escape_string($confirm_pass);

			//Generate Vkey
			$vkey = md5(time().$name);
			echo $vkey;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bonitas | Create your account</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="Images/taxi-waiting.png">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<h2 class="title">Create an <br>account</h2>
				<div class="warning_error">
					<p class="error_messages">Password did not match.</p>
				</div>
                <div class="warning_error_2">
                    <p class="error_messages_2">This account is already created.</p>
                </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" name="firstname">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Last Name</h5>
           		   		<input type="text" class="input" name="lastname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="pass" name="password">
            	   </div>
            	</div>
           		<div class="input-div confirm_pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm password</h5>
           		    	<input type="password" class="input" id="confirm_pass" name="c_password">
            	   </div>
            	</div>
                <a href="login.php">Go back to login</a>
            	<!-- <input type="submit" class="btn" id="createAcct" value="Create an account" name="submit"> -->
				<button class="btn" name="submit" type="submit">Create an account</button>
            </form>
        </div>
    </div>
	<center>
		<?php
			echo $error;
		?>
	</center>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
