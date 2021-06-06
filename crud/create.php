<?php

$nome_aluno = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
//Inserir registro de aluno e notas

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO aluno (nome, disciplina, nota1, nota2)
  VALUES ('$nome_aluno', '$disciplina', '$nota1', '$nota2')";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Dados inseridos com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>