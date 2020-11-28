<?php 
$con = mysqli_connect('localhost','root','','school');
$sid=$_GET['sid'];


$sql = "select * from `student` where `id`='$sid'";

$run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

// print_r($data);

?>

<form action="update.php" method="post">
 <table>
   <tr>
     <td>name</td>
     <td><input type="text" name="fname" value="<?php echo $data['fname'] ?>"></td>
   </tr>
   <tr>
     <td>name</td>
     <td><input type="text" name="lname"  value="<?php echo $data['lname'] ?>"></td>
   </tr>
   <tr>
     <td>name</td>
     <td><input type="text" name="cont" value="<?php echo $data['cont'] ?>"></td>
   </tr>
   <tr>
     <td>name</td>
     <td><input type="text" name="simg" value="<?php echo $data['img'] ?>"></td>
   </tr>
   <tr>
   <td> <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"></td>
     <td> <input type="submit" name="submit" ></td>
   </tr>

  </table>

</form>

