   
<?php
    include '../subComponents/header.php';
    include '../classes/productMapper.php';
    $mapper = new productMapper();
    $listaProdukteve = $mapper->getAllProducts();
?>
<div class="slider">

    <img  name="slider" src="../img/slider1.jpg">
    </div>




<div class="popular-brands">
   
    <img class="product-logo" src="../img/img1.jpg">
    <img class="product-logo" src="../img/img2.jpg">
    <img class="product-logo" src="../img/img3.jpg">
    <img class="product-logo" src="../img/img4.jpg">
   
    
</div>

<?php  
               echo '<div class="product-list">'; 
                foreach($listaProdukteve as $product){


                    echo '<div class="product">'; 
                    echo  '<div class="product-img">';
                    echo '<img src='.$product["img"].'></div>';
                    echo   '<div class="product-text">';
                    echo  '<p class="product-name">'.$product["name"].'</p>';
                    echo '<span class="price">'."$".$product["price"].'</span>';
                    echo '<a href="#"><i id="icon-cart" class="fas fa-shopping-cart fa-2x"></i></a>';
                    echo "</div></div>";

                }
    ?>

            </div>

    <?php 
        include '../subComponents/footer.php';
    
    ?>
                       

 
    
    <script type="text/javascript" src='../main.js'></script>
</body>
</html>