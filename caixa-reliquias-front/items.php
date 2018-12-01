<?php

include_once("conexao.php");
include_once("logout.php");
$item = $_POST['categoria'];
$consulta = "SELECT * FROM item WHERE categoria = '$item'";
$con = $conexao->query($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	 <div class="container">
    <div class="row">
        <div class="col-lg-7 col-sm-6">
            
                
            <h2 class="subtitulo">Escolha ação:</h2>
            
            <ul>
                <li> <a href="cadastrarItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Novo item</a></li>
                <li> <a href="listarItem.php"><span class="glyphicon glyphicon-chevron-right"></span> Listar itens</a></li>
                <li> <a href="alterarNovo.php"><span class="glyphicon glyphicon-chevron-right"></span> Alterar item</a></li>
                <li> <a href="excluirNovo.php"><span class="glyphicon glyphicon-chevron-right"></span> Excluir item</a></li>
            </ul>
        </div>
        <div class="col-lg-5 col-sm-6">

            
            <h2 style=margin-top:auto;>Listar Itens:</h2></br>
            <form action="items.php" method="POST" id="item">
                <label>Categoria:</label>
                <select class=form-control name="categoria">
                    <option value=livro>Livro</option>                    
                    <option value=cd>CD</option>
                    <option value=dvd>DVD</option>
                    <option value=vinil>Vinil</option>
                    <option value=miniatura>Miniatura</option>
                    <option value=hq>HQ</option>
                </select>
                <br>

                <input class="form-control" type="submit" name="listar" value="Listar" required>
            </form>
            <br>

			<div class="scroll">
            	<center>
	            	<table border="1">
						<thead>
							<tr>
								<th class="esconder">Id</th>
								<th>nome item</th>
								<th>descrição</th>
								<th>categoria</th>
							</tr>
						</thead>
						<tbody>
							<?php while($dado = $con->fetch_array()){ ?>
							<tr>
								<td class="esconder"><?php echo $dado["idItem"];?></td>
								<td><?php echo $dado["nomeItem"];?></td>
								<td><?php echo $dado["descricao"];?></td>
								<td><?php echo $dado["categoria"];?></td>
							</tr>
							<?php } mysqli_close($conexao); ?>
						</tbody>

					</table>
            	</center>
        	</div>

        </div>
    </div>
</div>
<?php
    include_once("rodape.php");
?>
</body>
</html>