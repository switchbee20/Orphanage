<?php
$server="ccl-db.crdfhsvbtbw6.us-east-1.rds.amazonaws.com";
$username="admin";
$password="pooja1234";

$database="users";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}
?>