<?php
    $host       = "localhost";
    $username   = "root";
    $pass       = "";
    $db         = "alumni";
    
    $conn = new mysqli("localhost", "root", "", "alumni");

    if ($conn->connect_error) {
        die("connection failed : " . $conn->connect_error);
    }
?>