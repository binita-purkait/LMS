<?php

	session_start();
     if($_SESSION['email']=="")
     {
        header("location:student.php");
     }
	 $con=mysqli_connect("localhost","root","","library");
?>

<html>
    <head>
        <link rel="stylesheet" href="design.css">
    </head>   
    <style>
        .opc
           {
              opacity:0.8;
           }
          /* body
           {
              background-image:url('lib2.jpg');
              background-size: cover;
              background-attachment: fixed:
           } */
    </style> 
<body>


    <table width=100% style="background-color:#0456a1; color:white; margin-top: 0px;" width="60" height="80">  <!-- #708e08 -->
        <tr>
          <td><img src="lib_head.jpg"><td>
            <td align="center"><a href="search_book_stu.php">Search Book</a></td>
            <td align="center"><a href="view_book_stu.php">View Book</a></td>
            <td align="center"><a href="req_book.php">Request Book</a></td>
            <td align="center"><a href="view_info.php">View Info</a></td>
            
            <td align="center"><a href="logout_stu.php">Logout</a></td>
            
        </tr>
    </table>

     <div class="container">
       <img src="li_home.jpg" height="300" width=100%>
       <div class="center_img opc">
          <font size="6" style=" color:red;">View book</font>
            
       </div>
    </div>

		<table border="1" align="center" width=70% 
             style="margin-top:30px;background-color:white; color:black;" class="opc">
        	<tr>
            	<th align="center"><span class="style5">Id</span></th>
                <th align="center"><span class="style5">Title</span></th>
                <th align="center"><span class="style5">Author</span></th>
                <th align="center"><span class="style5">Cost</span></th>
                <th align="center"><span class="style5">Quantity</span></th>
				
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