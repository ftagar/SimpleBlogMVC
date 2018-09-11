<?php $title= 'Exemple Blog Basic PHP: Post'; ?>

<?php ob_start(); ?>

    <h1><?php echo $post['address']; ?></h1>

    <div class="date"> <?php echo $post['location']; ?> </div>
    <div class="body"> <?php echo $post['height']; ?> </div>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>