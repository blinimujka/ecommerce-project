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
    <form id="mainForm" method="POST" action="../classes/auth.php" onsubmit="return validateForm(1)">
      <div class="form-style">
      
      <input name="register-name" type="text" class="input" placeholder="Name" />
        
        <input name="register-email" type="text" class="input" placeholder="Email" />
     
        <input name="register-password" type="password" class="input" id="pwd-click" placeholder="Password" />
        <p id="pwd-req-display"> Password must contain at least 8 characters (A-Z, a-z, 0-9 )</p>
        
        
          <input
          id="submit"
          type="submit"
          class="input submit"
          value="Create Account "
          name="register-btn"
         
         /> 






      </div>
      
    </form>
    
  </div>

  
  <script src="../register.js"></script>

    </body>
    </html>

     


       
                