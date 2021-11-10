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
    
    <div class="container-fluid" id="corpo-cad">

        <form action="cadastrar.php" method="POST">

            <label for="cod_estoquista">Código de estoquista: </label>
            <input type="text" name="cod_estoquista" required placeholder="Insira o código"><br>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required placeholder="Insira o nome"><br>
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" required placeholder="Insira o número de telefone"><br>
            <label for="email">Email: </label>
            <input type="text" name="email" required placeholder="Insira o endereço de email"><br>
            <label for="data_nasc">Data de nascimento: </label>
            <input type="text" name="data_nasc" required placeholder="Insira a data de nascimento"><br>
            <label for="senha">Senha: </label>
            <input type="text" name="senha" required placeholder="Insira a senha"><br>
            <label for="confirm_senha">Confirme a senha: </label>
            <input type="text" name="confirm_senha" required placeholder="Insira a senha novamente"><br><br>
            
            <a href="cadastrar.php"><input type="submit" value="Cadastrar"/></a>

        </form>

    </div>  
    
<?php





?>

</body>
</html>