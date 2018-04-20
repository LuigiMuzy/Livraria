<!DOCTYPE html>
<html lang="en">
  
 <?php
include 'head.php';

 ?>

<body >
    <div class="container">
   <?php

        include 'header.php';
    
   ?>
    
        
  <?php

        include 'nav.php';
    
   ?>
   <style type="text/css">
   	
   	div.form-login input.entrada{
   		border-radius: 5px;
   		padding: 10px;
   		width: 100%;
   	}

   	input.botao{
   		margin: 16px;
   		height: 50px;
   		width: 100px;
   		background: white;
   		border: 1px solid gold;
   		border-radius: 5px;
   	}

   	input.botao:hover{
   		background: gold;
   	}

	a button.cadastro{
   		margin: 16px;
   		height: 50px;
   		width: 100px;
   		background-color: white;
   		border: 1px solid gold;
   		border-radius: 5px;
   	}

   	a button.cadastro:hover{
   		background: gold;
   	}

   	@media screen and (max-width: 767px){
   		.a-login{
   			color: #333; 
   			font-size: 20px;
   	}
   }


   </style>
<div class="container"">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-login" style="border-right: 1px solid lightgray" > 
	<form class="login" name="login" method="POST" action="validar_login.php">
		<br>
		<center><h3>Já sou cadastrado</h3><br></center>
                                                                             
    <?php if (isset($_GET['erro'])) {
            if($_GET['erro']==1){ 
                echo "<h3 style='color:red'>Digite corretamente</h3>"; 
            }
        }
              if ($_GET['login']=="admin"){ 
            $_SESSION['usuario']='admin';}
                if ($_GET['login']=="usuario"){ 
            $_SESSION['usuario']='usuario';}                                                             ?>
		<h4>Login:</h4>
		<input class="entrada" type="text" name="usuario" maxlength="100" ><br>
		<h4>Senha:</h4>
		<input class="entrada" type="password" name="senha" maxlength="12" ><br>
		<input class="botao" type="submit" value="Continuar">
	</form>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 login"> 
	<center><h3>Não é cadastrado?</h3></center>
    <p class="p-login">Para comprar em nosso site é preciso realizar um cadastro. Através dele você poderá efetuar compras, além de descontos exclusivos. E também ficará por dentro das novidades, ofertas e promoções.<br></p> <a href="cadastro.php" style="text-decoration: none;">    <button class="cadastro">Cadastre-se</button></a>

</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html> 
