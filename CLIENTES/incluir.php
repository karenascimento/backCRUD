<?php 

include("conexao.php");

if(isset($_POST["Nome"], $_POST["Endereco"], $_POST["Email"]) ){

    $nome = $_POST["Nome"];
    $endereco = $_POST["Endereco"];
    $email = $_POST["Email"];

    $sql = "INSERT INTO bdclientes (Nome, Endereco, Email) VALUES ('$nome', '$endereco', '$email' )";

    if ($conexao -> query($sql)){
        echo 'Registro criado com sucesso';
    }else{
        echo 'Problemas na inserção dos dados';
    }
}