<?php
require_once 'Database.php';

class UserMapper extends DatabaseConfiguration   {
    private $conn;
    private $query;

    public function __construct(){
        $this->conn= $this->getConnection();
    }

    public function getUserById($userId){
            $this->query = "Select * from users where id=:id"; // qitu duhet me kqyr emrin e tabeles ne MYSQL
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":id",$userId);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
    }
    public function editUser($user,$id){
        $this->query = "update users set name:=name,email=:email where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $email = $this->getEmail();
        $name = $this->getName();
        $statement->bindParam(":name",$name);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }

public function insertUser($name,$email,$password)
    {
        $this->query = "insert into users (name, email, password) values (:name,:email,:pass)";
        $statement = $this->conn->prepare($this->query);
        
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pass", password_hash($password, PASSWORD_BCRYPT));
        //$statement->bindParam(":isAdmin", $isAdmin);
        $statement->execute();
    }

    public function getUserByEmail($email){
        $this->query = "Select * from users where email=:email";
        $statement = $this->conn->prepare($this->query);
        $statement ->bindParam(":email",$email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
        }
        


    public function getAllUsers(){
            $this->query = "select * from users";
            $statement = $this->conn->prepare($this->query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

    public function deleteUser($id){   
            $this->query = "delete from users where id=:id";
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":id", $id);
            $statement->execute();
        }
        

}