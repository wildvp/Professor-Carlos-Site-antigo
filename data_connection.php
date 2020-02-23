<?php
/**

	**************** CONEXÃO LOCAL ************************************************************
	
	
	function getConnection()
	{
		
			$dsn = 'mysql:host=localhost;dbname=cadastro_aluno;charset=utf8';
			$user = 'root';
			$pass = '';
	
			try{

				$pdo = new PDO($dsn, $user, $pass);
				
				return $pdo;
				
				
				}catch (PDOException $ex) {
					echo 'Erro: '.$ex->getMessage();
				}
		
	}
	
	
	
	
	
	**************** CONEXÃO OFICIAL ************************************************************
	

	*/
	function getConnection()
	{
		
			$dsn = 'mysql:host=cadastro_aluno.mysql.dbaas.com.br;dbname=cadastro_aluno;charset=utf8';
			$user = 'cadastro_aluno';
			$pass = '';
	
			try{

				$pdo = new PDO($dsn, $user, $pass);
				
				return $pdo;
				
				
				}catch (PDOException $ex) {
					echo 'Erro: '.$ex->getMessage();
				}
		
	}

?>

