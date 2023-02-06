$(document).ready(function () {
	$.datetimepicker.setLocale('pt');

	$('.btnAbreAdicionarParticipantes').tooltip()

	$('.numeric').inputmask({
		alias: "numeric",
		allowMinus: false,
	});
	$('.datepicker').datepicker({
		language: 'pt-BR',
		zIndex: 99999,
		autoHide: true,
		dateFormat: 'dd/mm/yy'
	});
	$('.input-time').bootstrapMaterialDatePicker({
		date: false,
		format: 'HH:mm',
		showHeader: false,
		cancelText: 'FECHAR',
		okText: 'PRÓXIMO',
		switchOnClick: true,
		showButtons: true,
		clearButton: true,
	});

	$('.select-user').select2({
		placeholder: "Selecione o participante",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function (params, data) {
			return matchStart(params, data);
		},
	});

	
	$('.select').select2({
		placeholder: "Selecione o modelo a ser emitido",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function(params, data) {
			return matchStart(params, data);
		},
	});

	$('.select-tipo').select2({
		placeholder: "Selecione o tipo",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function (params, data) {
			return matchStart(params, data);
		},
	});
})

$(document).on('click', '#btnAdicionaTipo', function () {
	tipoNome = $('#tipoNome').val()
	if (tipoNome == '') return toastr.error('O nome não pode estar vazio', 'ATENÇÃO');
	if (tipoNome.lenght > 255) return toastr.error('O nome não pode ter mais de 255 caracteres', 'ATENÇÃO');
	return adicionaTipo(tipoNome)
})

function adicionaTipo(tipoNome) {
	return $.ajax({
		url: adicionaTipoRoute,
		data: {
			nome: tipoNome
		},
		method: 'post'
	}).done(function (response) {
		if (!response) return toastr.error('Não foi possível adicionar este tipo agora', 'ATENÇÃO');
		toastr.success('Tipo adicionado', 'Sucesso');
		htmlOptionTipo = '<option value="' + response + '" selected>' + tipoNome + '</option>'
		$('#adicionaTipoModal').modal('hide')
		$('#tipoNome').val('')
		return $('#tipoId').append(htmlOptionTipo)
	}).fail(function (error) {
		if (error.responseJSON.errors)
			$.each(error.responseJSON.errors, (index, erro) => {
				return toastr.error(erro, 'ATENÇÃO', { timeOut: 15000 });
			})
	})
}

$(document).on('click', '.removeEvento', function () {
	id_evento = $(this).attr('id_evento')
	rota = $(this).attr('data-rota')
	return removeEvento(id_evento, rota);
})

function removeEvento(id_evento, rota) {
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse evento?",
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
		return ajaxRemoveEvento(id_evento)
	});
}

//faz o ajax para remover o evento 
function ajaxRemoveEvento(evento_id) {
	return $.ajax({
		url: rota,
		data: {
			"_token": token,
			evento_id: evento_id,
		},
		method: 'DELETE',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Não foi possível excluir este evento', 'ATENÇÃO');
			return;
		}
		toastr.clear();
		toastr.success('Evento inativado', 'SUCESSO');
		$('#remove' + id_evento).fadeOut(300);
	}).fail(function (response) {
		toastr.clear();
		toastr.error('Não foi possível excluir este evento', 'ATENÇÃO');
	});
}


function buscaParticipanteFiliado(documento) {
	$.ajax({
		url: buscaParticipanteFiliadoRoute,
		data: {
			documento: documento
		},
		method: 'get'
	}).done(function (response) {
		if (!response) return toastr.warning('Este participante não é um filiado', 'Atenção')
		return $('#nomeParticipante').val(response.nome)
	}).fail(error => toastr.error('Não foi possivel busca este participante!', 'ATENÇÃO'))
}
