<?php

session_start();
 if(!isset( $_SESSION['adminemail'])){
     echo'<script> setTimeout(function () {
         window.location.href = "http:/herright/login.php";
      }, 0);</script>';
 } else {
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer data</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/styleherright.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

       <!-- Header Section Begin -->
       <div class="container3">
        <div class=row>
    <div class="col-4"  >
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
        <div class="col-8" >
    <!-- Header End -->
    <h2>CUSTOMER DETAILS</h2>
    <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table tr:nth-child(even) {
  background-color:#e0a9c8 ;
}


table th {
  background-color: black;
  color: white;
}
</style>
    <table border="1">
        <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Password</td>
        <td>Contact</td>
        <td>Mail</td>
        <td>City</td>
</tr>
<?php
  include_once("config.php");

  // Fetch all users data from database
 
  $result=$dbConnect->prepare("SELECT customer_id,username,password,contact,email,city from customer_details_table ORDER BY customer_id");
  $result->execute();
  $query=$result->fetchAll();
    foreach($query as $row) { 
        echo "<tr><td>".$row["customer_id"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["city"]."</td><tr>";
    }
    echo "</table>";
?>
</div>
</div>
</div>
 <!-- Footer Section Begin -->
 <!--<footer class="footer-section">
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
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
<?php
 }
 ?>