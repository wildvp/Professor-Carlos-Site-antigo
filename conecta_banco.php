<?php

	$dsn = 'mysql:host=cadastro_aluno.mysql.dbaas.com.br;dbname=cadastro_aluno';
	$user = 'cadastro_aluno';
	$pass = '';
	
	try{

		$pdo = new PDO($dsn, $user, $pass);
	
	}catch (PDOException $ex) {
		echo 'Erro: '.$ex->getMessage();
	}

?>

