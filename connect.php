<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $stars = $_POST['stars'];

    // Data connection
    $conn =new mysqli('localhost', 'root','','feedback');
    if($conn->connect_error){
        die('Connection failed : ' $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into feedback(name, email, comments, stars)
        values(?,?,?,?)")
        $stmt->bind_param("sssi", $name, $email, $comments, $stars);
        $stmt->execute();
        echo "Submitted Successfully"
        $stmt->close();
        $conn->close();
    }
?>