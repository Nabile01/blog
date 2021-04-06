<?php
require "./controllers/PostController.php";
require "./controllers/UserController.php";



if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts($db);
    } elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post($db, $_GET['id']);
        } else {
            echo 'Erreur : aucun contenu trouvé';
        }
    } elseif ($_GET['action'] == 'login') {
        login($db);
    } elseif ($_GET['action'] == 'create') {
        if (isset($_POST['addpost'])) {
            InsertPost($db);
            
        } else {
            echo "Erreur : L'article n'a pas été créé.";
        }
    }
} else {
    listPosts($db);
}
