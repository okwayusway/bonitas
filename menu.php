<?php 
 session_start();
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
    <title>Menu | Bonitas</title>
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
    <div class="cart-container">
        <h2 class="cart-title">My Cart</h2>
        <div class="item-container">
            <div class="row-item">
                <div class="quantity">
                    <form action="" class="incrementDec">
                        <button type="button" onclick="decrementValue()"><i class="las la-times-circle"></i></button>
                        <div class="quanti-count">
                            <input type="text" id="number" value="1" disabled="disabled">
                        </div>
                        <button type="button" onclick="incrementValue()"><i class="las la-plus-circle"></i></button>
                    </form>
                </div>
                <div class="user-orders">
                    <h4 class="order-text">Baby Backribs w/ Nachos.</h4>
                </div>
                <div class="item-price">
                    <span class="peso-sign-regular">₱</span>129.00
                </div>
            </div>
        </div>
        <div class="total-container">
            <div>
                <button class="checkout-btn" type="button" onclick="window.location.href='/checkout.html'">Proceed to Checkout</button>
            </div>
            <div class="row-sub">
                <div class="col-left sub">
                    Subtotal
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular">₱</span>129.00
                </div>
            </div>
            <div class="row-delivery-fee">
                <div class="col-left sub">
                    Tax
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular">₱</span>129.00
                </div>
            </div>
            <div class="row-total">
                <div class="col-left sub">
                    Total
                </div>
                <div class="col-right sub">
                    <span class="peso-sign-regular">₱</span>129.00
                </div>
            </div>
        </div>
    </div>
    <div class="user_hover">
      <div class="hover_list">
        <ul class="hover_content">
          <li class="list_item"><a href="/user.html" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
          <li class="list_item"><a href="" class="link_hover"><i class="las la-shopping-bag icon_link"></i>My Orders</a>
          <li class="list_item"><a href="./php/logout.php" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
        </ul>
      </div>
    </div>
  
    <div class="navigation-menu">
      <i class="las la-times" id="close-menu"></i>
      <div class="additional-img"><img src="./Images/img-menu.jpg" alt=""></div>
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
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium corrupti ullam sequi, reprehenderit harum at dignissimos ut neque culpa ipsum cumque iusto libero consequatur incidunt, quae, alias illum deleniti enim.</p><br>
        <p class="text-center">Opening hours: Monday-Saturday 9:00 AM to 8:00 PM<br> Sunday: 11:00 AM to 6:00 PM</p>
    </div>

    <div class="menu_con">
        <div class="menu-tabs">
            <h3>Recommended</h3>
            <div class="container-fluid bg-trasparent my-4 p-1" style="position: relative;">
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <button data-toggle="modal" data-target="#TBoneModal"><div class="card h-100 shadow-sm"> <img src="Images/t-bone.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">T-bone Steak</h5>
                            </div>
                        </div></button>
                    </div>
                    <div class="col">
                        <button data-toggle="modal" data-target="#BabyModal"><div class="card h-100 shadow-sm"> <img src="Images/ribs.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Baby Back Ribs</h5>
                            </div>
                        </div></button>
                    </div>
                    <div class="col">
                        <button data-toggle="modal" data-target="#BuffaloModal"><div class="card h-100 shadow-sm"> <img src="Images/bfries.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Buffalo Wings</h5>
                            </div>
                        </div></button>
                    </div>
                    <div class="col">
                        <button data-toggle="modal" data-target="#PestoModal"><div class="card h-100 shadow-sm"> <img src="Images/GrilledPesto.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Grilled Chicken Pesto</h5>
                            </div>
                        </div></button>
                    </div>
                </div>
            </div>
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
            <h3 class="mt-4">Family Meals</h3>
            <div class="fam-meals" id="fam_meals">
                <div class="col-8">
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#BlessedModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Blessed 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GratefulModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Grateful 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ThankfulModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Thankful
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Bread/Rice Meals</h3>
            <div class="pasta-meals" id="pasta_meals">
                <div class="col-8">
                    <h5>Soup</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#MushroomModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Mushroom Soup 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MashedModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Mashed Potato 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Breads</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#TunaModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Tuna Sandwich 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HamModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Ham and Cheese 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ClubModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Clubhouse 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BClubModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Bonita's Clubhouse 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CheesyModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Cheesy Steak Burger 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CBBModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Chicken Bacon Burger 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Salad</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#VegeModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Vegetable Salad
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MacaroniModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Macaroni Salad
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CaesarModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Caesar Salad
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Steak/Grilled</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#TBoneModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            T-Bone
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#PorkModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Pork Steak
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BabyModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Baby Back
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChickModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chicken BBQ
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ClassicCModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Classic Chicken
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BonelessModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Boneless Bangus
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GrilledModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Grilled Salmon Belly
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SmokedModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Smoked Salmon
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SalmonModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Salmon Steak
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BeefModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Beef Strips w/ Mushroom
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Rice Meal</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#TapaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Beef Tapa
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#LiempoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Liempo
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#FriedModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Fried Chicken
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BreadedModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Breaded Porkchop
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#FishFModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Fish Fillet
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SpamModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Spam
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Pasta/Platter</h3>
            <div class="pasta-meals" id="pasta_meals">
                <div class="col-8">
                    <h5 class="mt-2">Platter</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#RibsPModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Back Ribs Platter 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChickPModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Chicken BBQ Platter 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BucketModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Bucket of Chicken 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Snacks</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#FriesModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Fries 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#NachosModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Nachos 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MojosModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Mojos 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#WingsModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Chicken Wings 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#StripsModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Chicken Strips 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SquidModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Squid Rings and Chips 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BuffaloModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Buffalo Wings 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#NachosPModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Nachos Platter 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#Set1Modal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Trio Set 1 Bundle Snacks 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#Set2Modal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Trio Set 2 Bundle Snacks 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li>
                    </ul>
                    <h5 class="mt-2">Pasta</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#CreamyModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Creamy Carbonara
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SaucyModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Saucy Spaghetti
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CheesyMacModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Cheesy Baked Macaroni
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#PestoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Grilled Chicken Pesto
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BLasagnaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Baked Lasagna
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Dessert</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#ChocoCheeseModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chocolate Cheese Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BlueberryModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Blueberry Cheese Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#NewyorkModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Newyork Cheese Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#OreoCheeseModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Oreo Cheese Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MiniModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Mini Chocolate Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BrowniesModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Brownies    
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Party Trays </h3>
            <div class="party-meals" id="party_meals">
                <div class="col-8">
                    <h5 class="mt-2">Pasta Trays</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#CCarbonaraModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Creamy Carbonara
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BMacaroniModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Baked Macaroni
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GCPModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Grilled Chicken Pesto 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SSpaghettiModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Saucy Spaghetti
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BakedLModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Baked Lasagna
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="quixote">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Food Trays</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#CBBQModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Chicken BBQ 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#FriedChickModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Fried Chicken 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BuffWingsModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Buffalo Wings
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#PorkSteakModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Pork Steak
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BabyBackModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Baby Back Ribs 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MeatModal"><li class="list-group-item d-flex justify-content-between align-items-center">
                            Meat Platter 
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="lay">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Combo Trays</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#ChoiceModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Choice of Three
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Pica Pica Trays</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#TrioSet1Modal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Trio Set 1
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#TrioSet2Modal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Trio Set 2
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Other Trays</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#BSMModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Beef Strips w/ Mushroom
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#FFModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Fish Fillet
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Bonita's Cakes</h3>
            <div class="cake-meals" id="cake_meals">
                <div class="col-8">
                    <h5 class="mt-2">Chocolate Cakes</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#ChocoHeartModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Choco Heart Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChocoRoundModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Choco Round Cake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Cheesecakes</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#BBerryModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Blueberry
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#NYorkModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            New york
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#OreoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Oreo
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChocolateModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chocolate
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Coffee/Frappe</h3>
            <div class="cof-meals" id="cof_meals">
                <div class="col-8">
                    <h5 class="mt-2">Frappe</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#MochaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Mocha
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#VanillaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Vanilla
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CappucinoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Cappucino
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChipModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chocolate Chip
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CookieModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Choco Cookie
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#DarkModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Dark Chocolate
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#StrawberryModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Strawberry
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HazelnutModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Hazelnut
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChocomaltModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chocomalt
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GreenTeaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Green Tea
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#SaltedModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Salted Caramel
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CaramelModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Caramel Macchiato
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CoffeeJellyModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Coffee Jelly
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#UltimateModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Ultimate Chocolate
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#DarkMochaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Dark Mocha
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#NutellaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Nutella
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MatchaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Oreo Matcha
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChocoBerryModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Choco Berry
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Cold</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#IcedTeaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Tea
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#RedTeaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Red Tea
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Hot</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#EspressoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Espresso Americano
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HCappucinoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Cappucino
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MochaLatteModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Mocha Latte
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#CafeLatteModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Cafe Latte
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HazelnutLatteModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Hazelnut Latte
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#MacchiatoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Macchiato Latte
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HotChocoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Hot Choco
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GreenLatteModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Green Tea Latte
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#GreenBagModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Green Tea (Tea Bag)
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#BrewedModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Black Tea (Brewed Tea)
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HotLemonModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Hot Lemon
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Over Ice/Milk Tea</h3>
            <div class="ice-meals" id="ice_meals">
                <div class="col-8">
                    <h5 class="mt-2">Over Ice</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#ICappucinoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Cappuccino
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#IMochaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Mocha
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#IMacchiatoModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Macchiato
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#IVanillaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Vanilla
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#IGreenModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Iced Green Tea
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ClassicModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Classic iced Coffee
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Fruit Juice</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#CucumberModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Cucumber Shake
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#LemonadeModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Lemonade Juice
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Milk Tea</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#PearlModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Pearl Milk Tea
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#WintermelonModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Wintermelon
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#HazelnutMilkteaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Hazelnut
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#DarkChocolateModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Dark Chocolate
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#ChocoMaltMilkteaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Chocolate Malt
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#StrawberryMilkteaModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Strawberry
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                    <h5 class="mt-2">Other</h5>
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#BottledModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Bottled Water
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                        <button data-toggle="modal" data-target="#PineappleModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Pineapple Juice
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
            <h3 class="mt-5">Promo</h3>
            <div class="bday-meals" id="bday_meals">
                <div class="col-8">
                    <ul class="list-group">
                        <button data-toggle="modal" data-target="#BdayModal"><li class="list-group-item d-flex justify-content-between align-items-center">  
                            Birthday Blowout
                            <div class="image-parent">
                                <img src="Images/bonitas.png" class="img-fluid" alt="things">
                            </div>
                        </li></button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</div>
    
