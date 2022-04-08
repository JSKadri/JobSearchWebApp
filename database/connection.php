<?php
    $DATABSE_HOST = "localhost";
    $DATABSE_USER = "root";
    $DATABSE_PSW = "";
    $DATABASE_NAME = "";

    $connection = mysqli_connect($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME);

     // Create database
     $sql = "CREATE DATABASE IF NOT EXISTS gi_db";  // Create the database
     $DATABASE_NAME = "gi_db";  // Set the database name
     if(mysqli_query($connection, $sql)) {  // If the database was created successfully
         $sql = "CREATE TABLE IF NOT EXISTS gi_db.buisnesses (  
             id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             companyName VARCHAR(50) NOT NULL,
             email VARCHAR(50) NOT NULL,
             password VARCHAR(255) NOT NULL
         )";    // Create the table
 
         if(mysqli_query($connection, $sql)) {
             //echo "Found Table buisnesses successfully";
         } else {
             echo "Error finding table: " . mysqli_error($connection);
         }
 
         $sql = "CREATE TABLE IF NOT EXISTS gi_db.users (   
             id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             firstname VARCHAR(50) NOT NULL,
             lastname VARCHAR(50) NOT NULL,
             email VARCHAR(50) NOT NULL,
             password VARCHAR(255) NOT NULL,
             creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
             permission TINYINT(3) NOT NULL
         )";    // Create the table
 
         if(mysqli_query($connection, $sql)) {
             //echo "Found Table users successfully";
         } else {
             echo "Error finding table: " . mysqli_error($connection);
         }

        $sql = "CREATE TABLE IF NOT EXISTS gi_db.jobs (   
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            jobtitle VARCHAR(50) NOT NULL,
            jobdesc VARCHAR(2000) NOT NULL,
            jobreq VARCHAR(2000) NOT NULL,
            jobloc VARCHAR(100) NOT NULL,
            email VARCHAR(50) NOT NULL
        )";    // Create the table

        if(mysqli_query($connection, $sql)) {
            //echo "Found Table jobs successfully";
        } else {
            echo "Error finding table: " . mysqli_error($connection);
        }

     } else {
         echo "Error finding database: " . mysqli_error($connection);
     }

     $connection = new MYSQLi($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME) or die("Error: " . mysqli_error($connection));
?>