const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navigation-menu");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
})

document.querySelectorAll("#close-menu").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))


this.addEventListener("DOMContentLoaded", () =>{
  const questions = document.querySelectorAll(".question")
  questions.forEach((question) => question.addEventListener("click", () =>{

      if(question.parentNode.classList.contains("active")){
          question.parentNode.classList.toggle("active")
      }
  else{
  questions.forEach(question => question.parentNode.classList.remove("active"))
  question.parentNode.classList.add("active")
      }

  }))
})

//Drop Down JS
const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})

// var d = new Date();

// var month = d.getMonth()+1;
// var day = d.getDate();

// var output = (month<10 ? '0' : '') + month + '/' +
//     (day<10 ? '0' : '') + day + '/' +
//     d.getFullYear();

// $('#reservation_date').prop('min', output)

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd
} 
if(mm<10){
  mm='0'+mm
} 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("reservation_date").setAttribute("min", today);

$(document).ready(function(){
    $("#btn_proceed").click(function(){
        const check_data = true
        let date = $("#reservation_date").val()
        let time = $("input[type='radio'][name='rDo']:checked").val();
        let guest = $("#number-guest").val()

        $.ajax({
			url: "php/reservation.php",
			type: "POST",
			data: {
				check_data: check_data,
                date: date,
                time: time,
                guest: guest
			},
            dataType: "JSON",
			success: function(data){
				if(data.status == "success"){
                    $('#event-details').modal('show');
                    $('#dineIn-container').modal('hide');
                    $('#r_date').text(data.date)
                    $('#r_time').text(data.time)
                    $('#r_guest').text(data.guest)
				} else {
					alert(data.status)
				}
			}
		})
    })
    $('#btn-book').click(function(){
        const book = true
        let date = $("#reservation_date").val()
        let time = $("input[type='radio'][name='rDo']:checked").val();
        let guest = $("#number-guest").val()

        $.ajax({
			url: "php/reservation.php",
			type: "POST",
			data: {
				book: book,
                date: date,
                time: time,
                guest: guest
			},
			success: function(data){
				if(data == "success"){
                    $('#event-details').modal('hide');
                    $('#reservation_date, #number-guest').val(" ")
                    $("input[type='radio'][name='rDo']:checked").prop('checked', false);
				} else {
					alert(data)
				}
			}
		})
    })
})

















