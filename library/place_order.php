<?php
 session_start();
 $con=mysqli_connect("localhost","root","","library");
  if($_SERVER['REQUEST_METHOD']=='POST')
    {
       $bname=$_REQUEST['bname'];
       $author=$_REQUEST['author'];
       $sql="select * from book where `title`='".$bname."' and `author`='".$author."'";
       $mysqli_result=mysqli_query($con,$sql);
       $n=mysqli_num_rows($mysqli_result);

       if($n>0)
    {
        echo $n;
       echo "The book available..";
    }
    
   } 
?>
<html>
<head>
  <link rel="stylesheet" href="design.css">
</head>
<body class="back_img"> <!--   style="background-color:#c7c1c161;" -->
  
  <table width=100% style="background-color:black; color:white;" width="60" height="60">  <!-- #708e08 -->
        <tr>
            <td align="center" width=30%><a href="search_book.php">Search Book</a></td>
            <td align="center"><a href="view_book_stu.php">View Book</a></td>
            <td align="center"><a href="place_order.php">Place Order</a></td>
            <td align="center"><a href="logout_stu.php">Logout</a></td>
            
        </tr>
    </table>
     
    <div align="center" style="background-color:white;
          width:400px;margin:auto; margin-top:100px;">
       <span><img src="book_icon.jpg" height="100" width="100"></span>
   <form method="post">
      Enter name of the book:<br>
        <input type="text" name="bname"><br><br>
      Enter name of the author:<br>
        <input type="text" name="author"><br><br>
      
      <input type="submit" value="submit" class="btn"><br>
      
    </form>
 </div>   
 </body>
 </html>   