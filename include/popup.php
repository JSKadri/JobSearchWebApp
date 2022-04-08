<?php if(isset($_SESSION['message'])): ?>
        <div class="<?php echo $_SESSION['type'];?>-message">
            <h1><?php echo $_SESSION['message']; ?></h1>
             <!-- Destroy(unset) the message so it only appearrs once -->
            <?php unset($_SESSION['message']); unset($_SESSION['type']);?>
        </div>
<?php endif; ?>