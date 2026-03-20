<?php

  require("conexao.php");

  $sql = "
    INSERT INTO cliente 
    (nome, cidade, uf, datanascimento, renda, obs)
    VALUES
    ('MANOEL DA SILVA', 'VOTUPORANGA', 'SP', '1974-06-25', 5000, 'Possui Crédito')
  ";

  if ($conn->query($sql) === true) {
    echo "<p>Registro íncluido com sucesso!</p>";
  } 
  else {
    echo "<p>Erro ao inserir: " . $conn->error . "</p>";
  }

  $conn->close();