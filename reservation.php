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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="./css/reserve.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Bonitas | Reservation</title>
</head>
<body>
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
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>
<div class="user_hover">
  <div class="hover_list">
    <ul class="hover_content">
      <li class="list_item"><a href="user.html" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
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



    <!-- Content Reservation -->

    <div class="div-container">
        <div class="main-content">
            <div class="reserve-content">
                <h1 class="some-text">Reserve your table <br>for any occasion</h1>
                <button class="btn-book" data-toggle="modal" data-target="#reserveModal">reserve now</button>
            </div>
        </div>
    </div>

    <!-- End -->

<!-- Modal for reserve -->
<div class="modal fade" id="reserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
              <h5 class="conModal-title">Select your option.</h5>
              <form action="" class="option-button">
                  <div class="btn-dineIn">
                    <input type="button" value="Dine-In" data-dismiss="modal" data-toggle="modal" data-target="#dineIn-container">
                  </div>
                  <div class="btn-events">
                    <input type="button" value="Events" data-dismiss="modal" data-toggle="modal" data-target="#event-container">
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Okay</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#incomingOrders">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="dineIn-container" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Dine-In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
              <form action="" class="date-time">
                <div class="calendar">
                  <h3 class="choose-date">Choose a date:</h3>
                  <input type="date" name="date" id="#book-date">
                </div>
                <div class="time-button">
                  <input type="button" value="8:00am - 10:00am">
                  <input type="button" value="10:00am - 12:00pm">
                  <input type="button" value="12:00pm - 2:00pm">
                  <input type="button" value="2:00pm - 4:00pm">
                  <input type="button" value="4:00pm - 6:00pm">
                </div>
                <div class="num-people">
                  <h3 class="numPerson-text">Number of person:</h3>
                  <input type="number" name="date" id="#number-people">
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success"  data-dismiss="modal" data-toggle="modal" data-target="#event-details">Okay</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#incomingOrders">Back</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="event-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Additional Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
              <div class="date-container">
                <div class="date-info">
                  <i class="las la-calendar"></i>
                  <div class="date-con">
                    <h3 class="date-text">Friday, February 25, 2022</h3>
                  </div>
                </div>
              </div>
              <div class="time-container">
                <div class="time-info">
                  <i class="las la-clock"></i>
                  <div class="time-con">
                    <h3 class="time-text">10:00am - 12:00pm</h3>
                  </div>
                </div>
              </div>
              <div class="numOf-person">
                <div class="person-info">
                  <i class="las la-user-friends"></i>
                  <div class="person-con">
                    <h3 class="person-text">3 persons</h3>
                  </div>
                </div>
              </div>
          </div>
          <div class="btnBook-container">
            <button class="btn-create" id="btn-book">Book now</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="event-container" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">events</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex justify-content-center">
                <div class="eventF-div">
                  <h3 class="eventF-title">WE ACCEPT CUSTOMIZED BOOKINGS!</h3>
                  <div class="list-events">
                    <ul>
                      <li><i class="las la-check-circle"></i>Weddings</li>
                      <li><i class="las la-check-circle"></i>Baptismal</li>
                      <li><i class="las la-check-circle"></i>Meetings</li>
                      <li><i class="las la-check-circle"></i>Birthdays</li>
                      <li><i class="las la-check-circle"></i>Other Events</li>
                    </ul>
                  </div>
                </div>
                <div class="eventS-div">
                  <h3 class="eventS-title">FOR LIMITED TIME ONLY!</h3>
                  <h5>For inquiries, please contact us at:</h5>
                  <div class="info-events">
                    <h3><i class="las la-phone"></i>09054049421</h3>
                    <a href=""><i class="lab la-facebook"></i>Bonita's Coffee.Tea.Bread + Steak</a>
                    <a href=""><i class="lab la-instagram"></i>@bonitascoffeeteabread</a>
                  </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#incomingOrders">Back</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End -->
      
            <!-- partial -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script  src="./js/reserve.js"></script>
</body>
</html>