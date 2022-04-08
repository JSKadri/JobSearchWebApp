<?php   include("../path.php");
        include("../database/setup.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>
<!-- The HTML file for Account -->
<!-- By Tolulope(Tolu) Adebayo -->
<!-- Modified by Jawad Kadri and Katherine Morozov -->

    <head>
        <title> New Account </title>
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
            <div class="wrapper">
                <div class="title">
                    Register
                </div>

                <?php include(ROOT_PATH . "/database/formError.php"); ?>

                <div class="form">
                    <form id="form" action="newacc.php" method="post">
                        <div class="input-field">
                            <label>First Name</label>
                            <input id="firstName" name="firstname" type="text" class="input" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input id="lastName" name="lastname" type="text" class="input" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Email</label>
                            <input id="email" name="email" type="email" class="input" required>
                        </div> 

                        <div class="input-field">
                            <label>Password</label>
                            <input id="password" name="password" type="password" class="input" 
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required>
                        </div> 

                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input id="cpassword" name="password2" type="password" class="input" required>
                        </div> 

                        <div class="input-field">
                            <input id="checkUserRegister" name="acc-register-btn" type="submit" class="submit-button">
                        </div>
                    </form>

                    <P>
                        Have an account?
                        <!-- Links to the log in page  -->
                        <a href="login.php" class="new-acc">Sign In</a>
                   </P>

                   <P>
                       Have an account for your Company?
                      <!-- Links to the log in page for the company  -->
                      <a href="Company login.php" class="new-acc">Sign In with your Company</a>
                   </P>
                </div>
            </div>

            <div class="form-body" id="message">
                <h3 id="form-title" style="font-size: 29px;">Password must contain the following</h3>
        
                <div>
                    <div class="left-form" style="float: left;"> 
                        <div id="letter" class="invalid">A <b>lowercase</b> letter</div>
                        <div id="capital" class="invalid">A <b>capital (uppercase)</b> letter</div>
                        <div id="match" class="invalid">Must <b>match</b></div>
                    </div>
                    
                    <div class="right-form" style="margin-left: 50%">
                        <div id="number" class="invalid">A <b>number</b></div>
                        <div id="length" class="invalid">Minimum <b>8 characters</b></div>
                        <div id="special" class="invalid">A <b>special character</b></div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Change Form Scaling on With Size */
            @media screen and (max-width: 1863px) {
                #message {
                    min-width: 500px;
                }
                .left-form {
                    display: inline-block;
                    float: none;
                    margin: auto;
                    width: 91%;
                    padding: 10px;
                    text-align: center;
                }
                .right-form {
                    display: inline;
                    margin: auto;
                    padding: 10px;
                    text-align: center;
                }
            }
        </style>
    
    <!-- Footer -->
    <?php include(ROOT_PATH . "/include/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Will put the javascript code link here -->
    <script src="./FrontEndJS.js"></script>
    <script src="./checkPassword.js"></script>

    </body>
</html>
