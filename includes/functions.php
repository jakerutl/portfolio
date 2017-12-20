<?php
  $user = "root";
  $pass = "root"; //this should be a blank string for windows machines
  $host = "localhost";
  $db = "db_gallery"; // whatever you called your database

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset('utf8');

  if (!$conn){
    echo "something broke... no soup for you!";
    exit;
  }



//get a single row (one result) using a query parameter
if (isset($_GET['lightImg'])){//see if there's a parameter called carModel
  $car = $_GET['lightImg']; // whatever comes after the ?

  $myQuery = "SELECT * FROM tbl_content WHERE catagory = '$cat'";
  $result = mysqli_query($conn, $myQuery);

  $row = mysqli_fetch_assoc($result);

  echo json_encode($row);
}

 ?>
