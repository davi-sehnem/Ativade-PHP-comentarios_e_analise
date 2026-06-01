<?php
    include("../infra/db/connect.php"); //importa o arquivo connect
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit(); //verifica se existe algum usuário logado, se não houver será mandado de volta para a pagina inicial e para o código 'exit'.
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"]; //Se a pagina for acessada pelo POST, os dados serão guardados na variavel 'usuario' e 'senha'.

        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')"; //insere as variaveis dentro da tabela

        if($conn -> query($sql) === TRUE){ //envia o sql para o banco de dados com o: ($conn -> query($sql).
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>"; //se der certo
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>"; //se der errado
        
        } 
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body> 
    <?php
        include("../public/component/navbar.php"); //traz a navbar
    ?>
    <h2>Bem-vindo!</h2> 
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?>
    </p>

    <h4>Cadastrar Novo Usuário</h4> <
    <form method="POST"> <!-- o formulário envia os dados pelo metodo POST, que será processado codigo acima -->
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button> 
    </form> 
    <?php
    
    include("../public/component/table.php"); //traz a tabela
    ?>


    <a href="logout.php">Sair</a>
    
</body> 
</html>

