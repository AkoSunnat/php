<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
$order_id = (int)$_POST["order_id"];
$customer_id = (int)$_POST["customer_id"];
$date = (string)$_POST["date"];
$query = "INSERT INTO 1z9Eejw0qq.final_order(order_id,customer_id,delievery_man_id,issueing_point_id,date) VALUES ($order_id,$customer_id,1,1,'$date')";
$res = mysqli_query($conn,$query);
if ($res){
    echo json_encode("true");
}else{
    echo json_encode("false");
}
?>