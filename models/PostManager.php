<?php
require "database.php";
require "class.post.php";

class PostManager
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
    public function getAllPost()
    {
        $post = [];
        $req = $this->_db->query('SELECT * FROM `post` ORDER BY id ASC');
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $post[] = new Post($donnees);
        }
        return $post;
    }


    public function getPost(int $postid)
    {
        $req = $this->_db->prepare('SELECT * FROM `post` WHERE id = :id');
        $req->bindValue(':id', $postid, PDO::PARAM_INT);
        $req->execute();


        return new Post($req->fetch(PDO::FETCH_ASSOC));
    }

    public function AddPost(Post $add)
    {
        $req = $this->_db->prepare('INSERT INTO `post`(`title`, `content`, `author`, `date`, `category`, `keywords`) VALUES (:title, :content, :author, :date, :category, :keywords');
        $req->bindValue(':title', $add->getTitle());
        $req->bindValue(':content', $add->getContent());
        $req->bindValue(':author', $add->getAuthor());
        $req->bindValue(':date', $add->getDate());
        $req->bindValue(':category', $add->getCategory());
        $req->bindValue(':keywords', $add->getKeywords());
        $req->execute();
    }
}
