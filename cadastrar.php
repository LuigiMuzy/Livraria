<html>
<head>
	<title>Alteração</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>
<body>

<?php

require_once('connection/conexao.php');


// recuperando os dados método POST[]
$nome = utf8_decode($_POST['nome']);
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$datanascimento = $_POST['datanascimento'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$estado_civil = utf8_decode($_POST['estado_civil']);
$rua = utf8_decode($_POST['rua']);
$bairro = utf8_decode($_POST['bairro']);
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = utf8_decode($_POST['complemento']);
$estado = $_POST['estado'];
$login = $_POST['login'];
$senha = $_POST['senha'];
   


// montando e executando a string 
$sqlstring = "insert into usuario (nome, cpf, email, datanascimento, telefone, sexo, estado_civil, rua, bairro, numero, cep, complemento, estado, login, senha) values ('$nome', '$cpf','$email', '$datanascimento', '$telefone', '$sexo', '$estado_civil', '$rua', '$bairro', '$numero', '$cep', '$complemento', '$estado', '$login', '$senha')";
   
    
$info = mysqli_query($conexao, $sqlstring);
    
// verificando o resultado
if (!$info) {    
		die('Query Inválida: '.mysqli_error());	
}else{
		  		
        header("location:login.php"); 
        }?>