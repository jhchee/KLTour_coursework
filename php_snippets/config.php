<?php
    $host = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "kltour";

    // Create database connection
    $db = new mysqli($host, $userName, $password, $dbName);

    // If connection error, returns error message
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>



