<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
$product_id = (int)$_POST["product_id"];
$numofproducts = $_POST["numofproducts"];
$r = null;
$query = "INSERT INTO 1z9Eejw0qq.order(product_id,numofproducts) VALUES ($product_id,'$numofproducts')";
$q = "SELECT 1z9Eejw0qq.order.id_order FROM 1z9Eejw0qq.order WHERE 1z9Eejw0qq.order.product_id LIKE '$product_id' AND 1z9Eejw0qq.order.numofproducts LIKE '$numofproducts'";
$res = mysqli_query($conn,$query);
if ($res){
    $r = mysqli_query($conn,$q);
    $data = mysqli_fetch_array($res);
    if ($r){
        echo json_encode($data[0]);
    }
    //echo json_encode("true");
}else{
    echo json_encode("false");
}
?>