<?php
    require_once("index.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $query = "INSERT INTO 1z9Eejw0qq.customer(first_name,last_name,email,phone_number,password) VALUES ('$first_name','$last_name','$email','$phone_number','$password')";
    $res = $conn->($query);
    if ($res === TRUE){
        echo json_encode("true");
    }else{
        echo json_encode("false");
      }
    }
?>
