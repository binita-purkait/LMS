<?php

	 $con=mysqli_connect("localhost","root","","library");
	
	$id=$_REQUEST['id'];
	
	$sql="delete from student where id='".$id."'";
	mysqli_query($con,$sql);
	
	header("location:view_student.php");


?>