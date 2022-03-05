<?php 
 session_start();
 $total = 0;
 $orders = array();
  class Order
  {
        public $orderId;
        public $orderName;
        public $orderTotal;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>
    <script src="./js/menu.js" defer async = false></script>
    <title>Menu | Bonitas</title>
    <script>
     let total = 0;
     let orders = new Map();
     let event = new CustomEvent(
        "AddToCartEvent", 
        {
          detail: {
            message: "Items Added to cart",
            time: new Date(),
          },
          bubbles: true,
          cancelable: true
        }
      );
    </script>
</head>
<body>
<div class="wrapper">
    <nav class="navigation-bar">
        <div class="navigation-logo">
            <img class="logo" src="./Images/bonitaslogo.png" alt="">
        </div>
        <?php 
       if(isset($_SESSION["userid"])){
        echo "<div class='user_avatar'><i class='las la-user-circle' id='avatar'></i></div>";
       }
       else{
        echo "<div class='login_con'><a href='login.php' class='button_login'>Login</a></div>";  
       }
      ?>
        <div class="cart">
            <i class="las la-shopping-bag" data-count="0" id="shopping-bag"></i>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <div class="cart-container" id="cart-main-container">
        <h2 class="cart-title">My Cart</h2>
        <div class="item-container" id="cart-container">
        </div>
        <div class="total-container">
            <div>
                <button class="checkout-btn" type="button" onclick="proceedToCheckOut()" data-toggle="modal" data-target="#placeOrderModal">Proceed to Checkout</button>
            </div>
            <div class="row-sub">
                <div class="col-left sub">
                    Subtotal
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular sub-total">0</span>
                </div>
            </div>
            <div class="row-delivery-fee">
                <div class="col-left sub">
                    Tax
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular">15%</span>
                </div>
            </div>
            <div class="row-total">
                <div class="col-left sub">
                    Total
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular total-price">0</span>
                </div>
            </div>
        </div>
    </div>
    <div class="user_hover">
      <div class="hover_list">
        <ul class="hover_content">
          <li class="list_item"><a href="./user.php" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
          <li class="list_item"><a href="" class="link_hover"><i class="las la-shopping-bag icon_link"></i>My Orders</a>
          <li class="list_item"><a href="./php/logout.php" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
        </ul>
      </div>
    </div>
  
    <div class="navigation-menu">
      <i class="las la-times" id="close-menu"></i>
      <div class="list">
        <ul class="navigation-list">
          <li class="navigation-item"><a href="index.php" class="navItem-list">Home</a></li>
          <li class="navigation-item"><a href="menu.php" class="navItem-list">Menu</a></li>
          <li class="navigation-item"><a href="reservation.php" class="navItem-list">Reservation</a></li>
        </ul>
      </div>
    </div>

    <!-- Home of Menu -->
    <div class="menu-container">
        <div class="start-info">
            <div class="start-img"></div>
            <div class="titles">
                <h1 class="heading-1">Bonitas</h1>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Menu List -->
    <div class="start-heading">
        <p class="text-center">“Then Jesus said, ‘I am the bread of life. Whoever comes to me will never go hungry, and whoever believes in me will never be thirsty.'”<br>Sam Smith 9:39</p><br>
        <p class="text-center">Opening hours: Monday-Saturday 9:00 AM to 8:00 PM<br> Sunday: 11:00 AM to 6:00 PM</p>
    </div>

    <!-- End -->
</div>

  <div class="menu_con">
        <div class="menu-tabs">
            <h3 class="text-recom">Recommended</h3>
            <div class="container-fluid bg-trasparent my-4 p-1" style="position: relative;">
            <div class="row">
            <?php
            include './php/connection.php';
            $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.IsSuggested = 1;";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo 'Could not run query: ' . mysqli_error();
                exit;
            }
            $recommended;
            while($row = $result->fetch_assoc()) {
                $recommended[] = $row;
              echo '
              <div class="col-sm">
                  <button data-toggle="modal" data-target="#recommended-'.$row["id"].'">
                  <div class="card h-100 shadow-sm"> <img src="./Images/'.$row["thumbnailurl"].'" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title text-center">'.$row["name"].'</h5>
                      </div>
                  </div>
                  </button>
              </div>';

             echo '<div class="modal fade" id="recommended-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                     <div class="deets_modal">
                         <div class="dhead d-flex justify-content-between">
                             <h6 style="font-weight: 600;">Includes: </h6>
                             <h6 style="font-weight: 600;">Price:'.$row["price"].'</h6>
                         </div>
                         <div class="menu-description">
                          '.$row["description"].'
                         </div>
                     </div>
                     <div class="quantityFood">
                         <div class="form-group">
                         </div>
                     </div>
                     <div class="totalPrice d-flex justify-content-end">
                         <small>Total Price: <span>P 180</span></small>
                     </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-success">Add to Cart</button>
                 </div>
               </div>
             </div>
             </div>';
            }
            $conn -> close();
            ?>
         </div>
        </div>


        <!--Family Meals-->
        <h3 class="mt-4">Family Meals</h3>
            <div class="fam-meals" id="fam_meals">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category=1 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);
                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of family meals
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of family meals
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                              <script>
                               var addedToCart = [];
                               document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                  if(!addedToCart.includes("'.$row["id"].'")){
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  orders.set("'.$row["id"].'", {total:1, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                  addedToCart.push("'.$row["id"].'");
                                  document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                  document.getElementById("cart-container").innerHTML += 
                                  `<div class="row-item"><div class="quantity">
                                     <form action="" class="incrementDec">
                                         <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                         <div class="quanti-count">
                                             <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                         </div>
                                         <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                     </form>
                                   </div>
                                   <div class="user-orders">
                                     <h4 class="order-text">'.$row["name"].'</h4>
                                   </div>
                                   <div class="item-price">
                                     <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                   </div>
                                   </div>`
                                  }
                                  else{
                                    let quantity = document.querySelector(".f-'.$row["id"].'");
                                    let price = document.getElementById("price-'.$row["id"].'");
                                    let val = Number.parseInt(quantity.value) + 1;
                                    quantity.value = val;
                                    price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                    total +=  Number.parseInt("'.$row["price"].'");
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total + 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                    document.dispatchEvent(event);
                                  }
                                  document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                    let quantity = document.querySelector(".f-'.$row["id"].'");
                                    let price = document.getElementById("price-'.$row["id"].'");
                                    if(Number.parseInt(quantity.value) > 0){
                                      let val = Number.parseInt(quantity.value) - 1;
                                      quantity.value = val;
                                      let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                      price.innerHTML =  tprice;
                                      total -= Number.parseInt("'.$row["price"].'")
                                      document.dispatchEvent(event);
                                      let updateOrder = orders.get("'.$row["id"].'");
                                      let totalOrder = updateOrder.total - 1
                                      orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                    }
                                  }
                                  document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                    let price = document.getElementById("price-'.$row["id"].'");
                                    let quantity = document.querySelector(".f-'.$row["id"].'");
                                    let val = Number.parseInt(quantity.value) + 1;
                                    quantity.value = val;
                                    let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                    price.innerHTML = tprice;
                                    total +=  Number.parseInt("'.$row["price"].'");
                                    document.dispatchEvent(event);
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total + 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                  }
                                  
                                 } 
                              </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
            </div>


        <!--Bread Meals-->
        <h3 class="mt-4">Bread Meals</h3>
        <div class="fam-meals" id="bread_meals">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category= 2 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }
                      while($row = $result->fetch_assoc()) {
                          //create li of bread meals
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of bread meals
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            <script>
                             var addedToCart = [];
                             document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                if(!addedToCart.includes("'.$row["id"].'")){
                                total +=  Number.parseInt("'.$row["price"].'");
                                orders.set("'.$row["id"].'", {total:1, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                document.dispatchEvent(event);
                                addedToCart.push("'.$row["id"].'");
                                document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                document.getElementById("cart-container").innerHTML += 
                                `<div class="row-item"><div class="quantity">
                                   <form action="" class="incrementDec">
                                       <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                       <div class="quanti-count">
                                           <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                       </div>
                                       <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                   </form>
                                 </div>
                                 <div class="user-orders">
                                   <h4 class="order-text">'.$row["name"].'</h4>
                                 </div>
                                 <div class="item-price">
                                   <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                 </div>
                                 </div>`
                                }
                                else{
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  if(Number.parseInt(quantity.value) > 0){
                                    let val = Number.parseInt(quantity.value) - 1;
                                    quantity.value = val;
                                    let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                    price.innerHTML =  tprice;
                                    total -= Number.parseInt("'.$row["price"].'")
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total - 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                    document.dispatchEvent(event);
                                  }
                                }
                                document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  price.innerHTML = tprice;
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                
                               } 
                            </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }
                    ?>
                   </ul>
                </div>
            </div>

        <!--Pasta Plater Meals-->
        <h3 class="mt-4">Pasta Plater Meals</h3>
            <div class="pasta-meals" id="pasta_meals">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category=3 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of pasta meals
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of pasta meals
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            <script>
                             var addedToCart = [];
                             document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                if(!addedToCart.includes("'.$row["id"].'")){
                                total +=  Number.parseInt("'.$row["price"].'");
                                orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                document.dispatchEvent(event);
                                addedToCart.push("'.$row["id"].'");
                                document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                document.getElementById("cart-container").innerHTML += 
                                `<div class="row-item"><div class="quantity">
                                   <form action="" class="incrementDec">
                                       <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                       <div class="quanti-count">
                                           <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                       </div>
                                       <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                   </form>
                                 </div>
                                 <div class="user-orders">
                                   <h4 class="order-text">'.$row["name"].'</h4>
                                 </div>
                                 <div class="item-price">
                                   <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                 </div>
                                 </div>`
                                }
                                else{
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  if(Number.parseInt(quantity.value) > 0){
                                    let val = Number.parseInt(quantity.value) - 1;
                                    quantity.value = val;
                                    let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                    price.innerHTML =  tprice;
                                    total -= Number.parseInt("'.$row["price"].'")
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total - 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                    document.dispatchEvent(event);
                                  }
                                }
                                document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  price.innerHTML = tprice;
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                
                               } 
                            </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
            </div>


         <!--Party Trays-->
         <h3 class="mt-4">Party Trays</h3>
         <div class="pasta-meals" id="party-meals">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category= 4 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of party trays meals
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of party trays meals
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            <script>
                             var addedToCart = [];
                             document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                if(!addedToCart.includes("'.$row["id"].'")){
                                total +=  Number.parseInt("'.$row["price"].'");
                                orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                document.dispatchEvent(event);
                                addedToCart.push("'.$row["id"].'");
                                document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                document.getElementById("cart-container").innerHTML += 
                                `<div class="row-item"><div class="quantity">
                                   <form action="" class="incrementDec">
                                       <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                       <div class="quanti-count">
                                           <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                       </div>
                                       <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                   </form>
                                 </div>
                                 <div class="user-orders">
                                   <h4 class="order-text">'.$row["name"].'</h4>
                                 </div>
                                 <div class="item-price">
                                   <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                 </div>
                                 </div>`
                                }
                                else{
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});

                                  document.dispatchEvent(event);
                                }
                                document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  if(Number.parseInt(quantity.value) > 0){
                                    let val = Number.parseInt(quantity.value) - 1;
                                    quantity.value = val;
                                    let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                    price.innerHTML =  tprice;
                                    total -= Number.parseInt("'.$row["price"].'")
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total - 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                    document.dispatchEvent(event);
                                  }
                                }
                                document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  price.innerHTML = tprice;
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'),name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                
                               } 
                            </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
         </div>

           <!--Cake-->
           <h3 class="mt-4">Cake</h3>
           <div class="pasta-meals" id="cake-meals">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category= 5 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of party trays meals
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of party trays meals
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" onclick="addToCart(document.getElementById("myNumber")["value"])" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
          </div>

          <!--Cake-->
           <h3 class="mt-4">Coffee/Frappe</h3>
           <div class="pasta-meals" id="coffe-frappe">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category= 6 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of coffee / frappe
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of coffee / frappe
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            <script>
                             var addedToCart = [];
                             document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                if(!addedToCart.includes("'.$row["id"].'")){
                                total +=  Number.parseInt("'.$row["price"].'");
                                orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                document.dispatchEvent(event);
                                addedToCart.push("'.$row["id"].'");
                                document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                document.getElementById("cart-container").innerHTML += 
                                `<div class="row-item"><div class="quantity">
                                   <form action="" class="incrementDec">
                                       <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                       <div class="quanti-count">
                                           <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                       </div>
                                       <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                   </form>
                                 </div>
                                 <div class="user-orders">
                                   <h4 class="order-text">'.$row["name"].'</h4>
                                 </div>
                                 <div class="item-price">
                                   <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                 </div>
                                 </div>`
                                }
                                else{
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:"'.$row["name"].'"});
                                  document.dispatchEvent(event);
                                }
                                document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  if(Number.parseInt(quantity.value) > 0){
                                    let val = Number.parseInt(quantity.value) - 1;
                                    quantity.value = val;
                                    let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                    price.innerHTML =  tprice;
                                    total -= Number.parseInt("'.$row["price"].'")
                                    let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total - 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                    document.dispatchEvent(event);
                                  }
                                }
                                document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  price.innerHTML = tprice;
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                  document.dispatchEvent(event);
                                }
                                
                               } 
                            </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
          </div>

            <!--Cake-->
            <h3 class="mt-4">Ice Tea/Milk Tea</h3>
           <div class="pasta-meals" id="ice-milk-tea">
                <div class="col-8">
                 <ul class="list-group">
                    <?php
                      include './php/connection.php';
                      $sql = "SELECT m.id,m.thumbnailurl, m.name,m.price, m.description, c.Category as CategoryName from menu m INNER JOIN menucategory c on m.Category = c.Id where m.category= 7 AND m.isdeleted = 0;";
                      $result = mysqli_query($conn, $sql);

                      if (!$result) {
                          echo 'Could not run query: ' . mysqli_error();
                          exit;
                      }

                      while($row = $result->fetch_assoc()) {
                          //create li of ice milk tea
                          echo '
                          <button data-toggle="modal" data-target="#family-food-'.$row["id"].'"><li class="list-group-item d-flex justify-content-between align-items-center"> '.$row["name"].' 
                          <div class="image-parent">
                              <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                          </div>
                          </li>
                         </button>';

                        //create li modals of ice milk tea
                        echo '<div class="modal fade" id="family-food-'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">'.$row["name"].'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="pic_modal" style="background-image: url(./Images/'.$row["thumbnailurl"].');">
                                </div>
                                <div class="deets_modal">
                                    <div class="dhead d-flex justify-content-between">
                                        <h6 style="font-weight: 600;">Includes: </h6>
                                        <h6 style="font-weight: bold; font-size: 1rem;">Price: ₱'.$row["price"].'</h6>
                                    </div>
                                   <div class="food-descriptions">
                                    '.$row["description"].'
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" id="cart-'.$row["id"].'" class="btn btn-success btn-add-to-cart">Add to Cart</button>
                            <script>
                             var addedToCart = [];
                             document.getElementById("cart-'.$row["id"].'").onclick = function(){
                                if(!addedToCart.includes("'.$row["id"].'")){
                                total +=  Number.parseInt("'.$row["price"].'");
                                orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                document.dispatchEvent(event);
                                addedToCart.push("'.$row["id"].'");
                                document.getElementById("shopping-bag").dataset.count = Number.parseInt(document.getElementById("shopping-bag").dataset.count) + 1
                                document.getElementById("cart-container").innerHTML += 
                                `<div class="row-item"><div class="quantity">
                                   <form action="" class="incrementDec">
                                       <button type="button" class="dec-'.$row["id"].'"><i class="las la-times-circle"></i></button>
                                       <div class="quanti-count">
                                           <input class="f-'.$row["id"].'" type="text" id="number" value="1" disabled="disabled">
                                       </div>
                                       <button type="button" class="inc-'.$row["id"].'"><i class="las la-plus-circle"></i></button>
                                   </form>
                                 </div>
                                 <div class="user-orders">
                                   <h4 class="order-text">'.$row["name"].'</h4>
                                 </div>
                                 <div class="item-price">
                                   <span class="peso-sign-regular">₱</span> <span id="price-'.$row["id"].'">'.$row["price"].'</span>
                                 </div>
                                 </div>`
                                }
                                else{
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  price.innerHTML =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                  document.dispatchEvent(event);
                                }
                                document.querySelector(".dec-'.$row["id"].'").onclick = function(){
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  if(Number.parseInt(quantity.value) > 0){
                                    let val = Number.parseInt(quantity.value) - 1;
                                    quantity.value = val;
                                    let tprice = Number.parseInt(price.innerHTML) - Number.parseInt("'.$row["price"].'");
                                    price.innerHTML =  tprice;
                                    total -= Number.parseInt("'.$row["price"].'")
                                    let updateOrder = orders.get("'.$row["id"].'");
                                    let totalOrder = updateOrder.total - 1
                                    orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                    document.dispatchEvent(event);
                                  }
                                }
                                document.querySelector(".inc-'.$row["id"].'").onclick = function(){
                                  let price = document.getElementById("price-'.$row["id"].'");
                                  let quantity = document.querySelector(".f-'.$row["id"].'");
                                  let val = Number.parseInt(quantity.value) + 1;
                                  quantity.value = val;
                                  let tprice =  Number.parseInt("'.$row["price"].'") + Number.parseInt(price.innerHTML);
                                  price.innerHTML = tprice;
                                  total +=  Number.parseInt("'.$row["price"].'");
                                  let updateOrder = orders.get("'.$row["id"].'");
                                  let totalOrder = updateOrder.total + 1
                                  orders.set("'.$row["id"].'", {total:totalOrder, price:Number.parseInt('.$row["price"].'), name:'.$row["name"].'});
                                  document.dispatchEvent(event);
                                }
                               } 
                            </script>
                            </div>
                          </div>
                        </div>
                       </div>';
                      }

                    ?>
                   </ul>
                </div>
          </div>

        <!--Menu List -->
        <div class="menu-list-items">
                <div class="dropdown dropup">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false">
                      Menu list 
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                      <li><a class="dropdown-item" href="#fam_meals">Family Meals</a></li>
                      <li><a class="dropdown-item" href="#bread_meals">Bread/Rice Meals</a></li>
                      <li><a class="dropdown-item" href="#pasta_meals">Pasta/Platter</a></li>
                      <li><a class="dropdown-item" href="#party_meals">Party Trays</a></li>
                      <li><a class="dropdown-item" href="#cake_meals">Bonita's Cakes</a></li>
                      <li><a class="dropdown-item" href="#cof_meals">Coffee/Frappe</a></li>
                      <li><a class="dropdown-item" href="#ice_meals">Over Ice/Milktea</a></li>
                      <li><a class="dropdown-item" href="#bday_meals">Promo</a></li>
                    </ul>
                  </div>
                </div>
        </div>
      </div>
<script>
    document.addEventListener("AddToCartEvent",function(){
      document.querySelector(".sub-total").innerHTML = total;
      document.querySelector(".total-price").innerHTML = total + (total * 0.15);
      localStorage.setItem("cart",document.getElementById("cart-main-container").innerHTML.toString());
      console.log(orders)
    },false)
</script>
<script>
function proceedToCheckOut(){
  let form = []

  orders.forEach((value, key)=>{
    let obj = {
      orderId:key,
      orderTotal:value.total,
      price:value.price,
      name:value.name
    }
    form.push(obj);
  });

  localStorage.setItem("cart-order", JSON.stringify(form));
  $.post({
    url: "checkout.php",
    dataType:"text",
		success: function(data){
				window.location.href = "checkout.php";
		},
    error:function(request, status, error){
      console.log(error)
    }
  });
}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="./js/cart.js"></script>
</body>
</html>