<?php
 session_start();
 require_once('config.php');
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
    <header class="header" style="z-index: 1030;width: 100%;">
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
                            <li><a href="contact.php">Contact</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                    <a href="shop.php" ><i class="icon_bag_alt" style="width:20px"></i> Shop</a>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
    
<a href="shopping-cart.html" class="cart">   <span> </span></a>
<div class="wrapper">
      <h3>WishList</h3>
      <table class="table table-striped table-dark">
     
         <col style="width:10%"/>
         <col style="width:40%"/>
         <col style="width:10%"/>
         <col style="width:20%"/>
         <col style="width:20%"/>
         <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Options</th>
              </tr>
         </thead>    
            <tbody>
             
            </tbody>
      </table>
      <div class="products"></div>
   </div>
   
    
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
    function displayCart(){
       console.log("Display Cart");
    let wishItems=localStorage.getItem('wishesInCart');
    wishItems=JSON.parse(wishItems);
    console.log(wishItems);
    console.log(typeof wishItems);
    let productContainer= document.querySelector(".products");
   
    console.log("pc"+productContainer);
    console.log(wishItems);
     if(wishItems && productContainer){

         productContainer.innerHTML='';
         Object.values(wishItems).map(item=> {
        
            
            console.log(typeof item.image);
            var itemimg= item.image.split(" ");
            console.log(itemimg[0]);
            productContainer.innerHTML+= `
                <table class="table">
     
     <col style="width:10%"/>
     <col style="width:40%"/>
     <col style="width:10%"/>
     <col style="width:20%"/>
     <col style="width:20%"/>
     <thead>
         <tr>
           
         <th scope="col" class="icon" onclick="removeitems(${item.productid});">X</th>
            <th scope="col"><img src="./shopping_img/${itemimg[0]}" style=" max-width: 20%;"></th>
            <th scope="col">${item.price}</th>
            <th scope="col" >${item.stock}</th>
            <th scope="col"><button type="button" onclick="view(${item.cartid},'${item.color}');" class="btn btn-danger  select-options">Select Options</button></th>
          </tr>
     </thead>    
        <tbody>
         
        </tbody>
  </table>

           
            `;
            
        });
        productContainer.innerHTML+= `
        
      
        `
            
     }
}


function view(cartid,color)
{
    console.log("yes");
    console.log(cartid);
    window.location.href = 'http:/ashion/fetch_user.php?cartid='+cartid+'&color='+color;
}


function removeitems(thisid)
     {
        let wishItems=localStorage.getItem("wishesInCart");
       wishItems=JSON.parse(wishItems);
       console.log(wishItems)
       console.log(thisid);
       let prodNumbers = localStorage.getItem('wishNumbers');
       let itemquantity;
       let cost;
       let cart_array=Object.entries(wishItems);
      var count=0;
       for(let i in wishItems)
       {
           if(thisid==wishItems[i].productid)
         {  
            
            cart_array.splice(count,1);
            
            break;
         }
         count++;
       } 
            var result = {};
       for (var i = 0; i < cart_array.length; i++) {
      result[i] = cart_array[i][1];
     }
    prodNumbers-=1;
    
    localStorage.setItem("wishNumbers",prodNumbers);
    localStorage.setItem("wishesInCart",JSON.stringify(result));

    let y=document.getElementsByClassName("heart");
    console.log(y);
    
    y[0].innerHTML=`
        <div class="tip">${prodNumbers}</div>
        `;
       

    
     displayCart();
     }

     displayCart();
     
    </script>

                
</body>

</html>