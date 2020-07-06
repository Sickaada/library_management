<?php 
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
</head>

<body>
    <h1>Registeration Form </h1>
    <form method = "Post" action = "register.php">
        <?php include ("errors.php"); ?>     
        <div class = "input_text">
            <label>Username</label>
            <input type = "text" name = "username">
        </div>
        <div class = "input_text">
            <label>Email</label>
            <input type = "text" name = "email">
        </div>
        <div class = "input_text">
            <label>Password</label>
            <input type = "password" name = "password">
        </div>
        <div class = "input_text">
            <label>Confirm Password</label>
            <input type = "password" name = "confirm_password">
        </div>
        <div class = "input_text">
            <label>Register</label>
            <button type = "submit" name = "register_btn" class = "btn"> Register</button>
        </div>

        
        
        
    
</body>
</html>