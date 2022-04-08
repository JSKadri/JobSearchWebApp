<?php
    function validateRegisterUser($user) {
        $errors = array();  // Array to store the errors

        if(empty($user['firstname'])) {    // If the firstname field is empty
            array_push($errors, "First Name Required");    // Push the error message into the array
        }

        if(empty($user['lastname'])) {    // If the lastname field is empty
            array_push($errors, "Last Name Required");    // Push the error message into the array
        }

        if(empty($user['email'])) {    // If the email field is empty
            array_push($errors, "Email Required");    // Push the error message into the array
        }

        if(empty($user['password'])) {    // If the password field is empty
            array_push($errors, "Password Required");    // Push the error message into the array
        }

        if($user['password2'] !== $user['password']) {    // If the confirm password field is not equal to the password field
            array_push($errors, "Passwords do not match");    // Push the error message into the array
        }

        $existingUser = selectOneUser('users', ['email' => $user['email']]);    // Check if the email is already in use
        if(isset($existingUser)) {    // If the Email is already in use
            array_push($errors, "Email already in use");    // Push the error message into the array
        }
        
        return $errors;   // Return the array of errors
    }

    function validateRegisterCompany($user) {
        $errors = array();  // Array to store the errors
            
        if(empty($user['companyName'])) {    // If the companyName field is empty
            array_push($errors, "Company Name Required");    // Push the error message into the array
        }       

        if(empty($user['email'])) {    // If the email field is empty
            array_push($errors, "Email Required");    // Push the error message into the array
        }

        if(empty($user['password'])) {    // If the password field is empty
            array_push($errors, "Password Required");    // Push the error message into the array
        }

        if($user['password2'] !== $user['password']) {    // If the confirm password field is not equal to the password field
            array_push($errors, "Passwords do not match");    // Push the error message into the array
        }

        $existingUser = selectOneCompany('users', ['email' => $user['email']]);    // Check if the email is already in use
        if(isset($existingUser)) {    // If the email is already in use
            array_push($errors, "Email already in use");    // Push the error message into the array
        }
        
        return $errors;   // Return the array of errors
    }

    /* Make sure the fields arn't empty */
    function validateBoth($user) {
        $errors = array();  // Array to store the errors

        if(empty($user['email'])) {    // If the email field is empty
            array_push($errors, "Email Required");    // Push the error message into the array
        }

        if(empty($user['password'])) {    // If the password field is empty
            array_push($errors, "Password Required");    // Push the error message into the array
        }

        return $errors;   // Return the array of errors
    }
?>