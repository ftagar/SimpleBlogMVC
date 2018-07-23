<?php $title= 'Exemple Blog Basic PHP: Connexion'; ?>

<?php ob_start(); ?>
<form method="post" action="<?php echo $destUri; ?>">
        <label for="login"> Votre identifiant </label> : <input type="text" name="login" id="login" placeholder="defaut" maxlength="12" required />
        <br />
        <label for="password"> Votre mot de passe </label> : <input type="password" name="password" id="password" maxlength="12" required />

        <input type="submit" value="Envoyer">
    </form>
<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>

