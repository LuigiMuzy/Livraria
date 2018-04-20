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




<?php
  
     include_once('connection/conexao.php');

     $busca= $_POST['busca'];
     
$sql = mysqli_query($conexao,"select * from cadastro_livro  where nome_livro like '%$busca%' or autor_livro like '%$busca%' ");
// query para selecionar todos os campos da tabela usuários se $busca contiver na coluna nome ou na coluna email
// % antes e depois de $busca serve para indicar que $busca por ser apenas parte da palavra ou frase
// $busca é a variável que foi enviada pelo nosso formulário da página anterior
$count = mysqli_num_rows($sql);
// conta quantos registros encontrados com a nossa especificação
if ($count == 0) {
    echo "Nenhum resultado!";
} else {
    // senão
    if ($count == 1) {
        echo "1 resultado encontrado!";
    }
    // se houver um resultado diz que existe um resultado
    if ($count > 1) {
        echo "$count resultados encontrados!";
    }
    // se houver mais de um resultado diz quantos resultados existem
    
    while ($dados = mysqli_fetch_array($sql)) {

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
}
}
?>
<br><br>                  
<input type="button"  value="Voltar" onClick="location.href='index.php'">


 <?php
  
        include 'footer.php';
    ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
       
  </body>
</html>