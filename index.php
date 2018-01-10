<?php
  require 'nav.php';
 ?>

<div class="bodyOne">
<div class="Aboutbody" id="1">
 <div class="pic">
   <img src="images/low_poly_portrait2.png" alt="">
 </div>

  <div class="top">
    <div class="arrow"></div>
  </div>
  <div class="bio">
   <h2 class="title">About Jake</h2>
   <p class="info"></p>
  </div>
 </div>

</div>

<div class="greyBox" id="2">
  <h3 class="hidden">Divider bar</h3>
  <h1 id="portTitle">Portfolio</h1>
</div>

<div class="Gallery">
  <h2 class="hidden">Gallery Section</h2>
  <section class="buttons">
     <button class="image-holder" id="cat_1">After Effects</button>
     <button class="image-holder" id="cat_2">Photoshop</button>
     <button class="image-holder" id="cat_3">Illustrator</button>
     <button class="image-holder" id="cat_4">3D</button>
   </section>


   <!-- <article class="main-copy">
     <h2 class="catagory">after effects</h2>
   </article> -->

 <ul class="subImagesContainer">

 </ul>



 <section class="lightbox">
   <i id="close" class="fa fa-times close-lightbox"></i>
   <img src="" alt="feature image" class="lightbox-img">
   <h1 class="img-title">placeholder</h1>
   <p class="img-desc">placeholder copy</p>
     <div class="prev"></div>
     <div class="next"></div>
 </section>
</div>

 <div class="top">
   <div class="arrow"></div>
 </div>

 <?php
   require 'contact.php';
  ?>

<script src="js/database.js"></script>
<script src="js/scrollto.js"></script>
<script src-"js/preload.js"></script>
<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script src="js/top.js"></script>
</body>
</html>
