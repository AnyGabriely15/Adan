<?php
$servidor = "localhost"; 
$banco = "adan"; 
$usuario = "root"; 
$senha = "2005";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_errno) {
    die ("Ocorreu um erro na conexão com o banco de dados." . $conexao->connect_errno);
} 
?>


