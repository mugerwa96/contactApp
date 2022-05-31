<?php

include("connection.php");
$sql="select * from registration";
$query=mysqli_query($connection,$sql);
$row=mysqli_num_rows($query);
echo $row;

?>