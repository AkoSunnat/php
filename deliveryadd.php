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
$name = $_POST["name"];
$surname = $_POST["surname"];
$phone_number = $_POST["phone_number"];
$query = "SELECT *FROM 1z9Eejw0qq.delievery_man WHERE phone_number LIKE '$phone_number'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
echo $surname;
if ($data[3]==$phone_number){
    echo json_encode("account already exists");
}else{
    $query = "INSERT INTO 1z9Eejw0qq.delievery_man(name,surname,phone_number) VALUES ('$name','$surname','$phone_number')";
    $res = mysqli_query($conn,$query);
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}
?>
