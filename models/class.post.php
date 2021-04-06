<?php
class Post
{

    private $_idPost;
    private $_title;
    private $_content;
    private $_author;
    private $_date;
    private $_category;
    private $_keywords;



    /* -------------------------------- CONSTRUCT ------------------------------- */
    public function __construct(array $data)
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }


    /* --------------------------------- HYDRATE -------------------------------- */
    public function hydrate(array $element)
    {
        foreach ($element as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    /* --------------------------------- GETTER --------------------------------- */
    public function getId()
    {
        return $this->_idPost;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function getContent()
    {
        return $this->_content;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getCategory()
    {
        return $this->_category;
    }

    public function getKeywords()
    {
        return $this->_keywords;
    }


    /* --------------------------------- SETTER --------------------------------- */
    public function setId($idPost)
    {
        $this->_idPost = $idPost;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function setContent($content)
    {
        $this->_content = $content;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function setCategory($category)
    {
        $this->_category = $category;
    }

    public function setKeywords($keywords)
    {
        $this->_keywords = $keywords;
    }
}
