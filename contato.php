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


<div class="row">
    
    <div>
  <section class="col-md-12 text-center">
<h3><?php echo $vetIdioma[15][$idioma];?><p class="text-justify"><p>&nbsp;</p><p>&nbsp;</p></h3> 
  </section>
</div>

<section class="col-md-4">
     <img src="imagem/cleo_lima.jpg" alt="Foto de Cleonice Lima na parte esquerda da página de contato." class=" img-responsive center-block">
     <h3 class="col-md-4 text-center"> <?php echo $vetIdioma[16][$idioma];?></h3>
     <p class="text-justify"> <?php echo $vetIdioma[19][$idioma];?></p>
  </section>
        
<section class="col-md-4">
     <img src="imagem/livro_rom.jpg" alt="Foto de João Teobaldo na parte central da página de contato." class=" img-responsive center-block">
       <h3 class="col-md-4 text-center"><?php echo $vetIdioma[17][$idioma];?></h3>
             <p class="text-justify"> <?php echo $vetIdioma[20][$idioma];?></p>

  </section>
        
    
<section class="col-md-4">
     <img src="imagem/livro_inf.jpg" alt="Foto de Luigi Fracalanza na parte direita da página contato." class=" img-responsive center-block">
       <h3 class="col-md-4 text-center"><?php echo $vetIdioma[18][$idioma];?></h3>
             <p class="text-justify"> <?php echo $vetIdioma[21][$idioma];?></p>

  </section>
  </div> 
 <p>&nbsp;</p><p>&nbsp;</p>

  

</div>    

   
    

		<!-- jQuery -->
    <script src="../../vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
<?php
  include 'footer.php';
 
?>    

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
       
  </body>
</html>
