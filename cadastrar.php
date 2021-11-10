<?php
session_start();
include("conexao.php");

$cod_estoquista = mysqli_real_escape_string($conexao, trim($_POST['cod_estoquista']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$data_nasc = mysqli_real_escape_string($conexao, trim($_POST['data_nasc']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from estoquista where cod_estoquista = '$cod_estoquista'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuário_existe'] = true;
    header('Location: admin_cad.php');
    exit;
}

$sql = "INSERT INTO `estoquista`(`cod_estoquista`, `nome`, `telefone`, `email`, `senha`, `data_nasc`) VALUES ('$cod_estoquista', '$nome', '$telefone', '$email', '$senha', '$data_nasc')";

if($conexao->query(sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: admin_cad.php');
exit;

?>