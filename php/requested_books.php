<?php
include "connection.php";

$sql = "SELECT username,namex FROM requested_books;";
$_result = pg_query($db_connection,$sql);


echo"
<br>

<form method = 'POST' action = approve_books.php>
<label>Book </label>
<input type = 'text' name = 'approve_book'>
<label> For User </label>
<input type = text name = 'approve_book_user'> 
<button type = submit name = 'approve_book_btn'>Approve</button>
</form>
";





echo"<table border = '1'>
    <tr>
    <th> Serial No. <th>
    <th> User <th>
    <th> Book <th>
   
    ";
    $count = 0;
    while ($row = pg_fetch_assoc($_result)):
        $count = $count + 1;
        echo"
        <tr>
        <td> $count <td>
        <td> $row[username]<td>
        <td> $row[namex]<td>";
        
        

    endwhile;



