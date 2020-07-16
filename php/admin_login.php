<?php
include 'connection.php';
if (isset($_POST['admin_register_btn'])) :
    if (!empty($_POST['signin_username'])) {
        $signin_username = $_POST['signin_username'];

        $signin_password = $_POST['signin_password'];
        $fetched_data = "SELECT passwordx FROM adminx WHERE username = '$signin_username'";
        $result = pg_query($db_connection, $fetched_data);



        while ($row = pg_fetch_assoc($result)) {

            $fetched_password = $row['passwordx'];
        }
        if ($fetched_password == $signin_password) {

            header("Location: ../html/admin_home.html");
        }

        if (!$fetched_password == $signin_password) {

            echo "wrong password";
        }
    } else {
        echo "Error: Type in username";
        

    }
endif;
