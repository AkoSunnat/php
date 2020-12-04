<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT 1z9Eejw0qq.customer.id_customer FROM 1z9Eejw0qq.customer WHERE 1z9Eejw0qq.customer.email LIKE '$email' AND 1z9Eejw0qq.customer.password LIKE '$password'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);

if($data[0]>=1){
    echo json_encode($data[0]);
}else{
    echo json_encode("false_customer");
}
?>
