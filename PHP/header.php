<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
<header>
        <nav class="navbar">
            <ul >
            <li class="username">Hello <?php if(isset($_SESSION['username'])) echo  htmlspecialchars($_SESSION['username']); ?>!</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">Reserved Books</a></li>
            <a href="logout.php" class="logout">Log Out</a>
            </ul>
            
        </nav>
    </header>
</body>
</html>