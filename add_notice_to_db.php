<?php

$autor = $_POST['autor'];
$noticia = $_POST['noticia'];
$titulo = $_POST['titulo'];

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=noticiais;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $con = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$query = "insert into noticias (id,titulo, autor, notice) values (0, '$titulo','$autor','$noticia')";
//$sql = "insert into noticias (id, titulo, autor, notice ) values (0,'mensagem para as filiais!', 'Eduardo Oliveira Rodrigues', 'asdasdasddasadsasd')";
$con->exec($query);

header("Location: index.php");
?>