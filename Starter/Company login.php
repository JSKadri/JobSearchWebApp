<!DOCTYPE html>
<html lang="en"></html>
<!-- The HTML file for the Company Login Page -->
<!-- By Katherine Morozov -->

    <head>
        <title> Company Login Page </title>
        <link rel="stylesheet" href="CSSReference.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts from google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <meta name = "description" content="Code for the project"> 

        <!-- Using Icon library from font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!--- Header -->
	    <?php include("../include/header.php"); ?>

        <section>
            <div class="login-wrapper">
                <div class="title">
                    Log In
                </div>
                <div class="form">
                    <form id="form">               
                        <div class="input-field">
                            <label>Company</label>
                            <input id="companyName" name="companyName" type="name" class="input" required>
                        </div> 

                        <div class="input-field">
                            <label>Email</label>
                            <input id="email" name="email" type="email" class="input" required>
                        </div> 

                        <div class="input-field">
                            <input id="checkCompanyLogin" name="c-login-btn" type="submit"class="submit-button" >
                        </div>
                    </form>    
                   <P>
                        Don't Have an account for this Company?

                        <!-- Link to the new company account page  -->
                        <a href="newcompanyacc.php" class="have-acc">Create One</a>
                   </P> 

                   <P>
                        Are you just a user?

                        <!-- Link to the log in page for user -->
                       <a href="login.php" class="have-acc">Create One</a>
                   </P>
                </div>
            </div>
        </section>
    
     <!-- Footer -->
	<?php include("../include/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Will put the javascript code link here -->
    <script src="./FrontEndJS.js"></script>

    </body>
</html>