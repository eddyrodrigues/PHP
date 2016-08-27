
<?php
include ('crud.php');

$crud = new CRUD($db);


$result = $crud->select($t_noticias);
echo "<div id='noticias_a_remover'><p> <b> Clique no 'X' para remover</b>";
echo "<br>";
foreach ( $result as $row ){
	echo "<a href='?id=painel_noticias&id2=RemoverOrEdit&action=edit&n=".$row['id']."'>Edit</a> | <img src='popup-btn-close.png' id='". $row['id']. "'></img> " . $row['titulo'];
	#echo "<br><input type='checkbox' id='". $row['id']. "'>". $row['titulo']." </input>";	
}
echo "</p></div>";
?>