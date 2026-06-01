<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
?>

<!--Esse código faz com que ao clicar em 'sair' na pagina 'home' os dados sejam "exlcuidos", fazendo com que seja necessário fazer o login novamente-->