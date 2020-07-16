# library_management
First Version of Library_Management using PHP and HTML only.
Lacks all the security features.
# STEPS TO USE IT:
1. Clone this repo in your pc.
2. You need to create your own database. Run the following code in postgresql environment-
  ```
  CREATE DATABASE lib_management;
  \c lib_management
  
  CREATE TABLE adminx(
  id SERIAL,
  username VARCHAR(255),
  passwordx VARCHAR(255));
  
  CREATE TABLE users(
  id SERIAL,
  username VARCHAR(255),
  passwordx VARCHAR(255));
  
  CREATE TABLE all_books(
  id SERIAL,
  namex VARCHAR(255));
  
  CREATE TABLE approved_books(
  id SERIAL,
  username VARCHAR(255),
  namex VARCHAR(255));
  
  CREATE TABLE requested_books(
  id SERIAL,
  username VARCHAR(255),
  namex VARCHAR(255));
  ```
3. Navigate to library_management/php and create "connection.php".
    In connection.php, include the following code -
    ```
    <?php 
    // connecting with database
    $db_connection = pg_connect("host=localhost port=5432 dbname=lib_management user= postgres password=");
    

    if (!$db_connection) {
        echo "Connection Failed.";
        exit;
    }
    
    ?>
 4. Start your server now-
   cd into library_management in your terminal
   run ```php -S 127.0.0.1:6969```
   
  5.Go to http://127.0.0.1:6969/HTML/index.html
    
  
  
  
