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

$delivery_phone_number = $_POST["delivery_phone_number"];
$query = "SELECT *FROM 1z9Eejw0qq.delievery_man WHERE delivery_phone_number LIKE '$delivery_phone_number'";
//echo $email;
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[3] == $delivery_phone_number){
    $sql = "DELETE FROM 1z9Eejw0qq.delievery_man WHERE delivery_phone_number = '$delivery_phone_number'";
    $result = mysqli_query($conn,$sql);
        mysqli_query($conn,"ALTER TABLE 1z9Eejw0qq.delievery_man AUTO_INCREMENT = 1");
    if ($result){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}else{
    echo json_encode("wrong input");
}
?>
