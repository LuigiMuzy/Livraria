<!DOCTYPE html>
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

<h3 align="center">Cadastro de novos livros </h3>
<br><br>
<form class="borda1 crud" name="cadastro_livro" method="post" action="incluir_dados.php">

Nome do Livro:<span style='color:red'>*</span>
		<input type="text" name="nome_livro" maxlength="70"><br><br>

Nome do Autor:<span style='color:red'>*</span>
		<input type="text" name="autor_livro" maxlength="70"><br><br>

Categoria:<span style='color:red'>*</span>
		<select name= "categoria" >
        <option>Infantil</option>
        <option>Culinaria</option>
        <option>Didatico</option>
        <option>Religioso</option>
        <option>Romance</option>
        <option>Tecnologico</option>
       </select><br><br>

Preco do Livro:
	     <input type="number" step="0.01" name="preco" maxlength="20"><br><br>


Descricao :<br>
			<textarea name="descricao" rows='7' cols='50'  style="resize: none;" ></textarea><br><br>
         

                  
<input type="button"  value="Voltar" onClick="location.href='cadastro_livro.php'">
<input type="submit" value="Gravar">
<input type="reset" value="Limpar">
</form>
<br>
<?php
  
        include 'footer.php';
    ?>
</body>
</html> 