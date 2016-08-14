<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD</title>
</head>
<?php


class CRUD{
	private $host = '127.0.0.1';
	private $port = 3306;
	private $user = 'root';
	private $passwd = '';
 	private $PDO = NULL;
	public function __construct($db ,$user='root', $passwd = '', $host='127.0.0.1', $port=3306){
		$this->host = $host; // Recebe todos as informações externa, principalmente a database que desejar trabalhar.
		$this->port = $port;
		$this->user = $user;
		$this->passwd = $passwd;
		$this->PDO = new PDO('mysql:dbname='. $db . ';host='. $host . '', $this->user, $this->passwd); //faz conexao PDO
	}
 
 
 	public function select($table, $id = NULL){
		if( $id == NULL){ //Caso ele não passar o id ele selectiona a table toda
			$selected = $this->PDO->prepare('select * from '.$table.'');
			$selected->execute();
			return $selected->fetchAll(PDO::FETCH_ASSOC); //retorna um array do tipo [coluna] => [valor da coluna]
		}else{
			$selected = $this->PDO->prepare('select nome, cidade from '. $table. ' where id = '. $id); //selectiona o id
			$selected->execute();
			return $selected->fetchAll(PDO::FETCH_ASSOC);//retorna um array do tipo [coluna] => [valor da coluna]
		}
	}
	public function delete($table, $id = NULL){
		//Se ele não mandar o id ele deleta tudo
		if ( $id == NULL){
			$result = $this->PDO->exec('delete from '.$table);	//deleta a tabela toda
		}
		else{
			$result = $this->PDO->exec('delete from '. $table. ' where id='. $id );	//deleta o id desejado
		}
		return $result; //retorna true(1) ou false(0)
	}
}



$conexao = new CRUD('dudu', 'root');
$select = $conexao->select('pessoas',5);
foreach ( $select as $row ){
	//print_r($row['nome']);
	print_r('<br>Nome: ' .$row['nome']. '<br>Cidade:'. $row['cidade']);  	
	echo "<br>";
}
print_r ($conexao->delete('pessoas'));

?>
<body>
</body>
</html>