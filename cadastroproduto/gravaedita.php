<?php
    include("conecta.php");
    $recid = $_POST["fid"];    
    $recnome = $_POST["fnome"];
    $recemail = $_POST["femail"];
    $recmsg = $_POST["fmsg"];
    
    mysqli_query($conexao, "update dados set nome='$recnome', email='$recemail', msg='$recmsg' where id=$recid");
    //echo "dados:$recid $recnome $recemail $recmsg";
    header("location:lista.php");
?>