$('#criarCusto').on('shown.bs.modal', function () {
	$('#nome').focus();
})

$(document).on('click', '.limpar', function () {
	$('.inputToclean').val('')
})

$(document).on('hide.bs.modal', function () {
	$('.limpar').val('');
	$('#select-roles').multiSelect('deselect_all');
	$('#select-roles').multiSelect('refresh');
	$('#select-rolesEditar').multiSelect('refresh');
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
		response.estado ? $('#endereco_estado, #endereco_estadoEdita').val(response.estado) : $('#endereco_estado, #endereco_estadoEdita').val('')
	})
}

$(document).on('click', '#btnCriarCusto', function () {

	url = routeCriarCentro
	nome = $('#nome').val()
	cnpj = $('#cnpj').val()
	email = $('#email').val()
	telefone = $('#telefone').val()
	cep = $('#cep').val()
	endereco = $('#endereco').val()
	endereco_numero = $('#endereco_numero').val()
	endereco_complemento = $('#endereco_complemento').val()
	observacoes = $('#observacoes').val()
	user_id = ''
	user_id = $('select#select-roles').val()
	tipo_telefone = $('#tipoTelefone').val()
	ramal = $('#ramal').val()
	ddd = $('#ddd').val()

	arrayInsert = {
		nome: nome,
		cnpj: cnpj,
		email: email,
		tipo_telefone: tipo_telefone,
		telefone: telefone,
		cep: cep,
		endereco: endereco,
		endereco_numero: endereco_numero,
		endereco_complemento: endereco_complemento,
		observacoes: observacoes,
		user_id: user_id
	}

	return adicionaCentroAjax(arrayInsert)
})

function adicionaCentroAjax(arrayInsert) {
	$.ajax({
		"_token": token,
		url: url,
		data: arrayInsert,
		method: 'post'
	}).done(function (response) {
		if (!response)
			return toastr.error('Erro ao criar centro de custo', 'Erro')

		adicionaHtmlCentro(response, arrayInsert)
		$('#criarCusto').modal('hide')
		$('#sem_resultados').fadeOut(200);
		return toastr.success('Centro de custo criado.', 'Sucesso')
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}

function adicionaHtmlCentro(id, data) {
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
	html += '<td class="text-center">'

	html += '<button type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine" id="editaCusto' + id + '" id_centro="' + id + '" nome_edita="' + data.nome + '"  cnpj_edita="' + data.cnpj + '" cep_edita="' + data.cep + '"  telefone_edita="' + data.telefone + '" endereco_edita="' + endereco + '" email_edita="' + data.email + '" endereco_numero_edita="' + data.endereco_numero + '" observacoes_edita="' + data.observacoes + '"  endereco_complemento_edita="' + data.endereco_complemento + '"  tipo_telefone_edita="' + data.tipo_telefone + '" title="Editar" data-toggle="modal" data-target="#editarCusto"><i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i></button>'
	html += '<button type="button" class="mr-2 btn-icon btn-icon-only  btn btn-link btn-sm submit-form-delete btn-shadow btn-hover-shine" id_custo="' + id + '" title="Remover" data-rota="' + routeDeletarCentro + '"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i> </button>'
	html += '</td>'
	$('#table').DataTable().row.add($(html)).draw(false);
}

$(document).ready(function () {
	validaErroInput = $("input").hasClass("is-invalid")
	validaErroSelect = $("select").hasClass("is-invalid")
	validaErroTA = $("textarea").hasClass("is-invalid")
	if (validaErroInput === true || validaErroSelect === true || validaErroTA === true) {
		$('#criarCusto').modal('show')
	}
	$('#select-roles').multiSelect();
	$('#select-rolesEditar').multiSelect();
});


$(document).on('click', '.submit-form-delete', function (e) {
	setarRota = $(this).attr('data-rota');
	id = $(this).attr('id_custo');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse registro?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		return deletaCentroAjax(id, setarRota)
	});
});

function deletaCentroAjax(id, setarRota) {
	$.ajax({
		url: setarRota,
		data: {
			"_token": token,
			id: id,
		},
		method: 'DELETE',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO');
			return;
		}
		var msg = msgSuccess
		toastr.clear();
		toastr.success(msg, 'SUCESSO');
		table = $('#table').DataTable();
		table.row().remove().draw();
	}).fail(function (response) {
		toastr.clear();
		toastr.error(msgErr, 'ATENÇÃO');
	});
}


