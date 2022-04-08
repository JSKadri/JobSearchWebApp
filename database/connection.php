<?php
    $DATABSE_HOST = "localhost";
    $DATABSE_USER = "root";
    $DATABSE_PSW = "";
    $DATABASE_NAME = "gi_db";

    $connection = new MYSQLi($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME);
    
    if(!$connection) {
        echo "Connection failed";
        die("Connection failed: " . mysqli_connect_error());
        // In the future we will redirect to a page that will tell the user that there was an error.
    } else {
       // echo "Connected successfully";
    }
?>