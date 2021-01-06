<div id="broker-content">
<div class="container">
<div class="row">
      <div class="col-md-10">
	  <h1 class="broker-heading">All Client Information</h1>
	  </div>
	  
	  <div class="col-md-2">
	  <a class="add-new" href="signup.php">Add Client</a>
	  </div>
	  
	  <div class="col-md-12">

<?php
include "config.php";
$query="SELECT * FROM final6pro ORDER BY id DESC";
$result=mysqli_query($connection,$query) or die("Failed");

$count=mysqli_num_rows($result);

if($count>0)
{	
	    
?>	  
	  
	  <table class="content-table">
	  <thead>
	  <th>Id</th>
	  <th>Username</th>
	  <th>email</th>
	   <th>password</th>
	 
	  </thead>
	  
	  <tbody>
	  <?php
	  
	  while($row=mysqli_fetch_assoc($result))
	  {
		  
	  
	  
	  ?>
	  <tr>
	  
	  <td class="addproperty_id"><?php echo $row ['id'] ?></td>
	  
	  <td><?php echo $row['username'] ?></td>
	  <td><?php echo $row['email'] ?></td>
	  <td><?php echo $row['password']?></td>
	  
	  
	  
	  
	  
	  
	  
	  </tr>
	  
	  <?php 
	  }
	  ?>
	  
	  </tbody>
	  
	  <?php
	  } 
	  ?>
	  
	  
	</table>
	<p><a  href="login.php">Log Out</a></p>
   <ul class="pagination admin-pagination">


</ul>
</div>
</div>
</div>
</div>
  
	  
	  
	  
	  
	  
	  