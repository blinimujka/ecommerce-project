<?php
//include '../SubComponents/header.php';
//include_once '../classes/productMapper';
   // $mapper =  new productMapper();
  //  $productList = $mapper->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../dashboard.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
  />
  
 
</head>
<body>

    <header>
        <a href="../view/index.php"><img class="logo"src="../img/logo1.png"></a>
        <div class="search-box">
            <input type="text" name="" class="search-txt" placeholder="Search..."/>
            <a class="search-btn" href="#">
                <i id='btn-srch'class="fas fa-search fa-2x"></i>
            </a>
           </div>
             <div class="nav-left">
              <a href="#"><i id="icon1" class="fas fa-bars fa-2x"></i></a>
             <a href="login.php"> <i id="icon2" class="far fa-user fa-2x"></i></a>
          
             <div>
              <a href="#">  <i id="icon3" class="fas fa-shopping-cart fa-2x"></i></a>
              <span class="cart-number">0</span>
              </div>
             </div>
    </header>
<div class="menu-bar">
    <div class="menu-bar-categories">
    <ul>
        <li>Category 1</li>
        <li>Category 2</li>
        <li>Category 3</li>
      
       
    </ul>
</div>
   
</div>