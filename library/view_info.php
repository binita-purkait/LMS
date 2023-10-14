<?php
 session_start();
 if($_SESSION['email']=="")
 {
 	header("location:student.php");
 }

?>


<html>
    <head>
        <link rel="stylesheet" href="design.css">
    </head>
    <style>
    .col
     {
     	color:blue;
     }

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
          <font size="6" style=" color:red;">View Info</font>
            
       </div>
    </div>

		<table border="1" width=75% align="center" 
             style="margin-top:30px;background-color:white; color:black;">
        	<tr>
            	<td align="center"><span class="style5">Acc. No.</span></td>
                <td align="center"><span class="style5">Title</span></td>
                <td align="center"><span class="style5">Author</span></td>
                <td align="center"><span class="style5">Student ID</span></td>
                <td align="center"><span class="style5">Student Name</span></td>
                <td align="center"><span class="style5">Email</span></td>
                <td align="center"><span class="style5">Issue Date</span></td>
                <td align="center"><span class="style5">Expiry Date</span></td>
                <td align="center"><span class="style5">Calculate Fine</span></td>
				
            </tr>
            <?php
            $email=$_SESSION['email'];
			$sql="SELECT * FROM `issuebook` WHERE `email`='$email'";
			 $con=mysqli_connect("localhost","root","","library");
			$rs=mysqli_query($con,$sql);
			if(mysqli_num_rows($rs)>0)
			{
			while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<td align="center"><?php echo $d['accNo'];?></td>
                <td align="center"><?php echo $d['title'];?></td>
                <td align="center"><?php echo $d['author'];?></td>
                <td align="center"><?php echo $d['sid'];?></td>
                <td align="center"><?php echo $d['sname'];?></td>
                <td align="center"><?php echo $d['email'];?></td>
                <td align="center"><?php echo $d['issueDate'];?></td>
                <td><?php echo $d['expDate'];?></td>
               <td><a class="col" href="fine.php?accNo=<?php echo $d['accNo'];?>
               	& email=<?php echo $d['email'];?> ">
               	calculate
               </a>
             </td>
            </tr>
			<?php
			}
		}

		 else
		 {
		 	?>
            <tr>
            	<td align="center" colspan=9>No record found.</td>
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