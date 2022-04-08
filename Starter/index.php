<?php   include("../path.php");
        include("../database/db.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>
<!-- The Main page for the project -->
<!-- By Tolulope(Tolu) Adebayo -->
<!-- Modified by Jawad Kadri and Katherine Morozov -->

    <head>
        <title> GI. JOBs Homepage </title>
        <link rel="stylesheet" href="CSSReference.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts from google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <meta name = "description" content="Base Template for the project"> 

        <!-- Using Icon library from font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!--- Header & POPUP -->
        <?php include(ROOT_PATH . "/include/header.php"); ?>
        <?php include(ROOT_PATH . "/include/popup.php"); ?>

        <section>
            <div class="intro-text">
                <H1>
                    Get your dream job with us
                </H1>
                <!-- Add BR tags accordingly -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud 
                </p>

                <!-- Links to the log in page  -->
                <a href="newacc.php" class="get-started">Get Started</a>
            </div>
        </section>
        
        <!-- Section Jobs Section? -->
        <section class="why-us" id="why-us">
            <H1 >
                Why US?
            </H1>
            <!--Add BR tags accordingly -->
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                enim ad minim veniam, quis nostrud 

                Tursted by many
                we partner up with the best talents
            </p>
        </section>

        <section class="questions">
            <H1 id="FAQ">
                Frequently Asked Questions
            </H1>

            <!-- FAQ Collapsable here  Java script needed here-->
            <p>Click on the buttons to open the collapsible content.</p>

            <button class="accordion">Est deserunt numquam aut ullam temporibus ut sapiente mollitia 33 reprehenderit laudantium.?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Est deserunt numquam aut ullam temporibus ut sapiente mollitia 33 reprehenderit laudantium.?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Est deserunt numquam aut ullam temporibus ut sapiente mollitia 33 reprehenderit laudantium.?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <!-- Added by Katherine Morozov -->
            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight) {
                                panel.style.maxHeight = null;
                            } 
                            else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                            }
                        });
                }

            </script>
            
            <!-- Link to send an email -->
            <h3>
                More Questions?
            </h3>
            <h4 id="Contact"> Send Us an Email!</h4>
            
            <p><a href="mailto:person@GI.JOBs.com" class="email">Contact Us</a></p>

        </section>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/include/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Will put the javascript code link here -->
    <script src="./FrontEndJS.js"></script>

    </body>
</html>
