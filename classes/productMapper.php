<?php
require_once "Database.php";


class productMapper extends DatabaseConfiguration{
   private $conn;
   private $query;

public function __construct(){
    $this->conn = $this->getConnection();
}
public function getAllProducts(){
    $this->query = "Select * from products";
    $statement = $this->conn->prepare($this->query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



        public function insertProduct($img,$name,$price){
            $this->query = "Insert into products(img,name,price) values (:img,:name,:price)";
            $statement= $this->conn->prepare($this->query);
            $statement->bindParam(":img",$img);
            $statement->bindParam(":name",$name);
            $statement->bindParam(":price",$price);
            $statement->execute();

        }

        public function deleteProduct($productId){
            $this->query = "Delete from products where productId=:productId";
            $statement= $this->conn->prepare($this->query);
            $statement->bindParam(":productId",$productId);
            $statement->execute();
        }

        public function editProduct($img,$name,$price,$productId){
            $this->query = "Update products set name=:name,price=:price,img=:img where productId=:productId";
           
            $statement= $this->conn->prepare($this->query);
            
            $statement->bindParam(":img",$img);
            $statement->bindParam(":name",$name);
            $statement->bindParam(":price",$price);
            $statement->bindParam(":productId",$productId);
            $statement->execute();
        }
        
}