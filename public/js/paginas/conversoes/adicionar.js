$('#buscarFiliado').on('click', function() {
	identificador = $('#identificador').val()
	buscaFiliado(identificador)
})

$(document).on('shown.bs.modal','.modal', function (e) {
	if($('.user_id').val() == ''){
		toastr.error('Selecione primeiro um agente de conversão', 'ATENÇÃO')  
		$('#adicionar_conversao_modal').modal('hide')
	}
});

function buscaFiliado(identificador) {
	$.ajax({
		url: buscarFiliadoRoute,
		data: {identificador: identificador},
		method: 'get'
	}).done(function(response) {
		if (!response) {
			return toastr.error('Filiado não encontrado', 'ATENÇÃO')
		}
		$('#nomeFiliado').val(response.nome)
	})
}

$('#adicionaConversao').on('click', function() {
	user_id = $('#user_id').val()
	identificador = $('#identificador').val()
	dataConversao = $('#data').val()
	nomeFiliado = $('#nomeFiliado').val()
	observacoes = $('#observacoes').val()
	criaConversao(user_id, identificador, dataConversao, observacoes, nomeFiliado)
})

function criaConversao(user_id, identificador, dataConversao, observacoes, nomeFiliado) {
	data = {token: token,user_id: user_id,identificador: identificador,data: dataConversao,observacoes: observacoes},
	verificaDados = validaDados(data);
	if (verificaDados) {
		$.ajax({
			url: adicionaConversaoRoute,
			data: data,
			method: 'post'
		}).done(function(response) {
			if (!response){
				toastr.error('Não foi possível adicionar esta conversão agora', 'ATENÇÃO')  
			} 
			toastr.success('Conversão adicionada', 'Sucesso')
			$('#adicionar_conversao_modal').modal('hide')
			html = '<tr>'
			html += '<td>' + dataConversao + '</td>'
			html += '<td>' + nomeFiliado + '</td>'
			html += '<td>' + identificador + '</td>'
			html += '</tr>'
			$('#tabelaFiliados').prepend(html)
		}).fail(function(error) {
			$.each(error.responseJSON.errors, (index, message) => {
				toastr.error(message, 'ATENÇÃO');
			})
		})
	}
	return;
}

function validaDados(data) {
	erros = true
	if (!data.user_id) {
		toastr.error('O agente da conversão não pode estar vazio', 'ATENÇÃO')
		$('.user_id').addClass('is-invalid')
		erros = false
	}
	if (!data.identificador) {
		toastr.error('O identificador não pode estar vazio', 'ATENÇÃO')
		$('#identificador').addClass('is-invalid')
		erros = false
	}
	if (isNaN(data.identificador)) {
		toastr.error('Este identificador não é válido', 'ATENÇÃO')
		$('#identificador').addClass('is-invalid')
		erros = false
	}
	if (!data.data) {
		toastr.error('A data de conversão não pode estar vazia', 'ATENÇÃO')
		$('#data').addClass('is-invalid')
		erros = false
	}
	if (!data.user_id) {
		toastr.error('O agente da conversão não pode estar vazio', 'ATENÇÃO')
		$('#user_id').addClass('is-invalid')
		erros = false
	}
	return erros
}

$('.user_id').on('change', function() {
	user_id = $(this).val()
	if(user_id != ''){
		$(".msg-selecione-agente").addClass('d-none')		
		buscaConversoesDoUsuario(user_id)
	}	
})

function buscaConversoesDoUsuario(user_id) {
	$.ajax({
		url: buscaConversoesDoUsuarioRoute,
		data: {user_id: user_id},
		method: 'get'
	}).done(function(response) {
		if (!response) {
			return;
		}
		else{
			$('.msg-selecione-agente').html('')
			$('.tabela-agentes').removeClass('d-none')
			html = ''
			$('#tabelaFiliados').DataTable().clear().draw();    
			$.each(response, (index, dados) => {
				html += '<tr>'
				html += '<td>' + dados.data_conversao + '</td>'
				html += '<td>' + dados.cliente + '</td>'
				html += '<td>' + dados.cliente_rf + '</td>'
				html += '</tr>'
				$('.msg-selecione-agente').removeClass('d-none')
				$('#tabelaFiliados').DataTable().row.add($(html)).draw()
			})				
		}		
	})
}