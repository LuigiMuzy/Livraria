<style type="text/css">
  @media screen and (max-width: 767px) {
      a{
        font-size: 10px;
        color: darkgray;
      }

      .glyphicon{
        display: inline;
      }
     .acess{
      padding-left: 0px;
      padding-right: 3px;
     }

}
</style>
<!-- VERIFICA SE HOUVE LOGIN NO SITE -->
<?php
  //Inicia a sessão
  session_start('validacao');
            
  //verifica oconteudo da sessao
  if (isset($_SESSION['validacao']) and $_SESSION['validacao'] == "1")
  {
  ?>

<div class="header" >
    
 <header class="col-md-12 " >
 
    <h4 style="float:right"> Seja bem vindo <b><?php echo $_SESSION['usuario']; ?></b><br><a href="deslogar.php">Deslogar</a> </h4>

        
        <center><img src="imagem/logo.png" alt="logo da livraria: representa uma pessoa lendo um livro" class="logo img-responsive"></center>
          <div class="container row">
        <form class="navbar-form navbar-left " style="width: 100%;" role="search" method="POST" action="busca.php">

        <div  class="col-lg-6 col-md-6 col-sm-8 col-xs-8 form-group busca" >
            <input type="text" class="busca form-control" name="busca"    placeholder="BUSCA RÁPIDA">
        </div>

        <div   class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <button type="submit" class="btn btn-default">BUSCAR</button>
        </div>

        </form>
        </div>
        
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 nav-acessivel"  style="float:right;">
          
          <div class="row">
              
    <nav id="acessivel">
        
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
        <a href='index.php?idioma=0'> <img src="imagem/brasil.jpg" alt="bandeira do brasil, nas cores verd, amarelo, azul e branca  " class="size_br" /><b><i>POR</i></b></a>
        </div>
        
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
    <a href='index.php?idioma=1'><img src="imagem/ingles.png" alt="bandeira da inglaterra, nas cores azul e branco" class="size_ing" /> <b><i>ING</i></b></a>
        </div>
        
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
        <a href='index.php?idioma=2'><img src="imagem/espanha.jpg" alt=" bandeira da espanha, nas cores vermelha e amarela" class="size_esp" /> <b><i>ESP</i></b></a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess"> 
      <a onclick="a()">&nbsp;<img src="imagem/zoom-in.jpg" style="width: 20px;height: 20px"> <i>A+</i></a>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess"> 
    <a onclick="d()">&nbsp;<img src="imagem/zoom-out.jpg" style="width: 20px;height: 20px"> <i>A-</i></a>
</div>

     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess">   
    <a onclick="txt()" ondblclick="txt2()">&nbsp;<i><img src="imagem/contraste.jpg" style="width: 20px;height: 20px">
    </i>&nbsp;</a>
   </div>

  </nav>      
     </div> 
     </div>

    </header> 
    </div>
<?php 
  }else{ ?>

      <div class="header" >
    
      <header class="col-md-12 " >
 
          <h4 style="float:right;"> Faça o login<br>ou cadastre-se<br><a href='login.php?login=usuario'> Usuário  ||  </a><a href='login.php?login=admin'> Administrador</a></h4>
 <center><img src="imagem/logo.png" alt="logo da livraria: representa uma pessoa lendo um livro" class="logo img-responsive"></center>
          <div class="container row">
        <form class="navbar-form navbar-left " style="width: 100%;" role="search" method="POST" action="busca.php">

        <div  class="col-lg-6 col-md-6 col-sm-8 col-xs-8 form-group busca" >
            <input type="text" class="busca form-control" name="busca"    placeholder="BUSCA RÁPIDA">
        </div>

        <div   class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <button type="submit" class="btn btn-default">BUSCAR</button>
        </div>

        </form>
        </div>
        
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 nav-acessivel"  style="float:right;">
          
          <div class="row">
              
    <nav id="acessivel">
        
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
        <a href='index.php?idioma=0'> <img src="imagem/brasil.jpg" alt="bandeira do brasil, nas cores verd, amarelo, azul e branca  " class="size_br" /><b><i>POR</i></b></a>
        </div>
        
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
    <a href='index.php?idioma=1'><img src="imagem/ingles.png" alt="bandeira da inglaterra, nas cores azul e branco" class="size_ing" /> <b><i>ING</i></b></a>
        </div>
        
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
        <a href='index.php?idioma=2'><img src="imagem/espanha.jpg" alt=" bandeira da espanha, nas cores vermelha e amarela" class="size_esp" /> <b><i>ESP</i></b></a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess"> 
      <a onclick="a()">&nbsp;<img src="imagem/zoom-in.jpg" style="width: 20px;height: 20px"> <i>A+</i></a>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess"> 
    <a onclick="d()">&nbsp;<img src="imagem/zoom-out.jpg" style="width: 20px;height: 20px"> <i>A-</i></a>
</div>

     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 acess">   
    <a onclick="txt()" ondblclick="txt2()">&nbsp;<i><img src="imagem/contraste.jpg" style="width: 20px;height: 20px">
    </i>&nbsp;</a>
   </div>

  </nav>      
     </div> 
     </div>

    </header> 
    </div>
<?php } ?> 

    <!-- <nav id="acessivel">
      <ul>  
       
  
       <li><a  href="javascript:void(0);"Onclick="mudaFonte("mais"); return false"  ><b><i>A+</i></b></a></li>
      <li ><a  href="javascript:void(0);" Onclick="mudaFonte("menos"); return false"><b><i>A-</i></b></a></li>
          
    <li><a href="#"><b><i>IR PARA CONTEÚDO</i></b></a></li>
    <li><a href="#"><b><i>IR PARA O FIM</i></b></a></li>
    <li><a href="#" onclick="setActiveStyleSheet('contraste');return false;"><b><i>CONTRASTE</i></b></a></li>
          <li><a href="#" onclick="setActiveStyleSheet('default');return false;"><b><i>NORMAL</i></b></a></li>
          
     <li><a href="#"> <img src="imagem/brasil.jpg" alt="bandeira do brasil, nas cores verd, amarelo, azul e branca  " class="size_br" /><i>POR</i></b></a></li>
    <li><a href="ingles.html"><img src="imagem/ingles.png" alt="bandeira da inglaterra, nas cores azul e branco" class="size_ing" /> <b><i>ING</i></b></a></li>
    <li><a href="espanhol.html"><img src="imagem/espanha.jpg" alt=" bandeira da espanha, nas cores vermelha e amarela" class="size_esp" /> <b><i>ESP</i></b></a></li>
  </ul>
  </nav>
 -->