<?php $title= 'Exemple Blog Basic PHP: Blog'; ?>

<?php ob_start(); ?>
    <h1>List of Posts</h1>
    <ul>
        <?php foreach( $posts as $post ) : ?>
        <li>
            <a href="<?php echo $destUri.'?id='.$post['id']; ?>">
            <?php echo $post['title']; ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>
