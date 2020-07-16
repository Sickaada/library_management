<?php
include "connection.php";
if (isset($_POST['approve_book_btn'])):
    $username = $_POST['approve_book_user'];
    $bookname = $_POST['approve_book'];
    $sql_send = "INSERT INTO approved_books(username,namex) VALUES ('$username' , '$bookname');";
    $sql_delete = "DELETE FROM requested_books WHERE username = '$username' AND namex = '$bookname';";
    
    pg_query($db_connection,$sql_send);
    pg_query($db_connection,$sql_delete);
    

endif;
header("Location:../php/requested_books.php");