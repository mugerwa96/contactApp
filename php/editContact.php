<?php

include("../php/connection.php");
$username=trim($_POST['username']);
$email=trim($_POST['email']);
$id=$_POST['edit-id'];
$contact=trim($_POST['contact']);
$location=trim($_POST['location']);
 $filename=$_FILES['file']['name'];
$filetmp=$_FILES['file']['tmp_name'];
$filepath='../userImage/'.$filename;
if($filename)
{
$sql="UPDATE `registration` SET `user-image` = '$filename' WHERE `registration`.`id` = $id";

$query=mysqli_query($connection,$sql);


if(move_uploaded_file($filetmp,$filepath))
{
echo 1;
}

}
else
{
    $sql="UPDATE `registration` SET `username` = '$username ', `email-address` = '$email', `location` = '$location ', `contact` = '$contact' WHERE `registration`.`id` = $id";
    
$query=mysqli_query($connection,$sql);

}



?>