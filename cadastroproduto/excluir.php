<?php
    include("conecta.php");
    $recid = $_GET["id"];    
    
    mysqli_query($conexao, "delete from produtos where id=$recid");
    header("location:lista.php");
?>

