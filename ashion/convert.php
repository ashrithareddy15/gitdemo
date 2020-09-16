<?php
  session_start();

   include_once("config.php");
  

   $productid=$_SESSION['productid'];
   
   $query=$dbConnect->prepare("SELECT * from shopping_variations where productid=$productid");
   $query->execute();
   $result=$query->fetchAll();
   $json_array= array();
   foreach($result as $row)
   {
     $json_array[]=$row;
    
   }


   $query2=$dbConnect->prepare("SELECT * from sizes_variations where productid=$productid");
   $query2->execute();
   $result2=$query2->fetchAll();

   foreach($result2 as $row)
   {
     $json_array[]=$row;
    
   }
  
   
   echo json_encode($json_array);
   
  
?>
