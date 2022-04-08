<?php if(count($errors) > 0): ?>
    <div style="color: red; list-style-type: none; text-align: center; text-decoration: underline;">
    <?php foreach($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div>
<?php endif; ?>