<?php

class Product {
    protected $img;
    protected $productName;
    protected $productPrice;

    function __construct($img,$productName,$productPrice){
        $this->img;
        $this->productName;
        $this->productPrice;
    }
    
    public function getImg()
    {
        return $this->img;
    }
    public function getProductName()
    {
        return $this->productName;
    }
    public function getProductPrice()
    {
        return $this->productPrice;
    }
}