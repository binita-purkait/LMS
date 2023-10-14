
<?php
 function showdetails( $id,$title,$author)
  {
    $con=mysqli_connect("localhost","root","","library");
    $sql="SELECT * FROM `book` WHERE `id`='$id',`title`='$title',`author`='$author'";
    $run=mysqli_query($con,$sql);
    if($run)
    {
     $data=mysqli_fetch_array($run);

     ?>

     <table border="1">
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
    
  }
?>

