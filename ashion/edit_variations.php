<?php
include 'processform.php';
include_once('config.php');

 if(!isset( $_SESSION['adminemail'])){
     echo'<script> setTimeout(function () {
         window.location.href = "http:/ashion/login.php";
      }, 0);</script>';
     } else {

if(isset($_GET['edit']))
  {
    $cartid=$_GET['edit'];
    $update=true;
    $query = $dbConnect->prepare("SELECT * FROM shopping_variations WHERE cartid=?");
    $query->bindValue(1, $cartid);
    try
    {
        
        $query->execute();
        $users=$query->fetchAll();
        
        $count = $query->rowCount();
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
}
   

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
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <div class="wrapper text-center" style="padding:0px;max-width:100%;">
      <h3>Products in Cart</h3>

      <a href="shop_cart.php"><button class="btn btn-success" style="float: right; margin-bottom:10px;">Add Product</button></a>
      <table class="table table-striped table-dark">
     
      <col style="width:15%"/>
         <col style="width:3%"/>
         <col style="width:2%"/>
         <col style="width:10%"/>
         <col style="width:20%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:10%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:15%"/>
         <col style="width:10%"/>
         <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Productid</th>
                <th scope="col">Cartid</th>
                <th scope="col">ProductName</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Color</th>
               
                <th scope="col">Stock</th>
                
                <th scope="col">Description</th>
                <th scope="col">Categories</th>
                <th scope="col">Brand</th>
                <th scope="col">Size</th>
                <th scope="col">Quantity</th>
              </tr>
         </thead>    
            </table>
        <table class="table">
        <col style="width:3%"/>
         <col style="width:2%"/>
         <col style="width:10%"/>
         <col style="width:20%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:10%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:5%"/>
         <col style="width:15%"/>
         <col style="width:10%"/>
            <?php foreach($users as $user):?>  
                
                <?php 
                $userimg=$user['image'];
                $userimg=explode(" ",$userimg);
                //print_r($userimg[0]);

                $productid=$user['productid'];
                $sizeq=$dbConnect->prepare("SELECT * FROM sizes_variations WHERE productid=?");
                $sizeq->bindValue(1,$productid);
                $sizeq->execute();
                $result=$sizeq->fetchAll();
              // print_r($result);
                ?>
                <tr>
            <th scope="col" class="icon" style="cursor:pointer;">
            <a href="shop_cart.php?edit=<?php echo $user['productid'];?>"
            class="btn btn-success">Edit</a> 
            <a href="processform.php?delete=<?php echo $user['productid'];?>"
            class="btn btn-info" >Delete</a> 
            <br>
           
            </th>
            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['productid']?></th>
            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['cartid']?></th>
            <th scope="col" class="icon" style="font-size: 15px;font-weight: lighter;" > <?php echo $user['productname']?></th>
            <th scope="col"> <img src="./shopping_img/<?=$userimg[0]?>" style="max-width:30%;"></a></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['price']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['color']?></th>
            
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['stock']?></th>
           
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['description']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['categories']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;"> <?php echo $user['brand']?></th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;">
            <label for="size">XS</label><br>
            <label for="size">S</label><br>
             <label for="size">M</label><br>
            <label for="size">L</label><br>
            <label for="size">XL</label><br>
            <label for="size">XXL</label><br>
            </th>
            <th scope="col" style="font-size: 15px;font-weight: lighter;">
         
            <?php foreach($result as $sizes):  ?>

<input  name="quantitys" value="<?php echo $sizes['quantity'];?>" class="form-control"></input>
                            
<?php endforeach; ?>
            
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