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
$query = "SELECT *FROM 1z9Eejw0qq.product";
$res = $conn->query($query);
$result = $res->fetch_assoc();
echo json_encode($result);
?>
