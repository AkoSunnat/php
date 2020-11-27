<?php
    $host = "remotemysql.com";
    $db = "1z9Eejw0qq";
    $user = "1z9Eejw0qq";
    $pass = "HCtbQ6v2nB";
    $conn = mysqli_connect($host, $user, $pass);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $query = "SELECT *FROM 1z9Eejw0qq.customer WHERE email LIKE '$email'";
    //echo $email;
    $res = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($res);
    echo $data[3];
    if ($data[3] == $email){
        echo json_encode("account already exists");
    }else{
        $query = "INSERT INTO 1z9Eejw0qq.customer(first_name,last_name,email,phone_number) VALUES ('$first_name','$last_name','$email','$phone_number')";
        $res = mysqli_query($conn,$query);
        if ($res){
            echo json_encode("true");
        }else{
            echo json_encode("false");
        }
    }
?>
