<!DOCTYPE html>
<html>
<head>
	<title>Bonitas | Create your account</title>
	<link rel="stylesheet" type="text/css" href="css/register_phase2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Additional Import script -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!--Toastr-->
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!-- End -->
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container-info">
		<div class="img">
			<img src="Images/taxi-tasks-done.png">
		</div>
		<div class="register2_content">
			<form>
				<h2 class="title">to know you better, please fill up all informations below.</h2>
				
				<div id="errorMessage"></div>
				<!-- <div class='warning_error'>
					<p class='error_messages'>The error may contain the following: 
						<br>1. Phone number is required.
						<br>2. House hold number is required. 
						<br>3. Street must be required.
					</p>
				</div> -->
				
				<div class="input-div one">
           		   <div class="i">
                    <i class="las la-phone"></i>
           		   </div>
           		   <div class="div">
                    <h5 class="h5-title">Phone number</h5>
           		   		<input type="text" class="input" id="num">
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
                    <i class="las la-sort-numeric-up"></i>
           		   </div>
           		   <div class="div">
           		   		<h5 class="h5-title">Household number</h5>
           		   		<input type="text" class="input" id="household_num">
           		   </div>
           		</div>
           		<div class="input-div">
           		   <div class="i"> 
                    <i class="las la-map-marker-alt"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 class="h5-title">Street</h5>
           		    	<input type="text" class="input" id="street">
            	   </div>
            	</div>
           		<div class="input-div">
           		   <div class="i"> 
                    <i class="las la-map-marker-alt"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 class="h5-title">Barangay</h5>
           		    	<input type="text" class="input" id="barangay">
            	   </div>
            	</div>
           		<div class="input-div">
           		   <div class="i"> 
                    <i class="las la-map-marker-alt"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 class="h5-title">City</h5>
           		    	<input type="text" class="input" id="city">
            	   </div>
            	</div>
            	<!-- <input type="submit" class="btn" id="createAcct" value="Create an account" name="submit"> -->
				<button type="submit" class="create-btn" data-toggle="modal" data-target="#success-modal">Create your account</button>
            </form>
        </div>
    </div>
<!-- 
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Complete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
		  	<h5 class="modal-title" id="exampleModalLongTitle">Your account has been created.</h5>
			  <button class="direct-login">Go back to login</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Okay</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#incomingOrders">Cancel</button>
          </div>
        </div>
      </div>
    </div> -->

    <script type="text/javascript" src="js/register_phase2.js"></script>
	<script>
		  toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
	</script>
    <!-- <script type="text/javascript"  src="js/modal.js"></script> -->
</body>
</html>