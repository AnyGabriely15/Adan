<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    require("conecta.php");

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
    $res = mysqli_query($conexao, $sql);

    if (!$res) {
        $erro = mysqli_error($conexao);
        echo "<p>ERRO: $erro</p>";
    } else {
        if (mysqli_num_rows($res) < 1) {
            echo "<script>alert('Usuário não cadastrado. Por favor, cadastre-se para acessar o sistema.')</script>";
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: indexIN.php');
            exit; 
        }
    }
} else {
    header('Location: indexIN.php');
    exit; 
}
?>