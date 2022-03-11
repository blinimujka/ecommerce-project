<?php
ob_start();
include_once 'product.php';
require_once 'productMapper.php';
session_start();

 if (isset($_POST['insert'])) {

    $img   =  $_POST['product-img'];
    $name  =  $_POST['product-name'];
    $price =  $_POST['product-price'];

    //$produkti = new Product($img,$name,$price);
    $Pmapper = new productMapper();
    $Pmapper->insertProduct($img,$name,$price);
   
    header("Location:../view/dashboard.php");
} 
