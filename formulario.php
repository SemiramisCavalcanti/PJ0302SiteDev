<!-- INICIO DO CODIGO - COPIE COMECANDO DAQUI -->
<?php
		
		if (!isset($_POST["eMail"])){
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Seu nome: <input type="text" name="realname" /> <br />
			Seu e-mail: <input type="text" name="eMail" /> <br />
			Mensagem: <br /> <textarea name="texto"> </textarea> <br />
			<input type="submit" value="Enviar" />
			</form>

		<?php }else{
			function checaDados($vet){
				foreach($vet as $val){ 
					if (preg_match("/(%0A|%0D|\n+|\r+)/i", $val) != 0){ echo "Tentativa de injeção de dados."; return 1; }
				}
				return 0;
			}
		
			//Const
			define("TO", "contato@fenixecho.com.br");
			define("ASS", "Contato LandingPage Direito Trabalhista");
		//if (checaDados($_POST)){ exit(1); }
			 // send mail :
			 $_POST['message'] = "Mensagem de " . $_POST['realname'] . " " . $_POST['eMail'];
			 $_POST['message'] .= "\n\n" . $_POST['texto'];
			 $_POST['eMail'] = "From: " . $_POST['eMail'];
			 if ( mail(TO, ASS, $_POST['message'], $_POST['eMail']) ){
			 	// display confirmation message if mail sent successfully
	//header("Location: obrigado.html");
//Para utilizar a funcao header nao pode haver nenhum dado enviado antes do header
//Redirecionamento por META tag:
echo '<meta http-equiv="refresh" content="0;url=http://www.fenixecho.com.br/obrigado.html" />';
//Redirecionamento por JavaScript: 
//echo " <script> location='http://www.seudominio.com.br/' </script> "; 
}
		  else{
			// sending failed, display error message
			echo "<p>Seu e-mail nao p&ocirc;de ser enviado.</p>";
		  }
	}//else
		?>
<!-- FIM DO CODIGO -->