<!--Modal starts-->

<!--Fam meals modal-->
<div class="modal fade" id="BlessedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Family Meal - Blessed</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/Blessed.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 1,390</h6>
                </div>
                <ul>
                    <li>- 2 T-bone Steak w/rice</li>
                    <li>- 1 Baby Back Ribs Platter or Chicken BBQ Platter</li>
                    <li>- 1 Trio Bundle Snacks</li>
                    <li>- 2 Choice of Pasta</li>
                    <li>- 1 Vegetable Salad</li>
                    <li>- 2 Soup of the Day</li>
                    <li>- 4 Plain Rice</li>
                    <li>- 2 Pitcher of Iced/Red Tea</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button class="down btn btn-default" onclick="down('0')"><span class="fas fa-minus"></span></button>
                        </div>  
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button class="up btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 1,390</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="addToCart(document.getElementById('myNumber')['value '])" class="btn btn-success btn-add-to-cart">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="GratefulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Family Meal - Grateful</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/Grateful.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 620</h6>
                </div>
                <ul>
                    <li>- 1 Baby Back Ribs Platter or Chicken BBQ Platter</li>
                    <li>- 1 Choice of Pasta</li>
                    <li>- 2 Soup of the Day</li>
                    <li>- 4 Plain Rice</li>
                    <li>- 1 Pitcher of Iced/Red Tea</li>
                </ul>
            </div>
            <small>Good for 4-5 persons</small>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button class="down btn btn-default" onclick="down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button class="up btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 620</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ThankfulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Family Meal - Thankful</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/Thankful.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 580</h6>
                </div>
                <ul>
                    <li>- 2 T-bone Steak</li>
                    <li>- 1 Choice of Pasta</li>
                    <li>- 2 Soup of the Day</li>
                    <li>- 1 Vegetable Salad</li>
                </ul>
                <small>Good for 2-3 persons</small>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 580</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>


