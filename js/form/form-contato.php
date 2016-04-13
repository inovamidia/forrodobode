<?php
	// { Enviando Email de Contato } //
	if( isset($_POST['enviarContato']) ){ 
		
		$emaildestinatario = "forrodopiupiu@ner.com.br";
		$assunto = "Contato - Forró do Piu Piu 2015";		
		
		$mensagemHTML = utf8_decode("<font face='tahoma'>
		<b>Dados do Contato</b> <br><br>	
		<b>Nome: </b>{$_POST['nome']}<br>
		<b>Email: </b>{$_POST['email']}<br>
		<b>Assunto: </b>{$_POST['assunto']}<br>
		<b>Mensagem: </b>{$_POST['mensagem']}<br><br>											
		 ");
		
		if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
		else $quebra_linha = "\n"; //Se "nao for Windows"
	
		$headers = "MIME-Version: 1.1" .$quebra_linha;
		$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
		$headers .= "From: " . $email.$quebra_linha;
	
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emaildestinatario)){ // Se for Postfix
		$headers .= "Return-Path: " . $emaildestinatario . $quebra_linha; // Se "não for Postfix"
		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
		}	
		
			?>
			<script>alert('Obrigado. Mensagem enviada com sucesso!'); window.location.href=window.location.href;</script>
			<?php
							
	}
	// { Final  } { Enviando Email de Contato } //
	?>
	
	<form name="form" action="#" method="POST">
		<input class="required" type="text" name="nome" placeholder="Nome" autofocus />
		<input class="required email" type="text" name="email" placeholder="Email"/>
		<input class="required" type="text" name="assunto" placeholder="Assunto"/>
		<textarea name="mensagem" class="required" placeholder="Digite sua mensagem..."></textarea>
		<input class="enviar" name="enviarContato" type="submit" value=""/>
	</form>