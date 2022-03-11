<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../register.css">
</head>
<body>

<div class="header">
    <a href="index.php"><img class="logo"src="../img/logo1.png"></a>
</div>

<div class="container">
    <div class="link-container">
    <a href="../view/login.php">Login</a>
      <a href="../view/register.php">Register</a>
    </div>
    <form id="mainForm" method="POST" action="../classes/auth.php" >
      <div class="form-style">
      
        <input name="login-email" type="text" class="input" placeholder="Email" />
        
        <input name="login-password" type="password" class="input" placeholder="Password" />
        <input
          id="submit"
          type="submit"
          class="input submit"
          name="login-btn"
          value="Login"
                
  />  
      </div>
    </form>
    
  </div>

  
  <script src="../register.js"></script>

    </body>
    </html>

     


       
                