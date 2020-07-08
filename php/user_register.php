<?php
    include 'connection.php';

    if (isset($_POST['user_register_btn'])):

        $username = $_POST['username'];
        $password = $_POST['password'];

    endif;

    $sql = "INSERT INTO users(username,passwordx) VALUES('$username','$password')" ;
    pg_query($db_connection, $sql);

    HEADER('Location: ../html/user_register.html');



