<?php

	session_start();
     if($_SESSION['user']=="")
     {
        header("location:admin.php");
     }
	 $con=mysqli_connect("localhost","root","","library");
?>

<html>
    <head>
        <link rel="stylesheet" href="design.css">
          <style>
           .opc
           {
              opacity:0.8;
           }
           .col{
            color:blue;
           }
          /* body
           {
              background-image:url('lib2.jpg');
              background-size: cover;
              background-attachment: fixed:
           } */
          </style> 
    </head>    
<body>


    <table width=100% style="background-color:#0456a1; color:white; margin-top: 0px;" width="60" height="80">  <!-- #708e08 -->
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
       <div class="center_img opc ">
          <font size="6" style="color:red;">View Student</font>
            
       </div>
    </div>


		<table border="1" align="center" width=70% 
            style="margin-top:20px;background-color:white; color:black;" class="opc">
        	<tr>
            	<th align="center"><span class="style5">Id</span></th>
                <th align="center"><span class="style5">First Name</span></th>
                <th align="center"><span class="style5">Last Name</span></th>
                <th align="center"><span class="style5">Email</span></th>
                <th align="center"><span class="style5">Phone</span></th>
				<th align="center"><span class="style5">Address</span></th>
                
                <td align="center"><span class="style5">Edit</span></td>
                 <td align="center"><span class="style5">Delete</span></td>
            </tr>
            <?php
			$sql="select * from student";
			
			$rs=mysqli_query($con,$sql);
			while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<td align="center"><?php echo $d['id'];?></td>
                <td align="center"><?php echo $d['fname'];?></td>
                <td align="center"><?php echo $d['lname'];?></td>
                <td align="center"><?php echo $d['email'];?></td>
                <td align="center"><?php echo $d['phone'];?></td>
                <td align="center"><?php echo $d['address'];?></td>
                
               
               <td align="center"><a class="col" href="update_student.php?id=<?php echo $d['id'];?>">Edit</a></td>
            <td align="center"><a class="col" href="delete_student.php?id=<?php echo $d['id'];?>">Delete</a></td>
            
            </tr>
			<?php
			}
			
			?>
        </table>
        
     <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:30px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>      
		
</body>
</html>