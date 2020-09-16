<?php
   include 'processform.php';
   include_once('config.php');

   $sql="SELECT * from shopping_cart";
   $result=mysqli_query($conn,$sql);
   $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
   //print_r($users);
   $json_array= array();
   foreach($users as $row)
   {
     $json_array[]=$row;
    
   }
   if(isset($_POST['form_submitted']))
   {
       $min=$_POST['minamount'];
       $max=$_POST['maxamount'];
       $json_array= array();
       $query = $dbConnect->prepare("SELECT * FROM SHOPPING_CART WHERE price BETWEEN $min AND $max ");
    $query->execute();
   $filter=$query->fetchAll();
   foreach( $filter as $row)
   {  
        $json_array[]=$row;
    
   }
   
   
   
   $json_array=array_unique($json_array, SORT_REGULAR);
   $json_data= json_encode($json_array);

       echo '<script>alert($min)</script>';
   }       
   if(isset($_POST['searchBox']))
   {
    $json_array= array();
   $q=$_POST['searchBox'];
   $result=explode(" ",$q);
   $count=count($result);

   for($i=0;$i<$count;$i++)
   {
       $q=$result[$i];
       $query = $dbConnect->prepare("SELECT * FROM SHOPPING_CART WHERE name LIKE '%$q%' OR description LIKE '%$q%' OR brand LIKE '%$q%' OR categories LIKE '%$q%' OR color LIKE '%$q%'");
   $query->execute();
   $searches=$query->fetchAll();
   foreach( $searches as $row)
   {  
        $json_array[]=$row;
    
   }
   
   }
   
   $json_array=array_unique($json_array, SORT_REGULAR);
   $json_data= json_encode($json_array);

   //
    }



   if(isset($_GET['categories']))
   {
    $input= $_GET['categories'];
    $query = $dbConnect->prepare("SELECT * FROM shopping_cart WHERE categories LIKE '%$input%' ");
    $query->execute();
   $cats=$query->fetchAll();
   
   $json_array=array();
   foreach( $cats as $row)
   {  
        $json_array[]=$row;
    
   }
   $json_array=array_unique($json_array, SORT_REGULAR);
   $json_data= json_encode($json_array);
   }
 
   if(isset($_GET['size']))
   {
    $input= $_GET['size'];
    $query = $dbConnect->prepare("SELECT * FROM SHOPPING_CART WHERE available_sizes LIKE '%,$input,%' OR available_sizes LIKE '$input,%' OR available_sizes LIKE '%,$input' ");
    $query->execute();
   $size=$query->fetchAll();
   $json_array=array();
   foreach( $size as $row)
   {  
        $json_array[]=$row;
    
   }
   $json_array=array_unique($json_array, SORT_REGULAR);
   $json_data= json_encode($json_array);
   }
 
   if(isset($_GET['color']))
   {
    $input= $_GET['color'];
    $query = $dbConnect->prepare("SELECT * FROM SHOPPING_CART WHERE color LIKE '%$input%' ");
    $query->execute();
   $cats=$query->fetchAll();
   $json_array=array();
   foreach( $cats as $row)
   {  
        $json_array[]=$row;
    
   }
   $json_array=array_unique($json_array, SORT_REGULAR);
   $json_data= json_encode($json_array);
   }



    else{
        $json_data= json_encode($json_array);
   
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Women</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                <li><a href="shop.php?categories=kurtas" >Kurtas</a></li>
                            <li><a href="shop.php?categories=sets" >Sets</a></li>
                            <li><a href="shop.php?categories=anarkali" >Anarkali</a></li>
                            <li><a href="shop.php?categories=capes" >Capes</a></li>
                            <li><a href="shop.php?categories=skirts" >Skirts</a></li>
                            <li><a href="shop.php?categories=jackets" >Jackets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Size</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="shop.php?size=XS">XS</a></li>
                                                    <li><a href="shop.php?size=S">S</a></li>
                                                    <li><a href="shop.php?size=M">M</a></li>
                                                    <li><a href="shop.php?size=L">L</a></li>
                                                    <li><a href="shop.php?size=XL">XL</a></li>
                                                    <li><a href="shop.php?size=XXL">XXL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Shop Color</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="shop.php?color=black">Black</a></li>
                                                    <li><a href="shop.php?color=Green">Green</a></li>
                                                    <li><a href="shop.php?color=red">Red</a></li>
                                                    <li><a href="shop.php?color=blue">Blue</a></li>
                                                    <li><a href="shop.php?color=pink">Pink</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                            </div>
                        </div>
                           
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                <div class="product-list">
                        <div class=" searchproducts row">
                        
                       
                      
                       
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
    
    
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
        <form action="" method="POST" id="search" class="search-model-form">
            <input type="text"  name="searchBox" id="searchBox"  placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
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
    <script src="coredum.js"></script>
   
    <script>
         $(document).ready(function(){
         $('.set-bg').each(function() {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
});
        function accessjs()
{
    var jsonData = JSON.parse('<?= addslashes( $json_data); ?>');
    console.log(jsonData);
    let productContainer= document.querySelector(".searchproducts");
    console.log(productContainer);
    productContainer.innerHTML=`

    `;
    Object.values(jsonData).map(item=> {
       
            
        console.log(item.cartid);
        var itemimg= item.image.split(" ");
        console.log(itemimg[0]);
        productContainer.innerHTML+=`
           <div class="col-lg-4 col-md-6">
           <div class="equal-column-content text-center " style="padding:15px;margin:10px;height:0%;">
                 <div class="product__item">
                 <div class="hover-product">
                 <ul class="product__hover">
                                        <li><a href="./shopping_img/${itemimg[0]}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        
                                    </ul>
                 <img class="img-fluid image"  style="cursor:pointer; width:262px; height:368px; float:left" onclick="view_product(${item.cartid},'${item.color}');" src="./shopping_img/${itemimg[0]}"" onmouseover="this.src='./shopping_img/${itemimg[1]}'" onmouseout="this.src='./shopping_img/${itemimg[0]}'">
                                    
                               </div>
                                <div class="product__item__text">
                                    <h6><a href="#">${item.name}</a></h6>
                                    <div class="product__price">${item.price}</div>
                                </div>
                            </div> 
                            </div>
                            </div>`;         
      });   
}
function mouseover(image,cartid){
    console.log(image);
    //var inputQuantityElement = $('#input-quantity-'+cart_id+'-'+i).val();
    $('.input-quantity-'+cartid).each(function() {
        var bg = image;
        $(this).css('background-image', 'url(' + bg + ')');
    });
}
function view_product(cartid,color)
{
    console.log("yes");
    console.log(cartid);
    window.location.href = 'http:/ashion/fetch_user.php?cartid='+cartid+'&color='+color;
}
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

accessjs();
</script>
</body>

</html>