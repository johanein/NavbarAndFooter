<?php
class User
{
    private $email;
    private $name;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo "$this->name logged in as $this->email";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return $this->name;
        } else {
            return 'not a name';
        }
    }
}

$addUser = new User('Albert', 'johanein@gmail.com');
// $addUser->login();
echo $addUser->setName(50) . "<br />";
echo $addUser->getName();
