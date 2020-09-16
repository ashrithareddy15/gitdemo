<?php
include_once('config.php');
include 'processform.php';

 if(!isset( $_SESSION['adminemail'])){
     echo'<script> setTimeout(function () {
         window.location.href = "http:/herright/login.php";
      }, 0);</script>';
    }
  else {


$sql="SELECT * from orders_table";
$result=mysqli_query($conn,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>





<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .full-height li:hover, .full-height li:active{
            background: rgb(150, 36, 112);
        }
        </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <div class="container3">
        <div class=row>
    <div class="col-4" style="margin-left:-15px;" >
        <!--<div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        herrightfoundation@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        6302585792
                    </div>
                </div>
                <div class="ht-right">
                    <a href="./login.php" class="login-panel"><i class="fa fa-user"></i>Login</a> 
                                        
                 </div>
                    
                </div>
            </div>-->
        
                    
        <div class="nav-item" >
            <div class="canter1">
            <div class="container">
               <!-- <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="position-fixed" style="float:right; margin-right:50px; position: -webkit-sticky; position:sticky;">                    
                <nav class="full-height" style="width:300px;  background:black;position:relative; height: 100vh;">
                    <ul>
                           <div class="logo" style="margin-left:10px;">
                            <a href="./index.html">
                                <img src="img/font1.png" alt="" style="margin-top:30px;" padding:0 0>
                            </a>
                        </div>
                        <li style="list-style-type: none; margin-top: 20px; width:250px;"><a href="customerdetails.php" style="text-decoration:none; color:white ;font-size:20px ">view customer details</a></li>
                        <li style="list-style-type: none; margin-top: 20px; width:250px;"><a href="shop_cart.php" style="text-decoration:none; color:white ;font-size:20px ">Insert products</a></li>
                        <li  style="list-style-type: none; margin-top: 20px; width:250px;"><a href="productlist.php" style="text-decoration:none; color:white ;font-size:20px ">View Products</a></li>
                        <li style="list-style-type: none; margin-top: 20px; width:250px;"><a href="adminorders.php" style="text-decoration:none; color:white ;font-size:20px ">View Orders</a></li>
                         
                         <!--   <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </nav>
</div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        </div>
      
        </div>

        <div class="col-8" style="margin-left:-150px;">

   <div class="wrapper" style="padding:0px;max-width:100%;">
      <h3 style="text-align:left;">Orders</h3>
      <table class="table table-striped table-dark">

         <col style="width:7%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:15%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:15%"/>
         <thead>
             <tr>
              
                <th scope="col">Order id</th>
                <th scope="col">Customer id</th>
                <th scope="col">Cart id</th>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
              </tr>
         </thead>    
            </table>
        <table class="table">
        <col style="width:7%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:15%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:10%"/>
         <col style="width:15%"/>
            <?php foreach($users as $user):?>  
                
                <?php 
                $userimg=$user['image'];
                $userimg=explode(" ",$userimg);
                //print_r($userimg[0]);
                ?>
                <tr>
            
          
            
           <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['orderid']?></th>
            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['customer_id']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['cartid']?></th>
            <th scope="col"> <img src="./shopping_img/<?=$userimg[0]?>" style="max-width:20%;"></a></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['productname']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['quantity']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['price']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['status']?></th>
            
          </tr>
      <?php endforeach; ?>
     </table>         
</div>
</div>
        </div>
    </div><!--
 <footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-0 ">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="img/footer-logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-widget">
                    <h5>Contact Us</h5>
                    <ul>
                        <li style="color:rgba(245, 245, 245, 0.548);">Address: HYDERABAD</li>
                        <li style="color:rgba(245, 245, 245, 0.548);">Phone: +91 6302585792</li>
                        <li style="color:rgba(245, 245, 245, 0.548);">Email: herrightfoundation@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="blog.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
  
</footer>-->
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery.dd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
<?php
  }
  ?>