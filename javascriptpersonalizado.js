$(function(){
	//Pesquisar os alunos sem refresh na página
	$("#pesquisa").keyup(function(){
		
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			$(".resultado").html('');
		}		
	});
	
});
$(function(){
	//Pesquisar os alunos sem refresh na página
	$("#pesquisaCurso").keyup(function(){
		
		var pesquisaCurso = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisaCurso != ''){
			var dados = {
				palavraCurso : pesquisaCurso
			}		
			$.post('buscaCurso.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			$(".resultado").html('');
		}		
	});
	
});