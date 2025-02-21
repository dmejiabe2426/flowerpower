<?php
$host = 'localhost';  // or IP address
$dbname = 'flowerpower_db';
$username = 'root';
$password = '';  // default XAMPP setup has no password for root

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
