<?php
class User
{
    public $email;
    public $name;

    function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function login()
    {
        echo "$this->name logged in as $this->email" . "<br />";
    }
}
$userOne = new User('johanein@gmail.com', 'Albert');
$userOne->login();
echo $userOne->email;
