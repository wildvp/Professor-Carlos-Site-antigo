<?php include_once "topo.php"; ?>
<?php include_once "data_connection.php";?>
        
        <!--Conteudo do site -->
        
        <div id="content">
        	<div id="areasite">
                   
            	<div id="material">
                
                	<div id="conteudo">
                    
                    	                       
                        <div id="titulo_contedo_contorno">
                        </div>
                        
                        
                        <div id="titulo_contedo">                       	
						Cadastro
                   		</div>
                        
                        
                        <div id="figura_1">
	      		      		<img src="imagens/disciplinas.jpg" width="200" height="178" />
                      	</div>
                        
                        <div id="texto_links">
                        </div>
                        
                        <div id="texto_links_conteudo">
                        <br />
                        <strong><em>Entre em contato para informações sobre serviços, dúvidas e etc.</em></strong><br /><br>
                          <form name="form_contato" id="form_contato" action="send_mail.php" method="post">
                         		<fieldset>
                        		<legend> FORMULÁRIO DE CONTATO </legend>
                        
                        
                        			<table width="730" border="0">
  										<tbody>
                                        	<tr>
    											<td>&nbsp;</td>
    											<td>&nbsp;</td>
  											</tr>
  											<tr>
    											<td>Nome:</td>
    											<td><input name="nome" type="text" size="50" maxlength="50" placeholder="Digite seu nome:"></td>
  											</tr>
                                            
                                             <tr>
    											<td>E-Mail:</td>
    											<td><input name="email" type="text" size="50" maxlength="15" placeholder="Digite seu email:"></td>
  											</tr>
                                            
                                            <tr>
    											<td>Assunto:</td>
    											<td><input name="assunto" type="text" size="50" maxlength="15" placeholder="Digite o assunto:"></td>
  											</tr>
                                            
                                            <tr>
    											<td>Celular:</td>
    											<td><input name="celular" type="text" size="50" maxlength="15" placeholder="Digite seu celular (opcional):"></td>
  											</tr>
                                            
                                            <tr>
    											<td>Telefone:</td>
    											<td><input name="telefone" type="text" size="50" maxlength="15" placeholder="Digite seu telefone (opcional):"></td>
  											</tr>
                                            <tr>
    											<td>Mensagem:</td>
    											<td><textarea name="mensagem" cols="50" rows="20" placeholder="Digite sua Mensagem"></textarea></td>
  											</tr>
                                            
                            		</table><br /><br />

                        
                        	                
           	    			<input type="submit" name="submit" value="Enviar...">
                        
                        </fieldset>
                        
					
                    </form>
                        
                        
                        
                        
                                             
                        
                        
                            
                      </div>
                        
                      <!-- Links úteis -->
                      

                    
                    	<div id="titulo_contedo_contorno">
                        </div>
                        
                        
                        <div id="titulo_contedo">                       	
						Links úteis
               		  	</div>
                        
                        <div id="texto_links_uteis">
                        </div>
                        
                        <div id="links_uteis">
                        
                        	<a href="https://www.java.com/pt_BR/download/" target="_blank"><img src="imagens/lk_java.jpg" width="90" height="90" /></a>
                            <a href="http://www.jcreator.org/download.htm" target="_blank"><img src="imagens/lk_jcreator.png" width="90" height="90" /></a>
                  			<a href="https://netbeans.apache.org/download/index.html" target="_blank"><img src="imagens/lk_netbeans.png" width="94" height="90" /></a>
                            <a href="https://www.bloodshed.net/devpascal.html" target="_blank"><img src="imagens/lk_devpascal1.jpg" width="226" height="90" /></a> 
                            <a href="https://sourceforge.net/projects/orwelldevcpp/" target="_blank"><img src="imagens/lk_devcplusplus.jpg" width="90" height="90" /></a>
                            <a href="https://www.teamviewer.com/pt-br/download/windows/?pid=google.teamviewer_ex.s.pt&gclid=Cj0KCQjwla7nBRDxARIsADll0kBCKmTxGcRQr2eRAOPeZwaPoCloMjL34gRkyvlRj0eyJsZsVlp6RmgaAiF5EALw_wcB" target="_blank"><img src="imagens/lk_teamviewer.jpg" width="91" height="90" /></a>
                  			<a href="https://sourceforge.net/projects/wampserver/" target="_blank"><img src="imagens/lk_wamp.jpg" width="90" height="90" /></a>
                  			<a href="https://get.adobe.com/br/reader/" target="_blank"><img src="imagens/lk_acrobat.jpg" width="120" height="90" /></a>
                            
                            
                        </div>
                        
                        <!-- Fim Links úteis -->   
                        
                     
                    </div>
                    
           	    	
                </div>
                
                
                
                
          </div>
        </div>
        
        
        
        <!--Conteudo do site -->
        
<?php include_once "footer.php"; ?>
    
    
<?php include_once "footer.php";?>



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
	$Mailer->Password = "ch@345350DBA";
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