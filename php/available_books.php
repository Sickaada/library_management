<?php
include "connection.php";

$sql = "SELECT id, namex FROM all_books;";
$result = pg_query($db_connection, $sql);

echo"<form method = 'POST' action = request_books.php>
    <label> Type your username again: </label>
    <input type = 'text' name = 'username'>
    <label> Name of the book from the following list: </label>
    <input type = 'text' name = 'requested_book'>       
    <button type = submit name = 'request_book_btn'>Request</button>
    </form>";

    


echo " <table border  = '1'>
    <tr>
    <th> Serial No. </th>
    <th> Name </th>";
$count = 0;
while ($row = pg_fetch_assoc($result)) :
    $count = $count + 1;
    echo " 
        <tr>
        <td>  $count</td>
        <td>  $row[namex]</td>";

endwhile;

