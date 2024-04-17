<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']); // destrói a variável
    }

    include("conecta.php");
    if(isset($_POST['usuario'], $_POST['senha'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $seleciona = mysqli_query($conexao, "SELECT * FROM login WHERE usuario= '$usuario' AND senha='$senha'");
    


        while($campo= mysqli_fetch_array($seleciona)){ 
            
            if(isset($_SESSION['usuario'])){
                $_SESSION['usuario'] = $campo["usuario"];
            }

            header("location:lista.php");
            exit; //sair fora da aplicação, limpar e não continuar mais
        }
    }

    header("location:index.php?errologin=1");
?>
