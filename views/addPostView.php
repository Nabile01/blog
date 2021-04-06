<?php require_once "./controllers/PostController.php"; ?>

<!-- QUAND ON CLIQUE SUR SE CONNECTER : -->

<?php $title = 'Ajouter un article de blog'; ?>

<form action="index.php?action=create" method="POST">
    <label for="">Titre</label>
    <input type="text" name="title">

    <label for="">Contenu</label>
    <input type="text" name="content">

    <label for="">Auteur</label>
    <input type="text" name="author">

    <label for="">Date</label>
    <input type="date" name="date">

    <label for="">Categorie</label>
    <input type="text" name="category">

    <label for="">Mot-clé</label>
    <input type="text" name="keywords">

    <input type="submit" name="addpost">
</form>
