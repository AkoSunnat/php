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
$query = "SELECT *FROM 1z9Eejw0qq.customer WHERE email LIKE '$email'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[3] == $email){
    $query = "SELECT *FROM 1z9Eejw0qq.customer WHERE pass LIKE '$pass'";
    $res = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($res);
    //echo $data[5];
    if ($data[5] == $password){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}else{
    echo json_encode("account doesnt exist");
}
?>
