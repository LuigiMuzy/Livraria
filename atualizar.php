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
<div class="container-fluid">
<h3 align="center">Alterar dados Registrados</h3><br>
<?php
	include_once('connection/conexao.php');
	$nomelivro = utf8_decode($_GET['nome_livro']);
	$sqlstring = "select * from cadastro_livro  where nome_livro = '$nomelivro'";
	$info = mysqli_query($conexao, $sqlstring);
	$dados =mysqli_fetch_array($info);
	
?>
<form class="borda1 crud" name="cadastro_livro" method="post" action="alterar_dados.php">
<input type="hidden" name="cod_livro" value="<?php echo $dados['cod_livro'];?>" >
Nome do Livro
		<input type="text" name="nome_livro" maxlength="20" value="<?php echo utf8_encode($dados['nome_livro']);?>"  ><br><br>
Autor do Livro:
		<input type="text" name="autor_livro" maxlength="70" value="<?php echo $dados['autor_livro'];?>"  ><br><br>
Categoria:
		<input type="text" name="categoria" maxlength="70" value="<?php echo $dados['categoria'];?>"  ><br><br>       
Preço:
		<input type="number" step="0.01" name="preco" maxlength="18" value="<?php echo $dados['preco'];?>"  ><br><br>  
Descrição:
		<textarea name="descricao" rows='7' cols='50'  style="resize: none;" value="<?php echo $dados['descricao']; ?>" ></textarea><br><br>
		
		         
<input type="button"  value="Voltar" onClick="location.href='cadastro_livro.php'">
<input type="submit"  value="Gravar Alterações" >
<input type="reset"  value="Voltar Dados Iniciais" >
</form>
<br>
</div>
<?php
  
        include 'footer.php';
    ?>
</body>
</html> 
