<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="pt-BR">

<head>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta charset="UTF-8">

    <title>Segstock</title>

</head>

<body>

<div class="container">

    <div class="fsadeInDown">

        <div id="formContent">
            

        <div class="fadeIn.first">
            <img src="images\SegStock_LOGO.png" height=200px alt="User Icon" />
        </div>

            <form action="login.php" method="POST">

                    <h2>Login:</h1>

                    
                    <input type="text" id="login" name="cod_estoquista" required placeholder="ID"><br>
                    <input type="text" type="password" id="login" name="senha" required placeholder="Senha"><br><br>
                    <input type="submit" href="login.php" class="fadeIn fourth" value="Entrar"><br>  <br>          
                    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                            
                    <h6>ERRO: ID e/ou senha inválidos.</h4>
                            
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <div id="formFooter">
                        <br><a class="underlineHover" href="indexadm.php">Acesso ADM.</a>
                    </div>

            </form>

        
        </div>    
    </div>  

</div>

    
</body>
</html>