<?php
    include("nav.php");
    
session_start();
require("conecta.php");

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$usuario = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />      
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">     
    <title>ADAN Soluções</title>      
   ad>
<body>
    <nav>
    <div class="header">
        <img src="./imagens/Logo.png" alt="Logo" />
        <h1>ADAN Soluções</h1>
    </div>
    
        <div class="header">
        <a href="sair.php" class="btn-sair">Sair</a>
            <div class="menu">
                <a href="index.php">Página Inicial</a>
                <a href="#">Sobre Nós</a>
                <a href="#">Contato</a>
            </div>
        </div>
    </nav>
</body>
</html>

