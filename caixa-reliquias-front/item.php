<?php
session_start();
$dns = "mysql:dbname=caixa_reliquias;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dns,$dbuser,$dbpass);

	$nomei = $_POST['nome'];
	$descricai = $_POST['descricao'];
	$estadoi = $_POST['estado'];
	$categoriai = $_POST['categoria'];
	$id = $_SESSION['idUser'];

	$sql = "INSERT INTO item SET nomeItem='$nomei', descricao='$descricai',estado='$estadoi' , categoria='$categoriai', idUsuario='$id'";

	$sql = $pdo->query($sql);

	header("Location: cadastrarItem.php");

}catch(PDOException $e){
	echo "Falou: ".$e->getMessager();
}


?>