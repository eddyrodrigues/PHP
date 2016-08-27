<?php


class CRUD{ //C.R.U.D = [C]reate, [R]ead, [U]pdate and [D]elete
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
			$query = "select * from '$table' where id = '$id'";
			$selected = $this->PDO->prepare($query); //selectiona o id
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
	public function query($statement){
		return $this->PDO->exec($statement);
		
	}
	# vou apenas deixar essa crud exclusiva para meu sistema de noticias em outro momento atualizo e coloco um sistema legal
	# fazendo que eu posso editar varias colunas, ou fazer algo bem generico, simplificando, para editar(update) nas row(linhas)
#	public function update($id, $noticia){
#		$query = "UPDATE noticias SET texto_noticia='". $noticia. "' WHERE id= '". $id. "'";	
#		$this->PDO->query("update noticias SET texto_noticia='". $noticia . "' where id='". $id );
#		
#	}
	
	
	
}

?>