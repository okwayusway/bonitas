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

$sqlPendingOrders = "Select * From orders where ordered_by=$userId AND order_status !='DONE'";
$pendingOrders = array();

$pendingOrdersResult = mysqli_query($conn, $sqlPendingOrders);
if(!$pendingOrdersResult){
  echo 'Could not run query: ' . mysqli_error();
  exit;
}

while($pendingOrderRow = $pendingOrdersResult -> fetch_assoc()) {
  $pendingOrders[]= $pendingOrderRow;
}

$sqlfinishedOrders = "Select * From orders where ordered_by=$userId AND order_status='DONE'";
$finishedOrders = array();

$finishedOrdersResult = mysqli_query($conn, $sqlfinishedOrders);
if(!$finishedOrdersResult){
  echo 'Could not run query: ' . mysqli_error();
  exit;
}

while($finishedOrderRow = $finishedOrdersResult -> fetch_assoc()) {
  $finishedOrders[]= $finishedOrderRow;
}



$conn -> close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user.css">
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>Bonitas | My Account</title>
</head>
<body>

    <!--Navbar-->
  <nav class="navigation-bar">
      <div class="navigation-logo">
          <img class="logo" src="./Images/bonitaslogo.png" alt="">
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
        <li class="list_item"><a href="user.html" class="link_hover"><i class="las la-user-circle icon_link" id="profile"></i>My Profile</a>
        <li class="list_item"><a href="" class="link_hover"><i class="las la-shopping-bag icon_link"></i>My Orders</a>
        <li class="list_item"><a href="" class="link_hover"><i class="las la-door-open icon_link"></i>Logout</li></a>
      </ul>
    </div>
  </div>

  <div class="navigation-menu">
    <i class="las la-times" id="close-menu"></i>
    <div class="additional-img"><img src="./Images/pexels-eva-elijas-6956352.jpg" alt=""></div>
    <div class="list">
      <ul class="navigation-list">
        <li class="navigation-item"><a href="./index.php" class="navItem-list">Home</a></li>
        <li class="navigation-item"><a href="./menu.php" class="navItem-list">Menu</a></li>
        <li class="navigation-item"><a href="./reservation.php" class="navItem-list">Reservation</a></li>
      </ul>
    </div>
  </div>

  <div class="container-body">
    <div class="content">
        <h1 class="text-title">My Account</h1>
        <div class="content-1">
            <div class="user-profile">
                <i class="las la-user-circle" id="user-avatar"></i>
            </div>
            <div class="user-credentials">
                <h2 class="user-name">"<?php echo $userInfo[0]["first_name"]." ".$userInfo[0]["last_name"]; ?>"</h2>
                <h4 class="user-email">"<?php echo $userInfo[0]["email"]; ?>"</h4>
                <h4 class="user-phone">"<?php echo $userInfo[0]["phone_number"]; ?>"</h4>
            </div>
        </div>
        <div class="content-2">
            <button class="btn btn-default" data-toggle="modal" data-target="#EditModal"><i class="las la-pen"></i>Edit profile..</button>
        </div>
        <div class="content-3">
          <div class="activeOrders">
              <div class="activeTitle">
                <h5>Active Orders</h5>
              </div>
              <div class="tableActive table-responsive mt-2">
                <table class="table table-bordered">
                  <thead>
                    <th class="text-center">Order no.</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Orders</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">MOP-Status</th>
                    <th class="text-center">Status</th>
                 
                  </thead>
                  <tbody>
                    <?php 
                    foreach($pendingOrders as $orders){
                      $orderDetails = json_decode($orders["order_raw_details"], true);
                      $detailsContainer ="";
                      foreach($orderDetails as $details){
                        $detailsContainer .= '<div class="row">
                        <div class="col-sm font-weight-bold h6 text-left">
                         '.$details["name"].'
                        </div>
                        <div class="col-sm text-muted text-center">
                        x'.$details["orderTotal"].'
                        </div>
                        <div class="col-sm text-muted text-center">
                        ₱'.$details["price"].'
                        </div>
                        </div>';
                      }
                      $orderDetailsMap = array_column($orderDetails,'name', 'total');
                      echo '
                      <tr>
                      <td class="text-center">'.$orders["id"].'</td>
                      <td class="text-center">'.$orders["ordered_at"].'</td>
                      <td class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#order-'.$orders["id"].'">
                       Show more info
                    </button></td>
                      <td class="text-center">₱'.$orders["total_price"].'</td>
                      <td class="text-center">'.$orders["order_status"].'</td>
                      <td class="text-center">COD <span class="badge badge-danger">Unpaid</span></td>
                      </tr>
                      ';

                      echo ' <!-- Modal -->
                      <div class="modal fade" id="order-'.$orders["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Order Info</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                             <div class="container">
                             '.$detailsContainer.'
                             </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
          <div class="pastOrders">
            <div class="pastTitle">
              <h5>Past Orders</h5>
            </div>
              <div class="tablePast table-responsive mt-2">
                <table class="table table-bordered">
                  <thead>
                   <th class="text-center">Order no.</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Orders</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">MOP-Status</th>
                    <th class="text-center">Status</th>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($finishedOrders as $orders){
                      echo '
                      <tr>
                      <td class="text-center">"'.$orders["id"].'"</td>
                      <td class="text-center">"'.$orders["ordered_at"].'"</td>
                      <td class="text-center">Julius Boomer</td>
                      <td class="text-center">"'.$orders["total_price"].'"</td>
                      <td class="text-center">"'.$orders["order_status"].'"</td>
                      <td class="text-center">COD <span class="badge badge-danger">PAID</span></td>
                      </tr>
                      ';
                    }
                    ?>                 
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="CancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 600;">Cancel Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <p>Are you sure you want to cancel your order?</p>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-success">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 600;">Edit Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow-y: scroll; height: 400px;">
            <form action="">
                <div class="input-group">
                  <label for="ppicture">Profile Picture:</label>
                  <input type="file" id="ppicture" class="input-control">
                </div>
                <div class="input-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" class="input-control">
                </div>
                <div class="input-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" class="input-control">
                </div>
                <div class="input-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" class="input-control">
                </div>
                <div class="input-group">
                    <label for="num">Contact Number:</label>
                    <input type="number" id="num" class="input-control">
                </div>
                <hr>
                <label style="font-weight: 600;">Change Address</label>
                <div class="input-group">
                  <label for="Street">Street no./House no.:</label>
                  <input type="text" id="Street" class="input-control">
                </div>
                <div class="input-group">
                  <label for="brgy">Barangay:</label>
                  <input type="text" id="brgy" class="input-control">
                </div>
                <div class="input-group">
                  <label for="city">City:</label>
                  <input type="text" id="city" class="input-control">
                </div>
                <div class="input-group">
                  <label for="prov">Province:</label>
                  <input type="text" id="prov" class="input-control" value="Bulacan" disabled>
                </div>
                <hr>
                <label style="font-weight: 600;">Change Password</label>
                <div class="input-group">
                    <label for="curPt">Current Password:</label>
                    <input type="password" id="curP" class="input-control">
                </div>
                <div class="input-group">
                    <label for="newP">New Password:</label>
                    <input type="password" id="newP" class="input-control">
                </div>
            </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
</div>
 `
        <!-- partial -->
        <script src="js/user.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
  </html>