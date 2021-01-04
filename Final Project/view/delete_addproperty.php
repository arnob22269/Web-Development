<?php

include 'config.php';

$rcv_id=$_GET['addproperty_id'];

$query="DELETE FROM addproperty2 WHERE addproperty_id='{$rcv_id}'";

$result=mysqli_query($connection,$query);

if($result)
{
	header("location:addpropertytable.php");
}
else
{
	echo "Cann't Delete User.";
}

mysqli_close($connection);


?>