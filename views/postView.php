<!-- QUAND ON CLIQUE SUR VOIR ARTICLE : -->


<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>
    <?= htmlspecialchars($post->getTitle());
    $dateSQL = $post->getDate(); //Convertion en format EU
    $date = new DateTime($dateSQL);
    ?>

    <em>le <?= $date->format('d/m/y') ?></em>
</h1>

<?php

?>
    <div class="news">
        <p>
            <?= nl2br(htmlspecialchars($post->getContent())) ?>
        </p>
    </div>
<?php

// $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require "template.php"; ?>
