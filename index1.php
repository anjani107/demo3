<?php

$con = mysqli_connect('localhost','root','','school');

$sql ="SELECT * FROM `student`";

$run = mysqli_query($con,$sql);

?>
<table border="1" align="center">
  <tr>
    <th>id</th>
    <th>fname</th>
    <th>lname</th>
    <th>cont</th>
    <!-- <th>image</th> -->
    <th>edit</th>
    <th>edit</th>
    
  </tr>


<?php

if($row=mysqli_num_rows($run)<1)
{?>
   <script>alert('no data found')</script>
<?php
}
else{

    while($data=mysqli_fetch_assoc($run))
    {
       
        ?>
          <tr>
           <td><?php echo $data['id'] ?></td>
           <td><?php echo $data['fname'] ?></td>
           <td><?php echo $data['lname'] ?></td>
           <td><?php echo $data['cont'] ?></td>
           <td><?php echo $data['img'] ?></td>
           <td><a href="edit.php?sid=<?php echo $data['id']; ?>">edit</a> </td>
         
         </tr> 
        
        
        <?php
       

    }
   

}
?>
</table>
<?php


?>