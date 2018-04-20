 <?php
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
			header("location:excluir_dados.php");
		}
		else
		{
			//// POST
			$_SESSION['last_request'] = $request;
			if ($_POST){
				include_once('connection/conexao.php');
				$codlivro = $_POST['cod_livro'];
				$sqlstring = "delete from cadastro_livro where cod_livro=".$codlivro;
		  		mysqli_query($conexao, $sqlstring);
				header("location:view.php?erro=7");
			}
		}
	}
?>   


	
	