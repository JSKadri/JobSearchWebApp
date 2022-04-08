<?php

    session_start(); // Beging a users session

    require('connection.php');

    $sql = "SELECT * FROM users JOIN buisnesses";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); // Get all records in the db
    
    /* Allows us to print any value to the screen (DEBUG-ONLY) */
    function printScreen($value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }

    function executeQuery($sql, $data) {   // Execute a query
        global $connection;         // Allows us to use the global variable $connection
        $stmt = $connection->prepare($sql); // Prepare the query
        $values = array_values($data); // Get the values of the array
        $types = str_repeat('s', count($values)); // Get the type of the values
        $stmt->bind_param($types, ...$values); // Bind the values to the query
        $stmt->execute(); // Execute the query
        return $stmt;   // Return the query
    }

    /* Selects all values in the user table */
    function selectAllUser($table, $conditions = []) {
        global $connection;     // Allows us to use the global variable $connection
        $sql = "SELECT * FROM $table";  // SQL query

        if(empty($conditions)) {                  // If there are no conditions
            $stmt = $connection->prepare($sql);   // Prepare the SQL query
            $stmt->execute();                     // Execute the SQL query
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);    // Get all records in the db
            return $records;                       // Return the records
        } else {             // If there are conditions
            $i = 0;                               // Counter
            foreach($conditions as $key => $value) {    // For each condition
                if($i === 0) {                     // If it is the first condition
                    $sql .= " WHERE $key = ?";    // Add the condition to the SQL query
                } else {                         // If it is not the first condition
                    $sql .= " AND $key = ?";    // Add the condition to the SQL query
                }
                $i++;                          // Increment the counter
            }
            $stmt = executeQuery($sql, $conditions);   // Execute the query
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);   // Get all records in the db
            return $records;                       // Return the records
        }
    }

    /* Selects all values in the buisnesses table */
    function selectAllCompany($table2, $conditions = []) {
        global $connection;     // Allows us to use the global variable $connection
        $sql = "SELECT * FROM $table2";  // SQL query

        if(empty($conditions)) {                  // If there are no conditions
            $stmt = $connection->prepare($sql);   // Prepare the SQL query
            $stmt->execute();                     // Execute the SQL query
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);    // Get all records in the db
            return $records;                       // Return the records
        } else {             // If there are conditions
            $i = 0;                               // Counter
            foreach($conditions as $key => $value) {    // For each condition
                if($i === 0) {                     // If it is the first condition
                    $sql .= " WHERE $key = ?";    // Add the condition to the SQL query
                } else {                         // If it is not the first condition
                    $sql .= " AND $key = ?";    // Add the condition to the SQL query
                }
                $i++;                          // Increment the counter
            }
            $stmt = executeQuery($sql, $conditions);   // Execute the query
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);   // Get all records in the db
            return $records;                       // Return the records
        }
    }

    /* Selects one value in the user table */
    function selectOneUser($table, $conditions) {
        global $connection;             // Allows us to use the global $connection variable
        $sql = "SELECT * FROM $table";  // SQL SELECT statement

        $i = 0; // Counter
        foreach($conditions as $key => $value) {    // Loops through the conditions
            if($i === 0) {                  // If the counter is 0
                $sql .= " WHERE $key=?";  // Add the WHERE clause
            } else {                        // If the counter is not 0
                $sql .= " AND $key=?";    // Add the AND clause
            }
            $i++;   // Increment the counter
        }

        $sql = $sql . " LIMIT 1";   // Limit the results to 1
        $stmt = executeQuery($sql, $conditions);    // Execute the query
        $records = $stmt->get_result()->fetch_assoc();    // Get the result
        return $records;
    }

    /* Selects one value in the buisness table */
    function selectOneCompany($table2, $conditions) {
        global $connection;             // Allows us to use the global $connection variable
        $sql = "SELECT * FROM $table2";  // SQL SELECT statement

        $i = 0; // Counter
        foreach($conditions as $key => $value) {    // Loops through the conditions
            if($i === 0) {                  // If the counter is 0
                $sql .= " WHERE $key=?";  // Add the WHERE clause
            } else {                        // If the counter is not 0
                $sql .= " AND $key=?";    // Add the AND clause
            }
            $i++;   // Increment the counter
        }

        $sql = $sql . " LIMIT 1";   // Limit the results to 1
        $stmt = executeQuery($sql, $conditions);    // Execute the query
        $records = $stmt->get_result()->fetch_assoc();    // Get the result
        return $records;
    }

    /* Create and store users in the database */
    function createUser($table, $data) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "INSERT INTO $table SET ";   // SQL INSERT statement

        $i = 0; // counter
        foreach($data as $key => $value) {  // Loop through the data
            if($i === 0) {                  // If the counter is 0
                $sql .= "$key = ?";         // Add the key and value to the SQL statement
            } else {                        // If the counter is not 0
                $sql .= ", $key = ?";       // Add the key and value to the SQL statement
            }
            $i++; // Increment the counter
        }
       $stmt = executeQuery($sql, $data); // Execute the query
       $id = $stmt->insert_id;           // Get the id of the last inserted record
       return $id; // Return the id
    }

    /* Create and store buisnesses in the database */
    function createCompany($table2, $data) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "INSERT INTO $table2 SET ";   // SQL INSERT statement

        $i = 0; // counter
        foreach($data as $key => $value) {  // Loop through the data
            if($i === 0) {                  // If the counter is 0
                $sql .= "$key = ?";         // Add the key and value to the SQL statement
            } else {                        // If the counter is not 0
                $sql .= ", $key = ?";       // Add the key and value to the SQL statement
            }
            $i++; // Increment the counter
        }
       $stmt = executeQuery($sql, $data); // Execute the query
       $id = $stmt->insert_id;           // Get the id of the last inserted record
       return $id; // Return the id
    }

    /* Update users in the database */
    function updateUser($table, $id, $data) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "UPDATE $table SET ";   // SQL UPDATE statement

        $i = 0; // counter
        foreach($data as $key => $value) {  // Loop through the data
            if($i === 0) {                  // If the counter is 0
                $sql .= "$key = ?";         // Add the key and value to the SQL statement
            } else {                        // If the counter is not 0
                $sql .= ", $key = ?";       // Add the key and value to the SQL statement
            }
            $i++; // Increment the counter
        }
        
       $sql .= " WHERE id = $id";          // Add the WHERE clause
       $stmt = executeQuery($sql, $data); // Execute the query
       return $stmt->affected_rows; // Return the id
    }

    /* Update buisnesses in the database */
    function updateCompany($table2, $id, $data) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "UPDATE $table2 SET ";   // SQL UPDATE statement

        $i = 0; // counter
        foreach($data as $key => $value) {  // Loop through the data
            if($i === 0) {                  // If the counter is 0
                $sql .= "$key = ?";         // Add the key and value to the SQL statement
            } else {                        // If the counter is not 0
                $sql .= ", $key = ?";       // Add the key and value to the SQL statement
            }
            $i++; // Increment the counter
        }
        
       $sql .= " WHERE id = $id";          // Add the WHERE clause
       $stmt = executeQuery($sql, $data); // Execute the query
       return $stmt->affected_rows; // Return the id
    }

    /* Delete users in the database */
    function deleteUser($table, $id) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "DELETE FROM $table WHERE id = ?"; // SQL DELETE statement
        $stmt = executeQuery($sql, ['id' => $id]); // Execute the query
        return $stmt->affected_rows; // Return the id
    }

    /* Delete buisnesses in the database */
    function deleteCompany($table2, $id) {
        global $connection; // Allows us to use the connection variable outside of this function
        $sql = "DELETE FROM $table2 WHERE id = ?"; // SQL DELETE statement
        $stmt = executeQuery($sql, ['id' => $id]); // Execute the query
        return $stmt->affected_rows; // Return the id
    }
?>