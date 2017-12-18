<?php
  $user = "root";
  $pass = "root"; //this should be a blank string for windows machines
  $host = "localhost";
  $db = "db_content"; // whatever you called your database

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset('utf8');

  if (!$conn){
    echo "something broke... no soup for you!";
    exit;
  }





  ?>
