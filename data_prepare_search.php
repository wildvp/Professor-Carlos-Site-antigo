<?php session_start();?>
<?php include_once "topo.php"; ?>
<?php include_once "data_connection.php";?>
        
        <!--Conteudo do site -->
        
        <div id="content">
        	<div id="areasite">
            
            	<div id="contato">
                
                	<form name="form_contato" action="data_prepare_insert.php" method="post">
                    
                    	<fieldset>
                        <?php if($_SESSION['logado']):?>
                        <legend> Vamos nos conhecer??? </legend>
                        
                        	                
           	    			VOCE ESTA LOGADO!!!!
                        
                        <?php else:?>
                        
                        VOCE PRECISA ESTAR LOGADO!!!
                        
                        <?php endif;?>
					
                    </form>
                </div>
          </div>
        </div>
        
        
        
        <!--Conteudo do site -->
        
<?php include_once "footer.php"; ?>