<!--Bread Meals-->
<div class="modal fade" id="MushroomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Soup - Mushroom Soup</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/Mushroom.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 35</h6>
                </div>
                <ul>
                    <li>- 1 Mushroom Soup</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 35</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="MashedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Soup - Mashed Potato</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/mashed.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Large - P 60 Medium - P 40</h6>
                </div>
                <div class="choicemenu">
                    <ul>
                        <li>- 1 Mashed Potato</li>
                    </ul>
                    <div class="input-group d-flex align-items-center">
                        <input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium</label>
                        <input type="radio" id="med" name="size"style="margin-left: 15px;"><label for="med" style="margin-left: 5px;"> Large</label>
                    </div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 40</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="TunaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Tuna Sandwich</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/tuna.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 85</h6>
                </div>
                <ul>
                    <li>- 1 Tuna Sandwich</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Tuna Sandwich</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hamncheese.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 85</h6>
                </div>
                <ul>
                    <li>- 1 Ham and Cheese Sandwich</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ClubModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Clubhouse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/clubhouse.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 120</h6>
                </div>
                <ul>
                    <li>- 1 Clubhouse</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 120</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BClubModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Bonitas Clubhouse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/bclub.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 135</h6>
                </div>
                <ul>
                    <li>- 1 Bonitas Clubhouse</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 135</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CheesyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Cheesy Steak Burger</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/csteakburger.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 95</h6>
                </div>
                <ul>
                    <li>- 1 Cheesy Steak Burger</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 95</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CBBModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Breads - Chicken Bacon Burger</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/chickenbacon.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 95</h6>
                </div>
                <ul>
                    <li>- 1 Chicken Bacon Burger</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 95</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="VegeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Salad - Vegetable Salad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/salad.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 100</h6>
                </div>
                <ul>
                    <li>- 1 Vegetable Salad</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MacaroniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Salad - Macaroni Salad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/salad.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 85</h6>
                </div>
                <ul>
                    <li>- 1 Macaroni Salad</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CaesarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Salad - Caesar Salad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/salad.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 140</h6>
                </div>
                <ul>
                    <li>- 1 Caesar Salad</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 140</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="TBoneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - T-bone</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/tbone.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 180</h6>
                </div>
                <ul>
                    <li>- 1 T-bone meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
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
</div>

