<?php
    require_once("index.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $query = "SELECT *FROM 1z9Eejw0qq.customer WHERE email LIKE savrulloevsunnatjon@gmail.com";
    echo $email;
    $res = $res->$conn->query($query);
    $data = $res -> fetch_array(MYSQLI_NUM);
    if ($data[3]>1){
        echo json_encode("account already exists");
    }else{
        $query = "INSERT INTO 1z9Eejw0qq.customer(first_name,last_name,email,phone_number,password) VALUES ('$first_name','$last_name','$email','$phone_number','$password')";
        $res = $conn->($query);
        if ($res){
            echo json_encode("true");
        }else{
            echo json_encode("false");
        }
    }
?>
