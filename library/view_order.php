<?php

	session_start();
	
?>

<html>
    
    <head>
      <link rel="stylesheet" href="design.css">
   </head>
<body>

    <table width=100% style="background-color:black; color:white;" width="60" height="60">  <!-- #708e08 -->
        <tr>
            <td align="center" width=30%><a href="add_book.php">Add Book</a></td>
            <td align="center"><a href="search_book.php">Search Book</a></td>
            <td align="center"><a href="view_book.php">View Book</a></td>
           
            <td align="center"><a href="view_order.php">View Order</a></td>
            <td align="left" width=20%><a href="logout.php">Logout</a></td>
        </tr>
    </table>


		<table border="1">
        	<tr>
            	<td><span class="style5">Id</span></td>
                <td><span class="style5">Title</span></td>
                <td><span class="style5">Author</span></td>
                <td><span class="style5">Student ID</span></td>
                <td><span class="style5">Student Name</span></td>
				<td><span class="style5">Issue Date</span></td>
                <td><span class="style5">Expiry Date</span></td>
            </tr>
            <?php
			$sql="select * from orderbook";
			 $con=mysqli_connect("localhost","root","","library");
			$rs=mysqli_query($con,$sql);
            while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<td><?php echo $d['id'];?></td>
                <td><?php echo $d['bookname'];?></td>
                <td><?php echo $d['author'];?></td>
                <td><?php echo $d['sid'];?></td>
                <td><?php echo $d['sname'];?></td>
                <td><?php echo $d['issueDate'];?></td>
                <td><?php echo $d['expDate'];?></td>
            </tr>
			<?php
			}
			
			?>
        </table>
        
        
		
</body>
</html>