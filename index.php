<?php
    $host = "remotemysql.com";
    $db = "1z9Eejw0qq";
    $user = "1z9Eejw0qq";
    $pass = "HCtbQ6v2nB";
    $conn = new mysqli($host,$user,$pass);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
