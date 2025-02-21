<?php
session_start(); 
include '../includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Area</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        h2 {
            background-color: #4CAF50; /* Green background for headings */
            color: white;
            padding: 10px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            text-align: center;
            margin-top: 20px;
        }

        .offers {
            background-color: #fff; /* White background for contrast */
            margin: 20px auto;
            padding: 20px;
            width: 80%; /* Manageable width */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            text-align: center;
        }

        .offer-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd; /* Light border for definition */
        }
    </style>
</head>
<body>

<h2>Welcome to the Member Area</h2>
<p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You are now logged in.</p>

<div class="offers">
    <h3>Exclusive Member Offers</h3>
    <div class="offer-item">
        <h4>Spring Special</h4>
        <p>Get 20% off on all spring flowers!</p>
        <button>Shop Now</button>
    </div>
    <div class="offer-item">
        <h4>Birthday Deals</h4>
        <p>Enjoy 15% off on birthday gifts and flowers.</p>
        <button>Shop Now</button>
    </div>
    <div class="offer-item">
        <h4>Loyalty Bonus</h4>
        <p>Additional 10% off for orders above $100.</p>
        <button>Shop Now</button>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
