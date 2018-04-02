<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "kltour";

// Create database connection
$db = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// else conn->query("SHOW TABLES");
