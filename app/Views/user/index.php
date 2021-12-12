<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title style="font-family:bakery;">Rara | Home</title>
  <link rel="icon" href="/assets/img/logoD.png">
  <!-- link -->
  <div class="">
  <link rel = "stylesheet" type = "text/css" href = "/assets/css/utility.css">
    <link rel="stylesheet" href="/assets/css/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/utility.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
  </div>
  <!-- js -->
  <div class="">
    <script type="text/javascript" src="/assets/js/JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="/assets/js/utility.js"></script>
    <script type="text/javascript" src="/assets/js/index.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  </div>
  <div class="loader-wrapper" style="position:fixed">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</head>
<body id="body" style="background-color:#ffffff;">
<!-- <div id="navContainer" class="fluid-container fixed-top">
      
  </div> -->
  <div class="fluid-container fixed-top">
    <nav class="navbar navbar-light" style="background-color: rgb(204, 51, 0, 1);width:100%;height:90px;">
    <div class="container-fluid" style="z-index:100;">
      <a class="navbar-brand" href="index.php" style="font-family:bakeryNormal;font-size: 2rem;color:white;margin-left:30px;"><img style="width:200px;height:80px;margin-top:-8px;" src="/assets/img/logo.png" alt=""></a>
      <div id="navIcon" class="nav-icon">
        <div></div>
      </div>
    </div>
    <div id="navMenu" class="fluid-container" style="height:100vh;display: none;position:absolute;top:0px;width:100%;">
      <div class="showMenu" style="float: right;">
        <?php
        if (isset($_SESSION['username'])) {
            ?>
          <h2><a href="account.php">Account</a></h2><br>
          <h2><a href="logOut.php">Log Out</a></h2><br>
          <h2><a href="cart.php">Cart</a></h2><br>
          <h2><a href="checkOut.php">Check Out</a></h2><br>
          <?php
        } else {
            ?>
          <h2><a href="login.php">Login</a></h2><br>
          <?php
        }
         ?>
        <h2><a href="index.php">Home</a></h2><br>
        <h2><a href="store.php">Store</a></h2><br>
        <h2><a href="about.php">About Us</a></h2><br>
      </div>
    </div>
  </nav>
  </div>
  <main>
    <div class="fluid-container" style="width:100%;height: 100%;position:relative;">
      <div class="container" style="width: 800px;position:absolute;top:60px;font-family:bakery;color:	rgb(204, 102, 0);margin:110px 0px 0px 30px;">
        <h1 style="font-size: 3.5rem;text-shadow: 2px 2px black;">Freshly baked all day. <br>Every day!</h1>
        <p style="font-size: 1.5rem;color:white;text-shadow: 2px 2px black;">Sometimes on the way to your dream you get lost and find a better one. it is okay to change your mind
        . if you thought you always wanted to be a doctor only to discover after medical school that what you really wanted to do was to get fresh baked bread. life is too short
      not to follow your heart. So grab one fresh baked at maidworks 
      bakery!</p>
        <a href="store.php">
          <div id="continueButton" class="container" style="width:fit-content;margin:0px;cursor:pointer;">
            <a href="store.php" id="continueText" class="buttonContinue" style="">Continue To Store</a>
            <img id="imgContinue" src="/assets/icon/keyboard_arrow_right-black-18dp.svg"style="opacity: .5;background: yellow;border-radius: 30px;width:45px;height:45px;" alt="">
          </div>
        </a>
      </div>
      <img src="/assets/img/frontPagePic.jpg" alt="" style="position:fixed;z-index:-1;width:100%;height:100vh;">
    </div>
  </main>
</body>
<footer class="container-fluid bg-dark" style="width:100%;height:content;">
</footer>
<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
<!-- <a href="https://www.freepik.com/vectors/background">Background vector created by tartila - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/banner'>Banner vector created by freepik - www.freepik.com</a> -->
</html>