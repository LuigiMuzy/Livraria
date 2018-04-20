<html>
<head>
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
<h3>Livraria </h3>
<b style="color:red">
<?php
if ($_GET['erro'] == 1){
	echo "Os campos Codigo do Livro, Nome do Livro e Nome do Autor , sao obrigatorios";
	$caminho = "incluir_dados.php";
}

if ($_GET['erro'] == 2){
	echo "Registro Incluido Com SUCESSO !!!!!";
	$caminho = "cadastro_livro.php";
}

if ($_GET['erro'] == 3){
	echo "Nome do livro  não localizado para esta CONSULTA!!!!!";
	$caminho = "consulta.php";
}

if ($_GET['erro'] == 4){
	echo "Codigo não localizado para esta ALTERAÇÃO!!!!!";
	$caminho = "alterar_dados.php";
}

if ($_GET['erro'] == 5){
	echo "Dados do livro Alterado com SUCESSO !!!!!";
	$caminho = "cadastro_livro.php";
}

if ($_GET['erro'] == 6){
	echo "Codigo  não localizado para esta EXCLUSÃO!!!!!";
	$caminho = "exclusao.php";
}
if ($_GET['erro'] == 7){
	echo "Dados  excluida com SUCESSO !!!!";
	$caminho = "cadastro_livro.php";
}
?>
</b><br><br>
<input type="button"  value="Voltar" onClick="location.href='<?php echo $caminho; ?>'">
<br><br>
<?php
  
        include 'footer.php';
    ?>
</body>
</html>