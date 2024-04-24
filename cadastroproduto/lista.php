<html>
    <head>
        <title>Listagem de dados</title>                
    </head>
    <body>        
        <h1>Listagem de dados</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>Produto</td>
                <td>Unidade</td>
                <td>Preço</td>
                <td>Código-fornecedor</td>
            </tr>
            <?php
                 include("conecta.php");
                 $seleciona = mysqli_query($conexao, "SELECT * FROM produtos");
                 while($campo= mysqli_fetch_array($seleciona)){ 
			?>
					<tr>
						<td><?=$campo["id"]?> </td>
						<td><?=$campo["produto"]?> </td>
						<td><?=$campo["unidade"]?> </td>
						<td><?=$campo["preço"]?> </td>
						<td><?=$campo["codigo-fornecedor"]?> </td>
						<td><a href="editar.php?id=<?=$campo["id"]?>"><?=$campo["id"]?></a></td>
						<td><a href="excluir.php?id=<?=$campo["id"]?>"><?=$campo["id"]?></a></td>
					</tr>    
			<?php
                 } 
            ?>            
        </table>
    </body>
</html>

