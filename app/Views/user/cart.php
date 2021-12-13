<script type="text/javascript">
  bnykBarang = <?php echo count($data_Barang_Cart) ?>;
  bnykItem = <?php echo count($data_Barang_Cart)?>;
  hargaItem = <?php echo json_encode($itemsPrice); ?>;
  bnykBarangItem = <?php echo json_encode($cartsItem); ?>;
</script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title style="font-family:bakery;">Rara | Home</title>
  <link rel="icon" href="/assets/img/logoD.png">
  <!-- link -->
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
<body id="body" style="background-color:#ffffff;">
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
  <?php
    // echo ($login ? substr($_SESSION['username'],0,4) : "User");
   ?>
  <main style="margin:0px 60px;margin-top:110px;padding:40px 10px;">
    <?php
    if (!$is_login) {
        ?>
        <?php
        header("Location:login.php?"); ?>
      <?php
    } else {
        ?>
      <h1>CART</h1>
      <h5>Item List</h5>
      <hr style="">
      <?php
       ?>
       <?php
       if (count($data_cart) == 0) {
           ?>
         <h1 style="text-align:center">Cart Kosong!</h1>
         <?php
       } else {
           ?>
         <div class="" style="display:flex;">
           <div class="">
             <?php
             echo "<script>cartItem = 4;</script>";
           foreach ($data_Barang_Cart as $key => $value) {
               ?>
                <div class="box" style="display:flex;width:680px;height:200px;font-size:.2rem;margin:60px 0px;">
                 <img src="<?php echo $value[0]->gambar; ?>" style="padding:10px;border-radius:30px;width:140px;height:160px;" alt="">
                 <div class="" style="display:flex;">
                   <div class="">
                     <h1 style="font-size:2rem;overflow:hidden;width:300px;"><?php echo $value[0]->nama_barang ?></h1>
                     <h4 style="color:grey;font-size:1rem">Size : normal</h4>
                     <h2 style="font-size:1.5rem;"><?php echo $value[0]->harga_barang; ?></h2>
                     <div class="" style="display:flex;">
                       <div class="" style="margin-top:5px;margin-right:10px;cursor:pointer;">
                         <form class="" action="<?php echo base_url('/delete-Cart')?>" method="post">
                           <input type="hidden" name="idCart" value="<?php echo $data_cart[$key]->id_cart?>">
                           <img src="/assets/icon/delete-black-18dp.svg" style="float:left;" alt="">
                           <input style="margin:0px;padding: 0px;float:left;border:none;background:none;font-size:1rem;" type="submit" name="" value="Delete">
                         </form>
                       </div>
                     </div>
                   </div>
                   <div class="" style="margin:20px 20px;">
                     <div class="" style="display:flex;">
                       <img id="decreaseQuantity<?php echo $key; ?>" style="width:30px;height:30px;cursor:pointer;" src="/assets/icon/remove_circle_outline-black-18dp.svg" alt="">
                       <div class="" style="">
                         <input id="quantityItem<?php echo $key; ?>" style="text-align: center;height:30px;width: 60px;font-size:1rem;" type="number" name="" min="1" max="50" value="<?php echo $data_cart[$key]->bnyk_barang; ?>">
                       </div>
                       <img  id="increaseQuantity<?php echo $key; ?>" style="width:30px;height:30px;cursor:pointer;" src="/assets/icon/add_circle_outline-black-18dp.svg" alt="">
                     </div>
                     <div class="" style="margin-top:15px">
                       <h3>Total Price</h3>
                       <h4 id="totalPrice<?php echo $i; ?>"><?php $value[0]->harga_barang * $data_cart->bnyk_barang; ?></h4>
                       <?php $totalBiaya += $value[0]->harga_barang * $data_cart[$key]->bnyk_barang; ?>
                       <script type="text/javascript">
                          totalBiaya = <?php echo $totalBiaya; ?>
                       </script>
                     </div>
                   </div>
                 </div>
               </div>
               <?php
           } ?>
           </div>
           <div class=""style="border-right:1px solid black;margin:0px 20px;">
           </div>
           <div class="cartBoxSummary" style="width:32vw;">
             <h1>Summary</h1>
             <hr>
             <form class="" action="<?php echo base_url('/cart-add')?>" method="post">
               <input type="hidden" name="bnykBarang" value="<?php echo count($data_cart); ?>">
             <table style="margin:0px;width:100%;">
               <tr style="width:100%;">
                 <td>
                   <h4>Total Item : </h4><br>
                 </td>
                 <?php
                 foreach ($data_Barang_Cart as $key => $value) {
                     ?> 
                     <tr>
                     <td style="display: flex;justify-content: space-between">
                       <h4 style=""><?php echo $value[0]->nama_barang; ?></h4>
                       <input type="hidden" name="idItem<?php echo $key; ?>" value="<?php echo $value[0]->id_barang; ?>">
                       <input type="hidden" name="namaItem<?php echo $key; ?>" value="<?php echo $value[0]->nama_barang; ?>">
                       <input id="itemCounterInput<?php echo $key; ?>" type="hidden" name="itemCounterInput<?php echo $key; ?>" value="">
                       <h4 id="itemCounter<?php echo $key; ?>" style="text-align:right;"></h4>
                     </td>
                   </tr>
                     <?php
                 } ?>
               </tr>
               <tr>
                 <td style="display: flex;justify-content: space-between">
                   <h4 style="">Total</h4>
                   <input id="totalSemuaBarang" type="hidden" name="totalSemuaBarang" value="">
                   <h4 id="totalBarang" style="text-align:right;"><?php echo $bnykBarang; ?></h4>
                 </td>
               </tr>
             </table>
             <hr>
             <table style="margin:0px;width:100%;">
               <tr>
                 <td>
                   <h4>SubTotal : </h4>
                 </td>
                 <td>
                   <input id="totalBiayaBarang" type="hidden" name="totalBiaya" value="<?php echo $totalBiaya ?>">
                   <h4 id="totalBiaya" style="text-align:right;"></h4>
                 </td>
               </tr>
             </table>
             <input style="width:100%;" type="submit" name="" value="CheckOut">
             </form>
           </div>
         </div>
         <?php
       } ?>
      <?php
    }
     ?>
  </main>
</body>
<footer class="container-fluid bg-dark" style="margin-top:20px;width:100%;height:content;">
  <div class="" style="height:150px;">
  </div>
</footer>
<!-- <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div> -->
<!-- <a href="https://www.freepik.com/vectors/background">Background vector created by tartila - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/banner'>Banner vector created by freepik - www.freepik.com</a> -->
</html>
