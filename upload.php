<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	$codigo = $_POST['cod_livro'];
	if( $_FILES['arquivo'] ) { 
		$dir = './imagens/'; 
	
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
				$sqlupdate =  "update cadastro_livro set imagem='$name' where cod_livro=$codigo";
				// executando instrução SQL através do método sqlstring()
				$resultado = $mysql->sqlstring($sqlupdate,"ALTERAÇÃO IMAGEM");	
				echo '<br><br><input type="button" onclick="window.location='."'imagem1.php'".';" value="Voltar"><br><br>';
		} else {		
			// direciona para a página de erro qdo ocorre erro no move_uploaded_file
			header('Location: erro.php'); 			
		}
		
	} else {
		// direciona para a página de erro qdo não seleciona o arquivo
		header('Location: erro.php'); 
	}
?>