<?php
session_start();
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    try {
        // Execute the prepared statement
        $stmt->execute([$username, $email, $password]);
        // Set session variables and redirect to member area
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: ../pages/member_area.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>