<div class="modal fade" id="PorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Pork Steak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/porksteak.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Pork Steak meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BabyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Baby Back Ribs</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/babyback.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Baby Back Ribs meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChickModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Chicken BBQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/chickenBBQ.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Chicken BBQ meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ClassicCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Classic Chicken</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/classicchicken.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 165</h6>
                </div>
                <ul>
                    <li>- 1 Classic Chicken meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 165</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BonelessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Boneless Bangus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/bonelessbangus.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 165</h6>
                </div>
                <ul>
                    <li>- 1 Boneless Bangus meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 165</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="GrilledModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Grilled Salmon Belly</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/grilledsalmonbelly.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 165</h6>
                </div>
                <ul>
                    <li>- 1 Grilled Salmon Belly meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 165</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SmokedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Smoked Salmon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/smokedsalmon.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 265</h6>
                </div>
                <ul>
                    <li>- 1 Smoked Salmon meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 265</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SalmonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Salmon Steak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/salmon.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 265</h6>
                </div>
                <ul>
                    <li>- 1 Salmon Steak meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 265</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BeefModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Steak/Grilled - Beef Strips w/ Mushroom</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/beefstrips.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 165</h6>
                </div>
                <ul>
                    <li>- 1 Beef Strips w/ Mushroom meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 165</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="TapaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Beef Tapa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/beeftapa.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Beef Tapa meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="LiempoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Liempo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/liempo.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Liempo meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="FriedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Fried Chicken</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/friedchicken.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Fried Chicken meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BreadedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Breaded Porkchop</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/breadedporkchop.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Breaded Porkchop meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="FishFModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Fish Fillet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/fishfillet.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Fish Fillet meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SpamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rice meal - Spam</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/fishfillet.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 110</h6>
                </div>
                <ul>
                    <li>- 1 Spam meal</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>


