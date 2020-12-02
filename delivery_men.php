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
$jsonData = array();
$query = "SELECT *FROM 1z9Eejw0qq.delievery_man";
$res = $conn->query($query);
while ($result = $res->fetch_assoc()){
    $jsonData[]=$result;
}
echo json_encode($jsonData);
?>