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
$query = "SELECT *FROM 1z9Eejw0qq.category WHERE cat_name LIKE '$name'";
//echo $email;
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[1] == $name){
    $sql = "DELETE FROM 1z9Eejw0qq.category WHERE cat_name = '$name'";
    $result = mysqli_query($conn,$sql);
    if ($result){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}else{
    echo json_encode("wrong input");
}
?>