<!--Pasta Platter modals-->
<div class="modal fade" id="RibsPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta/Platter - Back Ribs Platter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 360</h6>
                </div>
                <ul>
                    <li>- 1 Back Ribs Platter</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 360</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChickPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta/Platter - Chicken BBQ Platter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 350</h6>
                </div>
                <ul>
                    <li>- 1 Chicken BBQ Platter</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 350</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BucketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta/Platter - Bucket of Chicken</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 350</h6>
                </div>
                <ul>
                    <li>- 1 Bucket of Chicken</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 350</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="FriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Fries</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 75</h6>
                </div>
                <ul>
                    <li>- 1 Fries</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 75</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NachosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Nachos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 90</h6>
                </div>
                <ul>
                    <li>- 1 Nachos</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MojosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Mojos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 90</h6>
                </div>
                <ul>
                    <li>- 1 Mojos</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="WingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Chicken Wings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 95</h6>
                </div>
                <ul>
                    <li>- 1 Chicken Wings</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 95</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="StripsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Chicken Strips</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 95</h6>
                </div>
                <ul>
                    <li>- 1 Chicken Strips</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 95</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SquidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Squid Rings and Chips</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 140</h6>
                </div>
                <ul>
                    <li>- 1 Squid Rings and Chips</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 140</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BuffaloModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Buffalo Wings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapica.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 170</h6>
                </div>
                <ul>
                    <li>- 1 Buffalo Wings</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 170</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NachosPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Nachos Platter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapicatrays.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 170</h6>
                </div>
                <ul>
                    <li>- 1 Nachos Platter</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 170</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="Set1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Trio Set 1 Bundle Snacks</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapicatrays.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 240</h6>
                </div>
                <ul>
                    <li>- 1 Mojos</li>
                    <li>- 1 Chicken Wings</li>
                    <li>- 1 Fries</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 240</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="Set2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Snacks - Trio Set 2 Bundle Snacks</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapicatrays.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 240</h6>
                </div>
                <ul>
                    <li>- 1 Nachos</li>
                    <li>- 1 Chicken Strips</li>
                    <li>- 1 Fries</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 240</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CreamyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta - Creamy Carbonara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/carbonara.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 105</h6>
                </div>
                <ul>
                    <li>- 1 Creamy Carbonara</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 105</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SaucyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta - Saucy Spaghetti</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/spaghetti.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 105</h6>
                </div>
                <ul>
                    <li>- 1 Saucy Spaghetti</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 105</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CheesyMacModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta - Cheesy Baked Macaroni</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/bakedmacaroni.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 105</h6>
                </div>
                <ul>
                    <li>- 1 Cheesy Baked Macaroni</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 105</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="PestoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta - Grilled Chicken Pesto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/grilledchickenpesto.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 105</h6>
                </div>
                <ul>
                    <li>- 1 Grilled Chicken Pesto</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 105</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BLasagnaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta - Baked Lasagna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/bakedlasagna.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 130</h6>
                </div>
                <ul>
                    <li>- 1 Baked Lasagna</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocoCheeseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Chocolate Cheese Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 130</h6>
                </div>
                <ul>
                    <li>- 1 slice - Chocolate Cheese Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BlueberryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Blueberry Cheese Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 130</h6>
                </div>
                <ul>
                    <li>- 1 slice - Blueberry Cheese Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NewyorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Newyork Cheese Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 130</h6>
                </div>
                <ul>
                    <li>- 1 slice - Newyork Cheese Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="OreoCheeseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Oreo Cheese Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 130</h6>
                </div>
                <ul>
                    <li>- 1 slice - Oreo Cheese Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MiniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Mini Chocolate Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 75</h6>
                </div>
                <ul>
                    <li>- 1 - Mini Chocolate Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 75</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BrowniesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dessert - Brownies</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 30</h6>
                </div>
                <ul>
                    <li>- 1 - Brownies</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 30</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<!--Party Trays Modal-->
