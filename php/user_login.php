<?php
include "connection.php";

if (isset($_POST['user_login_btn'])):
    $signin_username = $_POST['signin_username'];
    
    $signin_password = $_POST['signin_password'];
    $fetched_data = "SELECT passwordx FROM users WHERE username = '$signin_username'";
    $result = pg_query($db_connection,$fetched_data);

    while ($row = pg_fetch_assoc($result)):
        $fetched_password = $row['passwordx'];
    endwhile;

    if ($fetched_password == $signin_password):
        header("Location: ../html/user_home.html");
    else:
        echo"wrong password or username";
        
    endif;
endif;
    






