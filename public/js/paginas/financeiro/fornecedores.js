$(document).ready(function () {
	validaErroInput = $("input").hasClass("is-invalid")
	if (validaErroInput === true) {
		$('#criarfornecedor').modal('show')
	}
});

$('#criarfornecedor').on('shown.bs.modal', function () {
	$('#nomeFornecedor').focus();
})

$('#criarfornecedor, #editarfornecedor').on('hidden.bs.modal', function () {
	$('.limpar').val('');
	$('#tipoTelefone').val('').change()
	$('#tipoTelefoneEdita').val('').change()

})

$(document).on('blur', '.viaCep', function () {
	cep = $(this).val().replace(/\D/g, '')
	dados = buscaCep(cep)
})

function buscaCep(cep) {
	return $.getJSON('https://viacep.com.br/ws/' + cep + '/json/?callback=?', (response) => {
		response.logradouro ? $('#endereco, #enderecoEdita').val(response.logradouro) : $('#endereco, #enderecoEdita').val('')
		response.bairro ? $('#endereco_bairro, #endereco_bairroEdita').val(response.bairro) : $('#endereco_bairro, #endereco_bairroEdita').val('')
		response.localidade ? $('#endereco_cidade, #endereco_cidadeEdita').val(response.localidade) : $('#endereco_cidade, #endereco_cidadeEdita').val('')
		response.uf ? $('#endereco_estado, #endereco_estadoEdita').val(response.uf) : $('#endereco_estado, #endereco_estadoEdita').val('')
	})
}

$('#tipoTelefone').on('change', function () {
	$('#telefone').attr('disabled', 'disabled');

	tipo = $(this).val()
	tipo = tipo.toLowerCase()
	validaTipoCriar(tipo)
})

function validaTipoCriar(tipo) {
	$('#telefone').val('');
	if (tipo == 'celular') {
		$('#telefone').removeAttr('disabled');
		$("#telefone").attr('minlength', 15)
		$("#telefone").attr('maxlength', 15)
		$("#telefone").inputmask("mask", {
			"mask": '(99) 99999-9999'
		});
	} else if (typeof tipo == "undefined") {
		$('#telefone').attr('disabled', 'disabled');
	} else {
		$('#telefone').removeAttr('disabled');
		$("#telefone").attr('minlength', 15)
		$("#telefone").attr('maxlength', 15)
		$("#telefone").inputmask("mask", {
			"mask": '(99) 9999-9999'
		});
	}
}

$('#tipoTelefoneEdita').on('change', function () {
	$('#telefone').attr('disabled', 'disabled');

	tipo = $(this).val()
	tipo = tipo.toLowerCase()
	validaTipoEditar(tipo)
})

function validaTipoEditar(tipo) {
	$('#telefoneEdita').val('');
	if (tipo == 'celular') {
		$('#telefoneEdita').removeAttr('disabled');
		$("#telefoneEdita").attr('minlength', 15)
		$("#telefoneEdita").attr('maxlength', 15)
		$("#telefoneEdita").inputmask("mask", {
			"mask": '(99) 99999-9999'
		});
	} else if (typeof tipo == "undefined") {
		$('#telefoneEdita').attr('disabled', 'disabled');
	} else {
		$('#telefoneEdita').removeAttr('disabled');
		$("#telefoneEdita").attr('minlength', 15)
		$("#telefoneEdita").attr('maxlength', 15)
		$("#telefoneEdita").inputmask("mask", {
			"mask": '(99) 9999-9999'
		});
	}
}

$(document).on('click', '#criarForncedorBtn', function () {
	nome = $('#nomeFornecedor').val()
	cnpj = $('#cnpj').val()
	email = $('#email').val()
	tipo_telefone = $('#tipoTelefone').val()
	telefone = $('#telefone').val()
	cep = $('#cep').val()
	endereco = $('#endereco').val()
	endereco_numero = $('#endereco_numero').val()
	endereco_estado = $('#endereco_estado').val()
	endereco_bairro = $('#endereco_bairro').val()
	endereco_cidade = $('#endereco_cidade').val()
	endereco_complemento = $('#endereco_complemento').val()
	observacoes = $('#observacoes').val()

	data = {
		"_token": token,
		nome: nome,
		cnpj: cnpj,
		email: email,
		tipo_telefone: tipo_telefone,
		telefone: telefone,
		cep: cep,
		endereco: endereco,
		numero: endereco_numero,
		estado: endereco_estado,
		bairro: endereco_bairro,
		cidade: endereco_cidade,
		complemento: endereco_complemento,
		observacoes: observacoes,
	}
	return adicionaFornecedorAjax(data)
})

