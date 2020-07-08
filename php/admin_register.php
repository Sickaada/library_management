<?php 
include 'connection.php';
    




    // setting up php variables for each field in form
    // escape string converts a escaped string in postgres format
    if (isset($_POST['admin_register_btn'])):
    $username = pg_escape_string($_POST['username']);
    
    $password = pg_escape_string($_POST['password']);
    

    endif;

    


    
    $sql = "INSERT INTO adminx(username, passwordx) VALUES ('$username','$password')";
    pg_query($db_connection, $sql);
  
    header("Location: ../html/admin_register.html");
