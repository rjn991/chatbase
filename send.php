<?php

session_start();
include 'dbh.php';
$msg=$_POST['message'];
$username=$_SESSION['username'];


$sql="insert into posts(msg,name) values ('$msg','$username')";
$results=$conn->query($sql);
header("Location:chat.php");

?>
