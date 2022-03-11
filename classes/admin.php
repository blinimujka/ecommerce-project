<?php
require_once 'user.php';

class admin extends user {
    public function __construct($name,$email,$password,$isAdmin){
        parent::__construct($name,$email,$password,$isAdmin);
    }

    public function setSession(){

        $_SESSION["isAdmin"] = 1;
    }
    
    public function setCookie(){
        setCookie("email",$this->getEmail(),time()+2*24*60*60);
    }


    public function getName(){
        return $tihs->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

}