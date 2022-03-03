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