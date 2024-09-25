<?php

$servername = "localhost";
$username = "root";
$password = "1234";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=controle_produtos", $username, $password);
        
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?> 