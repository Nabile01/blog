<?php
require "./models/PostManager.php";

function listPosts($db)
{
    $manager = new PostManager($db);
    $posts = $manager->getAllPost();

    require "./views/indexView.php";
}

function post($db, $id)
{
    $manager = new PostManager($db);
    $post = $manager->getPost($id);

    require "./views/postView.php";
}

function InsertPost($db)
{
    $manager = new PostManager($db);
    $post = new Post(array('title' => $_POST['title'], 'content' => $_POST['content'], 'author' => $_POST['author'], 'date' => $_POST['date'], 'category' => $_POST['category'], 'keywords' => $_POST['keywords']));
    $manager->AddPost($post);
    echo "L'article a bien été créé.";
    var_dump($post);

    require "./views/addPostView.php";    
}
