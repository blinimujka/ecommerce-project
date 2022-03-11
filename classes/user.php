<?php

abstract class User {
    protected $name;
    protected $email;
    protected $password;
    protected $isAdmin;

    function __construct($name,$email,$password,$isAdmin){
        $this->name = $name;
        $this->$email = $email;
        $this->password = $password;
        $this->isAdmin = $isAdmin;
    }
    
    abstract protected function setSession();
    abstract protected function setCookie();
}