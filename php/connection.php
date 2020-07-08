<?php 
    // initialising variables
    
    

    // connecting with database
    $db_connection = pg_connect("host=localhost port=5432 dbname=lib_management user=cicada password=postgres@123");
    // return $db_connection;
    // checking if submit button is clicked
    

    if (!$db_connection) {
        echo "Connection Failed.";
        exit;
    }
    


    ?>