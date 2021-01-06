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