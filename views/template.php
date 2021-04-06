<!-- PAGE PRINCIPAL -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="style.css" rel="stylesheet" />
</head>

<header>
    <?php require "login.php"; ?>
</header>

<body>

    <?= $content;
    ?>
</body>

</html>