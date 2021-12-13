<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title style="font-family:bakery;">Rara | Home</title>
  <link rel="icon" href="/assets/img/logoD.png">
  <!-- link -->
  <div class="">
    <link rel="stylesheet" href="/assets/css/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/js/JQUERY/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/utility.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/store.css">
  </div>
  <!-- js -->
  <div class="">
    <script type="text/javascript" src="/assets/js/JQUERY/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="/assets/js/JQUERY/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="/assets/js/utility.js"></script>
    <script type="text/javascript" src="/assets/js/store.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  </div>
  <div class="loader-wrapper" style="position:fixed">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</head>
<body id="body" style="background-image:url(/assets/img/background.png)">
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
  <main>
    <div class="container" style="margin-top:150px;height:40px;width:100%;margin-left:0px;">
      <h1 style="font-size:1.4rem;"><a href="<?php echo base_url('/')?>">Home</a>/Store</h1>
    </div>
    <div class="fluid-container" style="width:100%;height: 100%;position:relative;">
      <div class="fluid-container" style="display:flex;">
        <div class="fluid-container" style="flex-wrap: nowrap;display:flex;padding-top:40px;flex-basis: 100%;">
          <div class="container" style="flex-grow:1;flex-basis: 0;">
            <div class="container">
              <h2>Search Product</h2>
              <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search for names.." title="Type in a name">
            </div>
            <div id="radioTypeContainer">
              <h1>Select Category</h1>
              <input id="selectAll" class="radioType" type="checkbox" checked name="category" value="all">
              <label for="selectAll" style="cursor:pointer;">Show All</label><br>
              <?php
              foreach ($DataTipeBarang as $index => $key) {
                  ?>
                <input id="selectBox<?php echo $index; ?>" class="radioType" type="checkbox" name="category" value="<?php echo $key->kode_tipe; ?>">
                <label for="selectBox<?php echo $index; ?>" style="cursor:pointer;"><?php echo $key->nama_tipe; ?></label><br>
              <?php
              }
               ?>
            </div>
            <div id="slider-container" style="margin:20px;padding:0px 100px;"></div>
            <p>
            <label for="amount">Price range:<br><span id="minCost">0</span> - <span id="maxCost">300000</span></label>
            </p>
            <div id="computers">
            </div>
            <div id="slider-range"></div>
          </div>
          <div class="frontBox" id="containerItem" style="flex-basis: 0;flex-grow:3;overflow:hidden;padding-bottom:20px;">
            <div class="" style="margin:20px auto;width:100%;height:100%;align-items: flex-start;flex-wrap: wrap;display: flex;overflow:hidden;">
              <?php
              echo "<script>bnykItem =" . count($DataBarang) ."</script>";
              foreach ($DataBarang as $index => $key) {
                  ?>
                <a class="item box filterDiv <?php echo $DataSatuanTipeBarang[$index][0]->kode_tipe; ?> show" style="align-self: flex-start;height: 260px;" href="item/<?php echo $key->id_barang; ?>"  data-price="<?php echo $key->harga_barang; ?>" >
                  <div class="boxContent" style="">
                    <img class="boxImg" style="margin:0px auto;z-index: 0;" src="<?php echo $key->gambar; ?>"alt="">
                    <h1 class="contentText itemName" style="font-size: 18px;margin-top:5px;text-align:center;"><?php echo $key->nama_barang; ?></h1>
                    <h1 class="contentText" style="text-decoration: underline;"><?php echo $key->harga_barang; ?></h1>
                  </div>
                </a>
              <?php
              }
                 ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>
<footer class="container-fluid bg-dark" style="margin-top:250px;margin-bottom: 0px;width:100%;height:content;">
  <div class="fluid-container">
    <h1>aaaaaaaaaaaaaaaaaaa</h1>
  </div>
</footer>
<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
</html>
