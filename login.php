<?php
include('nav.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Adan</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">    
    ]
</head>

<body>
<div class="box">
    <form action="loginverif.php" method="post"> 
        <fieldset>
            <legend><b>Login</b></legend>
            <br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="input" maxlength="50"  required>
                <label for="email" class="labelInput">E-mail</label>                    
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="input" maxlength="8"  required>                   
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>               
            <input class="submit" type="submit" name="submit" value="Entrar" id="submit">   
            <br><br><br>
            <a href="cadastrar.php" class="link-alterar-senha">Não tem uma conta? Cadastrar-se</a>
            <br><br> 
            <a href="alterarSenha.php" class="link-alterar-senha">Esqueceu sua senha?</a> 
        </fieldset>
    </form>
</div>
</body>
</html>