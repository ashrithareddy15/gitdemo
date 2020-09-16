<?php
  include 'processform.php';
  include_once('config.php');
  $name='';
  $price='';
  $quantityxs='';
  $quantitys='';
  $quantitym='';
  $quantityl='';
  $quantityxl='';
  $quantityxxl='';
  
  $description='';
  $stock='';
  $brand='';
  $color='';
  $productid=0;
  $cartid=0;
  $flag=0;
$update=false;
  if(isset($_GET['edit']))
  {
    $flag=1;
    $productid=$_GET['edit'];
   
    $update=true;
    $query = $dbConnect->prepare("SELECT * FROM shopping_variations WHERE productid=?");
    $query->bindValue(1, $productid);
    try
    {
        
        $query->execute();
        $result=$query->fetchAll();
       
        $count = $query->rowCount();
   
        $sizeq=$dbConnect->prepare("SELECT * FROM sizes_variations WHERE productid=?");
        $sizeq->bindValue(1,$productid);
        $sizeq->execute();
        $result2=$sizeq->fetchAll();
        
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
   
    if($count == 1){
     
      $cartid=$result[0]['cartid'];
      $name=$result[0]['productname'];
      $price=$result[0]['price'];
      $quantityxs=$result2[0]['quantity'];
      $quantitys=$result2[1]['quantity'];
      $quantitym=$result2[2]['quantity'];
      $quantityl=$result2[3]['quantity'];
      $quantityxl=$result2[4]['quantity'];
      $quantityxxl=$result2[5]['quantity'];
      $description=$result[0]['description'];
      $stock=$result[0]['stock'];
      $brand=$result[0]['brand'];
      $size=$result[0]['size'];
      $categories=$result[0]['categories'];
      $color=$result[0]['color'];
      $image=$result[0]['image'];
      $img = explode(" ", $image);
     
  }
}


if(isset($_POST['update'])){
  $productid=$_POST['productid'];
  $cartid=$_POST['cartid'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $quantityxs=$_POST['quantityxs'];
  $quantitys=$_POST['quantitys'];
  $quantitym=$_POST['quantitym'];
  $quantityl=$_POST['quantityl'];
  $quantityxl=$_POST['quantityxl'];
  $quantityxxl=$_POST['quantityxxl'];
  $description=$_POST['description'];
  $stock=$_POST['stock'];
  $brand=$_POST['brand'];
  $color=$_POST['color'];
  $target='shopping_img/';
  $flag=$_POST['flag'];
  $image=$_POST['image'];
  
  $categories=implode(',',$_POST['categories']);
  $file='';
  $file_tmp='';
  $data='';
  if($flag==1){
    $data=$image;
  }else{
  foreach($_FILES['profileImage']['name'] as $key=>$val)
  {
    $file=$_FILES['profileImage']['name'][$key];
    $file_tmp=$_FILES['profileImage']['tmp_name'][$key];
    move_uploaded_file($file_tmp,$target.$file);
    $data .=$file." ";

  }
}
  
  
      $query="UPDATE shopping_cart SET image='$data',name='$name',price='$price',description='$description',stock='$stock',brand='$brand',categories='$categories' WHERE cartid='$cartid' AND color LIKE '$color' ";
     
      if(mysqli_query($conn,$query) )
      {
          $msg="Successfully uploaded and updated into database";
          $css_class="alert-success";
          echo $cartid;
          $query2=$dbConnect->prepare("UPDATE shopping_variations SET image='$data',productname='$name',price='$price',description='$description',stock='$stock',brand='$brand',color='$color',categories='$categories' WHERE productid='$productid'  ");
          $query2->execute();   

          $query3=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantityxs' WHERE trackid='$productid-$color-xs' ");
          $query3->execute();

          $query4=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantitys' WHERE trackid='$productid-$color-s' ");
          $query4->execute();

          $query5=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantitym' WHERE trackid='$productid-$color-m' ");
          $query5->execute();

          $query6=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantityl' WHERE trackid='$productid-$color-l' ");
          $query6->execute();

          $query7=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantityxl' WHERE trackid='$productid-$color-xl' ");
          $query7->execute();

          $query8=$dbConnect->prepare("UPDATE sizes_variations SET quantity='$quantityxxl' WHERE trackid='$productid-$color-xxl' ");
          $query8->execute();

          header("location: productlist.php");
      }
    else{
      $msg="Failed to upload into databse user";
      $css_class="alert-danger";
    }
  
   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert product</title>
    <link rel="stylesheet" href="css/shopping.css">
    <script src="core.js"></script>
    
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
    <style>
        .full-height li:hover, .full-height li:active{
            background: rgb(150, 36, 112);
        }
        </style>
</head>
</head>
<body>
   <!-- Page Preloder -->
  <!-- <div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Header Section Begin -->
    <div class="container3">
        <div class=row>
    <div class="col-4">
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
                          <h3 style="text-align:left;">Add A New Product </h3>
                    <br>
    <div class="full form-div" style="padding:30px; margin-top:-40px; ">
            <!-- <div class="col offest-md-4" style="max-height:100%; ">-->
            <div class="row">
            <div class="col-6">
                 <form action="shop_cart.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="productid" value="<?php echo $productid;?>">  
                 <input type="hidden" name="cartid"  value="<?php echo $cartid;?>">  
                 <input type="hidden" name="flag"  value="<?php echo $flag;?>">  
                    <?php if(!empty($msg)):?>
                      <div class="alter <?php echo $css_class; ?>">
                      <?php echo $msg; ?>
                       </div>
                    <?php endif; ?>
                    <div class="form-group" style="max-width:30%">
                      <label for="profileImage">Product image</label>
                      <?php if($flag==1):?>
                          <img src="./shopping_img/<?=$img[0]?>" onclick="triggerClick()"  id="profileDisplay" style="outline:2px solid black;max-width:100%;">  
                          <input type="hidden" name="image"  value="<?php echo $image;?>">  
                      <?php else:?>
                      <img src="shopping_img/profile.png" onclick="triggerClick()"  id="profileDisplay" style="outline:2px solid black;max-width:100%;">
                      <?php endif; ?>
                          <input type="file" name="profileImage[]"  onchange="displayImage(this)" id="profileImage" style="display:none; outline:2px solid black;" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                          <label for="description">Description</label>
                          <input  name="description" value="<?php echo $description;?>" class="form-control"></input>         
                        </div>
                       <div class="row">
                       <div class="form-group col-6">
                          <label for="stock">Color</label>
                          <input  name="color"  value="<?php echo $color;?>" class="form-control"></input>         
                        </div>
                        <div class="form-group col-6">
                          <label for="brand">Brand</label>
                          <input  name="brand" value="<?php echo $brand;?>" class="form-control"></input>         
                        </div>
                       </div>
                    </div>
                    <div class="col-6 col-md-6">
                    <div class="row">
                      <div class="form-group col-sm-8" style="">
                          <label for="name">Name</label>
                          <input name="name" id="name" value="<?php echo $name;?>" class="form-control"></textarea>         
                        </div>
                
                        <div class="form-group col-sm-4">
                          <label for="price">Price</label>
                          <input  name="price" value="<?php echo $price;?>" class="form-control"></input>         
                        </div>
                        </div>
                        <div class="row">
                        
                        <div class="form-group col-6">
                          <label for="stock">Stock</label>
                          <input  name="stock"  value="<?php echo $stock;?>" class="form-control"></input>         
                        </div>
                        </div>
                        <div class="row">
                           
                            <div class="form-group col-6">
                              <label for="stock">Select available sizes:</label><br>
                              <label for="size">XS</label><br>
                              <label for="size">S</label><br>
                              <label for="size">M</label><br>
                              <label for="size">L</label><br>
                              <label for="size">XL</label><br>
                              <label for="size">XXL</label><br>
                            </div>
                            <div class="form-group col-6">
                              <label for="quantiy">Quantity</label><br>
                              <input  name="quantityxs" value="<?php echo $quantityxs;?>" class="form-control"></input>
                              <input  name="quantitys" value="<?php echo $quantitys;?>" class="form-control"></input>
                              <input  name="quantitym" value="<?php echo $quantitym;?>" class="form-control"></input>
                              <input  name="quantityl" value="<?php echo $quantityl;?>" class="form-control"></input>
                              <input  name="quantityxl" value="<?php echo $quantityxl;?>" class="form-control"></input>
                              <input  name="quantityxxl" value="<?php echo $quantityxxl;?>" class="form-control"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                              <label for="categories">Categories</label><br>
                              <input type="checkbox" name="categories[]" value="kurtas">Kurta<br>
                              <input type="checkbox" name="categories[]"  value="sets">Sets<BR>
                              <input type="checkbox" name="categories[]"  value="anarkali">Anarkali<BR>
                              <input type="checkbox" name="categories[]" value="Capes">Capes<BR>
                              <input type="checkbox" name="categories[]"  value="Skirts">Skirts<BR>
                              <input type="checkbox" name="categories[]" value="Jackets">Jackets<BR>
                            </div> 
                            </div>
                            
                        
                       
                       
                    </div>
                    <div class="form-group">
                            <?php
                              if($update==true):?>
                                <button type="submit" name="update" class="btn btn-info btn-block">Update product</button>
                              <?php else :?>
                                <button type="submit" name="save-user" class="btn btn-primary btn-block">Save product</button>
                              <?php endif;?>
                        </div>
                    </div>
                 </form>
                 
                </div>
           <!--  </div>-->
             </div>
         </div>
     </div>
          </div>
       
</body>
</html>