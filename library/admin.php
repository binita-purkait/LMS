<?php
     session_start();
     $con=mysqli_connect("localhost","root","","library");
     $msg="";

     if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$user=$_REQUEST['user'];
		
		$password=$_REQUEST['password'];
		
		$sql="select * from user where username='".$user."' and pass='".$password."'";
		
		$rs=mysqli_query($con,$sql);//execution of queries...
		$n=mysqli_num_rows($rs);
		
			if($n>0)
			{
				
				$_SESSION['user']=$user;
				header("location:admin_home.php");
			}
			else
			{
				
				$msg="Invalid login";	
				
			}
			
		
	}
?>

<html>
<head>
	<link rel="stylesheet" href="design.css">
</head>
<style>
	 .opc
       {
         
        
         opacity: 0.6;

       }

      /* body
       {
       	background-image: url(li_home3.jpg);
  	     background-size: cover;
  	    background-attachment: fixed: 
       } */


</style>	
<body> <!-- style="background-color:#c7c1c161;" -->
	
	<table width=100% style="background-color:#0456a1; color:white; margin-top: 0px;" width="60" height="80">  <!-- #708e08 -->
        <tr>
            <td><img src="lib_head.jpg"><td>
            <td align="center">
                <a href="index.php"><font size="4">Home</font></a>
            </td>
            <td align="center">
              <a href="about.php"><font size="4">About Us</font></a>
            </td>
            
            <td align="center">
                    <a  href="admin.php"><font size="4">Admin Login</font></a>
            </td>
            <td align="center">
              <a href="student.php"><font size="4">Student Login</font></a>
            </td>
            <td align="center">
              <a href="contact.php"><font size="4">Contact Us</font></a>
            </td>
        </tr>
    </table>


<img src="li_home.jpg" height="370" width=100%>
 

 <div align="center" style="background-color:white;width:400px;
 margin:auto;margin-top:30px;">
 	
 	<span><img src="book_icon.jpg" height="100" width="100"></span>
 	<h3>Welcome to our library management system</h3>

	<form method="post">
        Name:<br>
        <input type="text" name="user"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit" class="btn"><br>
	</form>	
	<div><center><b><font color="red"><?php echo $msg;?></font></b></center></div>
 </div>	

 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:30px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>
</body>	
</html>