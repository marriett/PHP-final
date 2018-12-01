<?php
session_start();

	$dsn = "mysql:dbname=caixa_reliquias;host=localhost";
	$dbuser = "root";
	$dbpass = "";

try{
	$db = new PDO($dsn,$dbuser,$dbpass);
	echo "conectou";
	$id  = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
	echo $id;
	$sql = $db->query("DELETE FROM ITEM WHERE idItem='$id'");
	
	header("Location: excluirNovo.php");
}catch(PDOException $e){
	echo "Falhou".$e->getMenssage();
 }
