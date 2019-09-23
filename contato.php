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
    											<td><input name="email" type="text" size="50" maxlength="100" placeholder="Digite seu email:"></td>
  											</tr>
                                            
                                            <tr>
    											<td>Assunto:</td>
    											<td><input name="assunto" type="text" size="50" maxlength="50" placeholder="Digite o assunto:"></td>
  											</tr>
                                            
                                            <tr>
    											<td>Celular:</td>
    											<td><input name="celular" type="text" size="50" maxlength="15" id="celular"placeholder="Digite seu celular (opcional):"/>
												<script>$("#celular").mask("(00) 00000-0009");</script></td>
  											</tr>
                                            
                                            <tr>
                                            
    											<td>Telefone:</td>
    											<td><input name="telefone" type="text" size="50" maxlength="15" id="telefone" placeholder="Digite seu celular (opcional):" />
												<script>$("#telefone").mask("(00) 0000-0009");</script>
                                                
                                                </td>
                                                
  											</tr>
                                            <tr>
    											<td>Mensagem:</td>
    											<td><textarea name="mensagem" cols="80" rows="40" placeholder="Digite sua Mensagem"></textarea></td>
  											</tr>
                                            
                            		</table><br /><br />

                        
                        	                
           	    			<input type="submit" name="submit" value="Enviar..." onclick="return validar()">
                        
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