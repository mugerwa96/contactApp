<?php

include("../php/connection.php");
$username=trim($_POST['username']);
$email=trim($_POST['email']);
$contact=trim($_POST['contact']);
$location=trim($_POST['location']);
 $filename=$_FILES['file']['name'];
$filetmp=$_FILES['file']['tmp_name'];
$filepath='../userImage/'.$filename;

$sql="INSERT INTO `registration` (`id`, `username`, `email-address`, `location`, `contact`, `user-image`)
 VALUES (NULL, '$username', '$email', '$location', '$contact', '$filename')";
$query=mysqli_query($connection,$sql);

  
$last_id=mysqli_insert_id($connection);
if($last_id)
{
    $rand=substr(rand(1,99999),3);
    $date=substr(date("Y"),2);
    $format="QP-U-".$date."-".$rand;
    
    $sql="UPDATE `registration` SET `user_id` = '$format' WHERE `registration`.`id` = $last_id";
    $query=mysqli_query($connection,$sql);

}
if(move_uploaded_file($filetmp,$filepath))
{
   
echo 1;
}



?>