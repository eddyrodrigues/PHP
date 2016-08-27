<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<?php

if( isset ($_REQUEST['id2']) and isset ($_REQUEST['id']) ){
	$id2 = $_REQUEST['id2'];
	if (($_REQUEST['id']) == 'painel_noticias'){
		
		switch ($id2){
			case 'Adicionar':
				$page2 = 'add_noticia.php';
				break;
			case 'Editar':
			case 'RemoverOrEdit':
				if( isset ($_REQUEST['action']) and isset ($_REQUEST['id2']) and isset ($_REQUEST['id'])){
						$action = $_REQUEST['action'];
						if( $action == 'edit' ){
							$page2 = 'edit_notice.php';
								
						}
				}else{
					$page2 = 'remove_noticia.php';
					
				}
				break;
			default:
				$page2 = 'error.php';
				break;
		}
		
		
	}else{
			
	}
	
}else{
	$page2 = 'error.php';	
}

?>

<body>
<div id="menu_noticias_page_noticias">
	<ul>
    <li><a href="?id=painel_noticias&id2=Adicionar" >[Adicionar]</a></li>
    <li><a href="?id=painel_noticias&id2=RemoverOrEdit" >[Remover ou Editar]</a></li>
	</ul>
</div>
<div id="acao">
<?php include($page2); ?>
</div> 
   
</body>
</html>