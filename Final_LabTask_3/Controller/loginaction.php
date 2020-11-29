<?php 
include '../Model/dbconnection.php';


 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM moneywithdraw WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
       
      $count = mysqli_num_rows($result);

       if($count == 1) {
         echo "login successful";
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }

 ?>