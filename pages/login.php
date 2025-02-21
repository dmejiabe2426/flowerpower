<?php 
session_start(); 
include '../includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif; /* Stylish font for text */
            background-color: #f4f4f4; /* Light grey background */
            padding: 20px; /* Padding around the page */
            margin: 0;
        }

        h2 {
            background-color: #4CAF50; /* Green background for headings */
            color: white;
            padding: 10px;
            text-align: center;
        
        }
            
        form {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Subtle shadow around form */
            width: 300px; /* Fixed width */
            margin-left: auto;
            margin-right: auto;
        }

        input[type="text"], input[type="password"] {
            width: calc(100% - 22px); /* Full width minus padding */
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Border box model */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5c67f2; /* Custom blue */
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #5058e5; /* Slightly darker blue on hover */
        }
    </style>
</head>
<body>

<h2> Login </h2>

<form method="post" action="../scripts/login_script.php"> 
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>

<?php include '../includes/footer.php'; ?>
</body>
</html>
