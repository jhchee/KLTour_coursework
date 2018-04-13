<!-- $servername = 'localhost';
$username = 'username';
$password = '';
$dbName = 'kltour';

try {
    // Create database connection
    $db = new mysqli($servername, $username, $password, $dbName);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "hello world";
}
catch(PDOException $e) {
    // If connection error, return error message
    echo "Error: " . $e->getMessage();
} -->

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



