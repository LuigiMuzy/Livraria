<?php
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
			header("location:alterar_dados.php?nome_livro=".$_POST['nome_livro']);
		}
		else
		{
			//// POST
			$_SESSION['last_request'] = $request;
			if ($_POST){
				include_once('connection/conexao.php');
				$sqlstring = "update cadastro_livro set ";
				$sqlstring .= "nome_livro='".$_POST['nome_livro']."',";
				$sqlstring .= "autor_livro='".$_POST['autor_livro']."',";	
				$sqlstring .= "categoria='".$_POST['categoria']."',";					
				$sqlstring .= "preco='".$_POST['preco']."',";					
				$sqlstring .= "descricao='".$_POST['descricao']."'";					
				$sqlstring .= " where cod_livro=".$_POST['cod_livro'];
		  		mysqli_query($conexao, $sqlstring);
					header("location:view.php?erro=5");
			}
		}
	}
		?> 