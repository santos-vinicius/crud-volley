<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "volleyball_db";

  try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $error) {
    echo "Connection failed: " . $error->getMessage(); 
  }
?>