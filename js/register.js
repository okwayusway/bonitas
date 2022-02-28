$(document).ready(function(){
	$('form').submit(function(event){
		event.preventDefault();

		const registerPhase1 = true;
		let email = $('#email').val();
		let firstname = $('#firstname').val();
		let lastname = $('#lastname').val();
		let password = $('#password').val();
		let cpassword = $('#cpassword').val();

		$.ajax({
			url: "php/register.php",
			type: "POST",
			data: {
				registerPhase1: registerPhase1,
				email: email,
				firstname: firstname,
				lastname: lastname,
				password: password,
				cpassword: cpassword
			},
			success: function(data){
				if(data == "success"){
					$('#email, #firstname, #lastname, #password, #cpassword').val('');
					window.location.href = "register_phase2.php";
				} else {
					$('#errorMessage').html(data);
				}
			}
		})
		
	})
})


const inputs = document.querySelectorAll(".input");

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
