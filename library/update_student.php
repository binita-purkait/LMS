<?php

	session_start();
	 $con=mysqli_connect("localhost","root","","library");
	$msg="";

	$id=$_REQUEST['id'];
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		$phone=$_REQUEST['phone'];
		$address=$_REQUEST['address'];	
		$sql="update student set phone='".$phone."', address='".$address."' where id='".$id."'";
		
		mysqli_query($con,$sql);
		
		/*$msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>"; */
		$msg="<script>alert('Data updated successfully.');</script>";
	}
	
	$sql1="select * from student where id='".$id."'";
	$rs=mysqli_query($con,$sql1);
	$d=mysqli_fetch_array($rs);
  if(isset($_REQUEST['s1']))
  {
   header('Refresh: 0.005; URL=view_student.php');
  }
?>

<html>
  <head>
      <link rel="stylesheet" href="design.css">
      <style>
        body
        {
          background-image:url('lib2.jpg');
        }
      </style>
   </head>


<body>
		<form name="form1" method="post" action="">
        	<table border="1" align="center" style="margin-top:200px; background-color: white;">

            <tr>
            <td align="center" colspan=3>
              <img src="book_icon.jpg" height="50" width="50">
            </td>
            </tr>
            
            	<tr>
                   <td>Id</td>
                   <td>:</td>
                   <td>
                   	 <input type="text" name="id" id="id" value="<?php echo $d['id'];?>" readonly/>
                   </td>
            	</tr>

                <tr>
                  <td>First Name</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="fname" id="fname" value="<?php echo $d['fname'];?>" readonly/>
                  </td>
                </tr>

                <tr>
                  <td>Last Name</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="lname" id="lname" value="<?php echo $d['lname'];?>"  readonly/>
                  </td>
                </tr>

                <tr>
                  <td>Email ID</td>
                  <td>:</td>
                  <td>
                  	  <input  readonly type="email" name="email" id="email" value="<?php echo $d['email'];?>"/>
                  </td>
                </tr>
                  
                  <tr>
                  <td>Phone No.</td>
                  <td>:</td>
                  <td>
                  	  <input type="number" name="phone" id="phone" value="<?php echo $d['phone'];?>"/>
               
                </tr>
                  
                  <tr>
                  <td>Address</td>
                  <td>:</td>
                  <td>
                      <input type="text" name="address" id="address" value="<?php echo $d['address'];?>"/>
               
                </tr>
                  

                <tr>
                <td><input type="submit" name="s1" value="Submit"/></td>
                <td>:</td>
                <td><input type="reset" name="s2"/></td>
                </tr>
            </table>
        <div align="center"><?php echo $msg;?></div>
        
	  </form>
      
</body>
</html>
