<?php
require_once('config.php');
if(isset($_GET['submitType'])){
    $submitType = $_GET['submitType'];
    echo '<script>alert($submitType)</script>';
}
if($submitType == "register")
{
    $username= $_POST['username'];
    $password= md5($_POST['password']);
    $confirmpass = md5($_POST['confirmpass']);
    $contact = $_POST['contact'];
    $email= $_POST['email'];
    $vkey=md5(time().$username);
    $city=$_POST['city'];
    $error=$_POST['error'];
    $query = $dbConnect->prepare("SELECT * FROM customer_details_table  WHERE contact = ? OR email = ?");
    $query->bindValue(1, $contact);
    $query->bindValue(2, $email);

    // Executing Prepared Statement
    try
    {
        $query->execute();
        $count = $query->rowCount();
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
    if($count == 0) {
        if($username != "" AND $password != "" AND $confirmpass != "" AND $contact != "" AND $email != "" AND $city !="" AND $error==""){
           
            if($password==$confirmpass)
          {   
               $query = $dbConnect->prepare("INSERT INTO customer_details_table (username, password, contact, email, city,type,vkey) VALUES (?, ?, ?, ?, ?,?,?)" );
            $query->bindValue(1, $username);
            $query->bindValue(2, $password);
            $query->bindValue(3, $contact);
            $query->bindValue(4, $email);
            $query->bindValue(5, $city);
            $query->bindValue(6,"user");
            $query->bindValue(7,$vkey);
    echo $email;
            // Executing Prepared Statement
            try
            {
                $result = $query->execute();
                   if($result == true){
                    
                    $to_email = $email;
                    $subject = "Her Right";
                    $message = "<a href='http://localhost/ashion/verify.php?vkey=$vkey'>Register Account</a>";
                    $headers = "From:herright9@gmail.com \r\n";
                    $headers.="MIME-Version:1.0"."\r\n";
                    $headers.="Content-type:text/html;charset=UTF-8" ."\r\n";

                   $res=mail($to_email, $subject, $message, $headers);
                   if($res==true)
                   echo '<script>alert("Mail Sent for verification")</script>';
                   else
                   echo '<script>alert("nopeee")</script>';
                  } else 
                  {
                    echo '<script>alert("Something went wrong")</script>';
                }
              
            } 
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        else{
            echo '<script>alert("Password does not match")</script>';
        }
        } else {
            echo '<script>alert("Please fill the details correctly")</script>';
        }
    }else {
        echo '<script>alert("Email Address or Mobile Number already exists")</script>';
    }
}



if($submitType == "login"){
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
   
   
    $query = $dbConnect->prepare("SELECT * FROM customer_details_table  WHERE email = ? AND password = ?");
    $query->bindValue(1, $email);
    $query->bindValue(2, $password);
  
    // Executing Prepared Statement
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
        if($result[0]['type']=='admin')
        {
            session_start();   
            $_SESSION['adminemail'] = $email;
            echo'<script> setTimeout(function () {
                window.location.href = "http:/ashion/productlist.php";
             }, 2000);</script>';
        }
       else if($result[0]['verified']==1)
       {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['customer_id']=$result[0]['customer_id'];
        echo '<script>alert("Login Successful")</script>';
        echo'<script> setTimeout(function () {
            window.location.href = "http:/ashion/index.php";
         }, 2000);</script>';}
         else{
             
        echo '<script>alert("Mail sent for verification.")</script>';
         }
    } else {
        echo '<script>alert("Invalid mobile or password")</script>';
    }
}

if($submitType == "logout"){
    echo $submitType;
    session_start();
   // echo $submitType;
    unset($_SESSION['email']);
    unset($_SESSION['customer_id']);
   /* echo'<script> setTimeout(function () {
        window.location.href = "http:/herright/";
     }, 10000);</script>';*/
  //  echo "yesss";

     
}

?>