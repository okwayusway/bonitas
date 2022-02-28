const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})

function addFood(){
    alert("hello");
    let forms = new FormData(document.forms.addfood)
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert("Successfully Added");
        }
      };
      xmlhttp.open("POST", "../php/addfood.php", true);
      xmlhttp.send(forms);
}