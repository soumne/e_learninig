<?php



  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="learning";

   
  
  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 else{
  echo"connection successfully";
 }

?>