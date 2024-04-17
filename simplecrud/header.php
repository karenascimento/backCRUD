<?php  
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
        exit;
    } else {
        echo
            "<p>Bem-vindo/p>" .
            $_SESSION['usuario'] .
            "<a href='logout.php>Sair</a></br>" .
            "</p>";
    }