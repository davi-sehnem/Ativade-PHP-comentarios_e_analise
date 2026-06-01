<?php
    session_start();
    //Inicia ou continua uma sessão mo php

    $host = "localhost";
    //localhost significa que o banco está na própria maquina
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    $conn = new mysqli($host,$user,$pass,$db);
    //conecta o banco de dados com as informações acima. Guarda da variavel '$conn'.

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }

    //Se der errado mostra a mensagem 'erro na conexão'. Se der certo 'ok'.
?>

