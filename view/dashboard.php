
<?php
include '../subComponents/header.php';
include_once '../classes/userMapper.php';
include_once '../classes/productMapper.php';
//if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
    $Pmapper =  new productMapper();
    $productList = $Pmapper->getAllProducts();
?>
<div>
    <h1 class="dashboard"> Dashboard </h1>
    <div class="table-container">
        
        <table class="user-list-table">
            <thead>
            <tr>
                <th colspan="5">USER LIST</th>
            </tr>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php 
                         if($user['is_admin'] == 1) {   
                             echo "Admin";
                            }
                       else{ 
                       echo "Customer";
                       }
                       ?>
                       
                        </td>
                        <td><a href="<?php echo "../classes/deleteUser.php?id=" .$user['id'];?>">Delete user<i class="gg-trash"></i></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

 <!-- 

 Tabela 
 
 e 
 
 produkteve

 -->

        <table class="user-list-table">
            <thead>
            <tr>
                <th colspan="5">Product LIST</th>
            </tr>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>ProductId</td>
                    <td></td>
                   
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($productList as $Product) {
                    
                ?>
                    <tr>
    
                        
                        <td><?php echo $Product['name']; ?></td>
                        <td><?php echo $Product['price']; ?></td>
                        <td><?php echo $Product['productId']; ?></td>
                        <td><a href="<?php echo "../classes/deleteProduct.php?id=" .$Product['productId'];?>">Delete product<i class="gg-trash"></i></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


    </div>
</div>


<div>

<form  action="../classes/insertProduct.php" method="post">
    <label >Product img src:</label> <br>
    <input type="text" name="product-img"><br>
    <label >Product name</label><br>
    <input type="text" name="product-name"> <br>
    <label >Product price:</label><br>
    <input type="text" name="product-price"><br>

    <input class="submit" type="submit"value="Insert Product" name="insert">
</form>

<form action="../classes/editProduct.php" method="get">

    <label >Product ID</label> <br>
    <input required type="text" name="edit-product-id" ><br>

    <label >Product img src:</label> <br>
    <input type="text" name="edit-product-img" ><br>
    <label >Product name</label><br>
    <input type="text" name="edit-product-name"  > <br>
    <label >Product price:</label><br>
    <input type="text" name="edit-product-price"  ><br>
    
    <input class="submit"type="submit"value="Edit Product">

</form>
            </div>

<?php
include '../SubComponents/footer.php'
?>
