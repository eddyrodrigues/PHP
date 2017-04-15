<?php
//Exemplo de arquivo PHP que recebe informações por method $_POST e escreve-as num arquivo determinado
//setando informações iniciais


$_file = NULL;
$_message = $_POST['message'];
$_name= $_POST['name'];
$_email = $_POST['email'];


if( $_file = fopen('__messages', 'a') != False){

$__mes = "-----------------\nNome = ". $_name . "\n" .
"Email = ". $_email . "\n" .
"Menssage = " . $_message . "\n" .
"------------------------\n\n";


	if( $_result = fwrite($_file, $__mes) != False){
		echo "Success";
		}else{
			echo "Not Success";
		}
		
}else{
	echo "not possible to open archive";

?>
