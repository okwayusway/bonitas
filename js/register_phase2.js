$(document).ready(function(){
    $('form').submit(function(event){
        event.preventDefault();

        const registerPhase2 = true;
		let num = $('#num').val();
		let household_num = $('#household_num').val();
		let street = $('#street').val();
		let barangay = $('#barangay').val();
		let city = $('#city').val();
       
        $.ajax({
			url: "php/register_phase2.php",
			type: "POST",
			data: {
				registerPhase2: registerPhase2,
				num: num,
				household_num: household_num,
				street: street,
				barangay: barangay,
				city: city
			},
			success: function(data){ 
				if(data == "success"){
					$('.modal').modal('show');
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