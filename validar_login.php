<?php

    require_once('connection/conexao.php');
    session_start('usuario');
if ( $_SESSION['usuario']=='usuario'){
    $login=$_POST['usuario'];
    $senha=$_POST['senha'];

     $sqlselect="select nome,login,senha from usuario where login ='$login' and senha='$senha'  "; }




    $info=mysqli_query($conexao, $sqlselect);
    
    if (!$info) {
        die('Query Inválida: ' . mysqli_error()); 
    }

    $registro = mysqli_num_rows($info);
    $dados = mysqli_fetch_array($info);

   if ($registro!=1)  {
        header('location:login.php?erro=1');
    }
    
   if(is_null($login) or is_null($senha)){
       header('location:login.php?erro=1');
   }

    if ($login==$dados['login'] and $senha==$dados['senha'])  {
            $validacao = "1";
            $usuario = $dados['nome'];
            session_start('usuario');
            session_start('validacao');
            $_SESSION['usuario'] = substr($usuario,0,strrpos(substr($usuario, 0, 15), ' '));
            $_SESSION['validacao'] = $validacao;
           header('location:index.php');    

       }
    

   if ($_SESSION['usuario']=='admin'){
    $login=$_POST['usuario'];
    $senha=$_POST['senha'];

     $sqlselect="select nome,login,senha from login where login ='$login' and senha='$senha'  "; }



?>