<?php
require_once("index.php");
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
    $res = mysqli_query($query);
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}
?>
