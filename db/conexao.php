<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_calculadora";

  // Cria a conexão
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verifica se a conexão foi bem-sucedida
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  };
?>