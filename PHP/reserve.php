<?php

require_once 'database.php';
session_start();

//to reserve the book
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['isbn'])) 
{
    //getting the book info
    $ISBN = $_POST['isbn'];
    $username = $_SESSION["username"];
    $reservedate = date('Y-m-d');

    //sql to insert info into the reservation table so the book is registered by that user
    $sql = "INSERT INTO Reservations (ISBN, Username, ReservedDate) VALUES ('$ISBN', '$username', '$reservedate')";

    if ($conn -> query($sql) === TRUE) 
    {//updating the book in the books table to be reserved
        $sql1 = "UPDATE books SET Reservation = 'Y' WHERE ISBN = '$ISBN'";
        $conn -> query($sql1);
    } 
    else 
    {
        echo "Error: Reservation could not be completed";
    }
    echo "<script>window.location.href='index.php';</script>";
}

?>