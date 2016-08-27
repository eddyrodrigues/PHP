<?php
$id_not = $_GET['n'];
include ('crud.php');
include ("configs");

$crud = new CRUD($db);

$result = $crud->select($t_noticias);

foreach ($result as $row){
	if($row['id'] == $id_not){	
		echo "<p>Editando noticia: <br></p>";
		echo "<p><center>Noticia:<br><textarea id='". $row['id']."' cols='50' rows='30'>".$row ['texto_noticia']. "</textarea>";
		echo "<br><a onClick='confirmar_edit()' href='#'>Confirmar</a></center></p>";
		break;
	}
}
?>