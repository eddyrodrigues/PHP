<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>

<script src="Jquery.js"></script>
<script src="jas.js"></script>

</head>
<body>
<!-- <script>window.alert("Seja bem vindo!")</script> -->
<?php
if(isset($_REQUEST['page'])){
		$id = $_REQUEST['page']; // Aqui esta difinido o request //
		if($id != "") {
			switch($id) {
				// aqui a case//
				case "sobre":
					$pagina = "serverinfo.php";
					break;
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
				case "add_notice":
					$pagina = "add_notice.php";
					break;

			}
		}
}else {
	header("Location: index.php?id=index");
}
?>

<div class="header">
<span class="topo"></span>
  <p>sistema central</p>
</div>
<div class='menu'>
	<ul>
		<li><a href="?page=" >Home</a></li>
        <li><a href="?page=sobre" >Sobre</a></li>
        <li><a href="?page=" >Entregues</a></li>
        <li><a href="?page=" >Fale Conosco</a></li>
	</ul>
</div>
<!--<div class="corpo_de_fundo">-->
	<div class="barra_direita"  id="barra_direita_texto">
	<?php
		if( (isset($pagina)) and (file_exists($pagina)) ) {  //a aqui se a pagina nao existir //
			include($pagina);
		} else {
			echo "<tr><th><p><center>Página solicitada não existe!</center><p></th></tr>";
		}
	?>
	</div>
<!--</div>-->

</body>
</html>
