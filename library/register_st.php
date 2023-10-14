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
             echo "<script>alert('Registration successful...');</script>";
             
        }
         
        else
        {
             echo "<script>alert('Registration is not successful...');</script>";
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

    var fname =  document.forms["RegistrationForm"]["fname"];  
    var lname =  document.forms["RegistrationForm"]["lname"];               
    var email = document.forms["RegistrationForm"]["email"];    
 
    var phone = document.forms["RegistrationForm"]["phone"];
    var addr = document.forms["RegistrationForm"]["addr"];  

    var password = document.forms["RegistrationForm"]["pass"]; 
   

   if (fname.value == "")                               
    { 
        window.alert("Please enter your First Name."); 
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
        window.alert("Please enter your Last Name."); 
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
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    
    if (phone.value.length != 10)                        
    { 
        window.alert("Your telephone number should be of 10 digits!!!"); 
        phone.focus(); 
        return false; 
    } 
   
    
    if (addr.value == "")                           
    { 
        window.alert("Please enter your address."); 
        addr.focus(); 
        return false; 
    } 

    if (addr.value.length<5)                           
    { 
        window.alert("Your address should be at least of 5 characters"); 
        addr.focus(); 
        return false; 
    } 

    if (password.value == "")                           
    { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false; 
    } 

    if (password.value.length<6)                           
    { 
        window.alert("Your password should be at least of 6 characters"); 
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
            <td><img src="lib_head.jpg"><td>
            <td align="center">
                <a href="index.php"><font size="4">Home</font></a>
            </td>
            <td align="center">
              <a href="about.php"><font size="4">About Us</font></a>
            </td>
            
            <td align="center">
                    <a  href="admin.php"><font size="4">Admin Login</font></a>
            </td>
            <td align="center">
              <a href="student.php"><font size="4">Student Login</font></a>
            </td>
            <td align="center">
              <a href="contact.php"><font size="4">Contact Us</font></a>
            </td>
        </tr>
    </table>

    
       <img src="li_home.jpg" height="300" width=100%>
       
<div align="center" style="background-color:white;width:400px;
        margin:auto;margin-top:23px;" >

    <span><img src="book_icon.jpg" height="100" width="100"></span>
	
   <form name="RegistrationForm" action="" onsubmit="return FormData()" method="post">
      Enter Your First Name:<br>
        <input type="text" name="fname"><br><br>
       Enter Your Last Name:<br>
        <input type="text" name="lname"><br><br> 
      Enter Your Email ID:<br>
        <input type="text" name="email"><br><br>
      
      Enter Your Phone No.:<br>
        <input type="number" name="phone"><br><br>
      Enter Your Address:<br>
        <input type="text" name="addr"><br><br>
      Enter Your Password:<br>
        <input type="password" name="pass"><br><br>
      <input type="submit" value="register" class="btn"><br>
      If you already have an account <a href="student.php" class="col">click here to login</a>
    </form>
 </div>

  <div style="background-color:#0456a1; height:40px;
         padding-top:30px; margin-top:30px;color:white;" align="center">
      <font style="">Copyright ©LIBRARY MANAGEMENT SYSTEM 2020. All rights reserved</font>
    </div>
       
</body>
</html>   


