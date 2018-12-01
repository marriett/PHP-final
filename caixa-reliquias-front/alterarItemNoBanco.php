<?php

	$dsn = "mysql:dbname=caixa_reliquias;host=localhost";
	$dbuser = "root";
	$dbpass = "";

try{
	$db = new PDO($dsn,$dbuser,$dbpass);
	echo "conectou";
	$id  = $_POST['idI'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$estado = $_POST['estado'];
	$categoria = $_POST['categoria'];
	echo $id;
	$sql = $db->query("UPDATE item SET nomeItem='$nome',descricao='$descricao',estado='$estado',categoria='$categoria' WHERE idItem='$id'");
	header("Location: alterarNovo.php");
}catch(PDOException $e){
	echo "Falhou".$e->getMenssage();
 }