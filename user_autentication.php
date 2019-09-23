<?php include_once "topo.php"; ?>
<?php include_once "data_connection.php";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autenticando o usuario</title>

<!--UMA FUNÇÃO JAVASCRIPT TEM QUE ESTAR SEMPRE DENTRO DA TAG HEAD -->

<script type="text/javascript">

function loginsucessfully()
{
	setTimeout("window.location='painel.php'", 5000);
}

function loginfailed()
{
	setTimeout("window.location='area_restrita.php'",5000);
}

</script>
</head>
<body>


<!--Conferindo o usuario -->

	<?php

		$email=$_POST['email'];
		$senha=$_POST['senha'];
	
		/*Conferindo a existencia do usuário e senha*/
	
		$sql = ("SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'") or die(mysql_error());
	
		/*Conferindo a existencia do usuário e senha (Contando o numero de registros)*/
	
		/*$row = ("COUNT($sql)");*/
		
		/*$row = mysql_num_rows($sql);*/
		
		$row = rowCount($sql);
	
		/*abrindo a sessão caso exista o usuario*/
	
		if($row > 0)
		{
			$_SESSION['email']=$_POST['email'];
			$_SESSION['senha']=$_POST['senha'];
			echo "<center>Voce foi autenticado com sucesso!!! Aguarde um instante!!!</center>";
			echo "<script>loginsucessfully()</script>";
		}
		
		/*Caso não exista, emitir mensagem*/
		else
		{
			echo "<center>Nome de usuário ou senha inválidos!!! Aguarde um instante!!!</center>";
			echo "<script>loginfailed()</script>";
		}
?>




</body>
</html>