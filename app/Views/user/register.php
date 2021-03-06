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
<body id="body" style="">
  <div class="fluid-container fixed-top">
  <nav class="navbar navbar-light" style="background-color: rgb(204, 51, 0, 1);width:100%;height:90px;">
    <div class="container-fluid" style="z-index:100;">
      <a class="navbar-brand" href="<?php echo base_url('/')?>" style="font-family:bakeryNormal;font-size: 2rem;color:white;margin-left:30px;"><img style="width:200px;height:80px;margin-top:-8px;" src="/assets/img/logo.png" alt=""></a>
      <div id="navIcon" class="nav-icon">
        <div></div>
      </div>
    </div>
    <div id="navMenu" class="fluid-container" style="height:100vh;display: none;position:absolute;top:0px;width:100%;">
      <div class="showMenu" style="float: right;">
        <?php
        if (isset($_SESSION['username'])) {
            ?>
          <h2><a href="<?php echo base_url('/account')?>">Account</a></h2><br>
          <h2><a href="<?php echo base_url('/log-out')?>">Log Out</a></h2><br>
          <h2><a href="<?php echo base_url('/cart')?>">Cart</a></h2><br>
          <h2><a href="<?php echo base_url('/check-out')?>">Check Out</a></h2><br>
          <?php
        }else {
          ?>
          <h2><a href="<?php echo base_url('/login')?>">Login</a></h2><br>
          <?php
        }
         ?>
        <h2><a href="<?php echo base_url('/')?>">Home</a></h2><br>
        <h2><a href="<?php echo base_url('/store')?>">Store</a></h2><br>
        <h2><a href="<?php echo base_url('/about')?>">About Us</a></h2><br>
      </div>
    </div>
  </nav>
  </div>
  <main>
    <div class="" style="margin-bottom:100px;">
    </div>
    <div class="isiform">
      <div class="gambarForm" style="float:left;margin:60px 60px 0px 3vw;">
        <img class="gameBannerImg" style="margin-left:60px;" src="/assets/img/logoKotak.png" alt="">
        <h1>Already have an account?</h1>
        <a href="login.php"><button class="button" type="button" name="button" style="margin-left:107px;">LOGIN HERE</button></a>
      </div>
      <form style="float:left;" action="<?= base_url('/register-check') ?>" method="post">
        <h1 class="textRegister">REGISTER</h1>
        <label for="">Email : </label><br>
        <input class="inputText" type="text" id="" name="email" required value="">
        <br>
        <br>
        <label for="">Username : </label><br>
        <input class="inputText" type="text" id="" name="username" required value="">
        <br>
        <br>
        <label for="">Nama : </label><br>
        <input class="inputText" type="text" id="" name="name" required value="">
        <br>
        <br>
        <label for="">Password :</label><br>
        <input class="inputText" type="password" id="" name="password" required value="">
        <br>
        <br>
        <label for="">Phone Number :</label><br>
        <input class="inputText" type="number" id="" name="phoneNumber" required value="">
        <br>
        <br>
        <label for="">Alamat :</label><br>
        <textarea style="width:320px;height:100px;"name="alamat" rows="8" cols="80"></textarea>
        <br>
        <input class="button" style="padding:3px 8.8vw;margin-top:20px" onclick="" type="submit" value="Submit">
      </form>
    </div>
    <div class="" style="margin-top:100px;">
    </div>
  </main>
</body>
<footer class="container-fluid bg-dark" style="width:100%;height:content;">
</footer>
<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
<!-- <a href="https://www.freepik.com/vectors/background">Background vector created by tartila - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/banner'>Banner vector created by freepik - www.freepik.com</a> -->
</html>
