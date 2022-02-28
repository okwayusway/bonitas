
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
  
  const user_avatar = document.querySelector("#avatar");
  const hover = document.querySelector(".user_hover");
  
  user_avatar.addEventListener("click", () => {
      hover.classList.toggle("active");
  })