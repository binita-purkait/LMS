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
          <font size="6" style=" color:red;">Search book</font>
            
       </div>
    </div>


	<div align="center" style="background-color:white;
    width:400px;margin:auto;margin-top:10px;">
      <span><img src="book_icon.jpg" height="100" width="100"></span>
       
    <form method="post" action="">
     
     Enter Title: <br> <input type="text" name="title"><br><br>
     Enter Author: <br> <input type="text" name="author"><br><br>
     <input type="submit" value="search" name="submit" class="btn">
    </form>
   </div>

  

   
           
<?php
  if(isset($_POST['submit']))
  {
    
           
     $title=$_POST['title'];
      $author=$_POST['author'];
      $con=mysqli_connect("localhost","root","","library");
     /*include('search_function.php');*/
      
    $sql="SELECT * FROM `book` WHERE `title`='$title' AND `author`='$author'";
    $run=mysqli_query($con,$sql);
    $n=mysqli_num_rows($run);
    
    if($n>0)
    {
     $data=mysqli_fetch_array($run);

     ?>
             <table border="1" align="center">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Cost</th>
                <th>Quantity</th>
           
            </tr>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['author']; ?></td>
                <td><?php echo $data['cost']; ?></td>
                <td><?php echo $data['quantity']; ?></td>
               
            </tr>
      </table>      

     <?php
    }
   else
   {
    echo "<script>alert('No record found..');</script>";
   }
  }
?>

<div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:10px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>      
</body>
</html>	


    
    
