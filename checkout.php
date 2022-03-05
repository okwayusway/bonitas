<?php
include './php/connection.php';
session_start();
$userId = $_SESSION["userid"];
$userInfo = array();    
$sql = "Select * From users where userid=$userId";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}

while($row = $result->fetch_assoc()) {
  $userInfo[]= $row;
}

$conn -> close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="./css/checkout.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Bonita's | Checkout</title>
</head>
<body>
    <!--Navbar-->
  <nav class="navigation-bar">
      <div class="navigation-logo">
          <img class="logo" src="./Images/bonitaslogo.png" alt="">
      </div>
      <div class="user_avatar">
        <i class="las la-user-circle" id="avatar"></i>
      </div>
      <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
      </div>
  </nav>

  <div class="user_hover">
    <div class="hover_list">
      <ul class="hover_content">
        <li class="list_item"><a href="/user.html" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
        <li class="list_item"><a href="" class="link_hover"><i class="las la-shopping-bag icon_link"></i>My Orders</a>
        <li class="list_item"><a href="" class="link_hover"><i class="las la-ticket-alt icon_link"></i>Coupons</a>
        <li class="list_item"><a href="" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
      </ul>
    </div>
  </div>

  <div class="navigation-menu">
    <i class="las la-times" id="close-menu"></i>
    <div class="additional-img"><img src="./Images/img-menu.jpg" alt=""></div>
    <div class="list">
      <ul class="navigation-list">
        <li class="navigation-item"><a href="index.html" class="navItem-list">Home</a></li>
        <li class="navigation-item"><a href="menu.html" class="navItem-list">Menu</a></li>
        <li class="navigation-item"><a href="reservation.html" class="navItem-list">Reservation</a></li>
      </ul>
    </div>
  </div>
 
  <!-- Checkout Details  HTML-->
  <div class="checkout-con">
      <div class="contact-details">
          <h3 class="header-text">Contact Details</h3>
          <div class="details">
              <form action="" class="user-details">
                  <div class="nameOf-user">
                      <div class="text-field">
                          <label for="">First Name</label>
                          <div class="user-first">
                              <input type="text" value="<?php echo $userInfo[0]["first_name"]; ?>">
                          </div>
                      </div>
                      <div class="text-field">
                          <label for="">Last Name</label>
                          <div class="user-last">
                              <input type="text" value="<?php echo $userInfo[0]["last_name"]; ?>">
                          </div>
                      </div>
                  </div>
              </form>
              <form action="" class="user-contact">
                  <div class="contact-num">
                    <div class="num-field">
                        <label for="">Mobile Number</label>
                        <div class="user-contact">
                            <input type="number" placeholder="+63 XXX-XXX-XXXX" value="<?php echo $userInfo[0]["phone_number"]; ?>">
                        </div>
                    </div>
                  </div>
              </form>
              <form action="" class="address-payment">
                <div class="loc-payment-details">
                    <div class="text-field">
                        <label for="">Address</label>
                        <div class="user-address">
                            <div class="adress-con">
                                <select class="select-address">
                                  <option value="0"><?php echo $userInfo[0]["household_no"]." ".$userInfo[0]["street"]." ".$userInfo[0]["barangay"]." ".$userInfo[0]["city"]; ?></option>
                                </select>
                              </div>
                            <input type="button" class="btn-address" value="Add additional address">
                        </div>
                    </div>
                    <div class="delivery-field">
                        <label for="">Cash on Delivery</label>
                        <div class="payment">
                            <input type="number" class="change" placeholder="Change for">
                        </div>
                    </div>
                </div>
              </form>
          </div>
      </div>
      <div class="order-summary">
        <h3 class="order-title">Order Summary</h3>
        <div class="order-container">
            <div class="summary-con">
            </div>
            <div class="total-container">
                <div class="row-sub">
                    <div class="col-left sub">
                        Subtotal
                    </div>
                    <div class="col-right sub">
                        <span class="peso-sign-regular sub-total"></span>
                    </div>
                </div>
                <div class="row-delivery-fee">
                    <div class="col-left sub">
                        Tax
                    </div>
                    <div class="col-right sub">
                        <span class="peso-sign-regular">12%</span>
                    </div>
                </div>
                <div class="row-total">
                    <div class="col-left sub">
                        Total
                    </div>
                    <div class="col-right sub">
                        <span class="peso-sign-regular net-total"></span>
                    </div>
                </div>
                <div>
                    <button class="checkout-btn" id="submit-order">Checkout</button>
                </div>
            </div>
        </div>
      </div>
  </div>
  <script>
    let dateOptions  = {
        year: 'numeric', month: 'numeric', day: 'numeric',
        hour: 'numeric', minute: 'numeric', second: 'numeric',
        hour12: false,
        timeZone: 'America/Los_Angeles'
        }
    let orders = localStorage.getItem("cart-order");
    let orderArray = JSON.parse(orders);
    let menuList = orderArray.map(x => x.orderId);
    let orderBy = "<?php $_SESSION["userid"];?>";
    let orderAt = new Intl.DateTimeFormat('default', dateOptions).format(new Date());
    let orderStatus = "PENDING"
    let subPrice = 0;
    let orderTotal = orderArray.map(x => x.orderTotal);
    for(let item of orderArray){
      subPrice += item.price;
      let summary =  document.querySelector(".summary-con");
      summary.innerHTML += `
                 <div class="row-item">
                    <div class="quantity">
                        <h5 class="checkout-quanti">x${item.orderTotal}</h5>
                    </div>
                    <div class="user-orders">
                        <h4 class="order-text">${item.name}</h4>
                    </div>
                    <div class="item-price">
                        <span class="peso-sign-regular">₱${item.orderTotal * item.price}</span>
                    </div>
                </div>`
    }
    document.querySelector(".sub-total").innerHTML = "₱"+" "+subPrice;
    document.querySelector(".net-total").innerHTML = "₱"+" "+((subPrice*.12) + subPrice)
    let totalPrice = (subPrice *.12) + subPrice;

    document.getElementById("submit-order").onclick = function(){
        $.ajax({
        url: './php/submit-order.php',
        data: {
            rawDetails:orders,
            orderedAt: orderAt,
            orderStatus: orderStatus,
            orderTotalPrice:totalPrice,
            orderTotal:JSON.stringify(orderTotal),
            menuIds:JSON.stringify(menuList)
        },
        type: 'POST',
        success: function(response) {
            alert("Orders Successfully Submitted");
            setTimeout(() => {
                window.location.href = "user.php";
                localStorage.remove("cart-order");
            }, 1200);
        }
        });
    }

  

  </script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
  <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
  <script  src="./js/checkout.js"></script>


</body>
</html>