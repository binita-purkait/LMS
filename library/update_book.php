<?php

	session_start();
	 $con=mysqli_connect("localhost","root","","library");
	$msg="";

	$id=$_REQUEST['id'];
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		$cost=$_REQUEST['cost'];
		$quantity=$_REQUEST['quantity'];	
		$sql="update book set cost='".$cost."', quantity='".$quantity."' where id='".$id."'";
		
		mysqli_query($con,$sql);
		
		/*$msg="<div style='background:orange;width:200px;height:30px;border:1px solid black;'>Data updated.</div>"; */
		$msg="<script>alert('Data updated successfully.');</script>";
	}
	
	$sql1="select * from book where id='".$id."'";
	$rs=mysqli_query($con,$sql1);
	$d=mysqli_fetch_array($rs);
  if(isset($_REQUEST['s1']))
  {
   header('Refresh: 0.005; URL=view_book.php');
  }
?>

<html>
  <head>
      <link rel="stylesheet" href="design.css">
      <style>
        body
        {
          background-image:url('lib2.jpg');
        }
      </style>
   </head
<body>


		<form name="form1" method="post" action="">
        	<table border="1" align="center" style="margin-top:200px; background-color: white;">

            <tr>
            <td align="center" colspan=3>
              <img src="book_icon.jpg" height="50" width="50">
            </td>
            </tr>
            
            	<tr>
                   <td>Id</td>
                   <td>:</td>
                   <td>
                   	 <input type="text" name="id" id="id" value="<?php echo $d['id'];?>" readonly/>
                   </td>
            	</tr>

                <tr>
                  <td>Title</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="title" id="title" value="<?php echo $d['title'];?>" readonly/>
                  </td>
                </tr>

                <tr>
                  <td>Author</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="author" id="author" value="<?php echo $d['author'];?>"  readonly/>
                  </td>
                </tr>

                <tr>
                  <td>Cost</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="cost" id="cost" value="<?php echo $d['cost'];?>"/>
                  </td>
                </tr>
                  
                  <tr>
                  <td>Quantity</td>
                  <td>:</td>
                  <td>
                  	  <input type="text" name="quantity" id="quantity" value="<?php echo $d['quantity'];?>"/>
                  </td>
                </tr>
                  
                  

                <tr>
                <td><input type="submit" name="s1" value="Submit"/></td>
                <td>:</td>
                <td><input type="reset" name="s2"/></td>
                </tr>
            </table>
        <div align="center"><?php echo $msg;?></div>
        
	  </form>
      
</body>
</html>
