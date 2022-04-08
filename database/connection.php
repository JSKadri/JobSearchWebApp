<?php
    $DATABSE_HOST = "localhost";
    $DATABSE_USER = "root";
    $DATABSE_PSW = "";
    $DATABASE_NAME = "gi_db";

    $connection = new MYSQLi($DATABSE_HOST, $DATABSE_USER, $DATABSE_PSW, $DATABASE_NAME);
    
    if(!$connection) {
        echo "Connection failed";
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS gi_db";
    if(mysqli_query($connection, $sql)) {
        $sql = "CREATE TABLE IF NOT EXISTS buisnesses (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            companyName VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL
        )";

        if(mysqli_query($connection, $sql)) {
            //echo "Found Table buisnesses successfully";
        } else {
            echo "Error finding table: " . mysqli_error($connection);
        }

        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            permission TINYINT(3) NOT NULL
        )";

        if(mysqli_query($connection, $sql)) {
            //echo "Found Table users successfully";
        } else {
            echo "Error finding table: " . mysqli_error($connection);
        }
    } else {
        echo "Error finding database: " . mysqli_error($connection);
    }
?>