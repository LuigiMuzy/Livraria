<html>
    <?php 
    include 'head.php';
    ?> 
    
<body>

    <div class="container">
   <?php include 'header.php';
     include 'nav.php'; ?>

    <style type="text/css">
    @media screen and (max-width: 767px) {
        h2,h4{
            font-size: 15px;
        }

        h3{
            font-size: 13px;
        }
    }

    select, input.cadastro-input{
         width: 100%;
         border-radius: 5px;
         border: 1px solid lightgray;
         padding: 10px;
     }

     h1,h2,h3{
        color: rgba(51, 51, 51, 0.91);
     }

     .input-endereco{
         width: 100%;
         border-radius: 5px;
         border: 1px solid lightgray;
         padding: 10px;
     }

    .button-cadastro{
        margin: 16px;
        height: 50px;
        width: 200px;
        background: white;
        border: 1px solid gold;
        border-radius: 5px;
    }

    .button-cadastro:hover{
        background: gold;
    }
    
    </style>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borda1 dpess">
    <form accept-charset="utf-8" class="cadastro" name='cadastro' action="cadastrar.php" method="post">
        <b><h2 style="text-align: center;">Faça seu cadastro</h2></b>

<div class="col-lg-6 col-md-6">
       <h3> Digite seu nome: </h3>
        <input class="cadastro-input" type="text" name="nome" placeholder="Nome">

   </div>   
<!-- o value ao ser usado aqui exibe a informacao na caixa-->
   <div class="col-lg-6 col-md-6">     
       <h3>Digite seu cpf: </h3>
        <input class="cadastro-input" type="text" name="cpf" placeholder="EX:34043054324">
<!-- o value ao ser usado aqui exibe a informacao na caixa-->
</div>
    

<div class="col-lg-12 col-md-12">
       <h3> Digite seu email:</h3>
        <input class="cadastro-input" type="email" name="email" placeholder="EX: fulanodetal@seuemail.com"><br>
       
</div>

<div class="col-lg-6 col-md-6">
       <h3> Digite data de nascimento:</h3>
        <input type="text" class="cadastro-input" name="datanascimento" placeholder="EX: DD/MM/AAAA" maxlength="10" onkeyup="barraNascimento(this);" />

</div>

<div class="col-lg-6 col-md-6">
       <h3> Digite Telefone:</h3>
        <input class="cadastro-input" type="number" name="telefone" placeholder="EX: DDxxxxxxxxx" maxlength="11">
     
</div>

<div class="col-lg-6 col-md-6">
       <h3> Sexo:</h3>
        <select type="radio" name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino </option>
        </select>
</div>

<div class="col-lg-6 col-md-6" >      
<h3>Estado civil:</h3>
        <select name="estado_civil" class="cadastro-input">
        <option>Casado(a)</option>
        <option>Viúvo(a)</option>
        <option>Solteiro(a)</option>
        <option>Divorciado(a)</option>
        </select>
        </div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  dend" style="border-top: 1px solid lightgray">
        <b><h2>Meu endereço</h2></b>
        
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       <h3> Endereço: </h3>
        <input type="text" class="input-endereco" name="rua" placeholder="Ex: Rua das Palmeiras">
</div>   

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
        <h3> Número: </h3>
        <input type="text" class="input-endereco"  name="numero" placeholder="Ex:666"><br>
   
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
        <h3> Complemento: </h3>
        <input type="text" class="input-endereco"  name="complemento" placeholder="Ex: Apt 402"><br>
 </div>   
        
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">    
        <h3> Digite seu CEP:</h3>
        <input type="text" name="cep" class="input-endereco"  placeholder="Somente números" maxlength="9" onkeyup="tracoCep(this);" >
     
        <a style="text-decoration: none;" href="http://www.buscacep.correios.com.br/servicos/dnec/index.do"><h4>Não sei meu CEP</h4></a>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">    
        <h3> Bairro: </h3>
        <input type="text" class="input-endereco"  name="bairro" placeholder="Ex:Jardim Irene"><br>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">    
        <?php
        include 'include/estado.php';
        ?>
</div>      

       
       </div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dlog">
        <b><h2>Login</h2></b>
        
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
       <h3>Digite o login:</h3>
        <input class="input-endereco" type="text" name="login"><br>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Digite a senha:</h3>
        <input class="input-endereco" type="password" name="senha"><br>
</div>   
        <center>
        <input class="button-cadastro" type="submit" value="Finalizar Cadastro">
        <input class="button-cadastro" type="reset" value="Limpar Campos">
        </center>
</div>
    </form>
    </div>
     </div>
     <?php include 'footer.php'; ?>  
     </div>
</body>
</html>