<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<script src="../Jquery.js" type="text/jscript" ></script>
<script src="scripts.js" type="text/jscript"></script>


<?php 
 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
session_start();
include ('configs');
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

$logado = $_SESSION['usuario'];


if (isset ($_REQUEST['id'])){
$id = $_REQUEST['id'];
	switch ($id) {
		case 'logout':
			$page = 'q.php';
			break;
		case 'usuarios':
			$page = 'g_usuarios.php';
			break;
		case 'noticias':
			$page = 'noticias.php';
			break;
		case 'index':
			$page = 'inicial.php';
			break;
		case 'painel_noticias':
			$page = 'pl_noticias.php';
			break;
		default:
			$page = 'error.php';
			break;
	}


}else{
	$page = 'inicial.php';
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA ADMINISTRATIVO</title>
</head>
<body>

<div class="cabecalho">
	<h2>Painel Administrativo</h2>
</div> <!-- fim cabeçaho -->

<div class="content">
	<?php include($page); ?>
</div><!-- fim content -->

<div class="menu">
	<ul>
    <li><a href="?id=index" >[Index]</a></li>
    <li><a href="?id=painel_noticias" >[Painel Noticias]</a></li>
	<li><a href="?id=noticias" >[noticias]</a></li>
	<li><a href="?id=logout" >[Sair]</a></li>
	</ul>
</div><!-- fim menu -->

</body>
<!-- <footer> <a href="#">[subir]</a></footer> -->
</html>