<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">

    <title>Document</title>
</head>
<body>
    <div class="pagina">
        <div class="pagina1">
            <div class="login">
            <h2> seja bem vindo</h2>
            <img src="icone face.jpg" alt="facebook">
            <img src="icone insta.jpg" alt="instagram">
            <img src="icone ifood.png" alt="ifood">
            <button id="bun1" class= "bnt">login</button>

        </div>
        <div class="formulario">
            <h2>criar conta</h2>  
            <p>faça seu cadastro</p>
            <form action="processar.php" method="post">
                <input type="number" name="cpf" placeholder="CPF">
                <input type="text" name="nome" placeholder= "Seu Nome Completo">
                <input type="email" name="email" placeholder= "Seu E-mail"> 
                <input type="password" name="senha" placeholder= "Sua Senha">
                <input type="number" name="cep" placeholder= "Seu CEP">
                <input type="text" name="estado" placeholder= "Seu Estado">
                <input type="text" name="cidade" placeholder= "Sua Cidade">
                <input type="text" name="rua" placeholder= "Sua Rua">
                <input type="number" name="numero" placeholder= "Numero Da Sua Casa">
                <input  type="submit"  values="cadastrar">
                
            </form>
        </div>
        </div>
        <div class="pagina2">
           
            <div class="formulario">
                <h2>faça seu login</h2>  
                <p>digite suas informações</p>
                <form action="validar.php" method="post">

                     <input type="number" name="cpf" placeholder=" SEU CPF ">
                     <input type="password" name="senha" placeholder=" SUA SENHA ">
                     <input type="submit" values="cadastrar">

                </form>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                <h6><a href="">esqueceu a senha ?</a></h6>
               
        </div>
        <div class="login2">
            <h2> seja bem vindo</h2>
            <button id="bun2" class="bnt">cadastrar</button>
 
        </div>
    </div>
</div>

</body>
</html>