<?php
    session_start();
    if($_SESSION['user']=="")
      {
        header("location:admin.php");
      }
      
    if(isset($_POST['submit']))
    {
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
         echo "Fine:".$fine*2;
       }
       else
       {
       	echo "<script>alert('No fine...');</script>";
       }
    	$sql="delete from issuebook where accNo='".$accNo."' AND email='".$email."'";
    	$run=mysqli_query($con,$sql);
    	if($run)
    		{
    			echo "<script>alert('Book has been returned successfully...');</script>";
            }
      }

      else 
         echo  "<script>alert('Record is not present...');</script>";
       }
?>
<html>
  <head> 

    <link rel="stylesheet" href="design.css">
  </head>   
<body> <!-- style="background-color:#c7c1c161;" -->
   <table width=100% style="background-color:#0456a1; color:white; margin-top: 0px;" width="60" height="80"><!-- #708e08 -->
        <tr>
            <td align="center"><a href="add_book.php">Add Book</a></td>
            <td align="center"><a href="search_book.php">Search Book</a></td>
            <td align="center"><a href="view_book.php">View Book</a></td>
    
            <td align="center"><a href="issue_book.php">Issue Book</a></td>
            <td align="center"><a href="return_book.php">Return Book</a></td>
            <td align="center"><a href="add_student.php">Add Student</a></td>
            <td align="center"><a href="view_student.php">View Student</a></td>
            <td align="center"><a href="view_request.php">View Request</a></td>
            <td align="center"><a href="logout.php">Logout</a></td>
        </tr>
    </table>

     <div class="container">
       <img src="li_home.jpg" height="300" width=100%>
       <div class="center_img opc">
          <font size="6" style=" color:red;">Return Book</font>
            
       </div>
    </div>

	<div align="center" style="background-color:white;width:400px;
 margin:auto;margin-top:10px;" >
 	
 	<span><img src="book_icon.jpg" height="100" width="100"></span>
 

	<form method="post">
        Enter Acc. No.:<br>
        <input type="text" name="accNo"><br><br>
        Enter Student's Email ID:<br>
        <input type="email" name="email"><br><br>
        <input type="submit" value="return" name="submit" class="btn"><br>
	</form>	
	<!--<div><center><b><font color="red">< ?php /* echo $msg; */?></font></b></center></div>-->
 </div>

 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div> 	
</body>
</html>	

