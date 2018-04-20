<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP com mysqli (POO) </title>
<body>
<h3> CRUD - PHP com mysqli (POO) - Consulta</h3>
<?php
	include_once('conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	// recuperando 
	$codigo = $_POST['cod_livro'];

	// criando a linha do  SELECT
	$sqlconsulta =  "select * from cadastro_livro where cod_livro = $codigo";
	
	$dados = $mysql->sqlquery($sqlconsulta,'consulta.php');

?>
<b>Código:</b> <input type="number"  value="<?php echo $dados['cod_livro']; ?>" readonly ><br><br>
<b>Nome do Livro:</b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['nome_livro']; ?>" readonly ><br><br>
<b>Categoria: </b> <input type="text" value="<?php echo $dados['categoria']; ?>" readonly ><br><br>
<b>Descrição: </b><br><textarea  rows='3' cols='100' style="resize: none;" readonly ><?php echo $dados['descricao']; ?></textarea><br><br>
<b>Valor: R$ </b><input type="number" step="0.01" name="vpreco" value="<?php echo $dados['preco']; ?>" readonly > <br><br>
<input type='button' onclick="window.location='consulta.php';" value="Voltar">
</body>
</html>
