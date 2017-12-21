<?php

  function redirect_to($location){
    if($location != NULL){
      header("Location: {$location}");
      exit;
    }
  }


function submitMessage($name, $email, $phone, $message, $direct){
  $to = "jake@jakerutledge.com"; //these next few set it up to how it the email will be displayed to you
  $subj = "Message from customer submitted via site.com";
  $extra = "Reply-To: ".$email;
  $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nComments: ".$message; // \n\nbasically the same as a br tag
  // mail($to,$subj,$msg,$extra);
  $direct = $direct. "?name={$name}"; //grabs persons name from filling out the contact form
  redirect_to($direct);

}

 ?>