<div class="modal fade" id="CCarbonaraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta Trays - Creamy Carbonara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/pastaplatter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 700 Large - P 900</h6>
                </div>
                <ul>
                    <li>- 1 - Creamy Carbonara Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 700</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BMacaroniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta Trays - Baked Macaroni</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/pastaplatter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 700 Large - P 900</h6>
                </div>
                <ul>
                    <li>- 1 - Baked Macaroni Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 700</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="GCPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta Trays - Grilled Chicken Pesto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/pastaplatter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 700 Large - P 900</h6>
                </div>
                <ul>
                    <li>- 1 - Grilled Chicken Pesto Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 700</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SSpaghettiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta Trays - Saucy Spaghetti</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/pastaplatter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 700 Large - P 900</h6>
                </div>
                <ul>
                    <li>- 1 - Saucy Spaghetti Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 700</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BakedLModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pasta Trays - Baked Lasagna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/pastaplatter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 900 Large - P 1100</h6>
                </div>
                <ul>
                    <li>- 1 - Baked Lasagna Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 900</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CBBQModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Chicken BBQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Chicken BBQ Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 750</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="FriedChickModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Fried Chicken</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Fried Chicken Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 750</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BuffWingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Buffalo Wings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Buffalo Wings Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 750</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="PorkSteakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Pork Steak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Pork Steak Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 750</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BabyBackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Baby Back Ribs</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Baby Back Ribs Tray</li>
                </ul>
                <div class="input-group d-flex align-items-center">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 750</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Food Trays - Meat Platter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Large - P 1100</h6>
                </div>
                <ul>
                    <li>- 1 - Meat Platter</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 1100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Combo Trays - Choice of Three</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Choices: </h6>
                    <h6 style="font-weight: 600;">Price: Medium - P 750 Large - P 1100</h6>
                </div>
                <div class="input-group d-block align-items-center">
                    <div><input type="checkbox" id="med" name="size"><label for="med" style="margin-left: 5px;"> Baby Back Ribs</label></div>
                    <div><input type="checkbox" id="med" name="size"><label for="med" style="margin-left: 5px;"> Chicken BBQ</label></div>
                    <div><input type="checkbox" id="med" name="size"><label for="med" style="margin-left: 5px;"> Fried Chicken</label></div>
                    <div><input type="checkbox" id="med" name="size"><label for="med" style="margin-left: 5px;"> Buffalo Wings</label></div>
                </div>
                <div class="input-group d-flex align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium (Good for 6-8 persons)</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large (Good for 10-12 persons)</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 1100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="TrioSet1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pica Pica Trays - Trio Set 1 </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapicatrays.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium (Good for 6-8 persons) - P 960</h6>
                </div>
                <ul>
                    <li>- 1 - Mojos</li>
                    <li>- 1 - Chicken Wings</li>
                    <li>- 1 - Fries</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 960</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="TrioSet2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pica Pica Trays - Trio Set 2 </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/picapicatrays.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium (Good for 6-8 persons) - P 960</h6>
                </div>
                <ul>
                    <li>- 1 - Nachos</li>
                    <li>- 1 - Chicken Strips</li>
                    <li>- 1 - Fries</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 960</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BSMModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Other Trays - Beef Strips w/ Mushroom</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium (Good for 8-10 persons) - P 1050</h6>
                </div>
                <ul>
                    <li>- 1 - Beef Strips w/ Mushroom Tray</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 1050</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="FFModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Other Trays - Fish Fillet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/platter.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: Medium (Good for 8-10 persons) - P 850</h6>
                </div>
                <ul>
                    <li>- 1 - Fish Fillet Tray</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 850</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocoHeartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Chocolate Cakes - Choco Heart Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 550</h6>
                </div>
                <ul>
                    <li>- 1 whole - Choco Heart Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 550</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocoRoundModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Chocolate Cakes - Choco Round Cake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 550</h6>
                </div>
                <ul>
                    <li>- 1 whole - Choco Round Cake</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 550</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BBerryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cheesecakes - Blueberry Cheesecake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                </div>
                <ul>
                    <li>- Blueberry Cheesecake</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Slice - P 130</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Cannister (4 inches) - P 350</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Tin Can (8 inches) - P 550</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Whole (9 inches) - P 1300</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NYorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cheesecakes - Newyork Cheesecake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                </div>
                <ul>
                    <li>- Newyork Cheesecake</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Slice - P 130</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Cannister (4 inches) - P 350</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Tin Can (8 inches) - P 550</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Whole (9 inches) - P 1300</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="OreoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cheesecakes - Oreo Cheesecake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                </div>
                <ul>
                    <li>- Oreo Cheesecake</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Slice - P 130</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Cannister (4 inches) - P 350</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Tin Can (8 inches) - P 550</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Whole (9 inches) - P 1300</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocolateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cheesecakes - Chocolate Cheesecake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/cakes.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                </div>
                <ul>
                    <li>- Chocolate Cheesecake</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Slice - P 130</label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Whole (9 inches) - P 1300</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 130</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<!--Coffee/Frappe Modals-->
