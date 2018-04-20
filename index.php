<!DOCTYPE html>
<html lang="en">
  
 <?php
include 'head.php';
?>

<body>

   <div class="container" >
    <?php
        include 'header.php';
    ?>


    <?php
  
        include 'nav.php';
    ?>


<div class="imagem">
<!-- ESTE BLOCO SERÁ VISUALIZADO APENAS POR QUEM USAR DISPOSITIVO COM RESOLUÇAO ACIMA DE 700PX -->
<div class="row hidden-sm">

<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[3][$idioma];?></h3> 
     <img src="imagens/<?php echo $didatico['imagem']; ?>" style="margin:auto;height:184px;width:130px; " alt="Livro Didático: tempo de portugues " class="img_peq img-responsive ">
             
   <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($didatico['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: -1px"> <?php echo utf8_encode($vetIdioma[1][$idioma]);?> </p><p><?php echo "<a href='categoria.php?cat=didatico&cod=".utf8_encode($didatico['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
        
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[8][$idioma];?></h3> 
     <img src="imagens/<?php echo $romance['imagem']; ?>" style="height:184px;width:130px;" alt="Livro Romance: O encontro " class="img_peq img-responsive center-block">
         
   <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($romance['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[10][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=romance&cod=".utf8_encode($romance['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
        
    
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[4][$idioma];?></h3> 
     <img src="imagens/<?php echo $infantil['imagem']; ?>" style="height:184px;width:130px;" alt="Livro Infatil da charle e lola: Eu nunca vou comer tomate" class="img_peq img-responsive center-block">
         <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($infantil['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[11][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=infantil&cod=".utf8_encode($infantil['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
  </div> 


  <div class="row hidden-sm">
    <section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[5][$idioma];?></h3> 
     <img src="imagens/<?php echo $tecnologico['imagem']; ?>" style="height:184px;width:130px;" alt="Livro de Tecnologia: que fala sobre a tecnologia e a diplomacia" class="img_peq img-responsive center-block">
        <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($tecnologico['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[12][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=tecnologico&cod=".utf8_encode($tecnologico['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
        
    
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[7][$idioma];?></h3> 
     <img src="imagens/<?php echo $religioso['imagem']; ?>" style="height:184px;width:130px;" alt="Livro religioso, com tema: tudo que um cristão deveria saber" class="img_peq img-responsive center-block">
         <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($religioso['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[13][$idioma]);?>.</p><p><?php echo "<a href='categoria.php?cat=religioso&cod=".utf8_encode($religioso['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[6][$idioma];?> </h3> 
     <img src="imagens/<?php echo $culinaria['imagem']; ?>" style="height:184px;width:130px;" alt="livro de culinaria com várias receitas" class="img_peq img-responsive center-block">
          <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($culinaria['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[14][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=culinaria&cod=".utf8_encode($culinaria['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>  

  </div>

  <!-- ESTE BLOCO SERÁ VISUALIZADO APENAS POR QUEM USAR DISPOSITIVO COM RESOLUÇAO ABAIXO DE 700PX -->
   <div class="row hidden-lg hidden-md hidden-xs">

<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[3][$idioma];?></h3> 
     <img src="imagens/<?php echo $didatico['imagem']; ?>" style="margin:auto;height:184px;width:130px; " alt="Livro Didático: tempo de portugues " class="img_peq img-responsive ">
        <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($didatico['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: -1px"> <?php echo utf8_encode($vetIdioma[1][$idioma]);?> </p><p><?php echo "<a href='categoria.php?cat=didatico&cod=".utf8_encode($didatico['nome_livro'])."'>";  echo $vetIdioma[2][$idioma];?>...</a></p>
        
</section>
        
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[8][$idioma];?></h3> 
     <img src="imagens/<?php echo $romance['imagem']; ?>" style="height:184px;width:130px;" alt="Livro Romance: O encontro " class="img_peq img-responsive center-block">
        <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($romance['nome_livro']);?></b></h4>
          </center> 
        <?php }?> 
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[10][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=romance&cod=".utf8_encode($romance['nome_livro'])."'>";  echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
     </div>   
    <div class="row hidden-lg hidden-md hidden-xs">
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[4][$idioma];?></h3> 
     <img src="imagens/<?php echo $infantil['imagem']; ?>" style="height:184px;width:130px;" alt="Livro Infatil da charle e lola: Eu nunca vou comer tomate" class="img_peq img-responsive center-block">
         <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($infantil['nome_livro']);?></b></h4>
          </center> 
        <?php }?> 
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[11][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=infantil&cod=".utf8_encode($infantil['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>

    <section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[5][$idioma];?></h3> 
     <img src="imagens/<?php echo $tecnologico['imagem']; ?>" style="height:184px;width:130px;" alt="Livro de Tecnologia: que fala sobre a tecnologia e a diplomacia" class="img_peq img-responsive center-block">
       <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($tecnologico['nome_livro']);?></b></h4>
          </center> 
        <?php }?> 
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[12][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=tecnologico&cod=".utf8_encode($tecnologico['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>     
  </div> 
  <div class="row hidden-lg hidden-md hidden-xs">
    
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[7][$idioma];?></h3> 
     <img src="imagens/<?php echo $religioso['imagem']; ?>" style="height:184px;width:130px;" alt="Livro religioso, com tema: tudo que um cristão deveria saber" class="img_peq img-responsive center-block">
        <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
          <center>
        <h4><b><?php echo utf8_encode($religioso['nome_livro']);?></b></h4>
          </center> 
        <?php }?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[13][$idioma]);?>.</p><p><?php echo "<a href='categoria.php?cat=religioso&cod=".utf8_encode($religioso['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>
<section class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
     <h3 class="text-center sub2 "><?php echo $vetIdioma[6][$idioma];?> </h3> 
     <img src="imagens/<?php echo $culinaria['imagem']; ?>" style="height:184px;width:130px;" alt="livro de culinaria com várias receitas" class="img_peq img-responsive center-block">
        <?php if (!isset($_GET['idioma']) or $_GET['idioma']==0){?>
         <center>
<h4><b><?php echo utf8_encode($culinaria['nome_livro']);?></b></h4>
</center> 
<?php } ?>
<p class="text-justify" style="word-spacing: 2px"><?php echo utf8_encode($vetIdioma[14][$idioma]);?></p><p><?php echo "<a href='categoria.php?cat=culinaria&cod=".utf8_encode($culinaria['nome_livro'])."'>"; echo $vetIdioma[2][$idioma];?>...</a></p>
        
  </section>  

  </div>
   </div>


  

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