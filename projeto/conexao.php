<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "bd2026a";

  try {
    $conn = new mysqli($host, $user, $password, $db);
    $conn->set_charset("utf8mb4");

    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }
  }
  catch (Exception $e) {
    die("<hr>Erro: " . $e->getMessage());
  }