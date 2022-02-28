const btn_create = document.querySelector(".btn")
const show_modal = document.querySelector(".modal");

btn_create.addEventListener("click", () => {
    show_modal.classList.toggle("active");
})