

  <?php
    require 'nav.php';
   ?>

<div class="contactForm">

<h2>My portfolio is coming soon! If you have any questions please feel free to leave me an email!</h2>

  <form id="contact" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h3>Email me! Please! I like to talk!</h3>
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
      <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>

    </fieldset>

    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>

    </fieldset>

    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="phone" tabindex="3">
    </fieldset>

    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" name="message" required></textarea>
    </fieldset>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

</body>
</html>
