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

<h3 align="center">Excluindo Dados</h3>
<?php
	include_once('connection/conexao.php');
	$sqlstring = "select * from cadastro_livro where cod_livro = '".base64_decode($_GET['cod_livro'])."'";
	$info = mysqli_query($conexao, $sqlstring);
	$dados =mysqli_fetch_array($info);
	
?>
<form class="borda1 crud" name="cadastro_livro" method="post" action="excluir_dados.php">
<input type="hidden" name="cod_livro" value="<?php echo $dados['cod_livro'];?>">
    <b>Codigo do livro:</b><?php echo $dados['cod_livro'];?><br><br>
    <b>Nome do Livro:</b> <?php echo utf8_encode($dados['nome_livro']);?><br><br>
    <b>Nome Autor:</b> <?php echo  utf8_encode($dados['autor_livro']);?><br><br>       
    <b>Categoria:</b> <?php echo utf8_encode( $dados['categoria']);?><br><br>  
    <b>Preco do Livro:</b>  <?php echo $dados['preco'];?><br><br>
    <b>Descricao:</b>  <?php echo utf8_encode($dados['descricao']);?><br><br>	
    <?php

    if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
    echo "<img src='imagens/$imagem' width='150px' heigth='224px' >";

?>  <br><br>        
<input type="button"  value="Voltar" onClick="location.href='cadastro_livro.php'">
<input type="submit"  value="Excluir Dados" >
</form>
<br>
<?php
  
        include 'footer.php';
    ?>
</body>
</html> 
