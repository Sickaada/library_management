<?php
include 'connection.php';


$fetched_books = "SELECT id,namex FROM all_books;";
$result = pg_query($db_connection, $fetched_books);





echo " <table border = '1'>
        <tr>
        <th> Serial No.</th>
        
        <th> Book </th>";
        
        




while ($row = pg_fetch_assoc($result)) {
    echo "
        <tr>
        
        <td> $row[id] </td>
        <td> $row[namex] </td>
        
        

        ";
}
