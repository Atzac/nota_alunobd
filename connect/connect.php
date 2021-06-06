<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem sucedida!";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>