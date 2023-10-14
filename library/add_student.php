<?php
    
     if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        
        $phone=$_REQUEST['phone'];
        $addr=$_REQUEST['addr'];
        $pass=$_REQUEST['pass'];
         
        $con=mysqli_connect("localhost","root","","library");
        
        $sql="INSERT INTO student (`fname`,`lname`, `email`, 
            `phone`, `address`,`pass`) 
        VALUES ('$fname','$lname','$email','$phone','$addr','$pass')";
        
        $rs=mysqli_query($con,$sql);//execution of queries...
        if($rs == TRUE)
        {
             echo "<script>alert('Record inserted successfully...');</script>";
             
        }
         
        else
        {
             echo "<script>alert('Insertion is not successful...');</script>";
        }
          
        
        
    }        
        
    

?>

<html>

<head> 

    <link rel="stylesheet" href="design.css">
    <style>
       .col
         {
           color:blue;
         }
    </style>
<script language=javascript type="text/javascript">


</script>

<script> 
function FormData()                                    
{ 

    var fname =  document.forms["AddForm"]["fname"];  
    var lname =  document.forms["AddForm"]["lname"];               
    var email = document.forms["AddForm"]["email"];    
 
    var phone = document.forms["AddForm"]["phone"];
    var addr = document.forms["AddForm"]["addr"];  

    var password = document.forms["RegistrationForm"]["pass"]; 
   

   if (fname.value == "")                               
    { 
        window.alert("Please enter First Name."); 
        fname.focus(); 
        return false; 
    } 

    if (fname.value.length<3)                               
    { 
        window.alert("First name should be at least of three characters.. "); 
        fname.focus(); 
        return false; 
    } 
  

   if (lname.value == "")                               
    { 
        window.alert("Please enter Last Name."); 
        lname.focus(); 
        return false; 
    } 

    if (lname.value.length<3)                               
    { 
        window.alert("Last name should be at least of three characters.. "); 
       lname.focus(); 
        return false; 
    } 
  
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@") < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".") < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
   

    if (phone.value == "")                        
    { 
        window.alert("Please enter phone number."); 
        phone.focus(); 
        return false; 
    } 
   
    
    if (phone.value.length != 10)                        
    { 
        window.alert("Your phone number should be of 10 digits!!!"); 
        phone.focus(); 
        return false; 
    } 
   
    
    if (addr.value == "")                           
    { 
        window.alert("Please enter address."); 
        addr.focus(); 
        return false; 
    } 

    if (addr.value.length<5)                           
    { 
        window.alert("address should be at least of 5 characters"); 
        addr.focus(); 
        return false; 
    } 

    if (password.value == "")                           
    { 
        window.alert("Please enter password."); 
        password.focus(); 
        return false; 
    } 

    if (password.value.length<6)                           
    { 
        window.alert("password should be at least of 6 characters"); 
        password.focus(); 
        return false; 
    } 
   
return true; 
   
    
}

</script> 

</head> 
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
       <div class="center_img opc">
          <font size="6" style=" color:red;">Add Student</font>
            
       </div>
    </div>

 <div align="center" style="background-color:white;width:400px;
        margin:auto;margin-top:10px;">
    
	 <span><img src="book_icon.jpg" height="100" width="100"></span>
   <form name="AddForm" action="" onsubmit="return FormData()" method="post">
      Enter First Name:<br>
        <input type="text" name="fname"><br><br>
       Enter Last Name:<br>
        <input type="text" name="lname"><br><br> 
      Enter Email ID:<br>
        <input type="text" name="email"><br><br>
      
      Enter Phone No.:<br>
        <input type="number" name="phone"><br><br>
      Enter Address:<br>
        <input type="text" name="addr"><br><br>
      Enter Password:<br>
        <input type="password" name="pass"><br><br>
      <input type="submit" value="add" class="btn"><br>
      
    </form>
 </div> 

 <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:0px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>    
</body>
</html>   


