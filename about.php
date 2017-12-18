<?php
  require 'nav.php';
 ?>

<div class="bodyOne">
<div class="Aboutbody" id="1">
 <div class="pic">
  <!-- <h1 class="liljake">About</h1> -->
   <img src="images/low_poly_portrait2.png" alt="">
 </div>

  <div class="top">
    <div class="arrow"></div>
  </div>
  <div class="bio">
   <h2 class="title">About Jake</h2>
   <p class="info">My name is Jake Rutledge and I am a front-end developer and interactive designer. I am creative, resourceful, and a team player. I'm from a small town and love being active. Thank you for coming to my Portfolio, enjoy.  </p>
  </div>
 </div>

</div>

<div class="greyBox" id="2">

  <h1 id="portTitle">Portfolio</h1>
</div>

<div class="Gallery">
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



 <section class="lightbox">
   <i id="close" class="fa fa-times close-lightbox"></i>
   <img src="" alt="feature image" class="lightbox-img">
   <h1 class="img-title">placeholder</h1>
   <p class="img-desc">placeholder copy</p>
     <!-- <div class="prev"></div>
     <div class="next"></div> -->
 </section>
</div>

 <div class="top">
   <div class="arrow"></div>
 </div>

<div class="bodyOne">
   <div class="greyBox" id="3">
     <h1 class="section js-section" id="conTitle">Contact</h1>
   </div>
<div class="Concontainer">
 <h1 class="contactTitle"> Let's talk!</h1>
  <h2 class="contactHeader">Fill out the information below and send me an email!</h2>

   <form id="contact" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <?php
   if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $tel = htmlspecialchars($_POST['phone']);
     $message = htmlspecialchars($_POST['message']);
     $formcontent="From: $name \n Phone: $tel \n Message: $message";
     $recipient = "jake@jakerutledge.com";
     $subject = "Contact Form";
     $mailheader = "From: $email \r\n";
     mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
     echo "Thank You!";
   }
  ?>
     <fieldset>
       <input placeholder="Name..." type="text" tabindex="1" name="name" required>

     </fieldset>

     <fieldset>
       <input placeholder="Email..." type="email" name="email" tabindex="2" required>

     </fieldset>

     <fieldset>
       <input placeholder="Phone (optional)..." type="tel" name="phone" tabindex="3">
     </fieldset>

     <fieldset>
       <textarea placeholder="Your Message..." tabindex="5" name="message" required></textarea>
     </fieldset>

     <fieldset>
       <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">SEND</button>
     </fieldset>
   </form>
 </div>
</div>
<!-- <?php
  require 'lowernav.php';
 ?> -->

<script src="js/contentObject.js"></script>
<script src="js/scrollto.js"></script>
<script src-"js/preload.js"></script>
<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script src="js/top.js"></script>
</body>
</html>
