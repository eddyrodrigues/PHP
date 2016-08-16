// JavaScript Document


$(function(){
	$('#botao').click(function(){
		$('#mensagem').slideUp(100);
	
		
		if( usuario == '' || senha == ''){
			$('#mensagem').slideDown(100);
			$('#mensagem').html("Usuário/Senha não existem");
			$('#mensagem').slideUp(2000);
		}else{
			$.post("verificacao.php",{
			usuarios:$('#usuario').val(), senhas:$('#senha').val()}
				, function(dados){
				
					if(dados == 'correto'){
						alert('Sucesso no login');
						window.location.replace("recebe.html");
					}else{
						$('#mensagem').slideDown(100);
						$('#mensagem').html("Usuário/Senha não existem");
						$('#mensagem').slideUp(2000);	
					}
			});
		
		}
		
		
	});
});
