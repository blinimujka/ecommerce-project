<?php

include_once 'user.php';

class Customer extends User {

    function __construct($name,$email,$password,$isAdmin){
        parent::__construct($name,$email,$password,$isAdmin);
       
    }


public function setSession(){
$_SESSION["is_Admin"] = 0;
   
}

public function setCookie(){
    setCookie("email",$this->getEmail(),time()+2*24*60*60);
}
public function getName(){
    return $this->name;
}
public function getEmail(){
    return $this->email;
}
public function getPassword(){
    return $this->password;
}
public function getIsAdmin(){
    return $this->isAdmin;
}
}