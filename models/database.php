<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root');
} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
}
?>