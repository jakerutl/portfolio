<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <title>Portfolio Coming Soon!</title>
  <!-- <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"> -->
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
</head>
<body>


<nav>
  <div class="navigation">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT ME</a></li>
      <li><a href="gallery.php">PORTFOLIO</a></li>
      <li><a href="contact.php">CONTACT</a></li>
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
    <li><a href="contact.php">CONTACT</a></li>
  </ul>
<!-- <div class="personalP">
  <h2>Personal Phone: 226-378-7162</h2>
</div> -->

  <h2 class="myCell">Personal Phone: 226-378-7162</h2>
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
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