<div class="modal fade" id="MochaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Mocha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Mocha Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="VanillaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Vanilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Vanilla Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CappucinoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Cappucino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Cappucino Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Chocolate Chip</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Chocolate Chip Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Choco Cookie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Choco Cookie Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="DarkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Dark Chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Dark Chocolate Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="StrawberryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Strawberry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Strawberry Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HazelnutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Hazelnut</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 80  L(22oz) - P 100</h6>
                </div>
                <ul>
                    <li>- 1 Hazelnut Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 80</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocomaltModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Chocomalt</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Hazelnut Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="GreenTeaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Green Tea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Green Tea Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="SaltedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Salted Caramel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Salted Caramel Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CaramelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Caramel Macchiato</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Caramel Macchiato Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CoffeeJellyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Coffee Jelly</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Coffee Jelly Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="UltimateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Ultimate Chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Ultimate Chocolate Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="DarkMochaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Dark Mocha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 100  L(22oz) - P 120</h6>
                </div>
                <ul>
                    <li>- 1 Dark Mocha Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 100</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="NutellaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Nutella</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 110  L(22oz) - P 130</h6>
                </div>
                <ul>
                    <li>- 1 Nutella Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MatchaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Oreo Matcha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 110  L(22oz) - P 130</h6>
                </div>
                <ul>
                    <li>- 1 Oreo Matcha Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocoBerryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Frappe - Choco Berry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 110  L(22oz) - P 130</h6>
                </div>
                <ul>
                    <li>- 1 Choco Berry Frappe</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 110</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="IcedTeaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cold - Iced Tea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 45 Pitcher - P 70</h6>
                </div>
                <ul>
                    <li>- 1 Iced Tea</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Pitcher</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 45</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="RedTeaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cold - Red Tea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/frappe.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 45 Pitcher - P 70</h6>
                </div>
                <ul>
                    <li>- 1 Red Tea</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Pitcher</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 45</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EspressoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Espresso Americano</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Espresso Americano</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HCappucinoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Cappucino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Cappucino</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MochaLatteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Mocha Latte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Mocha Latte</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CafeLatteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Cafe Latte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Cafe Latte</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HazelnutLatteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Hazelnut Latte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Hazelnut Latte</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="MacchiatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Macchiato Latte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Macchiato Latte</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HotChocoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Hot Choco</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Choco</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="GreenLatteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Green Tea Latte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Hot Green Tea Latte</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 85</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="GreenBagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Green Tea (Tea Bag)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 60</h6>
                </div>
                <ul>
                    <li>- 1 Hot Green Tea (Tea Bag)</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 60</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BrewedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Black Tea (Brewed Tea)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 60</h6>
                </div>
                <ul>
                    <li>- 1 Hot Black Tea (Brewed Tea)</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 60</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HotLemonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hot - Hot Lemon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/hot.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: L(22oz) - P 60</h6>
                </div>
                <ul>
                    <li>- 1 Hot Lemon</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 60</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<!--Over Ice/Milk Tea Modals-->
