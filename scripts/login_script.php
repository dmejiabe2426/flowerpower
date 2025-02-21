<?php
session_start();
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    if ($stmt->rowCount() == 1) {
        if ($row = $stmt->fetch()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['username'];
                header("location: ../pages/member_area.php");
            } else {
                echo "Invalid password.";
            }
        }
    } else {
        echo "No account found with that username.";
    }
}