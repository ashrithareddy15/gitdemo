

<?php
include_once('config.php');
session_start();
 if(!isset( $_SESSION['adminemail'])){
     echo'<script> setTimeout(function () {
         window.location.href = "http:/ashion/login.php";
      }, 0);</script>';
    }
  else {
$msg="";
$css_class="";
$name='';
$price='';
$quantity='';
$description='';
$stock='';
$brand='';
$color='';
$cartid=0;
$conn =mysqli_connect('localhost' ,'hrdbadmin','12345','hrdb');
if(isset($_GET['variations']))
  {
    $cartid=$_GET['variations'];
   
    $query = $dbConnect->prepare("SELECT * FROM shopping_cart WHERE cartid=?");
    $query->bindValue(1, $cartid);
    try
    {
        
        $query->execute();
        $result=$query->fetchAll();
       
        $count = $query->rowCount();
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
   
    if($count == 1){
      $name=$result[0]['name'];
      $price=$result[0]['price'];
      $quantity=$result[0]['quantity'];
      $description=$result[0]['description'];
      $stock=$result[0]['stock'];
      $brand=$result[0]['brand'];
 
  }
  }

if(isset($_POST['saveuser'])){
   
    if(!empty($_POST['categories']) ){

    
    $cartid=$_POST['cartid'];
    $price=$_POST['price'];
    $quantityxs=$_POST['quantityxs'];
    $quantitys=$_POST['quantitys'];
    $quantitym=$_POST['quantitym'];
    $quantityl=$_POST['quantityl'];
    $quantityxl=$_POST['quantityxl'];
    $quantityxxl=$_POST['quantityxxl'];
    $name=$_POST['name'];
    $color=$_POST['color'];
    $stock=$_POST['stock'];
   
    $categories=implode(',',$_POST['categories']);
  
    $description=$_POST['description'];
    $brand=$_POST['brand'];
    $target='shopping_img/';

    $file='';
    $file_tmp='';
    $data='';

    foreach($_FILES['profileImage']['name'] as $key=>$val)
    {
      $file=$_FILES['profileImage']['name'][$key];
      $file_tmp=$_FILES['profileImage']['tmp_name'][$key];
      move_uploaded_file($file_tmp,$target.$file);
      $data .=$file." ";

    }
   
    
    
        $query="INSERT into shopping_variations (cartid,productname,image,color,price,stock,description,categories,brand) VALUES ('$cartid','$name','$data','$color','$price','$stock','$description','$categories','$brand')";
        if(mysqli_query($conn,$query) )
        {
            $msg="Successfully uploaded and inserted into database";
            $css_class="alert-success";
            $query4=$dbConnect->prepare("SELECT * FROM shopping_variations ORDER BY productid DESC LIMIT 1");
            $query4->execute();
           $result2=$query4->fetchAll();
           print_r($result2);
          $productid=$result2[0]['productid'];

          $query3=$dbConnect->prepare("INSERT into sizes_variations (trackid,productid,quantity,size) VALUES ('$productid-$color-xs','$productid','$quantityxs','XS'),('$productid-$color-s','$productid','$quantitys','S'),('$productid-$color-m','$productid','$quantitym','M'),('$productid-$color-l','$productid','$quantityl','L'),('$productid-$color-xl','$productid','$quantityxl','XL'),('$productid-$color-xxl','$productid','$quantityxxl','XXL')");
          $query3->execute();  
        }
      else{
        $msg="Failed to upload into databse user";
        $css_class="alert-danger";
      }
   
      header("location: productlist.php");
    
  
}
  }

else{
  
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="keywords" content="Fashi, unica, creative, html">
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
              <div class="col-4"  >                    
                    <div class="nav-item" >
                        <div class="canter1">
                                <div class="container">
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
                                                          <li  style="list-style-type: none; margin-top: 20px; width:250px;"><a href="admin2.php" style="text-decoration:none; color:white ;font-size:20px ">View Products</a></li>
                                                          <li style="list-style-type: none; margin-top: 20px; width:250px;"><a href="adminorders.php" style="text-decoration:none; color:white ;font-size:20px ">View Orders</a></li>
                                                      </ul>
                                                  </nav>
                                        </div>
                                              <div id="mobile-menu-wrap"></div>
                                      </div>
                            </div>
                        </div>
                </div>
                    
                    <div class="col-8" >
                          <h3 style="text-align:left;">Add </h3>
                    <br>
            <div class="full form-div" style="padding:30px; margin-top:-40px; ">
                    <!-- <div class="col offest-md-4" style="max-height:100%; ">-->
                    <div class="row">
                    <div class="col-6">
                        <form action="variations.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="cartid"  value="<?php echo $cartid;?>">  
                        
                            <?php if(!empty($msg)):?>
                              <div class="alter <?php echo $css_class; ?>">
                              <?php echo $msg; ?>
                              </div>
                            <?php endif; ?>
                            <div class="form-group" style="max-width:30%">
                              <label for="profileImage">Product image</label>
                              <img src="shopping_img/profile.png" onclick="triggerClick()"  id="profileDisplay" style="outline:2px solid black;max-width:100%;">   
                                  <input type="file" name="profileImage[]"  onchange="displayImage(this)" id="profileImage" style="display:none; outline:2px solid black;" class="form-control" multiple>
                            </div>
                            <div class="form-group">
                          <label for="cartid">Product ID</label>
                          <input name="cartid" id="cartid" value="<?php echo $_GET['variations']; ?> " class="form-control"></textarea>         
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
                             <input  name="quantityxs" value="<?php echo $quantity;?>" class="form-control"></input>
                             <input  name="quantitys" value="<?php echo $quantity;?>" class="form-control"></input>
                             <input  name="quantitym" value="<?php echo $quantity;?>" class="form-control"></input>
                             <input  name="quantityl" value="<?php echo $quantity;?>" class="form-control"></input>
                             <input  name="quantityxl" value="<?php echo $quantity;?>" class="form-control"></input>
                             <input  name="quantityxxl" value="<?php echo $quantity;?>" class="form-control"></input>
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
                                        <button type="submit" name="saveuser" class="btn btn-primary btn-block">Save product</button>
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
<?php
 }
?>