<?php

include "config.php";
$output='';

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query = mysql_query("SELECT * FROM addproperty2 WHERE username LIKE '%$searchq%' OR propertylocation LIKE '%$searchq%' ") or die("could not search");
	$count = mysql_num_rows($query);
	if($count == 0){
		$output ='There was no search results!';
	}else{
		while($row = mysql_fetch_array($query)){
			$username = $row['username'];
			$propertylocation =$row['propertylocation'];
			$addproperty_id  =$row['addproperty_id '];
			
			$output = '<div>'.$username.' '.$propertylocation.'</div>';
			
		}
			
			
		}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	
</head>
<body>
     <form action="" method="post">
     	<h2>search</h2>
     	
        
     	
     	
     	<input type="text" name="search" placeholder="search" required><br>

     	

     	<button type="submit" name="submit" >">>"</button>
          
     </form>
	 
	
</body>
</html>





<div id="broker-content">
<div class="container">
<div class="row">
      <div class="col-md-10">
	  <h1 class="broker-heading">All Property Information</h1>
	  </div>
	  
	  <div class="col-md-2">
	  <a class="add-new" href="addproperty.php">Add Property</a>
	  </div>
	  
	  <div class="col-md-12">

<?php
include "config.php";
$query="SELECT * FROM addproperty2 ORDER BY addproperty_id DESC";
$result=mysqli_query($connection,$query) or die("Failed");

$count=mysqli_num_rows($result);

if($count>0)
{	
	    
?>	  
	  
	  <table class="content-table">
	  <thead>
	  <th>Id</th>
	  <th>Username</th>
	  <th>Property Type</th>
	   <th>Property Price</th>
	   <th>Property Location</th>
	   <th>Role</th>
	  <th>Edit</th>
	  <th>Delete</th>
	  </thead>
	  
	  <tbody>
	  <?php
	  
	  while($row=mysqli_fetch_assoc($result))
	  {
		  
	  
	  
	  ?>
	  <tr>
	  
	  <td class="addproperty_id"><?php echo $row ['addproperty_id'] ?></td>
	  
	  <td><?php echo $row['username'] ?></td>
	  <td><?php echo $row['propertytype'] ?></td>
	  <td><?php echo $row['propertyprice']?></td>
	  <td><?php echo $row['propertylocation']?></td>
	  <td><?php 
	  
	  if($row['role']==1)
	  {
		  echo "Broker";
		  
	  }
	  else
	  {
		  echo "Seller";
	  }
	 
	  ?></td>
	  
	  
	  
	  
	  
	  </tr>
	  
	  <?php 
	  }
	  ?>
	  
	  </tbody>
	  
	  <?php
	  } 
	  ?>
	  
	  
	</table>
   <ul class="pagination admin-pagination">

<p><a  href="login.php">Log Out</a></p>
</ul>
</div>
</div>
</div>
</div>
  
	  
	  
	  
	  
	  
	  