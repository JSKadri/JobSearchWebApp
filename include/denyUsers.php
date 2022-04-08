<!DOCTYPE html>
<html lang="en"></html>

<body>
    <?php if(isset($_SESSION['id'])) : ?>
            <?php if(!isset($_SESSION['companyName'])) : ?>
               <?php header("Location: /Starter/index.php"); ?>
            <?php endif; ?>
    <?php else : ?>
        <?php header("Location: /Starter/index.php"); ?>
    <?php endif; ?>
    </body>
</html>