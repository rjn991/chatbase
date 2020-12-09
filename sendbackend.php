<?php

session_start();
include 'dbh.php';
$msg=$_POST['message'];
$username=$_SESSION['username'];


$sql="insert into posts(msg,name) values ('$msg','$username')";
$results=$conn->query($sql);
// header("Location:sendtmp.php");

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>
