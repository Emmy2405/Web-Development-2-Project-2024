<?php
include 'database.php';//connecting to the database

//php code for the registeration form
if(isset($_POST['signUp']))
{
    //declaring the variables and putting in the values entered by the user in them
    $firstname=$_POST['firstname'];
    $lastname = $_POST['surname'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $telephone = $_POST['telephone'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    //sql code to see if the user has already loggin in before
    $checkEmail = "SELECT * FROM usersinfo where email = '$email'";
    $result = $conn ->query($checkEmail);

    //if they already have an account
    if($result -> num_rows>0)
    {
        $_SESSION['error'] = "Email Address Already Exists!";
        echo $_SESSION['error'];
        header("Location: signin-register.php");
        exit();
    }
    else//if they haven't make an account , here we enter their data in to register
    {
        //the confirmation password part to make sure the users password is confirmed
        if($confirmpassword === $pass)
        {
            $insertQuery = "INSERT INTO usersinfo (firstname,surname,AddressLine1, AddressLine2, City,email,Telephone,phone, username,password) VALUES ('$firstname', '$lastname','$address1','$address2','$city','$email','$telephone','$phone','$username','$pass')";
            if($conn->query($insertQuery)=== TRUE)
            {
                header("location: signin-register.php");
            }
            else
            {
                echo "Echo:" .$conn->error;
            }
        }
        else
        {
            $_SESSION['error'] = "Please make sure you entered the password correctly twice!";
            echo $_SESSION['error'];
        }
        
    }
}

unset($_SESSION['username']);

//php code for the login form
if(isset($_POST['signIn']))
{
    //declaring the variables and putting in the values entered by the user in them
    $username = $_POST['username'];
    $pass = $_POST['password'];

    //sql code to search for the users information
    $sql = "SELECT * FROM usersinfo where username = '$username' and password = '$pass'";
    $result = $conn ->query($sql);

    if (!$result) 
    {
        echo "Error: " . $conn->error;
    }

    //if the user logs in successfully
    if($result -> num_rows > 0)
    {
        session_start(); //starting their session
        echo $_SESSION['username'];
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");//locating them to the index page
        exit();
    }
    else//if they have entered in incorrect information
    {
        echo "Incorrect Username or Password";
        header("Location: signin-register.php");
        exit();
    }
}
?>