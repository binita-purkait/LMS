<?php
 
 $con=mysqli_connect("localhost","root","","library");
 $accNo=$_REQUEST['accNo'];
  $email=$_REQUEST['email'];
  

  $sql1="SELECT * FROM `issuebook` WHERE `accNo`='$accNo' AND `email`='$email'";
	$run1=mysqli_query($con,$sql1);
   if(mysqli_num_rows($run1)>0)
   {
	  $d=mysqli_fetch_array($run1);
	  $expDate=$d['expDate'];
	  $currentDate=date('Y-m-d');
	    if($currentDate>$expDate)
	    {
	    $date1=date_create($expDate);

	    $date2=date_create($currentDate);
	    $diff=date_diff($date1,$date2);
	    $fine=$diff->format("%a");
	    $fine=$fine*2;
         /*echo "Fine:".$fine*2;*/
         echo "<script>alert('Fine: $fine');</script>";
       }
       else
       {
       	echo "<script>alert('No fine...');</script>";
       }
      header('Refresh: 0.05; URL=view_info.php');
     }  
     

?>