<?php
    date_default_timezone_set('Europe/Paris');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "telelink";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>