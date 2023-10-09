<?php
    $db_host="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="test";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!conn)
    {
        echo "connection failed:".mysql_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSER INTO users (name,email,password) VALUES ('$name','$email','$password')";

    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "ERROR:".mysqli_error($conn);
        exit;
    }

    echo "Registration successfull";
    mysqli_close($conn);
    ?>