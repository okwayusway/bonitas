<?php 
    include('connection.php');

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
    <link rel="stylesheet" href="css/reservation_list.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Bonitas | Reservation List</title>
</head>
<body>
  <nav class="navigation-bar">
    <div class="navigation-logo">
        <img class="logo" src="./Images/bonitaslogo.png" alt="">
    </div>
    <div class="user_avatar">
      <i class="las la-user-circle" id="avatar"></i>
    </div>
    <div class="cart">
      <a href=""><i class="las la-shopping-bag" id="shopping-bag" alt="tooltip" title="Waiting list" onclick="window.location.href='waiting_list.html'"></i></a>
    </div>
    <div class="btn_logout">
      <a href=""><i class="las la-door-open" id="logout"></i></a>
    </div>
</nav>
<div class="user_hover">
  <div class="hover_list">
    <ul class="hover_content">
      <li class="list_item"><a href="./admin_panel.html" class="link_hover"><i class="las la-columns icon_link"></i>Dashboard</a>
      <li class="list_item"><a href="./orders.html" class="link_hover"><i class="las la-shopping-cart icon_link"></i>Orders</a>
      <li class="list_item"><a href="./adminfoods.html" class="link_hover"><i class="las la-utensils icon_link"></i>Foods</a>
      <li class="list_item"><a href="./reservation_list.html" class="link_hover"><i class="las la-clipboard-check icon_link"></i>Reservation</li></a>
    </ul>
  </div>
</div>

    <div class="container tMore">
      <div class="row">
        <div class="title-des d-flex justify-content-between mb-3">
          <div class="tName">
            <h3 class="fw-bold">Pending Reservation</h3>
          </div>
          <div class="searchBar">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
          </div>
        </div>
        <div class="col-lg-12 table-responsive">
          <table class=" table">
            <thead>
              <td class="text-center">Reservation ID</td>
              <td class="text-center">Name</td>
              <td class="text-center">Date/Time</td>
              <td class="text-center">No.Person</td>
              <td class="text-center">Contact No.</td>
              <td class="text-center">Decline</td>
              <td class="text-center">Accept</td>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">01212</td>
                <td class="text-center">Julius Carino</td>
                <td class="text-center">March 4, 2022 | 10:00am to 12:00pm</td>
                <td class="text-center">3</td>
                <td class="text-center">0928323212</td>
                <td class="text-center" style="cursor: pointer; color: red;"><i class="fas fa-trash-alt" alt="tooltip" title="Delete"></i></td>
                <td class="text-center" style="cursor: pointer; color: green;"><i class="fas fa-check" alt="tooltip" title="Accept"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <div class="container tMore">
      <div class="row">
        <div class="title-des d-flex justify-content-between mb-3">
          <div class="tName">
            <h3 class="fw-bold">Reserved Date</h3>
          </div>
          <div class="searchBar">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
          </div>
        </div>
        <div class="col-lg-12 table-responsive">
          <table class=" table">
            <thead>
              <td class="text-center">Reservation ID</td>
              <td class="text-center">Name</td>
              <td class="text-center">Date/Time</td>
              <td class="text-center">No.Person</td>
              <td class="text-center">Status</td>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">01212</td>
                <td class="text-center">Julius Carino</td>
                <td class="text-center">March 4, 2022 | 10:00am to 12:00pm</td>
                <td class="text-center">3</td>
                <td class="text-center">Reserved</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <script src="js/reservation_list.js"></script>

</body>
</html>