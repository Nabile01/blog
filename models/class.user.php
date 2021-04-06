<?php
class User
{

    private $_iduser;
    private $_firstname;
    private $_lastname;
    private $_email;
    private $_password;



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
        return $this->_iduser;
    }

    public function getFirstname()
    {
        return $this->_firstname;
    }

    public function getLastname()
    {
        return $this->_lastname;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getPassword()
    {
        return $this->_password;
    }


    /* --------------------------------- SETTER --------------------------------- */
    public function setId($iduser)
    {
        $this->_iduser = $iduser;
    }

    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }
}
