<?php
$host = "remotemysql.com";
$db = "1z9Eejw0qq";
$user = "1z9Eejw0qq";
$pass = "HCtbQ6v2nB";
$conn = new mysqli($host, $user, $pass);
$prod_name = $_POST["prod_name"];
$brand = $_POST["brand"];
$category = $_POST["category_id"];
$size = $_POST["size"];
$color = $_POST["color"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$img_url = $_POST["img_url"];
$query = "SELECT *FROM 1z9Eejw0qq.product WHERE prod_name LIKE '$prod_name' AND brand LIKE '$brand' AND category_id LIKE '$category' AND size LIKE '$size' AND color LIKE '$color' AND price LIKE '$price'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
if ($data[1]==$prod_name && $data[2]==$brand && $data[3]==$category && $data[4]==$size && $data[5]==$color && $data[6]==$price){
    $query = "DELETE FROM 1z9Eejw0qq.product WHERE prod_name LIKE '$prod_name' AND brand LIKE '$brand' AND category_id LIKE '$category' AND size LIKE '$size' AND color LIKE '$color' AND price LIKE '$price'";
    $res = mysqli_query($conn,$query);
    mysqli_query($conn,"ALTER TABLE 1z9Eejw0qq.product AUTO_INCREMENT = 1");
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}else{
    echo json_encode("wrong input");
}
?>