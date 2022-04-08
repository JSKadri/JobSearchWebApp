<?php   include("../path.php");
        include("../database/db.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <title> Job Description </title>
        <link rel="stylesheet" href="../Starter/CSSReference.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts from google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <meta name = "description" content="Base Template for the project"> 

        <!-- Using Icon library from font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!--- Header -->
        <?php include(ROOT_PATH . "/include/header.php"); ?>

        <!--- Main -->

        <section class="job-section">
            <div class="job">
                <div class="job-title">
                    <h1> Night Club Bouncer </h1>
                </div>
                <div class="job-description">
                    <h2> Description </h2>
                    <div class="job-text">
                        <p> Person that stands at nightclub door and let's people in after verify ID. </p>
                        <p> Pays minimum wage </p>
                    </div>
                </div>
                <div class="job-requirements">
                    <h2> Requirements </h2>
                    <div class="job-text">
                        <p> Strong person </p>
                        <p> PhD in Psychology </p>
                        <p> Experience in nightclub </p>
                        <p> 30 years experience working as a security guard </p>
                        <p> Able to take a punch </p>
                    </div>
                </div>
                <div class="job-contact">
                    <h2> Contact </h2>
                    <div class="job-text">
                        <p> example@email.com </p>
                        <p> (123) 456-7890 </p>
                    </div>
                </div>
                <button class="apply-btn"> Apply Now </button>
            </div>
                
        </section>


        <!-- Footer -->
        <?php include(ROOT_PATH . "/include/footer.php"); ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Will put the javascript code link here -->
        <script src="../Starter/FrontEndJS.js"></script>

    </body>
</html>
