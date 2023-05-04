<?php
  $server = "localhost";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$server; dbname=adota-bh", $username, $password);
    $conn -> exec("set names utf8mb4");

  } catch(PDOException $e) {
    echo "Falha na conexão: " . $e -> getMessage();
    
  } catch(Exception $e) {
    echo "Erro" . $e -> getMessage();
  }
