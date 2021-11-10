<?php
session_start();
include('conexao.php');

if(empty($_POST['cod_estoquista']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['cod_estoquista']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select cod_estoquista from estoquista where cod_estoquista = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: inicio.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}