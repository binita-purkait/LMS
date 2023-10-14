<?php

	 $con=mysqli_connect("localhost","root","","library");
	
	$id=$_REQUEST['id'];
	
	$sql="delete from book where id='".$id."'";
	mysqli_query($con,$sql);
	
	header("location:view_book.php");


?>