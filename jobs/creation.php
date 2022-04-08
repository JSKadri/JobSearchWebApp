<?php   include("../path.php");
        include("../database/setup.php");
?>
<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <title> Job Creation </title>
        <link rel="stylesheet" href="../Starter/CSSReference.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts from google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <meta name ="description" content="Base Template for the project"> 

        <!-- Using Icon library from font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <?php include(ROOT_PATH . "/include/allowRegistered.php"); ?>
        <?php include(ROOT_PATH . "/include/denyUsers.php"); ?>

        <!--- Header -->
        <?php include(ROOT_PATH . "/include/header.php"); ?>

        <div class="form-body-job">
            <h1 class="form-title-job">Create a Job</h1>
            <form id="form-job" action="creation.php" method="post">
                <label for="jobtitle">Job Title</label>
                <input class="typetext" type="text" id="jobtitle" name="jobtitle">

                <label for="jobdesc">Job Description</label>
                <br>
                <textarea class="typetext" type="text" id="jobdesc" name="jobdesc" rows="5" cols="115"></textarea>
                <br>

                <label for="jobreq">Job Requirements</label>
                <br>
                <textarea class="typetext" type="text" id="jobreq" name="jobreq" rows="5" cols="115"></textarea>
                <br>

                <label for="jobloc">Job Location</label>
                <br>
                <input class="typetext" type="text" id="jobloc" name="jobloc">

                <input id="creationSubmit" name="creation-btn" type="submit" value="Submit"/>  
          </form>
        </div>
        <br><br>

        <style>
            /* Change Form Scaling on With Size */
            @media only screen and (max-width: 2030px) {
                .form-body-job {
                    margin-left: 50px;
                    margin-right: 50px;
                }
            }
        </style>
        <!-- Footer -->
        <?php include(ROOT_PATH . "/include/footer.php"); ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Will put the javascript code link here -->
        <script src="../Starter/FrontEndJS.js"></script>

    </body>
</html>
