<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PILHA</title>
</head>
<body>
<?php
	//faremos agora uma pilha usando PHP
	// Em c usariamos estruturas, mas aqui usaremos as struct's como classes
	
	class No{
		function __construct($valor){
			$this->__prox = NULL;
			$this->__ant = NULL;
			$this->__valor = $valor;	
		}
		//GETTERS E SETTERS....
		function getValor(){
			return $this->__valor;
		}
		function setValor($valor){
			return $this->__valor = $valor;	
		}
		function setProx($prox){
			$this->__prox = $prox;	
		}
		function setAnt($ant){
			$this->__ant = $ant;	
		}
		function getProx(){
			return $this->__prox;	
		}
		function getAnt(){
			return $this->__ant;
		}
		//FIM GETTERS E SETTERS
	}
	
	class Descritor{
		function __construct(){
			$this->primeiro = NULL;
			$this->qnt_elementos = 0;	
		}
		function push($valor){ //Entende-se como append adicionar o valor ao final da lista
			if( $this->vazia() ){
				$this->primeiro = new No($valor);	
				$this->qnt_elementos += 1;
				return;
			}
			$aux = $this->primeiro;
			for($aux; $aux->getProx() != NULL; $aux = $aux->getProx());
			$novo = new No($valor);
			$aux->setProx($novo);
			$novo->setAnt($aux);
			$this->qnt_elementos  +=1;
			return;
		}
		function pop(){
			$aux = $this->primeiro;
			if ($aux->getProx() == NULL){
					$this->primeiro = NULL;
					$this->qnt_elementos -= 1;
					return;
			}
			while( $aux->getProx() != NULL){
				$aux = 	$aux->getProx();
			}
			$aux->__ant->__prox = NULL; //aqui não usei os métodos get e set para simplificar para mim, mas funcionaria com eles tamém é claro.
			$this->qnt_elementos -= 1;
		}
		function vazia(){
				return ($this->qnt_elementos == 0);	
		}
		function imprimi(){
			$aux = $this->primeiro;
			while($aux != NULL){
				print_r($aux->getValor());
				$aux = $aux->getProx();	
			}
		}
	}//fechando descritor


$descritor = new Descritor();
$descritor->push(1);
$descritor->push(2);
$descritor->push(3);

$descritor->pop();

$descritor->imprimi();




?>




</body>
</html>