<?php
    session_start();
    if($_SESSION['user']=="")
      {
        header("location:admin.php");
      }
     if($_SERVER['REQUEST_METHOD']=='POST')
    {
       
        $accNo=$_REQUEST['accNo'];
        $title=$_REQUEST['title'];
        $author=$_REQUEST['author'];
        $sid=$_REQUEST['sid'];
        
        $sname=$_REQUEST['sname'];
        $email=$_REQUEST['email'];
        $issueDate=date("Y-m-d");

        $expDate=date('Y-m-d', strtotime($issueDate. ' + 14 days'));
        
 
          

        /*   $con=mysqli_connect("localhost","root","","library");
        
        $sql1="SELECT * FROM `book` WHERE `title`='$title' AND `author`='$author'";
        $rs1=mysqli_query($con,$sql1);
        $n1=mysqli_num_rows($rs1);
        if($n1 != 1)
        {
            echo "<script>alert('The book is not available');</script>";
        }
        mysqli_close($con);
      */
       
          
        $con=mysqli_connect("localhost","root","","library");
        
        $sql="INSERT INTO issuebook (`accNo`,`title`, `author`, `sid`, `sname`,`email`, `issueDate`, `expDate`) 
        VALUES ('$accNo','$title','$author','$sid','$sname','$email','$issueDate','$expDate')";
        
        $rs=mysqli_query($con,$sql);//execution of queries...
        if($rs == TRUE)
        {
             echo "<script>alert('Book has been issued successfully...');</script>";
             
        }
         
        else
        {
             echo "<script>alert('Issue not successful...');</script>";
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
    var title =  document.forms["IssueForm"]["accNo"];
    var title =  document.forms["IssueForm"]["title"];                
    var author = document.forms["IssueForm"]["author"];    
      
    var sid = document.forms["IssueForm"]["sid"];  
    var sname = document.forms["IssueForm"]["sname"];
    var email =  document.forms["IssueForm"]["email"];
   


    if (accNo.value == "")                               
    { 
        window.alert("Please enter acc. number..."); 
        accNo.focus(); 
        return false; 
    } 

    

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

    if (author.value.length<3)                           
    { 
        window.alert(" Autheor's Name should be at least of 6 characters"); 
        author.focus(); 
        return false; 
    } 

    if (sid.value == "")                        
    { 
        window.alert("Please enter book id..."); 
        sid.focus(); 
        return false; 
    } 
   if (sname.value == "")                        
    { 
        window.alert("Please enter student's name..."); 
        sname.focus(); 
        return false; 
    } 

    if (email.value == "")                        
    { 
        window.alert("Please enter student's email id..."); 
        email.focus(); 
        return false; 
    } 
    
   
   
    
   
return true; 
   
    
}

</script> 



</head> 
<body> <!-- style="background-color:#c7c1c161;" -->
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


    <div class="container">
       <img src="li_home.jpg" height="300" width=100%>
       <div class="center_img opc">
          <font size="6" style=" color:red;">Issue Book</font>
            
       </div>
    </div>

<div align="center" style="background-color:white;width:
   400px;margin:auto;margin-top:10px;"">
    <span><img src="book_icon.jpg" height="100" width="100"></span>
   
   <form name="IssueForm" action="" onsubmit="return FormData()" method="post">
      Enter Acc. No.:<br>
        <input type="text" name="accNo"><br><br>

        Enter Title:<br>
        <input type="text" name="title"><br><br>

      Enter Author's Name:<br>
        <input type="text" name="author"><br><br>

      Enter Student's ID:<br>
        <input type="number" name="sid"><br><br>

       Enter Student's Name:<br>
        <input type="text" name="sname"><br><br>

       Enter Student's Email ID:<br>
        <input type="email" name="email"><br><br> 
      <input type="submit" value="submit" class="btn"><br>
      
    </form>
 </div>


 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>   
</body>
</html>   


