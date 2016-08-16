

<script src="Jquery.js"></script>
<table>
			
			<tr>
				<td><table>
						<?php
						/* Connect to a MySQL database using driver invocation */
						$dsn = 'mysql:dbname=noticiais;host=127.0.0.1';
						$user = 'root';
						$password = '';

						try {
						    $dbh = new PDO($dsn, $user, $password);
						} catch (PDOException $e) {
						    echo 'Connection failed: ' . $e->getMessage();
						}

						$query = "select titulo,autor,notice from noticias";
						
						foreach ($dbh->query($query) as $row) {
							echo "<tr><th><h1 onClick='' >-> ".$row["titulo"]."</h1></th></tr>";
							
							echo "<tr  id = 'noticia_' ><td><p >". $row["notice"] . "</p></td></tr>";

						}
						if($dbh->query($query) == false) {
						echo "<tr><td><p> Sem noticias !</p></td></tr>";
						}
?>
					</table>
				</td>
			</tr>
</table>
