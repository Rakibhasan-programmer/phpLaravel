<?php


namespace App\classes;


class Auth
{
    private $email = "admin@admin.com";
    private $password = "123456";

    private $userEmail, $userPassword;

    public function __construct($post)
    {
        $this->userEmail = $post['email'];
        $this->userPassword = $post['password'];
    }

    public function login()
    {
        if($this->email == $this->userEmail && $this->password == $this->userPassword){
            header('Location: action.php?page=home');
        }else{
            return "Email or Password wrong";
        }
    }


}