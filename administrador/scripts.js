// JavaScript Document


$(function(){
	$('#botao').click(function(){
		$('#mensagem').slideUp(10);
	
		
		if( usuario == '' || senha == ''){
			$('#mensagem').slideDown(100);
			$('#mensagem').html("Usuário/Senha não existe");
		
		}else{
			$.post("verificacao.php",{
			usuarios:$('#usuario').val(), senhas:$('#senha').val()}
				, function(dados){
				
					if(dados == 'correto'){
						alert('Sucesso no login');
						window.location.replace("site.php");
					}else{
						$('#mensagem').slideDown(100);
						$('#mensagem').html("Usuário/Senha não existe");
					
					}
			});
		
		}
		
		
	});
});


$(function(){
	$('#mensagem').mouseenter(function(){
		$('#mensagem').slideUp(100);

	});

});