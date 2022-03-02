// const hamburger = document.querySelector(".hamburger");
// const navMenu = document.querySelector(".navigation-menu");
// hamburger.addEventListener("click", () => {
//     navMenu.classList.toggle("active");
// })

document.querySelectorAll("#close-menu").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})