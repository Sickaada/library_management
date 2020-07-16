<?php
    include "connection.php";
    

    if (isset($_POST['request_book_btn']) ):
        $book_name = $_POST['requested_book'];
        $username = $_POST['username'];
        $sql_send = "INSERT INTO requested_books(username, namex) VALUES( '$username','$book_name')";
        $result = pg_query($db_connection,$sql_send);

    endif;
    header("Location: ../html/user_home.html");