<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];



$connection =mysqli_connect('localhost','root','','final7');
  if(!$connection)
  {
	  die("Not Connected.".mysqli_error());
  }
  

    $query= "INSERT INTO final6pro(username,email,password)";
  $query.="VALUES ('$username','$email','$password')";
  
  $result=mysqli_query($connection,$query);
  
  if(!$result)
  {
	  die("Not Success".mysqli_error());
  }
  
  
  
}
  
 
?>
<!DOCTYPE html>
<html>
<head>

<script>
    function validate() {
        var x = document.getElementById('username').value;
        var y = document.getElementById('email').value;
        var z = document.getElementById('password').value;
        
        
        
        if(x == "") {
            document.getElementById('errorMsg').innerHTML = "Username is empty";
            document.getElementById('errorMsg').style.color = "red";
            return false;    
        }
        if(y == "") {
            document.getElementById('errorMsg').innerHTML = "Propertytype is empty";
            document.getElementById('errorMsg').style.color = "red";
            return false;    
        }
        if(z == "") {
            document.getElementById('errorMsg').innerHTML = "propertyprice is empty";
            document.getElementById('errorMsg').style.color = "red";
            return false;

  
        }
        return true;
    }
</script>
<title>SELLER_reg_from</title>
<link rel="stylesheet" type="text/css" href="style.css">




</head>




<body>

<center><?php include('header.php'); ?></center>
<style>
body {
  background-image: url('unnamed.jpg');
}
h1 {text-align: center;}
h3{text-align: center;}
div {text-align: center;}

</style>

<h1 style="color:red">SELLER Registration Form</h1>

<div>
<form action="signup.php" method="post">
  

  
  <label style="color:blue" for="username">User name:</label>
  <input type="text" id="username" name="username" value="" required>

 <label style="color:blue" for="email">Email Address:</label>
  <input type="text" id="email" name="email" value="" required><br>
  
   <label  style="color:blue" for="password">Password:</label>
  <input type="text" id="password" name="password" value="" required><br>
  
  <button type="submit" name="submit">Sign Up</button>
 
 <input type="reset" value="reset">
 
 <a href="login.php" class="ca">Already have an account?</a>
 
 </form>
 </div>
  <center><?php include('footer.php'); ?></center>
 </body>
 </html>
 
 <style>

</style>