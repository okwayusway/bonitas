const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navigation-menu");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
})

document.querySelectorAll("#close-menu").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

const btns = document.querySelectorAll("[data-target-tab]");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    btns.forEach((btn) => btn.classList.remove("active"));

    const items = document.querySelectorAll(".item");

    items.forEach((item) => item.classList.remove("active"));
    btn.classList.add("active");
    document.querySelector(btn.dataset.targetTab).classList.add("active");
  });
});

const buttonOrder = document.querySelector(".order-button");
const conOrder  = document.querySelector(".order-con");

buttonOrder?.addEventListener("click", () => {
  conOrder.classList.toggle("active");
})

document.querySelectorAll(".order-button").forEach(n => n.addEventListener("click", () => {
  bagContainer.classList.remove("active");
}))



function up(max) {
  var numQuantity = document.getElementById("myNumber");
  numQuantity.value = parseInt(numQuantity.value) + 1;
  if (numQuantity.value >= parseInt(max)) {
    numQuantity.value = max;
  }
}
function down(min) {
  var numQuantity = document.getElementById("myNumber");
  numQuantity.value = parseInt(numQuantity.value) - 1;
  if (numQuantity.value <= parseInt(min)) {
    numQuantity.value = min;
  }
}

 function addToCart(quantity){
  document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + Number.parseInt(quantity)
}

//Drop Down CSS

const user_avatar = document.querySelector("#avatar");
const hover = document.querySelector(".user_hover");

user_avatar.addEventListener("click", () => {
    hover.classList.toggle("active");
})