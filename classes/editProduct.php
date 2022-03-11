<?php
 include_once 'productMapper.php';
 include_once 'product.php';
 $productId = $_GET['edit-product-id'];
 $img = $_GET['edit-product-img'];
 $name = $_GET['edit-product-name'];
 $price = $_GET['edit-product-price'];
 //$product = new Product($img,$name,$price);
 $mapper = new productMapper();
 $mapper->editProduct($img,$name,$price,$productId);
 header("Location:../view/dashboard.php");