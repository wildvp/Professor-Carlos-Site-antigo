
<?php

/* 
*******************************************************************************************************************************
**********************************SCRIPT PARA ENVIO DO EMAIL A PARTIR DE UM FORMULÁRIO*****************************************
*******************************************************************************************************************************
*/


?>


<?php

	//Recuperando dados do formulário
	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
	var_dump($GetPost);
	
	//Variaveis locais
	$nome = $GetPost['nome'];
	$telefone = $GetPost['telefone'];
	$celular = $GetPost['celular'];
	$email = $GetPost['email'];
	$assunto = $GetPost['assunto'];
	$mensagem = $GetPost['mensagem'];
	
	
	//Incluir PHPMailer
	//$Erro = true;
	include_once 'PHPMailer/class.smtp.php';
	include_once 'PHPMailer/class.phpmailer.php';
	
	//Enviando o email utilizando o PHPMailer
	$Mailer = new PHPMailer;
	$Mailer->Charset = "utf-8";//Tipo de Caractere
	$Mailer->SMTPDebug = 3;//Debug
	$Mailer->isSMTP();//Tipo de envio
	$Mailer->Host = "email-ssl.com.br"; //Servidor de email locaweb 
	//imap.dradilmaolimpio.com.br //pop.dradilmaolimpio.com.br //mail.dradilmaolimpio.com.br
	$Mailer->SMTPAuth = "true";//Metodo de envio - se cx postal existe no servidor usar true
	$Mailer->Username = "disparador@professorcarlosmuniz.com.br";
	$Mailer->Password = "";
	$Mailer->SMTPSecure = "ssl";//Tipo de segurança
	$Mailer->Port = 465; //ou 587
	$Mailer->FromName = "($nome)";
	$Mailer->From = "disparador@professorcarlosmuniz.com.br";//De
	$Mailer->addAddress("professorcarlosmuniz@gmail.com");//Destinatário
	$Mailer->isHTML(true);//Sera enviado no formato HTML
	$Mailer->Subject = "Do Portal - $nome - $assunto - ".date("d/m/Y")." - " .date("H:i"); //Assunto do e-mail
	$Mailer->Body = "<strong>De: $nome<br>E-mail: $email<br>Telefone: $telefone<br>Celular: $celular<br>Assunto: $assunto</strong><br><br>$mensagem";
	
	
	//Verificação
	/*
	if($Mailer->send())
	{
		$Erro = false;
	}
	var_dump($Erro);
	*/
	if($Mailer->send())
	{
		echo "<script>
					confirma_envio();
			</script>";
	}
	else
	{
		var_dump($Erro);
	}

?>