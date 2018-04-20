 <!-- <nav class="navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12" >
  <div class="container-fluid">
    
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" style="margin-top: 20px;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand  glyphicon glyphicon-home" style="padding-top: 30px;" href="index.php">Home</a>
     
      
    </div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
       


     <li><a class="navbar-brand " href="didatico.php"><?php echo $vetIdioma[3][$idioma];?> </a></li> 
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="infantil.php"><?php echo $vetIdioma[4][$idioma];?> </a></li>
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="tecnologico.php"><?php echo $vetIdioma[5][$idioma];?> </a></li> 
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="culinario.php"><?php echo $vetIdioma[6][$idioma];?> </a></li> 
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="religioso.php"><?php echo $vetIdioma[7][$idioma];?></a></li> 
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="romance.php"><?php echo $vetIdioma[8][$idioma];?> </a></li>  
        <li ><a class="navbar-brand  glyphicon glyphicon-user" href="contato.php"><?php echo $vetIdioma[9][$idioma];?></a></li>  
      </ul>
    </div>
  <div>
</nav>
 -->
<style type="text/css">
  @media screen and (max-width: 767px) {
    .container-fluid {
        padding-left: 25px;
        padding-right: 10px;
        width: auto;
    }

    nav{
      border-right-width:15px;
    }

    .navbar-toggle{
      margin-top: 5px;
    }

    .collapse.in{
      display: inline-table;
    }

    .navbar-brand{
      font-size: 16px;
      height: 22px;
      padding: 10px;
    }
}

    a{
      color: #333;
    }
    

</style>


<nav class="navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12" >
  <div class="container" >
   <div style="padding-right: 0px ;">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" style="margin-right: 0px;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand  glyphicon glyphicon-home" href="index.php">Home</a>
    </div>
   
    <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1" >
       
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand glyphicon glyphicon-book " href="categoria.php?cat=didatico" style="word-spacing: -10px"><?php echo $vetorgambiarra [1][$idioma];?> </a></li> 
        <li><a class="navbar-brand  glyphicon glyphicon-book " href="categoria.php?cat=infantil" style="word-spacing: -10px"><?php echo $vetorgambiarra [2][$idioma];?> </a></li>
        <li><a class="navbar-brand  glyphicon glyphicon-book " href="categoria.php?cat=tecnologico" style="word-spacing: -10px"><?php echo $vetorgambiarra [3][$idioma];?> </a></li> 
        <li><a class="navbar-brand  glyphicon glyphicon-book" href="categoria.php?cat=culinaria" style="word-spacing: -10px"><?php echo $vetorgambiarra [4][$idioma];?> </a></li> 
        <li><a class="navbar-brand  glyphicon glyphicon-book" href="categoria.php?cat=religioso" style="word-spacing: -10px"><?php echo $vetorgambiarra [5][$idioma];?></a></li> 
        <li ><a class="navbar-brand  glyphicon glyphicon-book" href="categoria.php?cat=romance" style="word-spacing: -10px"><?php echo $vetorgambiarra [6][$idioma];?> </a></li>  
        <li ><a class="navbar-brand  glyphicon glyphicon-user " href="contato.php"><?php echo $vetIdioma[9][$idioma];?></a></li> 
      </ul>
        
    </div>
  </div>
  </div>
</nav>