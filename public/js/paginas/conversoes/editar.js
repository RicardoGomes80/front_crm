$('#buscarFiliado').on('click', function() {
	identificador = $('#identificador').val();
	buscaFiliado(identificador)
})

function buscaFiliado(identificador) {
	$.ajax({
		url: buscarFiliadoRoute,
		data: {identificador: identificador},
		method: 'get'
	}).done(function(response) {
		if (!response) {
			toastr.error('Filiado não encontrado', 'ATENÇÃO')
		}
		$('#nomeFiliado').val(response.nome)
	})
}

$('#adicionaConversao').on('click', function() {
	user_id = id
	identificador = $('#identificador').val()
	dataConversao = $('#data').val()
	nomeFiliado = $('#nomeFiliado').val()
	observacoes = $('#observacoes').val()
	return criaConversao(user_id, identificador, dataConversao, observacoes, nomeFiliado)
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
			if (!response) {
				return toastr.error('Não foi possível adicionar esta conversão agora', 'ATENÇÃO')
			}
			toastr.success('Conversão adicionada', 'SUCESSO')
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
		$('#user_id').addClass('is-invalid')
		erros = false
	}
	if (!data.rf) {
		toastr.error('O identificador não pode estar vazio', 'ATENÇÃO')
		$('#identificador').addClass('is-invalid')
		erros = false
	}
	if (isNaN(data.rf)) {
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