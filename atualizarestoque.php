<!DOCTYPE html>

<?php

 include_once "conexao.php";

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
   
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="inicio.php">SegStock</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="atualizarestoque.php">Atualizar Estoque<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="verificarvalidades.php">Verificar Validades</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="localizarproduto.php">Localizar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="emitirrelatorio.php">Emitir Relatório</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="index.php">Log Out</a>
                </li>
            </ul>
            </div>
      </nav>

        <div class="container-fluid">
            <form method="POST" action="">
                
                <strong>O que deseja fazer?</strong><br><br>
            
                <input type="radio" name="att_estoque" value="adicionar" checked> Adicionar ao estoque. <br>
                <input type="radio" name="att_estoque" value="remover"> Remover do estoque. <br><br>
                Código do produto: <input type="text" name="cod_prod" size="40" required placeholder="Insira o código do produto"><br><br>
                Nome do produto: <input type="text" name="nome_prod" size="40" required placeholder="Insira o nome do produto"><br><br>
                Marca do produto: <input type="text" name="marca_prod" size="40" required placeholder="Insira a marca do produto"><br><br>
                Localização do produto: <input type="text" name="loc_prod" size="40" required placeholder="Insira o código de localização do produto"><br><br>
                Data de validade do produto: <input type="date" name="date_prod" size="40" required><br><br>
                <br><br>
                <input type="submit" name="Send_att" value="Enviar">
            
            </form>

            <?php
                $att_type= filter_input(INPUT_POST, 'att_estoque', FILTER_SANITIZE_STRING);
                $Send_att = filter_input(INPUT_POST, 'Send_att', FILTER_SANITIZE_STRING);
                if ($Send_att == true && $att_type == 'adicionar') {
                    $cod_prod = filter_input(INPUT_POST, 'cod_prod', FILTER_SANITIZE_STRING);
                    $nome_prod = filter_input(INPUT_POST, 'nome_prod', FILTER_SANITIZE_STRING);
                    $marca_prod = filter_input(INPUT_POST, 'marca_prod', FILTER_SANITIZE_STRING);
                    $loc_prod = filter_input(INPUT_POST, 'loc_prod', FILTER_SANITIZE_STRING);
                    $date_prod = filter_input(INPUT_POST, 'date_prod', FILTER_SANITIZE_STRING);
                    $atualizar = "INSERT INTO `produto`(`cod_produto`, `nome`, `marca`, `localizacao`, `data_validade`) VALUES ('$cod_prod','$nome_prod','$marca_prod','$loc_prod','$date_prod')";  
                    $resultado_localizacao = mysqli_query($conexao, $atualizar);    
                    $result_prod = "SELECT * FROM produto WHERE nome = '$nome_prod'";  
                    $resultado_produtos = mysqli_query($conexao, $result_prod);    
                    while($row_prod = mysqli_fetch_assoc($resultado_produtos)){
                        echo "<font size=5>O $nome_prod foi adicionado com sucesso.<br> </font>";
                    } 
                     
                }
                if ($Send_att == true && $att_type == 'remover') {
                    $cod_prod = filter_input(INPUT_POST, 'cod_prod', FILTER_SANITIZE_STRING);
                    $nome_prod = filter_input(INPUT_POST, 'nome_prod', FILTER_SANITIZE_STRING);
                    $marca_prod = filter_input(INPUT_POST, 'marca_prod', FILTER_SANITIZE_STRING);
                    $loc_prod = filter_input(INPUT_POST, 'loc_prod', FILTER_SANITIZE_STRING);
                    $date_prod = filter_input(INPUT_POST, 'date_prod', FILTER_SANITIZE_STRING);
                    $atualizar = "DELETE FROM produto WHERE 'cod_produto' == '$cod_prod'";  
                    $resultado_localizacao = mysqli_query($conexao, $atualizar);  
                    echo "<font size=5>O $nome_prod foi removido com sucesso.<br> </font>";
                }    
            ?>
        </div>
</body>
</html>