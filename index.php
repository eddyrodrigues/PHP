<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body>
<?php
$id = $_REQUEST['id']; // Aqui esta difinido o request //
if($id != "") {	
	switch($id) { 
		// aqui a case//
			
		case "index":
		case "noticias": 
			$pagina = "noticieis.php"; 
			break; 
		case "about":
			$pagina = "about.php"; 
			break; 
		case "contato":
			$pagina = "contato.php"; 
			break; 
		// Agora definiremos o default, que será a pagina que será aberta quando não houver um valor para o $id 
		default: 
			$pagina = "erro.php"; 
			break; 
		case "admin":
			$pagina = "administrador/admin.php";
			break;	
		case "add_noticia":
			$pagina = "add_notice.php";
			break;
			
	} 
}
else{ 
	$pagina = "noticieis.php";
	}
?>

<div class="header">
<span class="topo"><img src="flor_topo.png" alt="Flower"></span>
  <p>sistema central</p>
</div>
<div class="menu">
	<ul>
		<li> <a href="index.html">home</a> </li>
		<li> <a href="#">about</a> </li>
		<li><a href="#">portifolio</a></li>
	</ul>
</div>
<div class="corpo_de_fundo">
	<div class="barra_esquerda">
		<table>
			<tr>
				<th><h1>Menu Principal</h1></th>
			<tr>
			</tr>
				<td>	
					<ul>
						<li> <a href="index.php">home</a> </li>
						<li> <a href="?id=add_noticia">add noticia</a> </li>
						<li> <a href="?id=index">portifolio</a></li>
					</ul>					
				</td>
			</tr>
			<tr>
				<th style = "border:1px solid;"><h1>aaaaaaaasadokasd</h1></th>
			</tr>			
		</table>
	</div>
	<div class="barra_direita">
	<?php
		if( (isset($pagina)) and (file_exists($pagina)) ) {  //a aqui se a pagina nao existir //
			include($pagina); 
		} else { 
			echo "<tr><th><p><center>Página solicitada não existe!</center><p></th></tr>"; 
		} 
	?>
	</div>
</div>
<footer class="menu"><a href="?id=admin">administrador</a></footer>
</body>
</html>

