<?php
  session_start();

  if(isset($_SESSION['idUser']) && empty($_SESSION['idUser']) == false){
    header("Location: usuario.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class=jumbotron>
	<div class=container>	
		<div class="col-lg-6 col-sm-6">
			<h1 class="titulo"><span class="glyphicon glyphicon-folder-close"></span> Caixa de Relíquias</h1>
		</div>
		<div class="col-lg-6 col-sm-6">

			<form class="navbar-form navbar-right" action="confirmacao.php" method="POST">
				<div class="form-group">
					<input class="form-control" type="text" name="email" placeholder="Email" required>
	            	<input class="form-control" type="password" name="senha" placeholder="Senha" required>
	            	<input class="form-control" type="submit" name="enviar" value="Entrar" required>

	        	</div>
            </form>

		</div>
	</div>
</div>

</body>
</html>
