<?php
    $host = "remotemysql.com";
    $db = "1z9Eejw0qq";
    $user = "1z9Eejw0qq";
    $pass = "HCtbQ6v2nB";
    $conn = new mysqli($host,$user,$pass);
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
      } else {
        echo "0 results\n";
      }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
