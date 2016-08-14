<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exemplo de Estrutura de Dados em PHP (Lista simplesmente encadeada)</title>
</head>

<body>

<?php 
class No{
	public $value;
	public $prox;
	function __construct($value){
		$this->value = $value;
		$this->prox = NULL;
	}
}

class Descritor{
	 function __construct(){
		$this->primeiro = NULL;	
	}
	
	public function add( $value ){
		$aux = $this->primeiro;
		if ( $aux == NULL ) {$this->primeiro = new No($value); return;}
		for ( $aux ; $aux->prox != NULL; $aux = $aux->prox);
		$aux->prox = new No($value);
		return;
	}
	
	public function pop($value = NULL){
		
		if($this->vazia()) return;
		
		if ($value == NULL){
					$aux = ($this->primeiro);
					if ( $aux->prox == NULL ){
						$this->primeiro = NULL;	
					}else{
						for ($aux; $aux->prox->prox != NULL; $aux = $aux->prox);
						$aux->prox= NULL;
						//$aux->prox = NULL;
						return;	
					}

		
		}else{
			$ant = $this->primeiro;
			if ( $ant->value == $value ){
					$this->primeiro = NULL;
					return;
			}else{
				for ($aux = $this->primeiro; $aux != NULL; $aux = $aux->prox){
					if ( $aux->value == $value ){
							$ant->prox = $aux->prox;
							break;
					}
					$ant = $aux;
				}
			
			}
		return;
		}
		
}
	
	public function vazia(){
		if( $this->primeiro == NULL ) return true;
		return false;	
	}
}


$descritor = new Descritor();
$descritor->add(1);
$descritor->add(2);
$descritor->add(3);
$descritor->add(4);
$descritor->add(5);

$descritor->pop(2);
$descritor->pop(3);





//Estrutura de dados em PHP -> Lista simplesmente encadeada
echo "<b>Exemplo de Estrutura de Dados em PHP (Lista simplesmente encadeada):</b><br><br>";
print_r("<b>Valores na lista -> </b></br><br>");

//print_r ( $descritor->primeiro);
$p = $descritor->primeiro;
/*foreach($p as $row){
	print_r($row->value);  // um dia entenderei porque ele não vai de objeto para objeto
							//primeiramente eu preciso entender a funcão foreach primeiro por completo!	
}*/ 

$style_f = 'font-family: monospace;text-shadow: 0px 0px 1px #000;color: blue';
for( $aux = $descritor->primeiro; $aux != NULL ; $aux = $aux->prox){
	print_r("<span style='". $style_f ."'>". $aux->value . " </span>");
}
?>




</body>
</html>