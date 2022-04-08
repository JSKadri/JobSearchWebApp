<!DOCTYPE html>
<html lang="en"></html>

<body>
    <?php if(isset($_SESSION['id'])) : ?>
        <?php header("Location: /Starter/index.php"); ?>
    <?php endif; ?>
    </body>
</html>