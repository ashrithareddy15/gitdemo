<?php
include 'processform.php';
include_once('config.php');

 if(!isset( $_SESSION['adminemail'])){
     echo'<script> setTimeout(function () {
         window.location.href = "http:/ashion/login.php";
      }, 0);</script>';
     } else {


$sql="SELECT * from shopping_cart";
$result=mysqli_query($conn,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);
if(isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php
 echo $_SESSION['message'];
 unset($_SESSION['message']);
?>
</div>
<?php
 endif ?>




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
                        ashionfoundation@gmail.com
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

    <div class="wrapper" style="padding:0px;max-width: 78%;margin-left: -154px;"">
      <h3>Products in Cart</h3>

      <a href="shop_cart.php"><button class="btn btn-success" style="float: right;margin-top: -69px;">Add Product</button></a>
      <table class="table table-striped table-dark">
      <col style="width:5%"/>
         <col style="width:10%"/>
         <col style="width:20%"/>
         <col style="width:5%"/>
         
         <col style="width:20%"/>
         <col style="width:10%"/>
         <col style="width:5%"/>
         
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:20%"/>
         <thead>
             <tr>
               
                <th scope="col">Cart id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
               
                <th scope="col">Description</th>
                <th scope="col">Categories</th>
                <th scope="col">Color</th>
                
                <th scope="col">Stock</th>
                <th scope="col">Brand</th>
                <th scope="col">#</th>
              </tr>
         </thead>    
            </table>
        <table class="table">
        <col style="width:10%"/>
         <col style="width:20%"/>
         <col style="width:5%"/>
         
         <col style="width:20%"/>
         <col style="width:10%"/>
         <col style="width:5%"/>
         
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:20%"/>
            <?php foreach($users as $user):?>  
                
                <?php 
                $userimg=$user['image'];
                $userimg=explode(" ",$userimg);
                //print_r($userimg[0]);
                ?>
                <tr>
           

            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['cartid']?></th>
            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['name']?></th>
            <th scope="col"> <img src="./shopping_img/<?=$userimg[0]?>" style="max-width:30%;"></a></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['price']?></th>
          
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['description']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['categories']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['color']?></th>
           
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['stock']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['brand']?></th>
            <th scope="col" class="icon" >
            <a href="edit_variations.php?edit=<?php echo $user['cartid'];?>" style="cursor:pointer;"
            class="btn btn-success">View</a> 
            <br>
            <a href="variations.php?variations=<?php echo $user['cartid'];?>" style="cursor:pointer;"
            class="btn btn-info" style="padding-top: 10px; margin-top: 20px;">Add colors for the product</a> 
            </th>
          </tr>
         
            
      <?php endforeach; ?>


      </table>


            


           
</div>






    <br>
     <br>
     <br>
     <br>


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