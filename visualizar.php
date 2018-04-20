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
    
 
      

<h3 align="center">Consultando dos dados Registrados</h3><br>
<?php
	include_once('connection/conexao.php');
	$nomelivro = $_GET['nome_livro'];
	$sqlstring = "select * from cadastro_livro where nome_livro = '$nomelivro'";
	$info = mysqli_query($conexao, $sqlstring);
	$dados =mysqli_fetch_array($info);
	if (!$info) {
        echo "Deu Ruim".mysql_error();
        }
?>

<form class="borda1 crud" name="cadastro_livro" method="post" action="visualizar.php">
    <b>Nome do Livro:</b> <?php  echo utf8_encode($dados['nome_livro']);?><br><br>
    <b>Nome Autor:</b> <?php echo utf8_encode($dados['autor_livro']);?><br><br>       
    <b>Categoria:</b> <?php echo utf8_encode($dados['categoria']);?><br><br>  
    <b>Preco do Livro:</b>  <?php echo $dados['preco'];?><br><br>
    <b>Descricao:</b>  <?php echo utf8_encode($dados['descricao']);?><br><br>
    

<?php

    if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
    echo "<img src='imagens/$imagem' width='150px' heigth='224px' >";
    

?>

<br><br>		          
<input type="button"  value="Voltar" onClick="location.href='cadastro_livro.php'">
</form>

<br>

<?php
  
        include 'footer.php';
    ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>