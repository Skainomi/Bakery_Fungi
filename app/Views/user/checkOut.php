<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title style="font-family:bakery;">Rara | Home</title>
  <link rel="icon" href="/assets/img/logoD.png">
  <!-- link -->
  <div class="">
  <link rel = "stylesheet" type ="text/css" href = "/assets/css/utility.css">
    <link rel="stylesheet" href="/assets/css/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/utility.css">
  </div>
  <!-- js -->
  <div class="">
    <script type="text/javascript" src="/assets/js/JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="/assets/js/utility.js"></script>
    <script type="text/javascript" src="/assets/js/cart.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  </div>
  <div class="loader-wrapper" style="position:fixed">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</head>
<body id="body" style="background-color:#EEEEEE;">
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
        if (!is_null($_SESSION['username'])) {
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
  <main style="margin-top:200px;">
    <?php
    if (is_null($transaction)) {
        ?>
      <div class="cartBoxSummary" style="width:100%;padding: 0px 100px;">
        <h1 style="text-align:center">Tidak Ada Pembayaran Yang Sedang Berlangsung</h1>
      </div>
      <?php
    } else {
        ?>
      <div class="cartBoxSummary" style="width:100%;padding: 0px 100px;">
        <h1 style="text-align:center">Mohon Selesaikan Pembayaran</h1>
        <hr style="width:100%">
        <h1>Kode Pembelian : <?php echo $transaction[0]->id_penjualan ?></h1>
        <h1>Pembayaran Ke : 123123123</h1>
        <div class="" style="display:flex;">
          <form class="" action="<?php echo base_url('/finish-order') ?>" method="post">
            <input type="hidden" name="id_penjualan" value="<?php echo $transaction->id_penjualan ?>">
            <input class="btn btn-primary" type="submit" name="" value="Finish Order">
          </form>
        </div>
      </div>
      <?php
    }
     ?>
  </main>
</body>
<footer class="container-fluid bg-dark" style="width:100%;height:content;">
</footer>
<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
<!-- <a href="https://www.freepik.com/vectors/background">Background vector created by tartila - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/banner'>Banner vector created by freepik - www.freepik.com</a> -->
</html>
