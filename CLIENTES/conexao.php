<?php

    $servername = 'localhost';
    $database = 'dbclientes';
    $username = 'root';
    $password = '';

    $conexao = mysqli_connect($servername, $username, $password, $database);

    // var_dump($conexao);
    
    $sql = 'INSERT INTO bdclientes (Nome, Endereco, Email) VALUES ("Pele", "Santos", "pele@futebol.com")';

    if($conexao ->query($sql)){
        echo 'Registro criado com sucesso';
    }else{
        echo 'Problemas na inserção dos dados';
    }