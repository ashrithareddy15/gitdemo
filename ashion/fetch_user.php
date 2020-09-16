<?php
session_start();

  require_once('config.php');
  if(isset($_GET['color']))
  {
    $cartid = $_GET['cartid'];
    $color=$_GET['color'];
    $var=$dbConnect->prepare("SELECT * from shopping_variations WHERE cartid=$cartid AND color='$color'");
    $var->execute();
    $results=$var->fetchAll();
   
    $string=$results[0]['size'];
$parts = explode(',', $string);
$price=$results[0]['price'];
$stock=$results[0]['stock'];
$resultimg=$results[0]['image'];
 $productid=$results[0]['productid'];

$_SESSION['productid']=$productid;

$cartid=$_GET['cartid'];
$color=$_GET['color'];
 $query=$dbConnect->prepare("SELECT name,description,categories,brand from shopping_cart WHERE cartid=$cartid");
    $query->execute();
    $result=$query->fetchAll();
    $name=$result[0]['name'];
    $description=$result[0]['description'];
    $brand=$result[0]['brand'];
    $categories=$result[0]['categories'];
//related products
$q=$dbConnect->prepare("SELECT * from shopping_cart WHERE cartid!=$cartid AND (categories LIKE '%$categories%' OR color LIKE '%$color%' OR brand LIKE '$brand')");
$q->execute();
$r=$q->fetchAll();
$json_array= array();
foreach($r as $row)
{
  $json_array[]=$row;
 
}
$json_data= json_encode($json_array);

// to show all the colors available
$variations=$dbConnect->prepare("SELECT * from shopping_variations WHERE cartid=$cartid");
   $variations->execute();
    $vresult=$variations->fetchAll();
   $count = $variations->rowCount();
   $a= array();
  foreach($vresult as $v)
  {
    $a[]=$v;
  }

$vardata= json_encode($a);
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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
    <link rel="stylesheet" href="css/fetch_userstyle.css" type="text/css">
    <style>
 body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 15%;
  width: auto;
  padding: 16px;
  margin-top: 35%;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 7.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

        </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="wishlist.php"><span class="icon_heart_alt"></span>
                <span class="heart"></span>
            </a></li>
            <li><a href="shop_details.php"><span class="icon_bag_alt"></span>
                <span class="cart"></span>
            </a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
  
      
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
 
         </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="position: fixed; z-index: 1030;width: 100%;">
        <div class="container-fluid">
        <div class="row " style="background: #ffffff;">

                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/font1.png"  style="width:90%" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="blog.html">About</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                    <div class="header__right__auth">
                
      
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>

        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="wishlist.php"><span class="icon_heart_alt"></span>
                                <span class="heart"></span>
                            </a></li>
                            <li><a href="shop_details.php"><span class="icon_bag_alt"></span>
                               <span class="cart"></span>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

     <!-- Breadcrumb Section Begin -->
     <div class="breacrumb-section">
        <div class="container" style="margin-top:0px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                    <a href="shop.php" ><i class="icon_bag_alt" style="width:20px"></i> Shop</a>
                        <span><?php echo $name ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    
    <div class="container">
         <div class="row">
           <div class="col-md-5">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="w3-content" style="max-width:1200px">
                   <?php 
                         
                         $resultimg=explode(" ",$resultimg);
                         $count=count($resultimg)-1;
                         ?>
                         
                           <?php
                              for($i=0;$i<$count;$i++)
                              {
                        ?>
                        
                             <img class="mySlides" src="shopping_img/<?= $resultimg[$i]; ?>" style="width:100%;">
                             
                        <?php
                        }
                        ?>
                         <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)" >❯</a>

                      
                           <div class="container-fluid">
                             <div class="row text-center">
               <!-- <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg" height:150px width:100px>
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a> 
                    </div> 
                </div> -->
                <div class="col-lg-9 offset-lg-1">
                  
                        <?php
                         for($i=0;$i<$count;$i++)
                         {
                        ?>
                      
                                <img class="demo cursor"src="shopping_img/<?= $resultimg[$i]; ?>" alt=""  onclick="currentSlide(<?php echo 1+$i ?>)" style="cursor:pointer; max-width:20%;">                           
                   <?php
                   }
                   ?>
                            
                      </div><!--filter-control-->
                       </div><!--col-lg-10 offset-lg-1-->
                      </div><!--row-->
                    </div><!--container-fluid-->
                   </section><!--women-banner spad-->
                 </div> <!--w3-content-->
                 </div><!--carousel-item active-->
               </div><!--carouselExampleControls-->
              </div><!--col-md-5-->
          
              <div class="col-sm-6" style="margin-left:30px;overflow: auto;width: 585px;height: 560px;">
             <p class="newarrival text-center">NEW</p>
             <h2> <?php echo $name; ?></h2>
             <p class="price">₹ <?php echo $price ?></p>
             <p> <b> COLORS AVAILABLE:</b><?php
              $count=count($a);
              for($i=0;$i<$count;$i++)
              { ?>
                          <a style="color:black;"href="fetch_user.php?cartid=<?php echo $a[$i]['cartid'];?>&color=<?php  echo $a[$i]['color']?>"><p><?php $color_var=explode(",",$a[$i]['color']);?>
                          <?php foreach($color_var as $color_var) {?>
                          <button type="button" class="btn btn-circle btn-sm" style="position:relative;background:<?php echo $color_var;?>;" ></button><?php echo $color_var;?>&nbsp; &nbsp;<?php } ?><?php } ?> </a>
             <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <table class="size-table">
                                        <tbody>
                                            <tr>
                                                <td class="label">
                                                 <p><b style="font-weight: bolder;"> SIZE: </b></p>
                                                
                                                </td>
                                                <td class="data">
                                                
                                    <select class="sorting" name="size" id="size" style="margin-right: 20px;max-width: 300px;margin-left: 20px;padding:10px;font-size: 16px;color: #4c4c4c;
