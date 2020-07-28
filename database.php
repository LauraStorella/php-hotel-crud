<?php
  
  // File con variabili
  include __DIR__ . 'env.php';

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname, 8889);

  // Check connection
  if ($conn && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) ;
  }

?>