$(document).on('click', '#btnEditaCusto', function () {
	id = $('#idEdita').val();
	user_id = $('#select-rolesEditar').val();
	nome = $('#nomeEdita').val();
	cnpj = $('#cnpjEdita').val();
	email = $('#emailEdita').val();
	telefone = $('#telefoneEdita').val();
	cep = $('#cepEdita').val();
	endereco = $('#enderecoEdita').val();
	endereco_numero = $('#endereco_numeroEdita').val();
	endereco_complemento = $('#endereco_complementoEdita').val();
	observacoes = $('#observacoesEdita').val()
	tipo_telefone = $('#tipoTelefoneEdita').val()

	arrayInsert = {
		"_token": token,
		id: id,
		user_id: user_id,
		nome: nome,
		cnpj: cnpj,
		email: email,
		tipo_telefone: tipo_telefone,
		telefone: telefone,
		cep: cep,
		endereco: endereco,
		endereco_numero: endereco_numero,
		endereco_complemento: endereco_complemento,
		observacoes: observacoes,
	}

	return ajaxEditaCentro(arrayInsert)
})

function ajaxEditaCentro(arrayInsert) {
	$.ajax({
		url: routeEditarCentro,
		data: arrayInsert,
		method: 'put',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO')
			return;
		}
		editaAtributosCentro(arrayInsert)
		$('#editarCusto').modal('hide');
		toastr.clear();
		toastr.success(msgSuccess, 'SUCESSO',)
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}

function editaAtributosCentro(arrayInsert) {
	$('#nomeTd' + id).html(arrayInsert.nome)
	$('#telefoneTd' + id).html(arrayInsert.telefone)
	$('#cnpjTd' + id).html(arrayInsert.cnpj)
	$('#editaCusto' + id).attr('nome_edita', arrayInsert.nome)
	$('#editaCusto' + id).attr('cnpj_edita', arrayInsert.cnpj)
	$('#editaCusto' + id).attr('cep_edita', arrayInsert.cep)
	$('#editaCusto' + id).attr('email_edita', arrayInsert.email)
	$('#editaCusto' + id).attr('telefone_edita', arrayInsert.telefone)
	$('#editaCusto' + id).attr('endereco_edita', arrayInsert.endereco)
	$('#editaCusto' + id).attr('endereco_numero_edita', arrayInsert.endereco_numero)
	$('#editaCusto' + id).attr('endereco_complemento_edita', arrayInsert.endereco_complemento)
	$('#editaCusto' + id).attr('observacoes_edita', arrayInsert.observacoes)
	$('#editaCusto' + id).attr('tipo_telefone_edita', arrayInsert.tipo_telefone)
}


$(document).on('click', '.btnEdita', function () {
	$('#select-rolesEditar').multiSelect('deselect_all');
	id = $(this).attr('id_centro')
	nome_edita = $(this).attr('nome_edita')
	cnpj_edita = $(this).attr('cnpj_edita')
	observacoes_edita = $(this).attr('observacoes_edita')
	cep_edita = $(this).attr('cep_edita')
	email_edita = $(this).attr('email_edita')
	telefone_edita = $(this).attr('telefone_edita')
	endereco_edita = $(this).attr('endereco_edita')
	endereco_numero_edita = $(this).attr('endereco_numero_edita')
	endereco_complemento_edita = $(this).attr('endereco_complemento_edita')
	tipo_telefone_edita = $(this).attr('tipo_telefone_edita')
	$('#idEdita').val(id);
	$('#nomeEdita').val(nome_edita);
	$('#cnpjEdita').val(cnpj_edita);
	$('#cepEdita').val(cep_edita);
	$('#tipoTelefoneEdita').val(tipo_telefone_edita);
	$('#telefoneEdita').val(telefone_edita);
	$('#enderecoEdita').val(endereco_edita);
	$('#endereco_numeroEdita').val(endereco_numero_edita);
	$('#endereco_complementoEdita').val(endereco_complemento_edita);
	$('#emailEdita').val(email_edita);
	$('#observacoesEdita').val(observacoes_edita);
	selectUsers(id)
});

function selectUsers(id) {
	$.ajax({
		url: routeSelectUsuarios,
		data: {
			id: id,
		},
		method: "get",
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO')
		}
		$.each(response, function (i, user) {
			$('#select-rolesEditar option[value="' + user + '"]').attr('selected', true);
			$('#select-rolesEditar option[value="' + user + '"]').prop('selected',
				'selected');
			$('#select-rolesEditar').multiSelect('refresh');
		})
	})
}