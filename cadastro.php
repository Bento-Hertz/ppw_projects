<?php
include("./conexao.php");

$nome = $_POST["nome"];
$data = $_POST["data"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios(`nome`, `nascimento`, `email`, `senha`) Values ('$nome', '$data', '$email', '$senha')";

if(mysqli_query($conexao, $sql))
    echo "Cadastro realizado com sucesso.";
else
    echo "Erro! " . mysqli_connect_error($conexao);

mysqli_close($conexao);

?>