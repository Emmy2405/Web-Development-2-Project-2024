<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing your reserved books</title>
    <link rel="stylesheet" href="../CSS/styling.css">
</head>
<body>
    <header>
        <?php include "header.php"?>
    </header>
    <br>
    <h1>Here are your Reserved Books:</h1>
    <main>
    <?php
        require_once 'database.php';

        //if user hasn't logged in the page
        if (!isset($_SESSION["username"])) 
        { 
            header('Location: signin-register.php');
            return;
        }

        $username = $_SESSION['username'];
        //selecting the books the user has reserved
        $sql = "SELECT books.*, Reservations.ReservedDate 
            FROM books LEFT JOIN Reservations ON books.ISBN = Reservations.ISBN 
            WHERE Reservations.Username = '$username'";
        $result = $conn -> query($sql);
        ?>
        <div class="books-container2" >
        <?php

        //showing the user the books they have reserved
        if($result && $result -> num_rows > 0)
        {
            while ($row = $result->fetch_assoc()) 
            {
                ?>
            <div class="book-box"> 

                <p><strong><?php echo htmlentities($row["BookTitle"]); ?></strong></p>
                <p><strong>ISBN:</strong> <?php echo htmlentities($row["ISBN"]); ?></p>
                <p><strong>Author:</strong> <?php echo htmlentities($row["Author"]); ?></p>
                <p><strong>Edition:</strong> <?php echo htmlentities($row["Edition"]); ?></p>
                <p><strong>Year:</strong> <?php echo htmlentities($row["Year"]); ?></p>
                <p><strong>Category ID:</strong> <?php echo htmlentities($row["CategoryID"]); ?></p>
                <p><strong>Reserved Date:</strong> <?php echo htmlentities($row["ReservedDate"]); ?></p>
                
                <!-- Unreserve button -->
                <form method="POST" action="view.php" style="margin: 0;">
                    <input type="hidden" name="ISBN" value="<?php echo htmlentities($row['ISBN']); ?>">
                    <button type="submit">Unreserve?</button>
                </form>
        </div>
        

            <?php
            }

        }
        
    ?>
    </div>

<?php
        //code to delete the book from the reservation table - unreserving the book
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ISBN'])) 
        {
            $ISBN = $_POST['ISBN'];

            $sql = "DELETE FROM Reservations WHERE ISBN = '$ISBN' AND Username = '$username'";

            if ($conn->query($sql) === FALSE) 
            {
                echo "<p>Error: " . $conn->error . "</p>";
            }
    
            if ($conn -> query($sql) === TRUE) 
            {
                $sql2 = "UPDATE books SET Reservation = 'N' WHERE ISBN = '$ISBN'";
                $conn -> query($sql2);
            } 
    
            else 
            {
                echo "Error: Reservation could not be deleted";
            }
    
            echo "<script>window.location.href='view.php';</script>";
        }
        ?>
    </main>  
    <footer>
    <p>©2024 Created by Eman Abdelatti</p>
    </footer>
</body>
</html>