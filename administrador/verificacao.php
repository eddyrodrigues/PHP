<?php
session_start();
#verificacao de usuario e senha

$usuario = $_POST['usuarios'];
$senha = $_POST['senhas'];



include('crud.php');

$crud = new CRUD('dudu');

$selected = $crud->query("SELECT FROM logins WHERE usuario = '$usuario' and senha='$senha'");
/*
if( $selected > 0){
	echo "correto";
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header("location: site.php");	
}else{
	unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);	
}*/

$selected = $crud->select('logins');

foreach($selected  as $row){
		if( ($row['usuario'] == $usuario) and ($row['senha'] == $senha)){
				echo "correto";
				$_SESSION['usuario'] = $usuario;
				$_SESSION['senha'] = $senha;
				#header("location: site.php");
			break;	
		}
}

?>
