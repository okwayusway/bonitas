<?php
include './php/dbconnection.php';

$sqlPendingOrders = "Select * From orders where order_status ='PENDING'";
$pendingOrders = array();

$pendingOrdersResult = mysqli_query($conn, $sqlPendingOrders);
if(!$pendingOrdersResult){
  echo 'Could not run query: ' . mysqli_error();
  exit;
}

while($pendingOrderRow = $pendingOrdersResult -> fetch_assoc()) {
  $pendingOrders[]= $pendingOrderRow;
}

$sqlPrepairingOrders = "Select * From orders where order_status ='PREPAIRING'";
$prepairingOrders = array();

$prepairingOrdersResult = mysqli_query($conn, $sqlPrepairingOrders);
if(!$prepairingOrdersResult){
  echo 'Could not run query: ' . mysqli_error();
  exit;
}

while($prepairingOrderRow = $prepairingOrdersResult -> fetch_assoc()) {
  $prepairingOrders[]= $prepairingOrderRow;
}

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/orders.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Bonitas | Orders</title>

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
        <li class="list_item"><a href="reservation_list.html" class="link_hover"><i class="las la-clipboard-check icon_link"></i>Reservation</li></a>
      </ul>
    </div>
  </div>

    <div class="main-content">
      <div class="container">
          <div class="row">
                <div class="col-12 col-md-3 orders">
                    <h4 class="fw-bold lTitle"><i class="fas fa-clipboard"></i> Incoming Orders</h4>
                    <ul class="list-group">
                        <?php
                         foreach($pendingOrders as $orders){
                            $orderDetails = json_decode($orders["order_raw_details"], true);
                            $user = array();    
                            $userid = $orders["ordered_by"];
                            $usql = "Select * From users where userid=$userid";
                            
                            $uresult = mysqli_query($conn, $usql);
                            
                            if (!$uresult) {
                                echo 'Could not run query: ' . mysqli_error();
                                exit;
                            }
                            
                            while($urow = $uresult->fetch_assoc()) {
                              $user[]= $urow;
                            }


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


                             echo ' <li class="list-group-item" data-toggle="modal" data-target="#incoming-'.$orders["id"].'">ORDER-00'.$orders["id"].'</li>';
                             echo '   <div class="modal fade" id="incoming-'.$orders["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">ORDER-00'.$orders["id"].'</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                     <div class="deets_modal">
                                         <div class="dhead d-block">
                                             <p style="font-weight: 600;">Name: <span>'.$user[0]["first_name"]." ".$user[0]["last_name"].'</span></p>
                                             <p style="font-weight: 600;">Address: <span>'.$user[0]["household_no"]." ".$user[0]["street"]." ".$user[0]["barangay"]." ".$user[0]["city"].'</span></p>
                                         </div>
                                         <label for="ul">Order(s):</label>
                                         <ul>
                                          '.$detailsContainer.'
                                         </ul>
                                     </div>
                                     <div class="totalPrice d-flex justify-content-end">
                                         <small class="fw-bold">Total Price: <span>P '.$orders["total_price"].'</span></small>
                                     </div>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#timeKitchen-'.$orders["id"].'" data-dismiss="modal">Confirm Order</button>
                                 </div>
                               </div>
                             </div>
                           </div>';

                           echo '  <div class="modal fade" id="timeKitchen-'.$orders["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Estimated Time in the Kitchen</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body d-flex justify-content-center">
                                   <form action="">
                                       <label for="KTime" style="margin-right: 5px;">Estimated Time:</label>
                                       <select class="form-select" aria-label="Default select example">
                                           <option selected>Select time</option>
                                           <option value="1">2-5 minutes</option>
                                           <option value="2">5-10 minutes</option>
                                           <option value="3">10-15 minutes</option>
                                           <option value="4">15-20 minutes</option>
                                           <option value="5">20-30 minutes</option>
                                         </select>
                                   </form>
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-success"  onclick="addToKitchen('.$orders["id"].')"  id="tokitchen-'.$orders["id"].'" data-order="'.$orders["id"].'" >Okay</button>
                                 <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#timeKitchen-'.$orders["id"].'">Cancel</button>
                               </div>
                             </div>
                           </div>
                         </div>';
                         }
                        ?>
                    </ul>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-lg-12 +">
                            <h4 class="fw-bold lTitle"><i class="fas fa-utensils"></i> In the Kitchen</h4>
                            <div class="kitchen">
                                <ul class="list-group">
                                   <?php
                                   foreach($prepairingOrders as $p){
                                       echo ' <li class="list-group-item d-flex justify-content-between"><span data-toggle="modal" data-target="#orderSummary">ORDER-00'.$p["id"].'<span class="badge badge-secondary">10-15 minutes</span></span> <button class="btn btn-success" data-toggle="modal" data-target="#prep-'.$p["id"].'">Done</button></li>';
                                       echo ' <div class="modal fade" id="prep-'.$p["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered" role="document">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLongTitle">Estimated Time on Delivery</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                           </div>
                                           <div class="modal-body d-flex justify-content-center">
                                               <form action="">
                                                   <label for="KTime" style="margin-right: 5px;">Estimated Time:</label>
                                                   <select class="form-select" aria-label="Default select example">
                                                       <option selected>Select time</option>
                                                       <option value="1">2-5 minutes</option>
                                                       <option value="2">5-10 minutes</option>
                                                       <option value="3">10-15 minutes</option>
                                                       <option value="4">15-20 minutes</option>
                                                       <option value="5">20-30 minutes</option>
                                                     </select>
                                               </form>
                                           </div>
                                           <div class="modal-footer">
                                             <button type="button" class="btn btn-success">Okay</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                           </div>
                                         </div>
                                       </div>
                                     </div>';
                                   }
                                   ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px;">
                            <h4 class="fw-bold lTitle"><i class="fas fa-shipping-fast"></i> On the Way</h4>
                            <div class="way">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between"><span data-toggle="modal" data-target="#orderSummary"> Order No. 001 <span class="badge badge-secondary">5-10 minutes</span></span> <button class="btn btn-success" data-toggle="modal" data-target="#Delivered">Delivered</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>
    </div>

    <!-- Modal for Incoming Orders -->

      <!-- Modal for order summary -->

    <div class="modal fade" id="orderSummary" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Order Summary No. 001</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="deets_modal">
                  <div class="dhead d-block">
                      <p style="font-weight: 600;">Name: <span>Julius Boomer</span></p>
                      <p style="font-weight: 600;">Address: <span>0570 Sulucan St. Bagbaguin, Sta. Maria, Bulacan</span></p>
                  </div>
                  <label for="ul">Order/s:</label>
                  <ul>
                      <li>- <span>2</span> T-bone Steak w/rice</li>
                      <li>- <span>1</span> Baby Back Ribs Platter</li>
                      <li>- <span>1</span> Trio Bundle Snacks</li>
                  </ul>
              </div>
              <div class="pMethod">
                  <p>Payment Method: <span>GCASH</span> <span class="badge badge-success">Paid</span></p>
              </div>
              <div class="totalPrice d-flex justify-content-end">
                  <small class="fw-bold">Total Price: <span>P 1,000</span></small>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!--modal for estimated time in the kitchen-->
      <div class="modal fade" id="timeKitchen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Estimated Time in the Kitchen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <form action="">
                    <label for="KTime" style="margin-right: 5px;">Estimated Time:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select time</option>
                        <option value="1">2-5 minutes</option>
                        <option value="2">5-10 minutes</option>
                        <option value="3">10-15 minutes</option>
                        <option value="4">15-20 minutes</option>
                        <option value="5">20-30 minutes</option>
                      </select>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Okay</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#incomingOrders">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!--modal for estimated time on delivery-->
      <div class="modal fade" id="timeDelivery" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Estimated Time on Delivery</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <form action="">
                    <label for="KTime" style="margin-right: 5px;">Estimated Time:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select time</option>
                        <option value="1">2-5 minutes</option>
                        <option value="2">5-10 minutes</option>
                        <option value="3">10-15 minutes</option>
                        <option value="4">15-20 minutes</option>
                        <option value="5">20-30 minutes</option>
                      </select>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Okay</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!--Order delivered-->
      <div class="modal fade" id="Delivered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Order Delivered</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
                <p>Are you sure this order has been delivered?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Yes</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <script>
          function addToKitchen(order){
            $.ajax({
            url: './php/update-order.php',
            data: {
              orderId:order,
              preparing:true
            },
            type: 'POST',
            success: function(response) {
                alert("Orders Successfully Updated");
            }
            });
          }
      </script>
      <script src="js/orders.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</body>
</html>