function adicionaFornecedorAjax(data) {
	$.ajax({
		url: routeCriarFornecedor,
		data: data,
		method: 'post'
	}).done(function (response) {
		if (!response) {
			return toastr.error('Erro ao criar fornecedor', 'Erro')
		}
		$is_orcamento = document.getElementById('fornecedor')
		if ($is_orcamento) adicionaOptionNoSelect(response, data.nome)
		adicionaHtmlFornecedor(response, data)
		$('#criarfornecedor').modal('hide')

		$('#removeSemResultados').fadeOut(400);
		return toastr.success('Fornecedor criado!', 'Sucesso')
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}

function adicionaOptionNoSelect(response, nome) {
	return $('#fornecedor').append('<option value="' + response + '" selected>' + nome + '</option>')
}

function adicionaHtmlFornecedor(response, data) {
	html = '<tr>';
	html += '<td>'
	html += data.nome
	html += '</td>'
	html += '<td>'
	html += data.cnpj
	html += '</td>'
	html += '<td>'
	html += data.telefone
	html += '</td>'
	html += '<td>'
	html += `<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine" id_fornecedor="` + response + `" title="Editar" data-toggle="modal" data-target="#editarfornecedor"><i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i></button>`
	html += `<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm submit-form-delete btn-shadow btn-hover-shine" id="` + response + `" title="Remover" data-rota="` + routeDeletarFornecedor + `">`
	html += `<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i> </button>`
	$('#table').DataTable().row.add($(html)).draw(false);
}

$(document).on('click', '.btnEdita', function () {
	id_fornecedor = $(this).attr('id_fornecedor')
	buscarFornecedor(id_fornecedor)

})

function buscarFornecedor(id_fornecedor) {
	$.ajax({
		url: routeBuscarFornecedor,
		data: {
			id: id_fornecedor
		},
		method: 'get'
	}).done(response => prencheEditar(response)).fail(error => toastr.error('Erro inesperado ao buscar fornecedor', 'ATENÇÃO'))
}

function prencheEditar(data) {
	$('#idEdita').val(data.id);
	$('#nomeEdita').val(data.nome);
	$('#cnpjEdita').val(data.cnpj);
	$('#cepEdita').val(data.cep);
	$('#tipoTelefoneEdita').val(data.tipo_telefone).change();
	$('#telefoneEdita').val(data.telefone);
	$('#enderecoEdita').val(data.endereco);
	$('#endereco_numeroEdita').val(data.numero);
	$('#endereco_estadoEdita').val(data.estado);
	$('#endereco_cidadeEdita').val(data.cidade);
	$('#endereco_bairroEdita').val(data.bairro);
	$('#endereco_complementoEdita').val(data.complemento);
	$('#emailEdita').val(data.email);
	$('#observacoesEdita').val(data.observacoes);
}

$(document).on('click', '#btnEditafornecedor', function () {
	id = $('#idEdita').val();
	nome = $('#nomeEdita').val()
	cnpj = $('#cnpjEdita').val()
	email = $('#emailEdita').val()
	tipo_telefone = $('#tipoTelefoneEdita').val()
	telefone = $('#telefoneEdita').val()
	cep = $('#cepEdita').val()
	endereco = $('#enderecoEdita').val()
	endereco_numero = $('#endereco_numeroEdita').val()
	endereco_estado = $('#endereco_estadoEdita').val()
	endereco_bairro = $('#endereco_bairroEdita').val()
	endereco_cidade = $('#endereco_cidadeEdita').val()
	endereco_complemento = $('#endereco_complementoEdita').val()
	observacoes = $('#observacoesEdita').val()

	data = {
		"_token": token,
		id: id,
		nome: nome,
		cnpj: cnpj,
		email: email,
		tipo_telefone: tipo_telefone,
		telefone: telefone,
		cep: cep,
		endereco: endereco,
		numero: endereco_numero,
		estado: endereco_estado,
		bairro: endereco_bairro,
		cidade: endereco_cidade,
		complemento: endereco_complemento,
		observacoes: observacoes,
	}
	return editarFornecedorAjax(data)
})

function editarFornecedorAjax(data) {
	$.ajax({
		url: routeEditarFornecedor,
		data: data,
		method: 'put',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO')
		}
		toastr.clear();
		toastr.success(msgSuccess, 'SUCESSO',)
		$('#editarfornecedor').modal('hide');
		return editaDadosFornecedor(data)
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}

function editaDadosFornecedor(data) {
	$('#nomeTd' + id).html(data.nome)
	$('#telefoneTd' + id).html(data.telefone)
	$('#cnpjTd' + id).html(data.cnpj)
}

