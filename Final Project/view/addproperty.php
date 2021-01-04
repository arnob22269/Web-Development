<div id="admin-content">
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="admin-heading">Add Product INformation</h1>
</div>

<div class="col-md-offset-3 col-md-6">
  
 <?php 
  if(isset($_POST["submit"]))
  {
	include 'config.php';
	
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$propertytype=mysqli_real_escape_string($connection,$_POST['propertytype']);
    $propertyprice=mysqli_real_escape_string($connection,$_POST['propertyprice']);
    $propertylocation=mysqli_real_escape_string($connection,$_POST['propertylocation']); 
    $role=mysqli_real_escape_string($connection,$_POST['role']);

    $query="SELECT username FROM addproperty2 WHERE username='$username'";
	$result=mysqli_query($connection,$query) or die("Query Failed.");
	
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "Username Already Exists.";
	}
	{
		$query1="INSERT INTO addproperty2 (username,propertytype,propertyprice,propertylocation,role)
		VALUE ('$username','$propertytype','$propertyprice','$propertylocation','$role')";
		
		$result=mysqli_query($connection,$query1)or die("Failed");
		if($result)
		{
			header("location:addpropertytable.php");
			
		}	
	}	
  }
  
  
 ?> 
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
  
  <div class="form-group">
  <label>Product Name</label>
  <input type="text" name="username" class="form-control" placeholder="Product Name" required>
  </div>
  <br>
  
  <div class="form-group">
  <label>Product Type</label>
  <input type="text" name="propertytype" class="form-control" placeholder="Product Type" required>
  </div>
  <br>
   <div class="form-group">
  
  <label>Product Price</label>
  <input type="text" name="propertyprice" class="form-control" placeholder="Product Price" required>
  </div>
<br>

   <div class="form-group">
  
  <label>Delevary Location</label>
  <input type="text" name="propertylocation" class="form-control" placeholder="Delevary Location" required>
  </div>
  <br>
  <div class="form-group">
  
  <label>Order Type</label>
  <select class="form-control" name="role">
  
  <option value="2">local</option>
  <option value="3">normal</option>
  <option value="4">Brand</option>
  </select>
  </div>
  
  
<br>
<input type="submit" name="submit" class="btn btn-primary" value="Add" required/>

</form>
</div>
</div>
</div>
</div>
 







