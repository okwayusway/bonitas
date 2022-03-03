<!DOCTYPE html>
<html>
<head>
	<title>Bonitas | Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="Images/taxi-waiting.png">
		</div>
		<div class="login-content">
			<form action="/register_phase2.html">
				<h2 class="title">Create an <br>account</h2>
				<div id="errorMessage"></div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" id="email" required>
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" id="firstname">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Last Name</h5>
           		   		<input type="text" class="input" id="lastname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="password" maxlength="30" required>
            	   </div>
            	</div>
           		<div class="input-div confirm_pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm password</h5>
           		    	<input type="password" class="input" id="cpassword" maxlength="30" required>
            	   </div>
            	</div>
                <a href="login.html">Go back to login</a>
            	<!-- <input type="submit" class="btn" id="createAcct" value="Create an account" name="submit"> -->
				<button class="btn" name="submit" type="submit">Proceed</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/register.js"></script>
</body>
</html>