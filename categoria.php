<!DOCTYPE html>
<html lang="en">
  <?php
  
  include 'head.php';

?>
 
<body>
<style type="text/css">
   @media screen and (max-width: 767px){
        h4{
            font-size: 15px;
        }
}



</style>
<div class="container">
    <?php
        include 'header.php';
    ?>

    
    <?php
  
        include 'nav.php';
    ?>

        <?php
       include_once('connection/conexao.php');

if (isset($_GET['cat'])){
            
            $categoria=$_GET['cat'];
            
         
   
      $info = mysqli_query($conexao, "select * from cadastro_livro where categoria ='$categoria' ");
      $dados=mysqli_fetch_array($info);
       }

        if (isset($_GET['cod']) and isset($_GET['cat'])){
          $categoria = $_GET['cat'];
          $cod = utf8_decode($_GET['cod']);
          $info = mysqli_query($conexao, "select * from cadastro_livro where categoria ='$categoria' and nome_livro ='$cod' ");
      $dados=mysqli_fetch_array($info);

     
        }

         

     
      ?>

<div class="container-fluid">
<h3 class="text-center sub2 ">Livros <?php echo $categoria; ?></h3> 
    <BR><BR>
<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">       
<section class="col-lg-6 col-md-6 col-sm-6 col-xs-12  ">
    
    <?php
  if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
     echo "<img src='imagens/$imagem' width='250px' heigth='500px' >";
    ?>
         
       </section>
      
  
 
      
<section class="col-lg-6 col-md-6 col-sm-6 col-xs-10  borda1 "  > 
    
      
    <h4 class="text-lef">Nome do Livro:<?php echo utf8_encode($dados['nome_livro']); ?></h4>
          <h4 class="text-lef">Autor:<?php echo utf8_encode($dados['autor_livro']); ?></h4>
          <h4 class="text-lef">Valor do Livro R$ <?php echo utf8_encode($dados['preco']); ?></h4>
          
      <h4>Formato: Livro </h4><BR>
       
     
 
    <section class="col-md-6" >  
   <h5><s>DE: R$<?php echo $dados['preco'];?></s></h5>
   <h5>POR: R$ <?php echo $dados['preco']-10;?></h5>
        </section> 
        
        <section class="col-md-6" >  
     <a class="btn btn-default" href="#" role="button"  align="center" >Adicionar ao carrinho
    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
    </a><BR><BR>
     <a class="btn btn-default" href="#" role="button" >compre com 1 clike
  <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>
    </a> 
    </section>     
    <br>
   
    <section class="col-md-12" >   
  <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Calcular prazo de entrega e frete
    <form class="form-inline" >
  <div class="form-group">
    <label for="exampleInputCEP"></label>
    <input type="text"  class="form-control" id="exampleInputName2" placeholder="Digite o CEP">
  </div>
  <button type="submit" class="btn btn-default">OK</button>
</form>
</section>
   
            
</section>

<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">      
     
    
      <h3>Descrição</h3>
      <p class="text-justify"> <?php echo utf8_encode($dados['descricao']); ?></p>
       
         
  
</section>


</article>
</div>    
<hr>
 <div class="container-fluid">  


 
         <?php
			include_once('connection/conexao.php');

			 $visualizar = "4";

// verifica se existe o parâmetro pagina ( via GET )
// no estado incial vale 01 - primeira página
// em um segundo momento identifica a página a ser aberta ( limite do Select )
  if (!isset($_GET['pagina'])) {
    $pagina = "1";
  } else {
    $pagina = $_GET['pagina'];
  }
//estabelecendo o limite para o Select
$inicio = $pagina - 1;
$inicio = $inicio * $visualizar;

// realiza o select de acordo com o limite de caracteres
// 1º chamada: select * from tb_cidades limit 0,15 
// 2º chamada: select * from tb_cidades limit 15,15 

$limite = mysqli_query($conexao, "select * from cadastro_livro  where categoria = '$categoria' limit $inicio, $visualizar");

// verifica a quantidade de registros
$todos =  mysqli_query($conexao, "select * from cadastro_livro  where categoria = '$categoria'");
 $tregistros = mysqli_num_rows($todos); 
 
// verifica a quantidade de páginas
// $visualizar = "15";
$tpaginas = $tregistros / $visualizar; 
 
// visualizando os nomes das cidades
while ($dados = mysqli_fetch_array($limite)) {
  
{?>
      <section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <br>
          <a href="#"><?php
          $cod=$dados['cod_livro'];
      if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
     echo "<a href='categoria.php?cat=".$categoria."&cod=".utf8_encode($dados['nome_livro'])."'><img src='imagens/$imagem' style='width:150px;height:224px' >";
    ?></a>
          <p class="text-lef">Nome do Livro:<?php echo utf8_encode($dados['nome_livro']); ?></p>
          <p class="text-lef">Autor:<?php echo utf8_encode($dados['autor_livro']); ?></p>
          <p class="text-lef">Valor do Livro R$ <?php echo utf8_encode($dados['preco']); ?></p>
          <br>
       </section>
      <?php

      }
    } 
// criando números das páginas
echo "<br><br><br>";
?>
</div>    
<center>
<?php
for($num = 1; $num <= $tpaginas+1; $num++){
  echo "<a href='?pagina=".$num."&cat=".$categoria."'style='text-align: center;'>$num</a>";
  echo " / ";
}
   
 ?>  
      
  </center>

    


    <?php
  
        include 'footer.php';
    ?>
</div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
       
  </body>
</html>

