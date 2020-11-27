<?php
    require_once("index.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $query = "SELECT *FROM 1z9Eejw0qq.customer WHERE email LIKE '$email'";
    $res = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($res);
    echo $email;
    if ($data[3]>1){
        echo json_encode("account already exists");
    }else{
        $query = "INSERT INTO 1z9Eejw0qq.customer(first_name,last_name,email,phone_number,password) VALUES ('$first_name','$last_name','$email','$phone_number','$password')";
        $res = mysqli_query($query);
        if ($res){
            echo json_encode("true");
        }else{
            echo json_encode("false");
        }
    }
?>
