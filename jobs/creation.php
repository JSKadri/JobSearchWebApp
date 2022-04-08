<?php   include("../path.php");
        include("../database/db.php"); 
?>
<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <title> Job Creation </title>
        <link rel="stylesheet" href="CSSReference.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts from google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
        <meta name ="description" content="Base Template for the project"> 

        <!-- Using Icon library from font awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!--- Header -->
        <?php include(ROOT_PATH . "/include/header.php"); ?>

        <!-- Footer -->
        <?php include(ROOT_PATH . "/include/footer.php"); ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Will put the javascript code link here -->
        <script src="./FrontEndJS.js"></script>

    </body>
</html>
