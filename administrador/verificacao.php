<?php
#verificacao de usuario e senha

$usuario = $_POST['usuarios'];
$senha = $_POST['senhas'];



include('crud.php');

$crud = new CRUD('dudu');
$selected = $crud->select('logins');

foreach($selected  as $row){
		if( ($row['usuario'] == $usuario) and ($row['senha'] == $senha)){
			echo "correto";
			break;	
		}
}
?>
