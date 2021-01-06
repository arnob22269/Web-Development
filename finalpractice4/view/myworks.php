<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel="Stylesheet" href="test2.css">
<style>
body {
  background-image: url('202_Image2.jpg');
}
</style>

</head>




<body>

<center><?php include('header.php'); ?></center>
<div class="center">
<ul>  
       <li><a class="active" href="">Here You Can</a></li><br>
	   <form action="" method="post">
	  
      <li><a href="trackodr.php">Profile View</a></li><br>
	  </form>
	  <form action="changepassword.php" method="post">
      <li><a   href="changepassword.php">ChangePassword</a></li><br>
	  </form>
      <li><a href="">CancelBooking</a></li><br>
	  
	  
	   <li><a  href="searchbooking.php">SearchBooking</a></li><br>
	   
	    <li><a  href="searchuser.php">SearchUser</a></li><br>
		
		<form action="addproperty.php" method="post">
      <li><a   href="addproperty.php">AddProperty</a></li><br>
	  </form>
		
	    <li><a  href="viewpropertyinfo.php">ViewPropertyinformation</a></li><br>
		
		
		
	    <li><a  href="clientinformation.php">ViewClient Information</a></li><br>
		
		
	    <li><a  href="viewbookinglist.php">ViewBooking List</a></li><br>
		
		 <li><a  href="search_addproperty.php">SearchProperty</a></li>
		 
		  
  <form action="../controller/action_logout.php" method="post">
  <!--<input style="color:green" type="submit" value="Log Out" name="">-->
  <p><a  href="login.php">Log Out</a></p>
  
  </form>
		 
</div>
 <center><?php include('footer.php'); ?></center>
</body>
</html>

