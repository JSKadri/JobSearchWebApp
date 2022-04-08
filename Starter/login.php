<?php   include("../path.php");
        include("../database/setup.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>
<!-- The HTML file for the Login Page -->
<!-- By Tolulope(Tolu) Adebayo -->
<!-- Modified by Katherine Morozov -->

    <head>
        <title> Login Page </title>
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
        <?php include(ROOT_PATH . "/include/header.php"); ?>

        <section>
            <div class="login-wrapper">
                <div class="title">
                    Log In
                </div>
                <?php include(ROOT_PATH . "/database/formError.php"); ?>
                <div class="form">
                    <form id="form" action="login.php" method="post">                   
                        <div class="input-field">
                            <label>Email</label>
                            <input id="email" name="email" type="email" class="input" required>
                        </div> 

                        <div class="input-field">
                            <label>Password</label>
                            <input id="password" name="password" type="password" class="input" required>
                        </div> 

                        <div class="input-field">
                            <input id="checkUserLogin" name="login-btn" type="submit"class="submit-button">
                        </div>
                    </form>
                   <P>
                        Don't have an account?

                        <!-- Link to the account page  -->
                        <a href="newacc.php" class="have-acc">Create One</a>
                   </P> 

                   <P>
                       New Company to this site?

                        <!-- Link to the account page for the company -->
                       <a href="newcompanyacc.php" class="have-acc">Create One for your Company</a>
                   </P>
                    
                </div>
            </div>
        </section>
    
    <!-- Footer -->
	<?php include(ROOT_PATH . "/include/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Will put the javascript code link here -->
    <script src="./FrontEndJS.js"></script>

    </body>
</html>
