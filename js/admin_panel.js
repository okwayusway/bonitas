const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})