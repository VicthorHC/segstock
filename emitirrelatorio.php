<!DOCTYPE html>

<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

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
                <li class="nav-item ">
                <a class="nav-link" href="verificarvalidades.php">Verificar Validades</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="localizarproduto.php">Localizar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="emitirrelatorio.php">Emitir Relatório</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="index.php">Log Out</a>
                </li>
            </ul>
            </div>
      </nav>

      <div class="container-fluid">
        <form method="POST" action="">

            <strong>Escreva a descrição do relatório a ser emitido:</strong><br><br>
            <textarea name="relatorio" rows="20" cols="100" placeholder="Escreva o relatório"></textarea><br>
            <input type="submit" name="Send_rel" value="Emitir">

        </form>
      </div>


<?php	

    $Send_rel = filter_input(INPUT_POST, 'Send_rel', FILTER_SANITIZE_STRING);
    $relatorio = filter_input(INPUT_POST, 'relatorio', FILTER_SANITIZE_STRING);
    if ($Send_rel){

    $dompdf = new DOMPDF();

	$dompdf->load_html(
        '<h1 style="text-align: center;">Relatório SegStock:</h1><br>'. $relatorio
        
        );

	//Renderizar o html
    $dompdf->render();
    
    ob_end_clean();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_SegStock.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
    );
    }
?>
    

</body>
</html>