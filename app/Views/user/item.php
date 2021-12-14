<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title style="font-family:bakery;">Rara | Home</title>
  <link rel="icon" href="assets/img/logoD.png">
  <!-- link -->
  <div class="">
    <link rel="stylesheet" href="/assets/css/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/js/JQUERY/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/utility.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/store.css">
  </div>
  <!-- style -->
  <div class="">
    <style>
      
    </style>
  </div>
  <!-- js -->
  <div class="">
  <script type="text/javascript" src="/assets/js/JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="/assets/js/JQUERY/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="/assets/js/utility.js"></script>
    <script type="text/javascript" src="/assets/js/store.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  </div>
  <div class="loader-wrapper" style="position:fixed;">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</head>
<body id="body" style="background-color:#EEEEEE;">
  <!-- <div id="navContainer" class="fluid-container fixed-top">
  </div> -->
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
  <main style="margin: 200px 100px 0px 100px;">
    <div class="" style="display:flex;">
      <div class="" style="display:flex;width:100%;height:100%;">
        <div class="" style="display:block;">
          <img src="<?php echo $DataBarang[0]->gambar; ?>" style="width:600px;height:500px;" alt="">
          <div class="" style="display:flex;margin-top:50px;width:600px;overflow:auto;">
            <?php
            $marginSetting = ["margin-right:10px;", "margin:0px 10px;", "margin-left:10px;"];
            foreach($DataTambahan as $key => $value){
                ?>
                <img style="<?php echo $marginSetting[$key]; ?>width:200px;height:200px;" src="<?php echo $value->path; ?>" alt="">
                <?php
            }
             ?>
          </div>
        </div>
        <div class="" style="margin:0px 20px;">
          <div class="">
            <h4>
              <a href="#">Home</a>/
              <a href="#">Store</a>/
              Item
            </h4>
            <h1><?php echo $DataBarang[0]->nama_barang; ?></h1>
            <h2><?php echo $DataBarang[0]->harga_barang; ?></h4>
          </div>
          <form class="" action="<?= base_url('/cart-add') ?>" method="post">
            <div class="" style="margin-top:20px;">
              <label for="itemQuantity">Quantity : </label><br>
              <input id="itemQuantity" min="1" style="font-size:1.4rem;width:140px" type="number" name="bnyk_barang" value="1">
            </div>
            <input type="hidden" name="id_barang" value="<?php echo $DataBarang[0]->id_barang; ?>">
            <input style="margin-top:20px;width:400px;" type="submit" name="" value="ORDER NOW">
          </form>
          <div class="" style="margin-top:20px;">
            <h1 style="text-decoration:underline;">Desc</h1>
            <div class="" style="overflow:auto;height:400px;">
              <?php
              if (is_null($DataBarang[0]->desc_barang)) {
                  ?>
                <h4><?php echo $DataBarang[0]->desc_barang; ?></h4>
                <?php
              } else {
                  ?>
                <h4>No Desc</h4>
                <?php
              }
               ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="" style="margin: 80px 0px 0px 0px;">
    </div>
    <div class="" style="margin: 80px 0px 0px 0px;">
    </div>
  </main>
</body>
<footer class="container-fluid bg-dark" style="margin-top:20px;height:content;">
  <div class="" style="height:150px;">
  </div>
</footer>

<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
<!-- <a href="https://www.freepik.com/vectors/background">Background vector created by tartila - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/banner'>Banner vector created by freepik - www.freepik.com</a> -->
</html>
