<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating an Account/ Signing In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/styling.css">
</head>
<body>
    <!-- calling the logincontrol.php file to execute my login php code -->
<?php require "logincontrol.php"?>
        <!-- The part where the user registers -->
        <div class="container" id="signUp" style="display:none">
        <h1 class="form-title"> Emmy's Library - Register</h1>
    <form method="post">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <br><label for="firstname">First Name</label>
           <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <br><label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" placeholder="Surname" required>
         </div>
         <div class="input-group">
            <i class="fas fa-house"></i>
            <br><label for="address1">Address Line 1</label>
            <input type="address1" name="address1" id="address1" placeholder="Address Line 1 " required>
         </div>
         <div class="input-group">
            <i class="fas fa-house"></i>
            <br><label for="address2">Address Line 2</label>
            <input type="address2" name="address2" id="address2" placeholder="Address Line 2 " >
         </div>
         <div class="input-group">
            <i class="fas fa-house"></i>
            <br><label for="city">City</label>
            <input type="city" name="city" id="city" placeholder="City " required>
         </div>
         <div class="input-group">
            <i class="fas fa-user"></i>
            <br><label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" required>
         </div>
         <div class="input-group">
            <i class="fas fa-envelope"></i>
            <br><label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email " required>
         </div>
         <div class="input-group">
            <i class="fas fa-phone"></i>
            <br><label for="telephone">TelePhone</label>
            <input type="telephone" name="telephone" id="telephone" placeholder="Telephone" required>
        </div>
         <div class="input-group">
            <i class="fas fa-phone"></i>
            <br><label for="phone">Phone</label>
            <input type="phone" name="phone" id="phone" placeholder="Phone" required>
         </div>
         <div class="input-group">
            <i class="fas fa-lock"></i>
            <br><label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" minlength="6" required>
         </div>
         <div class="input-group">
            <i class="fas fa-lock"></i>
            <br><label for="confirmpassword"> Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" maxlength="6" required>
         </div>
         <input type="submit" class="btn" value="Sign Up" name="signUp" >
    </form>
    <p class="or">
        ---------or---------
    </p>
    <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Log In</button>
    </div>
    </div>
    



    <div class="container" id="signIn">
        <!-- The part where the user logs in -->
        <h1 class="form-title">Emmy's Library - Log In</h1>
    <form method="post">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <br><label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username " required>
            
         </div>
         <div class="input-group">
            <br>
            <i class="fas fa-lock"></i>
            <br><label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            
         </div>
         <input type="submit" class="btn" value="Sign In" name="signIn" >
    </form>
    <p class="or">
        ---------or---------
    </p>
    <div class="links">
        <p>Don't have an account yet?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>
    <footer>
        <p>©2024 Created by Eman Abdelatti</p>
    </footer>

    <script src="../Javascript/javascript.js"></script>
    
</body>
</html>