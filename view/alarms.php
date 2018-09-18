<?php $title= 'Exemple Blog Basic PHP: Post'; ?>

<?php ob_start(); ?>

    <h1><?php echo $alarms['address']; ?></h1>

    <div class="date"> <?php echo 'Batiment:'.$alarms['bat']; ?> </div>
    <div class="date"> <?php echo 'Salle:'.$alarms['salle']; ?> </div>
    <div class="date"> <?php echo 'location:'.$alarms['location']; ?> </div>
    <div class="body"> <?php echo 'height:'.$alarms['height'].'m'; ?> </div>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>