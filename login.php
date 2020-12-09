<?php
session_start();
include 'dbh.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);

if($row=$result->fetch_assoc()) {
    $_SESSION['username']=$_POST['username'];
    header("Location:chat.php");    
}
else {
    header("Location:error.php");
}







?>
