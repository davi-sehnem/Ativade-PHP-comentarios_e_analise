<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>a</th>
    </tr>

    <?php
    

    $sqlUsuarios = "SELECT * FROM users";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);

    while($linha = $resultadoUsuarios->fetch_assoc()){
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
            <td>" . $linha["a"] . "</td>
            
        
        </tr>";
    }
    
    ?>

</table>

<!--Esse codigo cria uma tabela que será adicionada com o include na pagina home-->