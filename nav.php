<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <title>Portfolio Coming Soon!</title>
  <!-- <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"> -->
  <link rel="stylesheet" href="css/main.css" type="text/css">
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
    <li><a href="#" class="closebtn" onclick="closeNav()">&times;</a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
</div>

<div class="hamburger">
<span onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
