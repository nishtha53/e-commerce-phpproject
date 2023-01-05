<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medical_store";
	
	$conn =  mysqli_connect($servername,$username,$password,$dbname);

	if($conn)
	{
		//echo "Database connected successfully!<br>";
	}
	else
	{
		echo "Database not connected!<br>";
	}
?>