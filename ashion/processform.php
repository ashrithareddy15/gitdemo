<?php

session_start();
include_once('config.php');
  $msg="";
  $css_class="";
  $conn =mysqli_connect('localhost' ,'hrdbadmin','12345','hrdb');
  if(isset($_POST['save-user'])){
   
    if(!empty($_POST['categories'])){
      
      $categories=implode(',',$_POST['categories']);
    
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantityxs=$_POST['quantityxs'];
    $quantitys=$_POST['quantitys'];
    $quantitym=$_POST['quantitym'];
    $quantityl=$_POST['quantityl'];
    $quantityxl=$_POST['quantityxl'];
    $quantityxxl=$_POST['quantityxxl'];
    $description=$_POST['description'];
    $color=$_POST['color'];
    $stock=$_POST['stock'];
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
   
    
    
        $query="INSERT into shopping_cart (image,name,price,description,categories,color,stock,brand) VALUES ('$data','$name','$price','$description','$categories','$color','$stock','$brand')";
       
       
        if(mysqli_query($conn,$query) )
        {
            $msg="Successfully uploaded and inserted into database";
            $css_class="alert-success";
            $query1=$dbConnect->prepare("SELECT * FROM shopping_cart ORDER BY cartid DESC LIMIT 1");
            $query1->execute();
            
            $result=$query1->fetchAll();
           
           $cartid=$result[0]['cartid'];
           $name=$result[0]['name'];
           $query2=$dbConnect->prepare("INSERT into shopping_variations (cartid,productname,image,color,price,stock,description,categories,brand) VALUES ('$cartid','$name','$data','$color','$price','$stock','$description','$categories','$brand')");
           $query2->execute();   

           $query4=$dbConnect->prepare("SELECT * FROM shopping_variations ORDER BY productid DESC LIMIT 1");
            $query4->execute();
           $result2=$query4->fetchAll();
           print_r($result2);
          $productid=$result2[0]['productid'];

           $query3=$dbConnect->prepare("INSERT into sizes_variations (trackid,productid,quantity,size) VALUES ('$productid-$color-xs','$productid','$quantityxs','XS'),('$productid-$color-s','$productid','$quantitys','S'),('$productid-$color-m','$productid','$quantitym','M'),('$productid-$color-l','$productid','$quantityl','L'),('$productid-$color-xl','$productid','$quantityxl','XL'),('$productid-$color-xxl','$productid','$quantityxxl','XXL')");
           $query3->execute();  

           echo'<script> setTimeout(function () {
            window.location.href = "http:/ashion/productlist.php";
         }, 2000);</script>';
        }
      else{
        $msg="Failed to upload into databse user";
        $css_class="alert-danger";
      }
   }
  }


  //-to delete a product

  if(isset($_GET['delete'])){
   $productid=$_GET['delete'];
   echo $productid;
   $delf=$dbConnect->prepare("SELECT cartid FROM shopping_variations WHERE productid=?");
   $delf->bindValue(1, $productid);
   $delf->execute();
   $r=$delf->fetchAll();
  
   $cartid=$r[0]['cartid'];
   $query = $dbConnect->prepare("DELETE  FROM shopping_variations  WHERE productid = ?");
   $query->bindValue(1, $productid);

   $query2 = $dbConnect->prepare("DELETE  FROM sizes_variations  WHERE productid = ?");
   $query2->bindValue(1, $productid);

  
    try
    {
      $query2->execute();
        $query->execute();
        
        $cs=$delf->rowCount();
        if($cs==1){
          $final= $dbConnect->prepare("DELETE  FROM shopping_cart  WHERE cartid=?");
          $final->bindValue(1, $cartid);
          $final->execute();
        }
        $count = $query->rowCount();
        $_SESSION['message']="Record has been deleted!";
    }
    catch(PDOException $e)
    {
   print_r($e);
      $_SESSION['message']="Unsuccessfull!Customer has ordered the product";
    }

$_SESSION['msg_type']="info";

header("location: productlist.php");
  }

?>