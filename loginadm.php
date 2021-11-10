<?php

include('conexao.php');

if(empty($_POST['cod_admin']) || empty($_POST['senha_admin'])) {
	header('Location: indexadm.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['cod_admin']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_admin']);

$query = "select cod_admin from admin where cod_admin = '{$usuario}' and senha_admin = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);




if($row == 1) {
	$_SESSION['cod_admin'] = $usuario;
	header('Location: admin_cad.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: indexadm.php');
	exit();
}

?>