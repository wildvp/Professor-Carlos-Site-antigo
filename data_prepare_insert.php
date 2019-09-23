<?php
	include './data_connection.php';
	
	$conn = getConnection();

	
	$sql = 'INSERT INTO ALUNOS (NOME,TELEFONE,DDD,CIDADE,UF,EMAIL,MENSAGEM) VALUES (?,?,?,?,?,?,?)';
	

	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$ddd = $_POST["ddd"];
	$cidade = $_POST["cidade"];
	$uf = $_POST["estado"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];



	$stmt = $conn->prepare($sql);
	$stmt -> bindParam(1,$nome);
	$stmt -> bindParam(2,$telefone);
	$stmt -> bindParam(3,$ddd);
	$stmt -> bindParam(4,$cidade);
	$stmt -> bindParam(5,$uf);
	$stmt -> bindParam(6,$email);
	$stmt -> bindParam(7,$mensagem);
	
	if($stmt->execute())
		{
			include './contato.php';
		}
	else
		{
			include './contato.php';
		}
?>