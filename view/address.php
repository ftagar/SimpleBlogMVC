<?php $title= 'Exemple Blog Basic PHP: Blog'; ?>

<?php ob_start(); ?>
    <h1>List of Posts</h1>
    <ul>
        <?php foreach( $allAlarms as $alarm ) : ?>
        <li>
            <a href="<?php echo $destUri.'?id='.$alarm['id']; ?>">
            <?php echo $alarm['address']; ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>
