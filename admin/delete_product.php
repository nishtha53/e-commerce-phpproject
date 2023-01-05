<?php

	include 'connection.php';

	$id = $_GET['pid'];
	
	$query = "DELETE from product where prod_no=$id;";
	
	$data = mysqli_query($conn,$query);
	
	if($data)
	{
		echo "Data deleted";
	}
	else
	{
		echo "Data not deleted";
	}

	header("location:product.php");

?>