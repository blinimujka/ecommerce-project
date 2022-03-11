<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aboutUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="header">
       <a href="../view/index.php"> <img class="logo"src="../img/logo1.png"> </a> 
        <span>ABOUT US</span>
    </div>
 
  
    <h1>Frequently Asked Questions</h1>
    <div class="faq-container">
      <div class="faq">
        <h3 class="faq-title">
        Frequently Asked Questions 1
        </h3>

        <p class="faq-text">
        FAQ Answer 1
        </p>

        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="faq">
        <h3 class="faq-title">
        Frequently Asked Questions 2
        </h3>
        <p class="faq-text">
            FAQ Answer 2
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
    
      <div class="faq">
        <h3 class="faq-title">
        Frequently Asked Questions 3
        </h3>
        <p class="faq-text">
        FAQ Answer 3
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
      </div>
      
    <div class="first-div">
        <div class="first-div-text">
            <h3>Lorem ipsum </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus neque massa, at laoreet tortor aliquet in. Proin ipsum est, bibendum sit amet sagittis malesuada, tempus ac purus. Etiam rutrum sagittis nisl, nec dignissim risus. Curabitur vehicula ipsum nec est ornare interdum. Morbi at eros ac neque viverra gravida viverra sagittis nunc. Proin malesuada </p>
        </div>

        <div class="first-div-img">
            <img src="../img/aboutUs2.jpg" alt="">
            <img src="../img/aboutUs3.jpg" alt="">
        </div>
    </div>


    <div class="second-div">
        <div class="second-div-img">
            <img src="../img/aboutUs1.jpg" alt="">
            
        </div>
        <div class="second-div-text">
            <h3>Lorem ipsum </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus neque massa, at laoreet tortor aliquet in. Proin ipsum est, bibendum sit amet sagittis malesuada, tempus ac purus. Etiam rutrum sagittis nisl, nec dignissim risus. Curabitur vehicula ipsum nec est ornare interdum. Morbi at eros ac neque viverra gravida viverra sagittis nunc. Proin malesuada aliquam massa. Etiam sem erat, volutpat vel varius ut, euismod quis velit. Integer euismod augue vitae imperdiet semper. Vivamus bibendum felis vel metus tristique eleifend. Mauris ut vulputate massa, vitae tincidunt mi. Sed finibus vulputate nibh in vestibulum. Vivamus lobortis, diam id varius posuere, lectus sapien pharetra mauris, sed vehicula purus velit sit amet ante. Maecenas blandit elit non quam pulvinar, eget volutpat nibh convallis.</p>
        </div>

        
    </div> 
    
    <script>
     const toggles = document.querySelectorAll('.faq-toggle')

toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        toggle.parentNode.classList.toggle('active')
    })
})
    </script>
</body>
<?php 
        include '../subComponents/footer.php';
    
    ?>