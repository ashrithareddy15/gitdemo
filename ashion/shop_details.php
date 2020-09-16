<?php
 session_start();
 require_once('config.php');
 if(isset($_SESSION['customer_id'])){
 $session_value=$_SESSION['customer_id'];
 }
 else
 {
    $session_value='null';
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
    <link rel="stylesheet" href="css/shop_details.css" type="text/css">
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
                            <li><a href="blog.php">About</a></li>
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
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
    <div class="wrapper">
      <h3>Products in Cart</h3>
     
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

<script src="core.js"></script>
    <script>
    
 
function displayCart(){
       console.log("Display Cart");
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);
    console.log(cartItems);
    console.log(typeof cartItems);
    let productContainer= document.querySelector(".products");
    let cartcost=localStorage.getItem('totalcost');
    let getsize=localStorage.getItem('size');
    console.log("pc"+productContainer);
    console.log(cartItems);
var i=0;
     if(!cartItems && productContainer)
     {
         console.log("kjdkdfhkjdfhha");
        productContainer.innerHTML+= `
        <h3>No products</h3>
        `
     }
     if(cartItems && productContainer){
        console.log("kindhaaa");
         productContainer.innerHTML='';
         Object.values(cartItems).map(item=> {
        
            if(item.size=='XS')
              i=1;
            else if(item.size=='S')
             i=2;
             else if(item.size=='M')
             i=3;
             else if(item.size=='L')
             i=4;
             else if(item.size=='XL')
             i=5;
             else 
             i=6;
            console.log(item);
            
            var itemimg= item.image.split(" ");
            console.log(itemimg[0]);
            productContainer.innerHTML+= `

            
            <div class="media_items">
        <div class="media" style="border-top: none !important;width:500px;">
            <div class="icon" style="cursor:pointer;float:right;" onclick="removeitems(${item.productid},'${item.size}');">X</div>
            <div class="left_image" style="display:inline-block;position: relative;flex: 0 0 110px;">
                <a href='http:/herright/fetch_user.php?cartid=${item.cartid}&color=${item.color}'><img src="./shopping_img/${itemimg[0]}" style="    max-width: 140px; margin-right: 50px; margin-left: 20px;"></a>
            </div>
            <div class="media_body" style="">

                <div class="price_media" style=" color: #22242a;">
                    <span><b style="font-weight:bolder;font-size:20px;float:left;">₹ ${item.quantity * item.price}</b></span>
                </div>
                <span style="float:left;margin-bottom:10px;"><b style="font-weight: bolder;">BRAND:</b>${item.brand}</span><br>
                <span style="float:left;margin-bottom:10px;"><b style="font-weight: bolder;">COLOR:</b>${item.color}</span><br><br>
                <span style="float:left;margin-bottom:10px;"><b style="font-weight: bolder;">SIZE:</b>${item.size}</span><br>

                <div class="cart-info quantity" style="">
                    <div class="btn-increment-decrement" onClick="decrement_quantity(${item.productid},'${item.size}',${i})">-</div><input class="input-quantity"
                        id="input-quantity-${item.productid}-${i}" value="${item.quantity}"><div class="btn-increment-decrement"
                        onClick="increment_quantity(${item.productid},'${item.size}',${i})">+</div>
                </div>
            </div>

        </div>
        <hr>


           
            `;
            
        });
        productContainer.innerHTML+= `
        
        </div>
    <div class="row" style="width:1000px;">
        <div class="col-lg-4 offset-lg-4" style="margin-left:0px;float:right;">
            <div class="proceed-checkout" style="width=1000px">
                <ul>
                    <li class="subtotal">Subtotal <span>${cartcost}</span></li>
                    <li class="cart-total">Total <span>${cartcost}</span></li>
                </ul>
                <a href="orders.php" class="proceed-btn" ">PROCEED TO CHECK OUT</a>
            </div>
        </div>
    </div>      
        `
            
     }
     
}

function checkout()
{
    var session='<?php echo $session_value;?>';

    if(session!='null'){
        console.log('in checkout');
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);
    var cart=[];
    Object.values(cartItems).map(item=> {
        var productid=item.productid;
        var cartid=item.cartid;
        var quantity=item.quantity;
        var price=item.price;
        var name=item.productname;
        var size=item.size;
        var color=item.color;
        var itemimg= item.image.split(" ");
            console.log(color);
      carts={
          productid:productid,
          cartid:cartid,
          quantity:quantity.toString(),
          price:price.toString(),
          itemimg:itemimg[0],
          name:name,
          size:size,
          color:color
      }
      cart.push(carts);
    });
    $.ajax({
        url:"http:/herright/checkout.php",
        method:"post",
        data:{cart:JSON.stringify(cart)},
        success:function (res) {
            console.log(res);
        }
    })
   // localStorage.removeItem("totalcost");
   // localStorage.removeItem("productsInCart");
   // localStorage.removeItem("cartNumbers");
    //window.location.href = "orders.php";
}
else{
    console.log('elseeeeeeeeeee');
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    $( function() {
        modal.style.display = "block";
  } );
  
  span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




}
}


