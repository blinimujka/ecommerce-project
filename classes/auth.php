<?php

include_once 'admin.php';
include_once 'customer.php';
require_once 'userMapper.php';

session_start();
if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
    
} else 

if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../view/register.php");
}


class LoginLogic
{
    private $email = "";
    private $password = "";

    public function __construct($loginInfo)
    {
        $this->email = $loginInfo['login-email'];
        $this->password = $loginInfo['login-password'];
    }

    public function verifyData()    {
        
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($this->email);

        if ($this->emailAndPasswordCorrect($this->email, $this->password)) {
            if($user['is_admin'] == 1){
                header('Location:../view/dashboard.php');
            }
            else{
                header('Location:../view/index.php');
            }
   
        } else {
            header("Location:../view/login.php");
            
        }
    }

    private function emailAndPasswordCorrect($email, $password){
    
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($email);
        if ($user == null || count($user) == 0){
            return false;
        }
            else if (password_verify($password, $user['password'])) {
                    $obj = new Customer($user['name'], $user['email'], $user['password'],0);
                    $obj->setSession();
                    return true;
            }
            
            return false;
    }
}



class RegisterLogic {
    private $name = "";
    private $email = "";
    private $password = "";

    public function __construct($RegisterInfo)
    {
        $this->name = $RegisterInfo['register-name'];
        $this->email = $RegisterInfo['register-email'];
        $this->password = $RegisterInfo['register-password'];
    }

    public function insertData()
    {
        $mapper = new UserMapper();
        $mapper->insertUser($this->name,$this->email,$this->password);
        header("Location:../view/index.php");
    }
}


