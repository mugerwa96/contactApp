<?php
$serverName="localhost";
$username="root";
$password="";
$dbName="contact";
if(!$connection=mysqli_connect($serverName,$username,$password,$dbName))
{
    echo"Error in connection";
}

?>