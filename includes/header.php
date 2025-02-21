<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Power</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        header {
            background-color: #6a8759; /* A pleasant green */
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>Flower Power - Online Flower Shop</h1>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <?php if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']): ?>
                <li><a href="../pages/login.php">Login</a></li>
                <li><a href="../pages/register.php">Register</a></li>
            <?php else: ?>
                <li><a href="../scripts/logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
