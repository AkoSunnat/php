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
$query = "SELECT 1z9Eejw0qq.final_order.id_final_order, 
1z9Eejw0qq.product.id_product,
 1z9Eejw0qq.product.prod_name, 
1z9Eejw0qq.customer.first_name, 
1z9Eejw0qq.customer.email, 
1z9Eejw0qq.customer.phone_number,
 1z9Eejw0qq.delievery_man.name, 
1z9Eejw0qq.delievery_man.surname,
 1z9Eejw0qq.delievery_man.phone_number,
 1z9Eejw0qq.issueing_point.city, 
1z9Eejw0qq.issueing_point.street, 
1z9Eejw0qq.issueing_point.house,
 1z9Eejw0qq.final_order.date
 FROM 1z9Eejw0qq.final_order 
INNER JOIN 1z9Eejw0qq.order ON 1z9Eejw0qq.final_order.order_id=1z9Eejw0qq.order.id_order 
INNER JOIN 1z9Eejw0qq.product ON 1z9Eejw0qq.product.id_product=1z9Eejw0qq.order.product_id 
INNER JOIN 1z9Eejw0qq.customer ON 1z9Eejw0qq.customer.id_customer=1z9Eejw0qq.final_order.customer_id 
INNER JOIN 1z9Eejw0qq.delievery_man ON 1z9Eejw0qq.delievery_man.id_delievery_man=1z9Eejw0qq.final_order.delievery_man_id 
INNER JOIN 1z9Eejw0qq.issueing_point ON 1z9Eejw0qq.issueing_point.id_issueing_point=1z9Eejw0qq.final_order.issueing_point_id";
$res = $conn->query($query);
while ($result = $res->fetch_assoc()){
    $jsonData[]=$result;
}
echo json_encode($jsonData);
?>