max-width: 300px;
border-radius: 0;
border: 1px solid #ECEDEE;
height: 40px;
line-height: 35px;">
                                        
                                    <option value="" selected >Choose an option</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select><!--sorting-->
                                    
                </td>
                </tr>
                </tbody>
                </table>
                                    
                                </div><!--select-option-->
                            </div><!--col-lg-7 col-md-7-->
                            
                        </div><!--row-->
                    </div><!--product-show-option-->
                </div><!--col-lg-9 order-1 order-lg-2-->
                

             <button type="button" class="btn btn-danger  add-cart" id="add-cart">Add to cart</button>
                                <a style="padding: 20px;padding-left: 1px;"> 
                                    <i class="icon_heart_alt" style="cursor: pointer;"></i>
                                   <p  class="wishlist"  style="display: inline-block;position: relative; cursor: pointer;"><b style=" font-size: 15px;"> Add to wishlist</b></p>
                                </a>
       
    <div class="faq-section spad">
        <div class="faq-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordin">
                        <div class="accordion" id="accordionExample" style="margin-top:-40px;border-top: 2px solid black;padding-top: 12px;">
                            
                            <div class="card">
                                <div class="card-heading" style="padding:6px;">
                                    <a data-toggle="collapse" data-target="#collapseOne" style="font-size:18px; font-weight:bold;">
                                    DESCRIPTION
                                       
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <p><?php echo $description; ?> </p>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading" style="padding:6px;">
                                    <a data-toggle="collapse" data-target="#collapseTwo" style="font-size:18px;font-weight:bold;">
                                    ADDITIONAL INFORMATION
                                 
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <p><b>AVAILABILITY :: </b> <?php echo $result[0]['stock'] ?></p>
                                    <p><b>BRAND :: </b><?php echo $result[0]['brand'] ?></p>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-heading" style="padding:6px;">
                                    <a data-toggle="collapse" data-target="#collapseThree" style="font-size:18px;font-weight:bold;">
                                        SIZE CHART
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><img src="img\SIZE-CHART.jpg"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
                                    </div>

    <div class="relatedproducts" style="margin-left:55px;" >

            <h3 style="text-align:center; margin-top:40px;">We've got more options</h3>
            <div class="col-lg-9 order-1 order-lg-2" style="max-width:100%;">
                    <div class="product-list">
                        <div class="related row text-center">
           
            </div>
            </div>
            </div>
   </div>
   <!--Model-->
     <!--Product Section End-->
   
   



<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.php"><img src="img/font1.png" alt="" ></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="blog.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="orders.php">Checkout</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="shop.php" method="POST" id="search" class="search-model-form">
            <input type="text"  name="searchBox" id="searchBox"  placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
<div id="myModal" class="modal">
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.dd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
<script src="core.js"></script>
<script>
/*Bootsrtap slider*/
$('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
/*End*/








    function myfunction(n){
    console.log(n);
     }
   



function accessjs()
{
    var jsonData = JSON.parse('<?= addslashes($json_data); ?>');
    console.log("fdjhfjfhsjfhsj");
    let productContainer= document.querySelector(".related");
    console.log(jsonData);
    productContainer.innerHTML=`
   
    `;
    Object.values(jsonData).map(item=> {
       
            
        console.log(item.cartid);
        var itemimg= item.image.split(" ");
        console.log(itemimg[0]);
        productContainer.innerHTML+=`
        <div class="equal-column-content text-center " style="padding:15px;margin:10px;height:0%;">
                                            
             
                                            
                                            <img class="img-fluid image"  style="cursor:pointer; width:262px; height:368px; float:left" onclick="view_product(${item.cartid},'${item.color}');" src="./shopping_img/${itemimg[0]}"" onmouseover="this.src='./shopping_img/${itemimg[1]}'" onmouseout="this.src='./shopping_img/${itemimg[0]}'">
                                            <div class="text-muted name" style="width:262px;"> <u><b><i>${item.name}</i></b></u> </div>
                                            <div class="text-muted " style="width:262px;"> <b><i>₹ ${item.price}</i></b> </div>
            
                                        </div>  
                                    
                                    `;
          
    });   
}
function view_product(cartid,color)
{
    console.log("yes");
    console.log(cartid);
    window.location.href = 'http:/ashion/fetch_user.php?cartid='+cartid+'&color='+color;
}
function currentDiv(n) {
        console.log(n);
  showDivs(slideIndex = n);
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
 

}



accessjs();
</script>
            
</body>

</html>