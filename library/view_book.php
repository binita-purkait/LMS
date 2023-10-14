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
   </head>
 <style>
 .col{
    color:blue;
 }
 .opc
 {
    opacity:0.8;
 }
 /*body
 {
    background-image:url('lib2.jpg');
    background-size: cover;
    background-attachment: fixed:
 }*/
 </style>
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
          <font size="6" style="color:red;">View Book</font>
            
       </div>
    </div>

		<table border="1" align="center" width=75% style="margin-top:10px; background-color: white; color:black;" class="opc">
        	<tr>
            	<td align="center"><span class="style5">Id</span></td>
                <td align="center"><span class="style5">Title</span></td>
                <td align="center"><span class="style5">Author</span></td>
                <td align="center"><span class="style5">Cost</span></td>
                <td align="center"><span class="style5">Quantity</span></td>
				<td align="center"><span class="style5">Edit</span></td>
				<td align="center"><span class="style5">Delete</span></td>
            </tr>
            <?php
			$sql="select * from book";
			
			$rs=mysqli_query($con,$sql);
			while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<td align="center"><?php echo $d['id'];?></td>
                <td align="center"><?php echo $d['title'];?></td>
                <td align="center"><?php echo $d['author'];?></td>
                <td align="center"><?php echo $d['cost'];?></td>
                <td align="center"><?php echo $d['quantity'];?></td>
               
            <td align="center"><a class="col" href="update_book.php?id=<?php echo $d['id'];?>">Edit</a></td>
            <td align="center"><a class="col" href="delete_book.php?id=<?php echo $d['id'];?>">Delete</a></td>
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