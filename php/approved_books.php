<?php
include "connection.php";
$sql_fetch = "SELECT username, namex FROM approved_books";
$result = pg_query($db_connection,$sql_fetch);

echo"
<table border = '1'>
<tr>
<th> Serial No. <th>
<th> UserName </th>
<th> Book </th>";
$count = 0;
while ($row = pg_fetch_assoc($result)):
    $count = $count + 1;
    echo"
    <tr>
    <td> $count </td>
    <td> $row[username] </td>
    <td> $row[namex] </td>";
endwhile;