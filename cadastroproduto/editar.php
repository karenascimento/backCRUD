<html>
    <head>
        <title>Formulário de cadastro</title>                
    </head>
    <body>        
        <h1>Formulário de edição</h1>
        
         <?php
            include("conecta.php");
            $recid = $_GET["id"];    
            $seleciona = mysqli_query($conexao, "select * from produtos where id=$recid");
            $campo= mysqli_fetch_array($seleciona);
        ?>
        
        <form method="post" action="gravaedita.php">
            <input type="hidden" name="fid" value="<?=$campo["id"]?>"> <br>
            <input type="text" name="fproduto" placeholder="Produto" required 
					value="<?=$campo["produto"]?>"> <br>
            <input type="text" name="funidade" placeholder="Unidade" required 
					value="<?=$campo["unidade"]?>"> <br>
            <textarea type="number" name="fpreco" rows=5" cols="48" placeholder="Preço" required>
					<?=$campo["preco"]?>
			</textarea><br>
            <textarea type="number" name="fcodigo-produto" rows=5" cols="48" placeholder="Codigo-produto" required>
					<?=$campo["codigo-produto"]?>
			</textarea><br>
            <input type="submit" value="Gravar">
        </form>
    </body>    
</html>