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
      <li><a href="index.php">Home</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
</nav>


<div id="mySidenav" class="sidenav">
  <div class="logo">
    <img src="images/new_logo.png" alt="small logo">
  </div>
  <ul>
    <li><a href="#" class="closebtn" onclick="closeNav()">&times;</a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
<!-- <div class="personalP">
  <h2>Personal Phone: 226-378-7162</h2>
</div> -->

  <h2 class="myInfo">Personal Phone: 226-378-7162</h2>
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
