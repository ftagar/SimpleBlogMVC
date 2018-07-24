<?php

// charge et initialise les bibliothèques globales
require_once 'model.php';
require_once 'controllers.php';

// démarrage de la session
session_start();

echo 'Hello World';

// initialisation des chemins des différentes parties de l'application
$uriHome = '/SimpleBlogMVC/index.php';
$uriBlog = '/SimpleBlogMVC/index.php/blog';
$uriPost = '/SimpleBlogMVC/index.php/post';
$uriLogout = '/SimpleBlogMVC/index.php/logout';

// récupération du nom de la page demandée
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$login = '';
$error = '';

// vérification utilisateur authentifié
if (!isset($_SESSION['login'])) {

    if (!isset($_POST['login']) || !isset($_POST['password'])) {
        $error = 'not connected';
        $uri = $uriHome;
    } elseif (!is_user($_POST['login'], $_POST['password'])) {
        $error = 'bad login/pwd';
        $uri = $uriHome;
    } else {
        $_SESSION['login'] = $_POST['login'];
        $login = $_SESSION['login'];
    }
} else
    $login = $_SESSION['login'];


// route la requête en interne
if ($uri == $uriHome) {
    login_action($login, $uriBlog, $uriLogout, $error);
} elseif ($uri == $uriBlog && isset($_POST['login']) && isset($_POST['password'])) {
    blog_action($login, $uriPost, $uriLogout, $error);
} elseif ($uri == $uriPost && isset($_GET['id'])) {
    post_action($_GET['id'], $login, '', $uriLogout, $error);
} elseif ($uri == $uriLogout) {
    // fermeture de la session et affichage de la page de connexion
    session_destroy();
    login_action('', $uriBlog, $uriLogout, '');
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>My Page Not Found</h1></body></html>';
}

?>
