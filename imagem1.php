<!DOCTYPE>
<html>

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

<h3 align="center"> Incluindo Imagens no Cadastro </h3><br><br>
<form name="cadastro" action="consultarimg.php" method="post">
<b>Código:</b> <input type="number" name="cod_livro"><br><br>
<input type="submit" value="Ok">
<input type="reset" value="Limpar">
<input type='button' onclick="window.location='cadastro_livro.php';" value="Voltar">
</form>
<br>
<?php
  
        include 'footer.php';
    ?>
</body>
</html> 