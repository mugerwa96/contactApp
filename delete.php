<?php
include("./php/connection.php");
echo $id=$_POST['id'];
$sql="DELETE FROM `registration` WHERE `registration`.`id` = $id";
$query=mysqli_query($connection,$sql);



?>