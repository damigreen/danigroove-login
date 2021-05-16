<?php

  $dbHost = "localhost";
  $dbUser = "damigreen";
  $dbPass = "AgroK1ngs";
  $dbName = "php_tutorial";

  $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

  if ($conn) {
    echo "Connected to mysql !! <br> <br>";
  } else {
    die("Database connection Error!!!");
  };

?>
