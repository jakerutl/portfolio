<?php
  require 'nav.php';
 ?>

<div class="Aboutbody">
  <h1 class="liljake">A lil' Bout Jake</h1>
  <img class="profile" src="images/low_poly_portrait2.png" alt="">


  <div class="top">
    <div class="arrow"></div>
  </div>
<div class="bio">
  <h2 class="title">Earlier Life</h2>
  <p class="info">Ac maecenas aliquam. Nunc aliquam aenean vel urna aliquam,
     ac semper, ut quisque pellentesque pellentesque at amet metus. Praesent et mattis incidunt, amet diam vel ultricies, libero ultricies, ut proin magna placerat. Velit libero et felis orci. Purus mauris dis et nulla tellus, ac netus vivamus ac ac vehicula, ligula a nulla a massa.
Mauris lacus eu proin mauris, donec neque tellus nunc in praesent diam, pede aenean amet. Torquent mauris et,
 eu quis duis imperdiet est quis. Sit neque. Nunc iusto integer pellentesque, faucibus nisl volutpat, pede
 elementum egestas pellentesque. Odio nec, odio mi consequat vel aliquam nunc, quod et nunc justo.</p>

 <h2 class="title">Education</h2>
 <p class="info">Lorem ipsum dolor sit amet, et penatibus magna. Cupiditate molestie dolor. Sed amet nec, quis wisi,
   natoque vitae. Velit augue auctor lacinia vivamus, elit erat morbi id magna sit vestibulum. Tempus et
   cras etiam, nascetur vestibulum nostra amet. </p>



</div>
</div>

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
 </section>

 <div class="top">
   <div class="arrow"></div>
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

//      $email = test_input($_POST["email"]);
//      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//      $emailErr = "Invalid email format";
// }
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

<!-- <?php
  require 'lowernav.php';
 ?> -->



<script src="js/contentObject.js"></script>
<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script src="js/top.js"></script>
</body>
</html>
