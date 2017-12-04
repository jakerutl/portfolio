
<?php require 'nav.php'; ?>


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

 <?php
   require 'lowernav.php';
  ?>

 </body>
 </html>
