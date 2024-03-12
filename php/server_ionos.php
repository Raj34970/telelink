<?php
    date_default_timezone_set('Europe/Paris');
    $servername = "db5014950809.hosting-data.io";
    $username = "dbu4502646";
    $password = "Rajarshi2023@%";
    $dbname = "dbs12426608";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>