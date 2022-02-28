$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navigation-menu");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
})

document.querySelectorAll("#close-menu").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

const shoppingBag = document.querySelector("#shopping-bag");
const bagContainer = document.querySelector(".bag-container");
const closeContainer = document.querySelector("#close-con");

shoppingBag.addEventListener("click", () => {
    bagContainer.classList.toggle("active");
})

document.querySelectorAll("#close-con").forEach(n => n.addEventListener("click", () => {
    shoppingBag.classList.remove("active");
    bagContainer.classList.remove("active");
}))

const viewmap = document.querySelector(".view-map");
const mapContainer = document.querySelector(".map-container");
const closeMap = document.querySelector("#close-map");

viewmap.addEventListener("click", () => {
  mapContainer.classList.toggle("active");
})

document.querySelectorAll("#close-map").forEach(n => n.addEventListener("click", () => {
  viewmap.classList.remove("active");
  mapContainer.classList.remove("active");
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


//Drop Down CSS

const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})