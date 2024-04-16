<?php
    include("conecta.php");
    $recid = $_GET["id"];    
    
    mysqli_query($conexao, "delete from dados where id=$recid");
    header("location:lista.php");
?>

