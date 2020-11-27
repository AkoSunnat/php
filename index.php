<?php
    $host = "remotemysql.com";
    $db = "1z9Eejw0qq";
    $user = "1z9Eejw0qq";
    $pass = "HCtbQ6v2nB";
    $charset = "utf8mb4";
    $conn = new mysqli($host,$user,$pass);
    $query = "SELECT id_customer,first_name,last_name FROM 1z9Eejw0qq.customer";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id_customer"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
