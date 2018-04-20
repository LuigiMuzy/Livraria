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
<h3 class="text-center sub2 ">Infantil</h3> 
    <BR><BR>
<article class="col-md-12">       
<section class="col-md-3  ">
    <a href="#">
    <img  src="imagem/livro_inf200.jpg" alt="Livro Infatil da charle e lola: Eu nunca vou comer tomate" class="  img-responsive"></a>
    </section>
 <section class="col-md-3  ">      
  <h4>Charlie e Lola</h4>
   <BR><BR>
<p class="lead  ">"Charlie tem uma irmãzinha, a Lola. Às vezes, ele precisa cuidar do jantar dela. Isso não é nada mole, porque ela é muito enjoada para comer. Até que um dia ele arruma um jeito criativo de resolver o problema" </p>
  
</section>
      
<section class="col-md-6  borda1 "  > 
    
    <h4>Charlie e Lola</h4><BR>
    <h5>Autor(a):CHILD,LAUREN</h5>
    <h5>formato: LIVRO </h5><BR>
 
    <section class="col-md-3" >  
   <h5><s>de: R$ 25,90</s></h5>
   <h5>por: R$ 20,00</h5>
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


			$info = mysqli_query($conexao, "select * from cadastro_livro order by nome_livro");
			while($dados=mysqli_fetch_array($info)) 
			{?>
			<section class="col-md-3">
			<br>
   			 <a href="#">
    			<img src="imagem/branca%20de%20neve.jpg" alt="Livro da  Branca de Neve e os sete anões" class="img-responsive"></a>
   			 <p class="text-lef"><?php echo $dados['nome_livro']; ?></p>
   			 <p class="text-lef"><?php echo $dados['autor_livro']; ?></p>
    			<p class="text-lef"><?php echo $dados['preco']; ?></p>
			 </section>
			<?php
			}
		?>   
      
  SELECT CEP
FROM Clientes
WHERE Estado = 'SP'
GROUP BY ZIP

    

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