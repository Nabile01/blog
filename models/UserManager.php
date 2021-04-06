<?php
require "database.php";
require "class.user.php";

class UserManager
{
    private $_db;


    /* ------------------------------- SETTER --------------------------------- */
    public function setDb($db)
    {
        return $this->_db = $db;
    }


    /* -------------------------------- CONSTRUCT ------------------------------- */
    public function __construct($db)
    {
        $this->setDb($db);
    }


    /* ---------------------------------- READ ---------------------------------- */
    public function Logs(User $email)
    {
        $mail=[];
        $req = $this->_db->prepare('SELECT * FROM `users` WHERE email = :email');

        $req->bindValue(':email', $email->getEmail());
        $req->execute();
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $mail[]=new User($donnees);
        }
        return $mail;
    }
}
