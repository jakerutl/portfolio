<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <!-- <meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> -->
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <!-- <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes"> -->
    <title>Portfolio Coming Soon!</title>
  <!-- <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"> -->
  <link href='http://fonts.googleapis.com/css?family=Mystery+Quest' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/lightbox.css" type="text/css">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js" charset="utf-8"></script>
</head>
<body id="navB">

<nav>
  <div class="navigation">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT ME</a></li>
      <li><a href="gallery.php">PORTFOLIO</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="resume.pdf">RESUME</a></li>
      <img class="headerLogo" src="images/jr.png" alt="logo">
    </ul>
  </div>
</nav>


<div id="mySidenav" class="sidenav">
  <div class="logo">
    <img src="images/jr.png" alt="small logo">
  </div>
  <ul>
    <li><a href="#" class="closebtn" onclick="closeNav()">&times;</a></li>
    <li><a href="index.php">HOME</a></li>
    <li><a href="about.php">ABOUT ME</a></li>
    <li><a href="gallery.php">PORTFOLIO</a></li>
    <li><a href="resume.pdf">RESUME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
  </ul>

 <div class="social">
  <a href="https://twitter.com/Jaker145"><img src="images/t_logo.png" alt="twitter logo"></a>
  <a href="https://www.facebook.com/jake.rutledge.10"><img id="fb" src="images/fb_logo.png" alt="facebook logo"></a>
  <a href="https://www.instagram.com/jaker145/?hl=en"><img src="images/in_logo.png" alt="instagram logo"></a>
 </div>
</div>

<div class="hamburger">
<div onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
</div>



<script>
function openNav() {
    document.querySelector("#mySidenav").style.width = "250px";
}

function closeNav() {
    document.querySelector("#mySidenav").style.width = "0";
}
</script>
