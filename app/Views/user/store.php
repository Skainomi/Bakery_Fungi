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
  <!-- style -->
  <div class="">
    <style>
      @media screen and (max-width: 1250px) {
        .navbar-expand-lg .navbar-collapse {
          font-size: 1.7rem !important;
        }

        .bannerText {
          font-size: 4.5rem;
        }
      }

      @media screen and (max-width: 1092px) {
        .navItemUser {
          margin-left: 40vw !important;
        }
      }

      @media screen and (max-width: 1038px) {
        .bannerText {
          font-size: 4.2rem;
        }
      }

      @media screen and (max-width: 991px) {
        .navItemUser {
          margin-left: 0 !important;
        }
      }

      @media screen and (max-width: 520px) {
        * {
          display: none;
        }
      }

      ::-webkit-scrollbar {
        width: 10px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
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
  <div class="loader-wrapper" style="position:fixed">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</head>

<body id="body" style="background-image:url(../assets/img/background.png)">
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
        if (true) {
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
  <?php
    // echo ($login ? substr($_SESSION['username'],0,4) : "User");
   ?>
  <!-- <img src="" alt="" style="position:fixed;z-index:-10;width:100%;height:100vh;"> -->
  <main>

    <div class="container" style="margin-top:150px;height:40px;width:100%;margin-left:0px;">
      <h1 style="font-size:1.4rem;"><a href="index.php">Home</a>/Store</h1>
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
            <!-- <?php
            //$maxFilterPrice = echo "<script></script>";
             ?> -->
            <label for="amount">Price range:<br><span id="minCost">0</span> - <span id="maxCost">300000</span></label>
            <!-- <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" /> -->
            </p>
            <div id="computers">
            <!-- <h1>Min : <span id="minCost"></span></h1><br>
            <h1>Max : <span id="maxCost"></span></h1> -->
            </div>
            <div id="slider-range"></div>
          </div>
          <div class="frontBox" id="containerItem" style="flex-basis: 0;flex-grow:3;overflow:hidden;padding-bottom:20px;">
            <div class="" style="margin:20px auto;width:100%;height:100%;align-items: flex-start;flex-wrap: wrap;display: flex;overflow:hidden;">
              <?php
              foreach ($DataBarang as $index => $key) {
                  ?>
                <a class="item box filterDiv<?php echo $key->tipe_barang; ?> show" style="align-self: flex-start;height: 260px;" href="item/<?php echo $key->id_barang; ?>"  data-price="<?php echo $key->harga_barang; ?>" >
                  <div class="boxContent" style="">
                    <?php //echo $i;?>
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
