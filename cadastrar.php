<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adan Soluções - Cadastro de Usuários</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"> 
</head>
<body>
    <?php
    include('nav.php');
    if(isset($_POST['submit'])){
       require("conecta.php");


       $nome = $_POST["nome"];
       $senha = $_POST["senha"];
       $email    = $_POST["email"];
       $telefone = $_POST["telefone"];

        $verifica_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $result_verifica = mysqli_query($conexao, $verifica_email);
        if (mysqli_num_rows($result_verifica) > 0) {
            echo "<div class='alert_message error'><p>ERRO: O email '$email' já está cadastrado!</p></div>";
        } else {
                       
            $sql = "insert into usuarios values(NULL,'$nome','$senha','$email','$telefone')";              
        
            $res = mysqli_query($conexao,$sql); 

            if ($res) {                    
                echo "<div class='alert_message success'><p>Cadastro Realizado com Sucesso!</p></div>";
                
                header('Refresh: 3; URL=login.php');     
             
             } else {
                  $erro = mysqli_error($conexao);
                    echo "<div class='alert_message error'><p>ERRO: $erro!</p></div>";
             }  
        }  

      mysqli_close($conexao);  

      }
    ?>         
    <div class="box">
        <form action="cadastrar.php" method="post">
            <fieldset>
                <legend><b>Cadastro de Usuários</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="input" maxlength="30" 
                    required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="input" 
                    maxlength="30" 
                    required>                   
                    <label for="email" class="labelInput">Informe um email válido</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="input" maxlength="8"
                    required>                   
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>               
                <div class="inputBox">
                    <input type="telefone" name="telefone" id="telefone" class="input" 
                    maxlength="15" 
                    required>                   
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Cadastrar" class="btn-cadastrar">
                <br><br>
                <button type="button" onclick="window.location.href='login.php'" class="btn-voltar">Voltar</button>
                
            </div>
            </fieldset>
        </form>

</body>
</html>
