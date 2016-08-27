<?php

include("crud.php");
include ('configs');

$_autor = $_POST['autor'];
$_noticia = $_POST['noticia'];
$_titulo = $_POST['titulo'];
$_visivel = $_POST['visivel'];
$_foredit = $_POST['editando'];
$_id = $_POST['id_not'];
$texto = $_POST['texto'];
$crud = new CRUD($db);
if (! isset ($_foredit) ){
	if ($_visivel){
		$_visivel = 1;	
	}else{
		$_visivel = 0;
	}
	
	
	
	$result = $crud->query("insert into noticias values (0, '$_titulo', '$_noticia', '$_visivel', '$_autor') ");
	
	if( $result ){
		echo "Noticia Adicionada com sucesso";
	}else{
		echo "Não foi possivel adicona-la ao banco de dados";	
	}
	
}else{
	
	echo $texto;
	echo $_id;
	$crud->query ( "update noticias set texto_noticia='". $texto . "' where id=". $_id  );
	
	
	
}

?>