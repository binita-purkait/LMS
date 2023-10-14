<?php
 session_start();
 if($_SESSION['user']=="")
 {
 	header("location:admin.php");
 }

?>

<html>
  <head>
      <link rel="stylesheet" href="design.css">
      <style>
        .opc
        {
          opacity:0.7;
        }
      </style>
   </head>
 <body>

 <table width=100% style="background-color:#0456a1; color:white; margin-top: 0px;" width="60" height="80"> <!-- #708e08 -->
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
 	<!-- <a href="add_book.php">Add Book</a>
 	<a href="search_book.php">Search Book</a>
 	<a href="view_book.php">View Book</a>
 	<a href="view_order.php">View Order</a>
 	<a href="logout.php">Logout</a> -->

 	<div class="container">
       <img src="li_home.jpg" height="500" width=100%>
       <div class="center_img opc">
          <font size="6" style="background-color:black; color:white;">Welcome to our library management system</font>
            
       </div>
    </div>

  <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>

 </body>	
</html>