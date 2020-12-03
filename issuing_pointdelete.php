
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

$city = $_POST["city"];
$street = $_POST["street"];
$house = $_POST["house"];
$query = "SELECT *FROM 1z9Eejw0qq.issueing_point WHERE city LIKE '$city' AND street LIKE '$street' AND house LIKE '$house'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);

if ($data[3]==$house && $data[2]==$street && $data[1]==$city){
    $query = "DELETE FROM 1z9Eejw0qq.issueing_point WHERE city LIKE '$city' AND street LIKE '$street' AND house LIKE '$house'";
    mysqli_query($conn,"ALTER TABLE 1z9Eejw0qq.issueing_point AUTO_INCREMENT = 1");
    $res = mysqli_query($conn,$query);
    if ($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }

}else{
    echo json_encode("wrong input");
}
?>
