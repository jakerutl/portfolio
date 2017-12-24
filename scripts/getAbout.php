<?php
//this is the URL path to get a JSON object http://localhost:8888/movies_a/admin/scripts/getMovies.php
//this is the URL path to get the results http://localhost:8888/movies_a/admin/scripts/getMovies.php?filter=action
//the results will not look like anything other than SQL and should give you an error
ini_set('display_errors', 1);
error_reporting(E_ALL);

//label in the URL.. go and collect whatever is being stored in filter $_GET is a SUPERGLOBAL
// $filter = $_GET['filter'];
// echo $filter;


//include just takes the files and runs them completely
include('connect.php');

$sql = "SELECT about_desc FROM tbl_about"; //selecting my data from db
$query = mysqli_query($link,$sql); // make the query

// access the num_rows property of the query. if the number of rows is there (ie not zero) there are results for use to use
if($query->num_rows){
  //start the array we are going to echo out
  $groupResult = "[";
  // while there are still rows to go through, set $row = the associative (named) array of that part of the query
  while($row = mysqli_fetch_assoc($query)){
    // parse that specific result to json
    $jsonResult =  json_encode($row);
    //add the jsonified result to the array we return, and add a comma to make it a valid array
    $groupResult.= $jsonResult.",";
  }
  //now, remove the last comma to make it valid json
  $groupResult = substr($groupResult,0,-1);
  //echo out the json result
  echo $groupResult;

  //if there are no results,
}else{
  //echo an empty array
  echo "[]";
}
// close the connection
mysqli_close($link); 

?>
