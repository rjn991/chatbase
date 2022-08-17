<?php
    $name = $_POST['full-name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','usr','passwd','chatbase');

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, username, gender, password) values(?,?,?,?)");
        $stmt->bind_param("ssss",$name, $username, $gender,$password);
        $stmt->execute();
        echo "regestration successful";
        $stmt->close();
        $conn->close();

    }
?>
