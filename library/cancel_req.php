<?php

	 $con=mysqli_connect("localhost","root","","library");
	
	$id=$_REQUEST['id'];
	
	$sql="delete from orderbook where id='".$id."'";
	mysqli_query($con,$sql);
	
	header("location:view_request.php");


?>