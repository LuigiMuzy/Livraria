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
	
?>
<form name="cadastro_livro">
<?php	
echo "<table boreder='1px'><tr><td width='250px'>";
    if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
    echo "<img src='imagens/$imagem' width='200px' heigth='224px' >";
    echo "</td><td width='400px'>"; 
    echo "<b>Codigo: </b>".$dados['cod_livro']."<br>";
    echo "<b>Nome do Livro: </b>".$dados['nome_livro']."<br>";  
    echo "<b>Nome do Autor: </b>".$dados['autor_livro']."<br>"; 
    echo "<b>Categoria: </b>".$dados['categoria']."<br>";    
    echo "<b>Descrição: </b>".$dados['descricao']."<br>";   
    echo "<b>Valor do Livro: </b> R$ ".$dados['preco']."<br><br><br><br>";
    echo "</td></tr></table>"; 
?>
<br><br>		          
<input type="button"  value="Voltar" onClick="location.href='JavaScript:window.history.back();'">
</form>

<br><br>

<?php
  
        include 'footer.php';
    ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>