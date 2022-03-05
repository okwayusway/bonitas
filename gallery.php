<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bonitas | Gallery</title>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet"/>
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="./css/gallery.css" />
    <!-- Fancy Box -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  </head>
  <body>
        <!-- Gallery Section -->

        <nav class="navigation-bar">
                <div class="navigation-logo">
                    <img class="logo" src="Images/bonitaslogo.png" alt="">
                </div>
                <?php 
                 if(isset($_SESSION["userid"])){
                  echo "<div class='user_avatar'><i class='las la-user-circle' id='avatar'></i></div>";
                 }
                 else{
                  echo "<div class='login_con'><a href='login.php' class='button_login'>Login</a></div>";  
                 }
                ?>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>

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

        <div class="user_hover">
        <div class="hover_list">
        <ul class="hover_content">
                <li class="list_item"><a href="./user.php" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
                <li class="list_item"><a href="" class="link_hover"><i class="las la-shopping-bag icon_link"></i>My Orders</a>
                <li class="list_item"><a href="./php/logout.php" target="_self" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
        </ul>
        </div>
        </div>

        <div class="container-fluid">
               <div class="con-gallery1">
                <div class="row mt-4">
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/bona.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/bona.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/bona2.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/bona2.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/bona3.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/bona3.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/charity.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/charity.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/charity2.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/charity2.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/charity3.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/charity3.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>

                </div>
                <div class="row mt-4">
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/cupcake.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/cupcake.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/3sides.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/3sides.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/cake.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/cake.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/meat.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/meat.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/americano.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/americano.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                        <div class="item col-sm-6 col-md-4 mb-3">
                                <a href="./Images/Gallery Images/delicacies.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="./Images/Gallery Images/delicacies.jpg" alt="" width="100%" height="100%">
                                </a>
                        </div>
                </div>
               </div>
        </div>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
        <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
        <script  src="./js/gallery.js"></script>
        <script src="./js/cart.js"></script>

  </body>
</html>
