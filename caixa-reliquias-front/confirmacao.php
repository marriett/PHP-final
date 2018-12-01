<?php
session_start();


if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=caixa_reliquias;host=localhost";
	$dbuser = "root";
	$dbpass = "";

try{
	$db = new PDO($dsn,$dbuser,$dbpass);
	echo "conectou";

	$sql = $db->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");

	if($sql->rowCount() > 0){

		$dado = $sql->fetch();

		$_SESSION['idUser'] = $dado['idUser'];

		header("Location: usuario.php");

	}else{
		echo "errou";
		header("Location: index.php");
	}

}catch(PDOException $e){
	echo "Falhou".$e->getMenssage();
 }
}