<?php

	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
			header("location:incluir_dados.php");
		}
		else
		{
			//// POST
			$_SESSION['last_request'] = $request;
			if ($_POST){
				include_once('connection/conexao.php');
				if (empty($_POST['nome_livro'])==true or empty($_POST['autor_livro'])==true or empty($_POST['categoria'])==true){
					header("location:view.php?erro=1");	
				}else{ 														
					$sqlstring = "insert into cadastro_livro ( nome_livro,autor_livro,categoria,preco,descricao) values (";
					$sqlstring .= "'".$_POST['nome_livro']."',";					
					$sqlstring .= "'".$_POST['autor_livro']."',";	
					$sqlstring .= "'".$_POST['categoria']."',";	
					$sqlstring .= "'".$_POST['preco']."',";
					$sqlstring .= "'".$_POST['descricao']."')";															
					mysqli_query($conexao, $sqlstring);
					header("location:view.php?erro=2");
				}
			}
		}
	}

?> 

