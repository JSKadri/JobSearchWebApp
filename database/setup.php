<?php
    include(ROOT_PATH . "/database/db.php");
    include(ROOT_PATH . "/database/validate.php");

    $errors = array(); // Array to store the errors
    $firstname = '';
    $companyName = '';
    $email = '';
    $password = '';
    $password2 = '';
    
    $jobtitle = '';
    $jobdesc = '';
    $jobreq = '';
    $jobloc = '';
    
    $table = 'users';
    $table2 = 'buisnesses';
    $table3 = 'jobs';

    /* Permissions
        1 -> User
        2 -> (Extra)
        3 -> Admin
    */

    function loginUser($user) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['permission'] = $user['permission'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['message'] = "You are now logged in " . ucfirst($user['firstname']) . "!";
        $_SESSION['type'] = "success";
        $_SESSION['logged_in'] = true;

        if($user['permission'] == 3) {    // If the user is an admin
            //header('location: ../Starter/admin/dashboard.php');    // Redirect to the admin dashboard (fake page)
            // For now the user will be redirected to the home page
            header('location: ../Starter/index.php'); // Redirect to the home page
        } else {
            header('location: ../Starter/index.php'); // Redirect to the home page
        }
        exit(); // Exit the script
    }

    function loginCompany($user) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['permission'] = $user['permission'];
        $_SESSION['companyName'] = $user['companyName'];
        $_SESSION['message'] = "Welcome back " . ucfirst($user['companyName']) . "!";
        $_SESSION['type'] = "success";
        $_SESSION['logged_in'] = true;

        header('location: ../Starter/index.php'); // Redirect to the home page
        exit(); // Exit the script
    }

    if (isset($_POST['acc-register-btn'])) {    // If the register button is clicked

        /* This is a sanity check. The front end does cover error however if it fails to catch
            We can stop it here */
        $errors = validateRegisterUser($_POST);   // Validate the user

        if(count($errors) === 0) {    // If there are no errors; create the account

            // Remove(unset) the register button and confirm password from the $_POST array
            unset($_POST['acc-register-btn'], $_POST['password2']);

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password (Secure-it)
            $_POST['permission'] = 1; // By default user is not an permission

            /* Lower case the first and last name */
            $_POST['firstname'] = strtolower($_POST['firstname']);
            $_POST['lastname'] = strtolower($_POST['lastname']);
            
            $user_id = createUser($table, $_POST); // Insert the user data into the database
            $user = selectOneUser($table, ['id' => $user_id]); // Select the user from the database

            /* Log user in */
            loginUser($user);
        } else {    // If there are errors make sure to not change what the user has typed in
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
        }
    }

    if (isset($_POST['c-register-btn'])) {    // If the register button is clicked

        /* This is a sanity check. The front end does cover error however if it fails to catch
            We can stop it here */
        $errors = validateRegisterCompany($_POST);   // Validate the company

        if(count($errors) === 0) {    // If there are no errors; create the account

            // Remove(unset) the register button and confirm password from the $_POST array
            unset($_POST['c-register-btn'], $_POST['password2']);

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password (Secure-it)

            /* Lower case the username */
            $_POST['companyName'] = strtolower($_POST['companyName']);
            
            $user_id = createCompany($table2, $_POST); // Insert the company data into the database
            $user = selectOneCompany($table2, ['id' => $user_id]); // Select the company from the database

            /* Log company in */
            loginCompany($user);
        } else {    // If there are errors make sure to not change what the user has typed in
            $companyName = $_POST['companyName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
        }
    }

    if(isset($_POST['login-btn'])) {
        
        $_POST['email'] = strtolower($_POST['email']);    // lowercase the email
        $errors = validateBoth($_POST);   // Validate the user or company
    

        $user = selectOneUser($table, ['email' => $_POST['email']]);          // Attempt to find the user in the database
        if($user && password_verify($_POST['password'], $user['password'])) {   // If the user exists and the password is correct
            loginUser($user);   // Log the user in
        } 
        $user = selectOneCompany($table2, ['email' => $_POST['email']]);          // Attempt to find the company in the database
        if($user && password_verify($_POST['password'], $user['password'])) {   // If the company exists and the password is correct
            loginCompany($user);   // Log the company in
        } else {        // If there are errors make sure to not change what the user has typed in
            $email = $_POST['email'];
            $password = $_POST['password'];
            array_push($errors, "Bad Combination");    // Push the error message into the array
        }
    }

    if(isset($_POST['creation-btn'])) {

        // Remove(unset) the register button and confirm password from the $_POST array
        unset($_POST['creation-btn']);

        $temp = selectOneCompany($table2, ['id' => $_SESSION['id']]);
        $_POST['email'] = $temp['email'];
        
        $user_id = createJob($table3, $_POST); // Insert the job data into the database

        // Send user to the job page
        $_SESSION['message'] = "Job Created!";
        $_SESSION['type'] = "success";
        header('location: ../jobs/dashboard.php'); // Redirect to the home page
    }


?>