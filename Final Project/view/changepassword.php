<?php

session_start();
?>
<html>
<head>

<title>Change Password</title>
</head>
<body>

<?php
include 'config.php';

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$confirmpassword=$_POST['confirmpassword'];
	
	$query=mysqli_query($connection,"SELECT username,password FROM final6pro WHERE username='$username' AND password='oldpassword'");
	
	$num=mysqli_fetch_array($query);
	
	if($num>0)
	{
		$conn=mysqli_query($connection,"UPDATE final6pro SET password='$newpassword' WHERE username='$username'");
		
		$_SESSION['msg1']="Password Change Succesfully";
		
	}
	else
	{
		$_SESSION['msg1']="Password Doesnot Match";
	}
}






?>
<p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>

<form name="changepass" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Username:</td>
<td><input type="text" name="username" id="username"></td>
</tr>

<tr height="50">
<td>Old Password:</td>
<td><input type="password" name="oldpassword" id="oldpassword"></td>
</tr>

<tr height="50">
<td>New Password:</td>
<td><input type="password" name="newpassword" id="newpassword"></td>
</tr>

<tr height="50">
<td>Confirm Password:</td>
<td><input type="password" name="confirmpassword" id="confirmpassword"></td>
</br>
<td><input type="submit" name="submit" id="" value="changepassword"></td>

</tr>

</table>
</form>
</body>
</html>