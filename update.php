<?php

$con = mysqli_connect('localhost','root','','school');

$id =$_POST['sid'];
$fname = $_POST['fname'];
$lname =$_POST['lname'];
$cont =$_POST['cont'];
$img =$_POST['simg'];

$sql ="UPDATE `student` SET `fname`='$fname',`lname`=''$lname,`cont`='$cont',`img`='$img' WHERE `id`='$id'";

$run=mysqli_query($con,$sql);

echo "<pre>";

print_r($run);
echo "</pre>";

if($run)
{
    ?>
    <script>
      alert('data updated successfully');
      
    </script>
    <?php
}   
else{
    ?>
    <script>
      alert('data not updated successfully');
      
    </script>
    <?php
}


?>