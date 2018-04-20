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
      

<h3>Cadastro de Livros</h3>
<br>
Incluir novo Livro <a href="inclusao.php"><img src="icones/incluir.png" align="absmiddle"> </a><br><br>
Incluir Imagem do Livro <a href="imagem1.php"><img src="icones/incluir.png" align="absmiddle"> </a><br><br>
         <table border="1px">
         <tr><th width="50px">Codigo</th><th width="350px">Nome do Livro </th><th width="350px">Nome do Autor</th><th width="350px">Categoria </th><th width="100px">Manutencao</th></tr>
         <?php
			include_once('connection/conexao.php');

			$info = mysqli_query($conexao, "select * from cadastro_livro order by nome_livro");
			while($dados=mysqli_fetch_array($info)) 
			{
				echo "<tr>";
				echo "<td>".utf8_encode($dados['cod_livro'])."</td>";
				echo "<td>".utf8_encode($dados['nome_livro'])."</td>";
				echo "<td>".utf8_encode($dados['autor_livro'])."</td>";
				echo "<td>".utf8_encode($dados['categoria'])."</td>";	
				echo "<td align='center'>";  
				
						echo "<a href='deletar.php?cod_livro=".base64_encode ($dados['cod_livro'])."'>";
						echo "<img src='icones/exclusao.png'/>";
						echo "</a>";
						
						echo "&nbsp;&nbsp;&nbsp;";
						
						echo "<a href='visualizar.php?nome_livro=".utf8_encode($dados['nome_livro'])."'>";
						echo "<img src='icones/visualizar.png'/>";
						echo "</a>";						
						
						echo "&nbsp;&nbsp;&nbsp;";
						
						echo "<a href='atualizar.php?nome_livro=".utf8_encode($dados['nome_livro'])."'>";
						echo "<img src='icones/alterar.png'/>";
						echo "</a>";					
				
				echo "</td>";							
				echo "</tr>";
			}
		?>   
        </table>

<br><br>
<?php
  
        include 'footer.php';
    ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>