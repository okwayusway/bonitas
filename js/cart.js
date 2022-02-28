const btnCart = document.querySelector("#shopping-bag");
const cartCon = document.querySelector(".cart-container");

btnCart.addEventListener("click", () => {
    cartCon.classList.toggle("active");
})

function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decrementValue(){
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
}