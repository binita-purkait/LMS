<?php
 
  session_start();
  $con=mysqli_connect("localhost","root","","library");
  


         $id=$_REQUEST['id'];
		$sql="SELECT * FROM `orderbook` WHERE `id`=' $id'";
		$rs=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($rs);
		$bookname=$data['bookname'];
		$author=$data['author'];	
		$sname=$data['sname'];
		$phone=$data['phone'];
		$email=$data['email'];
		$issueDate=date("Y-m-d");
        $expDate=date('Y-m-d', strtotime($issueDate. ' + 14 days'));
        
        $sql1="SELECT * FROM `student` WHERE `email`='$email'";
        $rs2=mysqli_query($con,$sql1);
        $data1=mysqli_fetch_array($rs2);
        $sid=$data1['id'];

        /*$sql4="SELECT * FROM `book` WHERE `title`='$bookname' AND `author`='$author'";
        $rs4=mysqli_query($con,$sql4);
        $data4=mysqli_fetch_array($rs4);
        $accNo=$data4['id'];*/

		$sql2="INSERT INTO issuebook (`accNo`, `title`, `author`, `sid`, `sname`, `email`, `issueDate`, `expDate`) 
        VALUES ('$id','$bookname','$author','$sid','$sname','$email','$issueDate','$expDate')";
		
		$run=mysqli_query($con,$sql2);
		
		if($run)
		{
			echo "<script>alert('The record has been issued successfully');</script>";
		}

		$sql5="delete from orderbook where id='".$id."'";
		mysqli_query($con,$sql5);
	 header('Refresh: 0.2; URL=view_request.php');
	
?>