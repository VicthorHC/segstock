<!DOCTYPE html>

<?php


include('verifica_login.php');

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
                <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
            </div>
      </nav>

      <div class="container-fluid">
            <p id="text_inicial">

                <h1>SegStock.</h1>
                <h3>Selecione uma opção na aba do topo da página para acessar as ferramentas disponíveis.</h3><br><br>

            </p>

            <img src="images\SegStock_LOGO.png" alt="LOGO" id="LOGO" height=500px>
      </div>

<?php


?>

</body>
</html>