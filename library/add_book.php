<?php
    session_start();
    if($_SESSION['user']=="")
      {
        header("location:admin.php");
      }
     if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $title=$_REQUEST['title'];
        $author=$_REQUEST['author'];
        $cost=$_REQUEST['cost'];
        
        $quantity=$_REQUEST['quantity'];
        
        
        $con=mysqli_connect("localhost","root","","library");
        
        $sql="INSERT INTO book (`title`, `author`, `cost`, `quantity`) 
        VALUES (' $title','$author','$cost','$quantity')";
        
        $rs=mysqli_query($con,$sql);//execution of queries...
        if($rs == TRUE)
        {
             echo "<script>alert('inserted successfully...');</script>";
             
        }
         
        else
        {
             echo "<script>alert('insertion not successful...');</script>";
        }
          
        
        
    }        
        
    

?>

<html>

<head> 

    <link rel="stylesheet" href="design.css">
 
<script language=javascript type="text/javascript">


</script>

<script> 
function FormData()                                    
{ 

    var title =  document.forms["AddForm"]["title"];                
    var author = document.forms["AddForm"]["author"];    
      
    var cost = document.forms["AddForm"]["cost"];  
    var quantity = document.forms["AddForm"]["quantity"];
    
   

   if (title.value == "")                               
    { 
        window.alert("Please enter Title..."); 
        title.focus(); 
        return false; 
    } 

    if (title.value.length<3)                               
    { 
        window.alert("Title should be at least of three characters.. "); 
        title.focus(); 
        return false; 
    } 

  
       
   
   if (author.value == "")                           
    { 
        window.alert("Please enter your Author's Name..."); 
        author.focus(); 
        return false; 
    } 

    if (author.value.length<6)                           
    { 
        window.alert(" Autheor's Name should be at least of 6 characters"); 
        author.focus(); 
        return false; 
    } 

    if (cost.value == "")                        
    { 
        window.alert("Please enter cost of the book..."); 
        cost.focus(); 
        return false; 
    } 
   if (quantity.value == "")                        
    { 
        window.alert("Please enter the quantity of the book..."); 
        quantity.focus(); 
        return false; 
    } 
    
   
   
    
   
return true; 
   
    
}

</script> 
<link rel="stylesheet" href="design.css">
        <style>
          .opc
          {
            opacity:0.7;
          }
         </style> 

</head> 
<body> <!-- style="background-color:#c7c1c161;" -->
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
       <div class="center_img opc">
          <font size="6" style="color:red;">Add Book</font>
            
       </div>
    </div>

<div align="center" style="background-color:white;width:
   400px;margin:auto;margin-top:10px;"">
    <span><img src="book_icon.jpg" height="100" width="100"></span>
	
   <form name="AddForm" action="" onsubmit="return FormData()" method="post">
      Title:<br>
        <input type="text" name="title"><br><br>
      Author:<br>
        <input type="text" name="author"><br><br>
      Cost:<br>
        <input type="number" name="cost"><br><br>
      Quantity:<br>
        <input type="text" name="quantity"><br><br>
      <input type="submit" value="Add" class="btn"><br>
      
    </form>
 </div>

 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>  
</body>
</html>   


