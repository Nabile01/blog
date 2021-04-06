<?php
require "./models/UserManager.php";


function login($db)
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $CryptedPswd = crypt($password, '$6$rounds=5000$ydhbnctqklopmfha$');
    $Userlogs = new User(array('email' => $email, 'password' => $password));

    $manager = new UserManager($db);
    $login = $manager->Logs($Userlogs);

    if (empty($login)) {
        echo 'Identifiant incorrect';
    } else {
        if ($CryptedPswd == $login[0]->getPassword()) {
            session_start();
            require "./views/addPostView.php";
        } else {
            echo 'Mot de passe incorrect';
        }
    }
}

