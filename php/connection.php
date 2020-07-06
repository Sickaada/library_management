<?php 
    // initialising variables
    $username = "";
    $email = "";
    $errors = array();

    // connecting with database
    $db_connection = pg_connect("host=localhost dbname=lib_management user=cicada password=postgres@123");
    return $db_connection;
    // checking if submit button is clicked
    if (isset($_POST['register_btn'])) {

    // setting up php variables for each field in form
    // escape string converts a escaped string in postgres format
        $username = pg_escape_string($_POST['username']);
        $email = pg_escape_string($_POST["email"]);
        $password = pg_escape_string($_POST["password"]);
        $confirm_password = pg_escape_string($_POST["confirm_password"]);

    }

    // appending errors to $errors

    if (!empty($username)) {
        array_push($errors, "Username is required.");
    }
    if (empty($email)) {
        array_push($errors, "Email id is required.");
    }
    if (empty($password)) {
        array_push($errors, "Password is required.");
    }
    if ($password != $confirm_password) {
        array_push($errors, "The two passwords didn't match.");
    }
    echo $errors;


    // if there are no errors, then save data to database
    $password_encrypted = password_hash($password, PASSWORD_DEFAULT);
    if (count($errors) == 0) {
        $sql = "INSERT INTO lib_management (username, email, passwordx) VALUES ('$username','$email','$password_encrypted')";
        pg_query_params($db_connection, $sql);

    }