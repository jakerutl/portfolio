<?php
  require 'nav.php';
 ?>


 <body>
   <section class="buttons">
   		<button class="image-holder" id="spring">After Effects</button>
   		<button class="image-holder" id="lightboxTwo">Photoshop</button>
   		<button class="image-holder" id="lightboxThree">Illustrator</button>
   		<button class="image-holder" id="lightboxFour">3D</button>
   	</section>



    <article class="main-copy">
      <h2 class="catagory">after effects</h2>
    </article>

 	<ul class="subImagesContainer"></ul>



  <?php
    require 'lowernav.php';
   ?>

 	<section class="lightbox">
 		<i id="close" class="fa fa-times close-lightbox"></i>
 		<img src="" alt="feature image" class="lightbox-img">
 		<h1 class="img-title">placeholder</h1>
 		<p class="img-desc">placeholder copy</p>
 	</section>

  <div class="top">
    <div class="arrow"></div>
  </div>

 	<!-- add script files here -->
 	<script src="js/contentObject.js"></script>
 	<script src="js/main.js"></script>
  <script src="js/top.js"></script>
 </body>
 </html>
