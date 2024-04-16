<html>
    <head>
        <title>Formulário de cadastro</title>                
    </head>
    <body>        
        <h1>Formulário de edição</h1>
        
         <?php
            include("conecta.php");
            $recid = $_GET["id"];    
            $seleciona = mysqli_query($conexao, "select * from dados where id=$recid");
            $campo= mysqli_fetch_array($seleciona);
        ?>
        
        <form method="post" action="gravaedita.php">
            <input type="hidden" name="fid" value="<?=$campo["id"]?>"> <br>
            <input type="text" name="fnome" placeholder="Nome" required 
					value="<?=$campo["nome"]?>"> <br>
            <input type="text" name="femail" placeholder="E-mail" required 
					value="<?=$campo["email"]?>"> <br>
            <textarea name="fmsg" rows=5" cols="48" placeholder="Mensagem" required>
					<?=$campo["msg"]?>
			</textarea><br>
            <input type="submit" value="Gravar">
        </form>
    </body>    
</html>