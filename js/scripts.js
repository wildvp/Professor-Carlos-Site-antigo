/*
***********************************************************************************************************************************
*************************************************VALIDADORES DE CAMPO**************************************************************
***********************************************************************************************************************************
*/
//VALIDADORES DE CAMPOS
function validar()
{
	var nome = form_contato.nome.value;
	var email = form_contato.email.value;
	var assunto = form_contato.assunto.value;
	var mensagem = form_contato.mensagem.value;
	
	if (nome == "")
		{
			alert('Preencha o campo Nome!!!');
			form_contato.nome.focus();
			return false;
		}
	if (email == "" || email.indexOf('@')== -1 || email.search(" ")!= -1) //indexOf - Verifica se existe o caractere desacrito no conteúdo do campo
		{
			alert('Campo E-mail vazio ou conteúdo inválido!!!');
			form_contato.email.focus();
			return false;
		}
	if (assunto == "")
		{
			alert('Preencha o campo Assunto!!!');
			form_contato.assunto.focus();
			return false;
		}
	if (mensagem == "")
		{
			alert('Preencha o campo Assunto!!!');
			form_contato.mensagem.focus();
			return false;
		}
		
}

// Confirmadores de envio de formulários

function confirma_envio()
{
	setTimeout(function() {
            		window.location.href = 'contato.php';
        		}, 1);
				window.alert('Mensagem enviada com sucesso!!!');
}

