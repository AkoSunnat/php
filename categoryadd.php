<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
$name = $_POST["name"];
$query = "SELECT *FROM 1z9Eejw0qq.category WHERE name LIKE '$name'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[1]>1){
    echo json_encode("account already exists");
}else{
    $query = "INSERT INTO 1z9Eejw0qq.category(name) VALUES ('$name')";
    $res = mysqli_query($conn,$query);
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}
?>