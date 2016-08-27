


<table>
			
			<tr>
				<td><table>
						<?php
						include ('crud.php');
						$crud = new CRUD('eduardo_web');
						#$crud->s("select titulo, texto_noticia, visivel, autor from noticias");
						$result = $crud->select('noticias');
						
						foreach ($result as $row) {
							if($row['visivel'] and strlen($row['texto_noticia']) > 50){
								echo "<tr ><th id='noticia_titulo'><h1>".$row["titulo"]."</h1></th></tr>";
								echo "<tr  id = 'noticia_content' ><td><p >". $row["texto_noticia"] . "</p></td></tr>";
								echo "<tr><td><div id='noticia_baixo'></div></td></tr>";
							}
						}
						if($result == false) {
						echo "<tr><td><p> Sem noticias !</p></td></tr>";
						}
?>
					</table>
				</td>
			</tr>
</table>
