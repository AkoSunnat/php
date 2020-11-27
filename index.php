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
    echo "Connected successfully";
?>