<div class="modal fade" id="ICappucinoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Iced Cappucino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Iced Cappucino</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="IMochaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Iced Mocha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Iced Mocha</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="IMacchiatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Iced Macchiato</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Iced Macchiato</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="IVanillaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Iced Vanilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Iced Vanilla</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="IGreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Iced Green Tea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Iced Green Tea</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ClassicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Over Ice - Classic Iced Coffee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 90  L(22oz) - P 110</h6>
                </div>
                <ul>
                    <li>- 1 Classic Iced Coffee</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 90</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="CucumberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Fruit Juice - Cucumber Shake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 65  L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Cucumber Shake</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 65</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="LemonadeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Fruit Juice - Lemonade Juice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/overice.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 65  L(22oz) - P 85</h6>
                </div>
                <ul>
                    <li>- 1 Lemonade Juice</li>
                </ul>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 65</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="PearlModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Pearl</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 60  L(22oz) - P 80</h6>
                </div>
                <ul>
                    <li>- 1 Pearl Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 60</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="WintermelonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Wintermelon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 70  L(22oz) - P 90</h6>
                </div>
                <ul>
                    <li>- 1 Wintermelon Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 70</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="HazelnutMilkteaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Hazelnut</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 70  L(22oz) - P 90</h6>
                </div>
                <ul>
                    <li>- 1 Hazelnut Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 70</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="DarkChocolateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Dark Chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 70  L(22oz) - P 90</h6>
                </div>
                <ul>
                    <li>- 1 Dark Chocolate Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 70</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="ChocoMaltMilkteaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Chocolate Malt</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 70  L(22oz) - P 90</h6>
                </div>
                <ul>
                    <li>- 1 Chocolate Malt Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 70</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="StrawberryMilkteaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Milk Tea - Strawberry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: M(16oz) - P 70  L(22oz) - P 90</h6>
                </div>
                <ul>
                    <li>- 1 Strawberry Milk Tea</li>
                </ul>
                <div class="input-group d-block align-items-center">
                    <small>Add-ons:</small>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Tapioca/Pearl - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Crushed Oreo - P 10</label></div>
                    <div><input type="checkbox" id="addons"><label for="addons" style="margin-left: 5px;"> Egg Pudding - P 15</label></div>
                </div>
                <div class="input-group d-block align-items-center" style="margin-left: 1rem;">
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Medium </label></div>
                    <div><input type="radio" id="med" name="size"><label for="med" style="margin-left: 5px;"> Large</label></div>
                </div>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 70</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="BottledModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Other - Bottled Water</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 20</h6>
                </div>
                <ul>
                    <li>- 1 Bottled Water</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 20</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="PineappleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Other - Pineapple Juice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/milktea.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 40</h6>
                </div>
                <ul>
                    <li>- 1 Pineapple Juice</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default" onclick=" down('0')"><span class="fas fa-minus"></span></button>
                        </div>
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 40</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
</div>

<!--Promo Modals-->
<div class="modal fade" id="BdayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Promo - Birthday Blowout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="pic_modal" style="background-image: url(images/blowout.jpg);">
            </div>
            <div class="deets_modal">
                <div class="dhead d-flex justify-content-between">
                    <h6 style="font-weight: 600;">Includes: </h6>
                    <h6 style="font-weight: 600;">Price: P 1,880</h6>
                </div>
                <ul>
                    <li>- 1 Chocolate Cake</li>
                    <li>- 1 Medium Combo Tray</li>
                    <li>- 1 Choice of Pasta</li>
                    <li>- 1 Choice of Pica-pica</li>
                    <li>- 2 Mushroom Soup</li>
                    <li>- 4 Small Iced Tea</li>
                    <li>- 1 Bowl of Rice</li>
                </ul>
            </div>
            <div class="quantityFood">
                <div class="form-group">
                    <label>Quantity: </label>
                    <div class="input-group d-flex justify-content-center">
                        <div class="input-group-btn">
                            <button class="down btn btn-default" onclick="down('0')"><span class="fas fa-minus"></span></button>
                        </div>  
                        <input type="text" id="myNumber" class="input-number" value="1" />
                        <div class="input-group-btn">
                            <button class="up btn btn-default" onclick="up('10')"><span class="fas fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totalPrice d-flex justify-content-end">
                <small>Total Price: <span>P 1,880</span></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>

    <script src="./js/menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>

</body>
</html>