<?php
session_start();
if(isset($_SESSION['email'])){
    $value=false;
} else {
    $value=true;
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
  
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper" style="margin-top:65px;">
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
     <?php if($value==true):?>
      
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
 
              <?php else:
      ?>
      
      <a href="index.php" onclick="logout();">Logout</a>

  <?php
  endif;
  ?>
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
                            <li><a href="blog.php">About</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                    <div class="header__right__auth">
                    <?php if($value==true):?>
      
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
       
                    <?php else:
            ?>
            
            <a href="index.php" onclick="logout();">Logout</a>
  
        <?php
        endif;
        ?>
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

   
    <!-- Blog Section End -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        
                        <div class="categories__item categories__large__item set-bg"
                            data-setbg="img/about-us.jpg">
                            <div class="categories__text">
                                <h1>About US</h1>
                                <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                                edolore magna aliquapendisse ultrices gravida.</p>
                            </div>
                            
                        </div>
                        <div class="blog-detail-desc" style="font-family: 'Josefin Sans', sans-serif; font-size:18px;">
                            <p style="font-family: 'Josefin Sans', sans-serif; font-size:18px;">psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section end -->
    <section class="contact spad">
        <div class="container">
                
                    <div class="row ">
                    <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <img src="img/Screenshot (9).png" alt="" style="height:50%;">
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4></h4>
                                            </a>
                                            <p> <span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <p style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">Her right, a social organization started by Divya Reddy aims at creating sustainable businesses for oppressed women.
                                                To turn women who are despondent to formidable has been our vision.<br>
                                                We collaborate to work with various social organisations to skill women to help them with the resources of processes and implementations to empower women to become financially independent.
                                                Working with local and national governments to build create business and it's acumen for these women has been our forte. </p>
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4><p><span style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">- May 19, 2019</span></p></h4>
                                            </a>
                                            <p><span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br><br>    
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <p style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">Her right, a social organization started by Divya Reddy aims at creating sustainable businesses for oppressed women.
                                                To turn women who are despondent to formidable has been our vision.<br>
                                                We collaborate to work with various social organisations to skill women to help them with the resources of processes and implementations to empower women to become financially independent.
                                                Working with local and national governments to build create business and it's acumen for these women has been our forte. </p>
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4><p><span style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">- May 19, 2019</span></p></h4>
                                            </a>
                                            <p><span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <div class="content__map">
                                            <img src="img/blog1 (1).png" alt="" style="height:500px; width:399px;">
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4></h4>
                                            </a>
                                            <p> <span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <div class="content__map">
                                            <img src="img/blog1 (2).png" alt="" style="height:500px; width:399px;">
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4></h4>
                                            </a>
                                            <p> <span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <p style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">Her right, a social organization started by Divya Reddy aims at creating sustainable businesses for oppressed women.
                                                To turn women who are despondent to formidable has been our vision.<br>
                                                We collaborate to work with various social organisations to skill women to help them with the resources of processes and implementations to empower women to become financially independent.
                                                Working with local and national governments to build create business and it's acumen for these women has been our forte. </p>
                                        </div>
                                        <div class="bi-text">
                                            <a href="./blog-details.html">
                                                <h4><p><span style="font-family: 'Josefin Sans', sans-serif; font-size:20px; font-weight: 700;">- May 19, 2019</span></p></h4>
                                            </a>
                                            <p><span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="loading-more">
                                        <!--<i class="icon_loading"></i>
                                        <a href="#">
                                            Loading More
                                        </a>-->
                                    </div>
                                </div>
                    </div>
                </div>
            
        
</section>


  <!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ Herright_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

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
    <script>
        function onLoadCartNumbers(){
      let x=document.getElementsByClassName("cart");
      
      console.log(x);
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers){
        x[0].innerHTML=`
        <div class="tip">${productNumbers}</div>
        `;
        x[1].innerHTML=` <div class="tip">${productNumbers}</div>`;
       // document.querySelector('.cart span').textContent=productNumbers;
    }
    else{
        x[0].innerHTML=`
        <div class="tip">0</div>
        `;
        x[1].innerHTML=` <div class="tip">0</div>`;
    }

  }
  
  function onLoadWishNumbers(){
    let prodNumbers = localStorage.getItem('wishNumbers');
    let x=document.getElementsByClassName("heart");
    console.log("prodNumbers");
    console.log(prodNumbers);
    if(prodNumbers){
        x[0].innerHTML=`
        <div class="tip">${prodNumbers}</div>
        `;
        x[1].innerHTML=` <div class="tip">${prodNumbers}</div>`;
    }
    else{
        x[0].innerHTML=`
        <div class="tip">0</div>
        `;
        x[1].innerHTML=` <div class="tip">0</div>`;
    }
  }

  onLoadCartNumbers();
  onLoadWishNumbers()
    </script>
</body>

</html>