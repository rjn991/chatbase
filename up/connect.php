<?php
    $name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','usr','passwd','chatbase');

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(name, username, password) values(?,?,?)");
        $stmt->bind_param("sss",$name, $username,$password);
        $stmt->execute();
        echo "regestration successful";
        $stmt->close();
        $conn->close();

    }
?>
