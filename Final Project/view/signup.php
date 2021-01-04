<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];



$connection =mysqli_connect('localhost','root','','newdata');
  if(!$connection)
  {
	  die("Not Connected.".mysqli_error());
  }
  

    $query= "INSERT INTO sign1_up(username,email,password)";
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
<title>RegistrationFrom</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<style>
background-color:powderblue;
h1 {text-align: center;}
h3{text-align: center;}
div {text-align: center;}

</style>
<center>
<h1 style="color:red">Registration Form</h1>

<div>
<form action="signup.php" method="post">
  

  
  <label style="color:blue" for="username">User name:</label>
  <input type="text" id="username" name="username" value=""  >

 <label style="color:blue" for="email">Email Address:</label>
  <input type="text" id="email" name="email" value="" ><br>
  
   <label  style="color:blue" for="password">Password:</label>
  <input type="text" id="password" name="password" value="" ><br>
  
  <button type="submit" name="submit">Sign Up</button>
 
 <input type="reset" value="reset">
 
 <a href="login.php" class="ca">Already have an account?</a>
 </center>
 </form>
 </div>
  
 </body>
 </html>
 
 <style>

</style>