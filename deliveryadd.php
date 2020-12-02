<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
$first_name = $_POST["name"];
$last_name = $_POST["surname"];
$phone_number = $_POST["phone_number"];
$query = "SELECT *FROM 1z9Eejw0qq.delievery_man WHERE phone_number LIKE '$phone_number'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[3]>1){
    echo json_encode("account already exists");
}else{
    $query = "INSERT INTO 1z9Eejw0qq.delievery_man(name,surname,phone_number) VALUES ('$first_name','$last_name','$phone_number')";
    $res = mysqli_query($query);
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}
?>