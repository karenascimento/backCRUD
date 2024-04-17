<html>
    <head>
        <title>Listagem de dados</title>                
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
                header('Loation: index.php');
            }else{
                echo "<p>Bem-vindo" .
                $_SESSION['usuario'] . 
                "<a href = 'logout.php'> Sair</a></br>" . 
                "</p>";
            }
        ?>

        <h1>Listagem de dados</h1>
        <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Mensagem</td>
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>
            <?php
                 include("conecta.php");
                 $seleciona = mysqli_query($conexao, "SELECT * FROM dados");
                 while($campo= mysqli_fetch_array($seleciona)){ 
			?>
					<tr>
						<td><?=$campo["nome"]?> </td>
						<td><?=$campo["email"]?> </td>
						<td><?=$campo["msg"]?> </td>
						<td><a href="editar.php?id=<?=$campo["id"]?>"><?=$campo["id"]?></a></td>
						<td><a href="excluir.php?id=<?=$campo["id"]?>"><?=$campo["id"]?></a></td>
					</tr>    
			<?php
                 } 
            ?>            
        </table>
    </body>
</html>

