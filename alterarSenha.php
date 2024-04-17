<?php
include("nav.php");
include("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nova_senha = $_POST['nova_senha'];

    $sql = "UPDATE usuarios SET senha = '$nova_senha' WHERE email = '$email'";
    $res = mysqli_query($conexao, $sql);

            if ($res) {                    
                echo "Senha atualizada com sucesso!"; 
            } else {
                echo "Erro ao atualizar senha: " . mysqli_error($conexao);  
            }

      mysqli_close($conexao);  
     }  
      
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
</head>
<body>
<div class="box">
    <form action="alterarSenha.php" method="post"> 
        <fieldset>
            <legend><b>Redefinir Senha</b></legend>
            <br>
            <div class="inputBox">   
            <br>             
                    <label for="email" class="labelInput">Email:</label>
                    <br>
                    <input type="text" name="email" id="email" 
                    maxlength="30" 
                    required>   
                    <br>
                </div>
                <br>
        <div class="inputBox">
        <br>
        <label class="labelInput" for="nova_senha">Nova Senha:</label>
        <br>
        <input type="password" id="nova_senha" name="nova_senha" maxlength="8"  required><br><br>
        <br>
        <input type="submit" class="btn-cadastrar" value="Redefinir Senha">
        <br><br>
        <button type="button" onclick="window.location.href='login.php'" class="btn-voltar">Voltar</button>

    </form>
</body>
</html>
