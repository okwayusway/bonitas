<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Bonita's Bulacan</title>
</head>
<body>
    <!--Navbar-->
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
      <div class="cart">
        <a href=""><i class="las la-shopping-bag" id="shopping-bag"></i></a>
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
        <li class="list_item"><a href="./php/logout.php" target="_self" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
      </ul>
    </div>
  </div>

  <div class="navigation-menu">
    <i class="las la-times" id="close-menu"></i>
    <div class="additional-img"><img src="Images/img-menu.jpg" alt=""></div>
    <div class="list">
      <ul class="navigation-list">
        <li class="navigation-item"><a href="index.html" class="navItem-list">Home</a></li>
        <li class="navigation-item"><a href="menu.html" class="navItem-list">Menu</a></li>
        <li class="navigation-item"><a href="reservation.html" class="navItem-list">Reservation</a></li>
      </ul>
    </div>
  </div>

    <!--Home-->
    <header class="py-4 bg-image-full" style="background-image: url('Images/bgImg.jpg')">
        <div class="text-center my-5 info">
            <h1>With God All Things Are Possible</h1>
            <h4>Matthew 19:26</h4>
        </div>
    </header>
    <!--Featured Carousel-->
    <!-- <div class="carousel-wrap">
        <div class="carousel-title">
            <h2><span>Featured</span>  Menu</h2>
        </div>
        <div class="owl-carousel">
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/Carbs.jpg" width="150px" height="auto"></div>
          <div class="item"><img src="Images/chickens.jpg" width="150px" height="auto"></div>
        </div>
        <div class="carousel-btn">
            <button class="btn btn-primary">check the menu</button>
        </div>
      </div> -->

      <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <img src="Images/slide-01.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="carousel_text">Try our blueberry cheese cake for only P105.00.</h1>
                <p class="lead"></p>
                <a class="btn btn-large btn-primary" href="menu.html">View menu</a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="Images/slide-02.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="carousel_text">Craving for this? check out now for only P225.00.</h1>
                <p class="lead"></p>
                <a class="btn btn-large btn-primary" href="menu.html">View menu</a>
              </div>
            </div>
          </div>
          <div class="item active">
            <img src="Images/slide-03.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="carousel_text">Ribs steak available at Bonita's.</h1>
                <p class="lead"></p>
                <a class="btn btn-large btn-primary" href="menu.html">View menu</a>
              </div>
            </div>
          </div> 
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>



      <!-- Eend -->


      <!--Our story-->

      <!-- Gallery -->

      <div class="gallery-con">
        <div class="image-gallery">
            <div class="gallery-title">
                <h2> our <span>Gallery</span></h2>
            </div>
            <div class="image-box">
              <img src="Images/sotry1.jpg" alt="img.jpg" />
              <div class="overlay">
                <div class="details">
                  <h3 class="title">
                    <a href="https://www.facebook.com/bonitascoffeeteabread">Bonitas Daily</a>
                  </h3>
                  <span class="category">
                    <a>Check our daily habit.</a>
                  </span>
                </div>
              </div>
            </div>
            <div class="image-box" onclick="window.location.href='https://www.facebook.com/bonitascoffeeteabread'">
              <img src="Images/story2.jpg" alt="img.jpg" />
              <div class="overlay">
                <div class="details">
                  <h3 class="title">
                    <a href="https://www.facebook.com/bonitascoffeeteabread">Satisfied Customers</a>
                  </h3>
                  <span class="category">
                    <a>What are you waiting for? <br> Be our satisfied customers</a>
                  </span>
                </div>
              </div>
            </div>
            <div class="image-box">
              <img src="Images/story3.jpg" alt="img.jpg" />
              <div class="overlay">
                <div class="details">
                  <h3 class="title">
                    <a href="https://www.facebook.com/bonitascoffeeteabread">Our Delicacy</a>
                  </h3>
                  <span class="category">
                    <a>Check the story behind<br> our delicious menu</a>
                  </span>
                </div>
              </div>
            </div>
            <div class="image-box">
              <img src="Images/story-4.jpg" alt="img.jpg" />
              <div class="overlay">
                <div class="details">
                  <h3 class="title">
                    <a href="https://www.facebook.com/bonitascoffeeteabread">Sweet Tooths</a>
                  </h3>
                  <span class="category">
                    <a href="#">Do you have a Sweet tooths?<br> Wanna check our mouthwatering cakes.  </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="image-box">
              <img src="Images/story5.jpg" alt="img.jpg" />
              <div class="overlay">
                <div class="details">
                  <h3 class="title">
                    <a href="https://www.facebook.com/bonitascoffeeteabread">Bonitas Events</a>
                  </h3>
                  <span class="category">
                    <a>History does not belong to us,<br> We belong to it.</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
      </div>

    <!-- Our Story -->
    
    <div class="about-container">
      <div class="about-section">
        <div class="inner-container">
            <h1>Let's Talk About Bonitas</h1>
            <p class="text">
              The Bonita's Cafe success is not an easy road. Against all those hardships Bona stay strong and faithful to god until she reach where she is now.  Even at the young age bona try different type of business that will give her an income. As she is the eldest one in her siblings she persevere and became hardworking to reach her dreams. The Bonitas we know today, start from a humble begining of a simple milk tea/frappe shop. As time comes it became an actual cafe and it expands and expands because of the hardwork of Bona.
            </p>
            <a href="https://www.facebook.com/bonitascoffeeteabread" class="about_bonitas">See more</a>
        </div>
      </div>
    </div>
    <div class="about-container-2">
      <div class="about-section-left">
        <div class="inner-container-left">
            <h1>Location</h1>
            <p class="text">
               We are located at Gov. F. Halili Ave 3022 Santa Maria Bulacan, Come and taste our best dishes here at Bonitas.
            </p>
            <p class="view-map">View map</p>
            <div class="map-container">
              <iframe class="map-bonitas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15428.968240711818!2d120.9486111!3d14.8116667!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x397c0a9aca9bf1c7!2sBonita&#39;s!5e0!3m2!1sfil!2sph!4v1636519260302!5m2!1sfil!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <i class="las la-times" id="close-map"></i>
            </div>
        </div>
      </div>
    </div>


    <!-- FAQ -->
    <div class="faq-body">
      <main class="wrapper">
        <div class="image__wrapper">
            <div class="image__wrapper_inner">
  
            </div>
        </div>
      <div class="accordion__wrapper">
        <h1 class="title__accordion">FAQ</h1>
        <div class="questions__accordions">
            <div class="question-answer__accordion">
                <div class="question">
                    <h3 class="title__question">
                        How to earn more coupon?
                    </h3>
                    <img class="arrow-img" src="Images/icon-arrow-down.svg" >
                </div>
                <div class="answer">
                     By ordering thru our website our buying some food in our Cafe.
                </div>
            </div>
  
            <div class="question-answer__accordion">
                <div class="question">
                    <h3 class="title__question">
                        What is the payment option by Bonitas?
                    </h3>
                    <img class="arrow-img" src="Images/icon-arrow-down.svg" >
                </div>
                <div class="answer ">
                    You can pay via GCash or COD (Cash on Delivery).
                </div>
            </div>
  
            <div class="question-answer__accordion">
                <div class="question">
                    <h3 class="title__question">
                        Can we reserve a table for some events?
                    </h3>
                    <img class="arrow-img" src="Images/icon-arrow-down.svg" >
                </div>
                <div class="answer ">
                    Yes, you can reserve a table for some events just visit the reservation page of Bonitas. Thankyou :)
                </div>
            </div>
  
            <div class="question-answer__accordion">
                <div class="question">
                    <h3 class="title__question">
                        Can I cancel my subscription?
                    </h3>
                    <img class="arrow-img" src="Images/icon-arrow-down.svg" >
                </div>
                <div class="answer ">
                    Yes! Send us a message and we???ll process your request no questions asked.
                </div>
            </div>
            
            <div class="question-answer__accordion">
                <div class="question">
                    <h3 class="title__question">
                        Do you provide additional support?
                    </h3>
                    <img class="arrow-img" src="Images/icon-arrow-down.svg" >
                </div>
                <div class="answer ">
                    Chat and email support is available 24/7. Phone lines are open during normal business hours.
                </div>
            </div>
  
        </div>
    </div>
    </main>
    </div>
  <!-- Footer -->
  <footer>
    <div class="footer-content">
    <h1>About Us</h1>
    <p>We are 4th year students from PUP Sta Maria and we developed this website for our capstone project requirement.</p>
    <ul class="socials">
        <li><a href="https://www.facebook.com/bonitascoffeeteabread"><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
    </ul>
         <p>CopyRights &copy; 2022 Bonita's Cafe Design by Coffestone</p>
     </div>
  </footer>

      <!-- partial -->
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <script>
        !function ($) {
          $(function(){
            // carousel demo
            $('#myCarousel').carousel()
          })
        }(window.jQuery)
      </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script  src="./js/index.js"></script>


</body>
</html>