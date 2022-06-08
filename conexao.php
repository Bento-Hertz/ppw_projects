<?php
/*
quem é o banco? -- cadastro
quem é o usuário do banco? -- root
qual é a senha que o usuário usa para comprovar que é ele mesmo? sem senha
qual é a tabela?
quais são os campos da tabela?
*/

$servidor = "localhost";
$bdname = "cadastro";
$usuario = "root";
$senha = "";
$porta = 3306;

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname, $porta);

if(!$conexao){
    die("Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!a";
?>