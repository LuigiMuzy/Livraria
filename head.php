<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Livraria Web</title>
    <style type="text/css">
    @import url("css/estilo.css");
    @import url("css/contato.css");
    </style>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <?php 
  if(!isset($_GET['idioma'])){ $idioma = "0";} else {$idioma = $_GET['idioma'];}
  require_once("vetor.php");
  
 ?> 
  
  <!-- Javascript -->
   <script type="text/javascript" src="js/contato.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   <script type="text/javascript">
function barraNascimento(c){
   if(c.value.length==2){
      c.value += '/';
   }
   if(c.value.length==5){
      c.value += '/';
   }
}

function tracoCep(c){
  if (c.value.length==5) {
    c.value+= '-';
  }
}
</script>

 <!-- Bootstrap -->
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
