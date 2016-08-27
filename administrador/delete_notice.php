
<?php
#remove notice

$id = $_POST['id'];

include ("crud.php");
include ("configs");
$crud = new CRUD($db);

$result = $crud->query("delete from noticias where id = '$id'");

if($result){
	echo "Noticia removida com sucesso";	
}else{
	echo "Não foi possive excluir essa noticia";	
}


?>