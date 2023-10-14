<?php
    session_start();
    $con=mysqli_connect("localhost","root","","library");
    if($_SESSION['email']=="")
      {
        header("location:student.php");
      }
     if($_SERVER['REQUEST_METHOD']=='POST')
    {
      

        $email=$_SESSION['email'];
        $title=$_REQUEST['title'];
        $author=$_REQUEST['author'];
        
        
         $sql2="SELECT * FROM `student` WHERE `email`='$email'";
         $run=mysqli_query($con,$sql2);
         $data=mysqli_fetch_array($run);
         
         $fname=$data['fname'];
         $phone=$data['phone'];
         
        
        $sql="INSERT INTO orderbook (`bookname`, `author`, `sname`, `phone`, `email`) 
        VALUES (' $title','$author','$fname','$phone','$email')";
        
        $rs=mysqli_query($con,$sql);//execution of queries...
        if($rs == TRUE)
        {
             echo "<script>alert('requested successfully...');</script>";
             
        }
         
        else
        {
             echo "<script>alert('request not successful...');</script>";
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
        window.alert("Please enter your Autheor's Name..."); 
        author.focus(); 
        return false; 
    } 

    if (author.value.length<6)                           
    { 
        window.alert(" Autheor's Name should be at least of 6 characters"); 
        author.focus(); 
        return false; 
    } 

   
return true; 
   
    
}

</script> 

 <style>
  /* body
  {
    background-image: url('li_home3.jpg');
    background-size: cover;
    background-attachment: fixed: 
  } */
 </style>
</head> 
<body> <!-- style="background-color:#c7c1c161;" -->
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
          <font size="6" style=" color:red;">Request book</font>
            
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
     
      <input type="submit" value="submit" class="btn"><br>
      
    </form>
 </div>  

 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>

</body>
</html>   


