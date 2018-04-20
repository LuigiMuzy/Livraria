<!DOCTYPE html>
<html lang="en">
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
<h3 class="text-center sub2 ">Livros Tecnológicos</h3> 
    <BR><BR>
<article class="col-md-12">       
<section class="col-md-3  ">
    <a href="#">
    <img  src="imagem/livro_tecnologico.jpg" alt="Livro de tecnologia e diplomacia" class="  img-responsive"></a>
    </section>
 <section class="col-md-3  ">      
  <?php
      include_once('connection/conexao.php');

      $info = mysqli_query($conexao, "select * from cadastro_livro where cod_livro = '80'");
      while($dados=mysqli_fetch_array($info)) 
      {?>
      
      <h4><?php echo $dados['nome_livro']; ?></h4>
      <p class="text-justify"> <?php echo $dados['descricao']; ?></p>
       
      <?php
      }
    ?>   
  
</section>
      
<section class="col-md-6  borda1 "  > 
    
   <?php
      include_once('connection/conexao.php');

      $info = mysqli_query($conexao, "select * from cadastro_livro where cod_livro = '80'");
      while($dados=mysqli_fetch_array($info)) 
      {?>
      
      <h4>Nome do Livro: <?php echo $dados['nome_livro']; ?></h4>
      <h5>Autor(a):<?php echo $dados['autor_livro']; ?></h5>
      <h5>formato: LIVRO </h5><BR>
       
      <?php
      }
    ?>
 
    <section class="col-md-3" >  
   <h5><s>de: R$ xx,xx</s></h5>
   <h5>por: R$ yy,yy</h5>
        </section> 
        
        <section class="col-md-3" >  
     <a class="btn btn-default" href="#" role="button"  align="center" >Adicionar ao carrinho
    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
    </a><BR><BR>
     <a class="btn btn-default" href="#" role="button" >compre com 1 clike
  <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>
    </a> 
    </section>     
    <BR><BR><BR><BR><BR><BR>
   
      
  <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Calcular prazo de entrega e frete
    <form class="form-inline" >
  <div class="form-group">
    <label for="exampleInputCEP"></label>
    <input type="text"  class="form-control" id="exampleInputName2" placeholder="Digite o CEP">
  </div>
  <button type="submit" class="btn btn-default">OK</button>
</form>
   <hr> 
            
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

$limite = mysqli_query($conexao, "select * from cadastro_livro  where categoria = 'Tecnologico' limit $inicio, $visualizar");

// verifica a quantidade de registros
$todos =  mysqli_query($conexao, "select * from cadastro_livro  where categoria = 'Tecnologico'");
 $tregistros = mysqli_num_rows($todos); 
 
// verifica a quantidade de páginas
// $visualizar = "15";
$tpaginas = $tregistros / $visualizar; 
 
// visualizando os nomes das cidades
while ($dados = mysqli_fetch_array($limite)) {
  
{?>
      <section class="col-md-3">
      <br>
          <a href="#"><?php

      if (empty($dados['imagem'])){
            $imagem = 'SemImagem.png';
        }else{
            $imagem = $dados['imagem'];
        }
     echo "<a href='detalhe.php?nome_livro=".$dados['nome_livro']."'><img src='imagens/$imagem' width='150px' heigth='224px' >";
    ?></a>
          <p class="text-lef">Nome do Livro:<?php echo $dados['nome_livro']; ?></p>
          <p class="text-lef">Autor:<?php echo $dados['autor_livro']; ?></p>
          <p class="text-lef">Valor do Livro R$ <?php echo $dados['preco']; ?></p>
          <br>
       </section>
      <?php
      }
    } 
// criando números das páginas
echo "<br><br><br>";
for($num = 1; $num <= $tpaginas+1; $num++){
  echo "<a href='?pagina=".$num."'>$num</a>";
  echo " / ";
}
   
 ?>
      
  

    

</div>    

    <?php
  
        include 'footer.php';
    ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
       
  </body>
</html>