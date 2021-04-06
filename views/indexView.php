<!-- Contenu des articles -->

<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<a href="">Créer un article</a>

<?php
foreach ($posts as $data) {
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data->getTitle());
            $dateSQL = $data->getDate(); //Convertion en format EU
            $date = new DateTime($dateSQL);
            ?>

            <em>le <?= $date->format('d/m/y') ?></em>
        </h3>

        <a href="index.php?action=post&id=<?= $data->getId() ?>">Voir l'article</a>
    </div>
<?php
}
// $data->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require "template.php"; ?>