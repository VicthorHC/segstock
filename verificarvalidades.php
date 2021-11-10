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
                <a class="nav-link" href="atualizarestoque.php">Atualizar Estoque<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
    <form method="POST">
        <strong>Insira o nome do produto para verificar a data de validade:</strong><br>
        <input type="text" name="nome_prod" size="40" required placeholder="Insira aqui o nome do produto"><br><br>
        <input type="submit" name="Send_Pesq" value="Enviar"><br><br>
    </form>
    
    <?php
                $Send_Pesq = filter_input(INPUT_POST, 'Send_Pesq', FILTER_SANITIZE_STRING);
                if ($Send_Pesq) {
                    $nome_prod = filter_input(INPUT_POST, 'nome_prod', FILTER_SANITIZE_STRING);    
                    $result_prod = "SELECT * FROM produto WHERE nome = '$nome_prod'";  
                    $resultado_produtos = mysqli_query($conexao, $result_prod);    
                    while($row_prod = mysqli_fetch_assoc($resultado_produtos)){
                        echo "<font size=5> Data de validade: " . $row_prod['data_validade'] . "<br> </font>";
                    }
                }
    ?>

    </div>

    
    

</body>
</html>