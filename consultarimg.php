<!DOCTYPE html>
<html>

<?php
  
  include 'head.php';
?>

<body>
<div class="container-fluid">
    <?php
        include 'header.php';
    ?>
</div>
    
    <?php
  
        include 'nav.php';
    ?>
<h3 align="center">  Incluir Imagem</h3><br><br>
<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	// recuperando 
	$codigo = $_POST['cod_livro'];

	// criando a linha do  SELECT
	$sqlconsulta =  "select * from cadastro_livro where cod_livro = $codigo";
	
	$dados = $mysql->sqlquery($sqlconsulta,'visualizar.php');

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<b>Código:</b> <input type="number"  value="<?php echo $dados['cod_livro']; ?>" readonly ><br><br>
<b>Nome do Livro:</b> <input type="text" name="nome_livro" maxlength="80" value="<?php echo $dados['nome_livro']; ?>" readonly ><br><br>
<img src='imagens/<?php 
		if (empty($dados['imagem'])){
			echo 'SemImagem.png';
		}else{
			echo $dados['imagem'];
		}
?>'width='200px' height='200px'><br><br>
		
			<label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
			<input type='hidden' value="<?php echo $codigo; ?>" name="cod_livro">
			
			<br />
			<br />
			<input type="submit" value="Enviar" />
			<input type='button' onclick="window.location='imagem1.php';" value="Voltar">
		</form>
<br>
<?php
  
        include 'footer.php';
    ?>
</body>
</html> 