function increment_quantity(cart_id,size,i) {
    console.log(size);
    console.log("YEs");
    console.log("#input-quantity-"+cart_id+"-"+i);
   // var sizes="-'"+size+"'";
    var inputQuantityElement = $('#input-quantity-'+cart_id+'-'+i).val();
    console.log(inputQuantityElement);
    var newQuantity =parseInt(inputQuantityElement)+1;
    let cartItems=localStorage.getItem("productsInCart");
    let productNumbers = localStorage.getItem('cartNumbers');
    let totalcost=localStorage.getItem('totalcost');
    totalcost=parseInt(totalcost);

    productNumbers=parseInt(productNumbers);
    cartItems=JSON.parse(cartItems);
    let cart_array=Object.entries(cartItems);
    console.log(newQuantity);
    for(let i in cartItems)
       {
           if(cart_id==cartItems[i].productid && size==cartItems[i].size)
         {  
           
           cartItems[i].quantity=newQuantity;
           productNumbers+=1;
           totalcost=totalcost+parseInt(cartItems[i].price);
          console.log(cartItems[i].price);
            break;
         }
         
       } 
       var result = {};
       for (var i = 0; i < cart_array.length; i++) {
      result[cart_array[i][0]] = cart_array[i][1];
     }
     localStorage.setItem("cartNumbers",productNumbers);
     localStorage.setItem("totalcost",JSON.stringify(totalcost));
     localStorage.setItem("productsInCart",JSON.stringify(result));
     displayCart();
}

function decrement_quantity(cart_id,size,i) {
    console.log("Dec");
    var inputQuantityElement = $('#input-quantity-'+cart_id+'-'+i).val();
    console.log(inputQuantityElement);
    if((inputQuantityElement)> 1) 
    {
    var newQuantity = parseInt(inputQuantityElement)-1;
    let cartItems=localStorage.getItem("productsInCart");
    let productNumbers = localStorage.getItem('cartNumbers');
    let totalcost=localStorage.getItem('totalcost');
    totalcost=parseInt(totalcost);
    productNumbers=parseInt(productNumbers);
    cartItems=JSON.parse(cartItems);
    let cart_array=Object.entries(cartItems);
    console.log(newQuantity);
    for(let i in cartItems)
       {
           if(cart_id==cartItems[i].productid && size==cartItems[i].size)
         {  
           
           cartItems[i].quantity=newQuantity;
           totalcost=totalcost-cartItems[i].price;
           productNumbers-=1;
            break;
         }  
       } 
       var result = {};
       for (var i = 0; i < cart_array.length; i++) {
      result[cart_array[i][0]] = cart_array[i][1];
     }

     localStorage.setItem("cartNumbers",productNumbers);
     localStorage.setItem("totalcost",JSON.stringify(totalcost));
     localStorage.setItem("productsInCart",JSON.stringify(result));
     displayCart();
    }
}




function removeitems(thisid,size)
     {
       let cartItems=localStorage.getItem("productsInCart");
       cartItems=JSON.parse(cartItems);
       let productNumbers = localStorage.getItem('cartNumbers');
       let itemquantity;
       let cost;
       let cart_array=Object.entries(cartItems);
      console.log("before");
      console.log(cart_array);
       var count=0;
       for(let i in cartItems)
       {
           if(thisid==cartItems[i].productid && size==cartItems[i].size)
         {  
            cost=cartItems[i].price*cartItems[i].quantity;
            console.log(cost);
            cost=parseInt(cost);
            cart_array.splice(count,1);
            itemquantity=cartItems[i].quantity;
            itemquantity=parseInt(itemquantity);
            console.log(itemquantity);
            break;
         }
         count++;
       } 
       console.log("after");
       console.log(cart_array);
            var result = {};
       for (var i = 0; i < cart_array.length; i++) {
           console.log("lalalla"+result[cart_array[i][0]]);
           console.log(cart_array[i][1]);
      result[i] = cart_array[i][1];
     }
     console.log(result);
     let cartcost=localStorage.getItem('totalcost');
     
    cartcost=cartcost-cost;
    console.log(cartcost);
    productNumbers-=itemquantity;
    localStorage.setItem("totalcost",cartcost);
    localStorage.setItem("cartNumbers",productNumbers);
    localStorage.setItem("productsInCart",JSON.stringify(result));
    let y=document.getElementsByClassName("cart");
    console.log(y);
    
    y[0].innerHTML=`
        <div class="tip">${productNumbers}</div>
        `;
       

     displayCart();
     }
     displayCart();
    </script>

</body>
</html>