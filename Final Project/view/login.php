
<?php 
    session_start();
 ?>

<?php

if(isset($_POST['submit'])) 
{
	$username = $_POST["username"];
	try {
		
		if(empty($_POST['username'])) {
			throw new Exception('Username can not be empty');
		}
		
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
	
		
		$password = $_POST['password'];
		$password = ($password);
	
	
		include 'config.php';
		$num=0;
		
		$statement = $db->prepare("select * sign1_up where username=? and password=?");
		$statement->execute(array($_POST['username'],$password));		
		
		$num = $statement->rowCount();
		
		if($num>0) 
		{
			session_start();
			$_SESSION['name'] = "newdata";
			header("location: myworks.php");
			
		}
		else
		{
			throw new Exception('Invalid Username and/or password');
		}
		
		$cookie_value= date("Y-m-d",time());
	setcookie($uname, $cookie_value, time() + (86400 * 30), "/"); 
	if(!isset($_COOKIE[$uname])) {
	  echo "Cookie named '" . $uname . "' is not set!";
	}
	else {
	  $myfile = fopen("../data/cookies.txt", "a") or die("Unable to open file!");
	  $txt="Username: ".$uname." ". "Time: ".$_COOKIE[$uname]."<br>";
	  fwrite($myfile, $txt);
	  fclose($myfile);
	}
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
	
	}
	
	
	



?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
</head>

<body style="background-color:powderblue;">
<center>
     <form action="myworks.php" method="post">
     	<h2>LOG IN</h2>
     	<style>

</style>
        <p class="error"></p>
     	
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="User Name" required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit" name="submit" >Log in</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
	</center> 
	 <?php
	
	 $_SESSION['username']=$username;        
	 echo  $_SESSION['username'];
	 ?>
	 
	
</body>
</html>


