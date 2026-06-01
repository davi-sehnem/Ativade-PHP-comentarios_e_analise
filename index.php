<?php

include("infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){ //iclui a conexão com o banco de dados e verifica se o formulário foi enviado com o POST. 

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"]; //guarda usuário e senha 

    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'"; //procura na tabela user usuário e senha

    $resultado = $conn -> query($sql); //executa o banco de dados e guarda a resposta da variável '$resultado'

    if($resultado -> num_rows > 0){ //verifica se o banco de dados encontrou mais de 0 linhas com o cadastro correto
        $_SESSION["usuario"] = $usuario; //salva o nome do usuário na sessão
        header("Location: public/home.php"); //Redireciona o usuário para a página principal do painel
        exit();
    }else{
        $erro = "Usuário ou senha inválidos."; //ele não cria a sessão, não redireciona e apenas guarda uma mensagem de aviso na variável $erro
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("../public/component/table.php"); //traz a tabela
    ?>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){ //verifica se existe alguma '$erro' configurada
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>