<!DOCTYPE html>

<?php
    
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
    
    <div class="container-fluid" id="corpo-form">

        <form action="loginadm.php" method="POST">

            <label for="cod_admin">ID admin: </label>
            <input type="text" name="cod_admin" size="30" required placeholder="Insira o ID de administrador"><br>
            <label for="senha_admin">Senha admin: </label>
            <input type="password" name="senha_admin" size="30" required placeholder="Insira a senha de administrador"><br>
            <a href="loginadm.php"><input type="submit" value="Entrar"/></a>
        </form>

    </div>

<?php



?>    
       
</body>
</html>