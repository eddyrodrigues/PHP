// JavaScript Document


$(function(){
	var $visivel_Check = 0; // estou usando essa variavel no evento $('#check_visivel').click()
						// para definir se a mensagem vai ficar visivel ou nao
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
	
	/*****
	agora a parte de clickar no botao de "adiconar" que fica na parte de noticias
	******/
	
	$('#botao_add_noticia').click(function(){
		
												var rep = confirm("Deseja realmente adicionar ?");
												if(rep){
														$.post("add_noticia_to_db.php",
														{		autor:$('#autor').val(), 
																titulo:$('#titulo').val(),
																noticia:$('#noticia').val(),
																visivel: document.getElementById('check_visivel').checked 
														},
														function(dados){
															alert(dados)
														}	
														);
												}else{
														
												}


								 });





	
						$('#check_visivel').click(function(){
								if($visivel_Check){ $visivel_Check = 0}
								else{ $visivel_Check = 1 }
							}
						);
						
						
	
				
			
			$('#ti_not').click(function(){
					$('#ti_not').val('');
			});
			
			
			
			
		
			$('#noticias_a_remover img').click(function(){
						var rep = confirm("Deseja realmente excluir?");
						if (rep){
										$.post('delete_notice.php',
										{id: $(this).attr('id')}, 
										function(dados){
											
											alert (dados);
											window.location.replace('?id=painel_noticias&id2=Remover');
										}
								);	//fun $post
	
						}else{
							
						}
			});
			



});
			
			/*
				var array = [];
				for(var i = 0; i < 2; i++){
					array.push(i)
					alert(array)
				}
				*/




$(function(){
	$('#mensagem').mouseenter(function(){
		$('#mensagem').slideUp(100);

	});

});

				
/*****
Essa é uma funcão para confirmar a edição de noticias
******/

function confirmar_edit(){
				var editando_ = 1;
				$.post('add_noticia_to_db.php', {id_not: $('textarea').attr('id'), texto: $('textarea').val(), editando: editando_});
				
			}



