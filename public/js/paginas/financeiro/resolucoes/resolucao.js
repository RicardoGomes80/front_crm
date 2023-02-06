$(document).ready(function () {
	$('.set-select2').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function (params, data) {
			var itensData = params.term
			searchData = data.text.toLowerCase()
			if ($.trim(itensData) === '') {
				return data;
			}
			if (typeof searchData === 'undefined') {
				return null;
			}
			itensData = itensData.toLowerCase()
			if (searchData.indexOf(itensData) > -1) {
				var modifiedData = $.extend({}, data, true);
				modifiedData.text;
				return modifiedData;
			}
			return null;
		}
	});

	if ($('#idDaImportacao').val()) {
		makeTableCriticas()
		$('#btnSendEmMassa').attr('data-href', $('option:selected', '#idDaImportacao').attr('data-rota'));
		$('#btnSendEmMassa').attr('disabled', false);
	}
})

$('#idDaImportacao').on('change', function () {
	makeTableCriticas()
	$('#btnSendEmMassa').attr('data-href', $('option:selected', '#idDaImportacao').attr('data-rota'));
	$('#btnSendEmMassa').attr('disabled', false);
})

$('#pesquisaImportacao').on('click', function () {
	makeTableCriticas()
})

function makeTableCriticas() {
	$('#table').DataTable({
		processing: true,
		serverSide: true,
		paging: true,
		orderable: true,
		searching: true,
		iDisplayLength: 10,
		retrieve: true,
		dom: 'lfBrtip<"links">',
		initComplete: function (settings, json) {
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		},
		order: [
			[0, 'asc']
		],
		ajax: {
			"url": rotaCriticas + 'importacao_id=' + $('#idDaImportacao').val(),
			headers: {
				'X-CSRF-TOKEN': token
			},
			error: function (xhr, error, code) {
				makeTableCriticas()
			}
		},
		columns: [{
			data: 'identificador',
			name: 'identificador',
			searchable: true,
		},
		{
			data: 'nome',
			name: 'nome',
			searchable: true,
		},
		{
			data: 'erro',
			name: 'erro',
			searchable: true,
		},
		{
			data: 'tipo',
			name: 'tipo',
			searchable: true,
		},
		{
			className: "text-center",
			data: 'email_enviado',
			name: 'email_enviado',
			searchable: true,
		},
		{
			className: "text-center",
			data: 'falha_na_resolucao',
			name: 'falha_na_resolucao',
			searchable: true,
		},
		{
			data: 'acoes',
			name: 'acoes',
			orderable: false
		},
		],
		createdRow: function (row, data, dataIndex) {
			$(row).attr('data-entry-id', data.id);
		},
		language: languageDatatables
	}).draw();
}

$(document).on('click', '.sendCobranca', function () { sendCobranca($(this).attr('data-href')) })

function sendCobranca(rota) {
	Swal.fire({
		title: "ATENÇÃO",
		html: getHtmlFormaDePagamento(),
		confirmButtonText: 'GERAR',
		icon: "warning",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'ENVIAR EMAIL',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		data = getDataCobranca()
		sendAjax(rota, data)
	});
}

function sendAjax(rota, data) {
	bloqueiaPagina();
	$.ajax({
		url: rota,
		data: data,
		method: 'post'
	}).done((response) => {

		desbloqueiaPagina()
		makeTableCriticas()
		toastr.success(response.msg, 'SUCESSO')
	}).fail((response) => {
		toastr.error(response.responseJSON.msg ?? 'Erro inesperado ao enviar cobranças.', 'FRACASSO')
		desbloqueiaPagina()
		makeTableCriticas()
	})
}

function getDataCobranca() {
	return {
		token: token,
		permitirEscolhaDoFiliado: $('#permitirEscolhaTrue').is(':checked') ? 1 : 0,
		tipo_pagamento: $('#pagamentoBoleto').is(':checked') ? 'BOLETO' : 'CRÉDITO',
		parcelas: $('#parcelas').val()
	}
}

function getHtmlFormaDePagamento() {
	return '<label for="name" class="col-form-label">Forma de Pagamento:</label><div class="form-check"><input class="form-check-input input-escolha" type="radio" name="permitirEscolhaDoFiliado" id="permitirEscolhaTrue" value="1" checked><label class="form-check-label">Permitir que o Filiado Escolha.</label></div><div class="form-check"><input class="form-check-input input-escolha" type="radio" name="permitirEscolhaDoFiliado" value="0"><label class="form-check-label">Permitir Somente o seguinte método:</label></div><div class="mt-2 d-none" id="escolher-forma-de-pagamento"><div class="form-check"><input class="form-check-input" type="radio" name="tipo_pagamento" id="pagamentoBoleto" value="BOLETO"></input><label class="form-check-label">Boleto Bancário</label></div><div class="form-check"><input class="form-check-input" type="radio" name="tipo_pagamento" id="" value="CREDITO"><label class="form-check-label">Cartão de crédito</label></div></div><label for="parcelas" class="col-form-label">Max Parcelas (Crédito):</label><input id="parcelas" value="1" type="number" class="form-control" name="parcelas" required>'
}

$(document).on('change', '.input-escolha', function () {
	$(this).val() == 1 ? $('#escolher-forma-de-pagamento').addClass('d-none') : $('#escolher-forma-de-pagamento').removeClass('d-none')
})

$(document).on('click', '.abrirObservacoes', function () {
	buscarObservacoes($(this).attr('data-busca'))
	$('#btnSalvaObservacao').attr('data-rota', $(this).attr('data-salvar'))
})

function buscarObservacoes(rota) {
	$.ajax({
		url: rota,
	}).done((response) => $('#observacao').val(response)).fail((response) => toastr.error('Não foi possível buscar a observação'))
}

$('#btnSalvaObservacao').on('click', function () {
	rota = $(this).attr('data-rota')
	observacoes = $('#observacao').val()
	salvaObservacoes(rota, observacoes)
})

$(document).on('hide.bs.modal',function () {
	$('.limpar').val('')
})

function salvaObservacoes(rota, observacoes) {
	$.ajax({
		url: rota,
		data: {
			token: token,
			observacoes: observacoes
		},
		method: 'post'
	}).done((response) => toastr.success('Observação salva com sucesso', 'SUCESSO')).fail((response) => toastr.error('Não foi possível salvar a observação', 'ATENÇÃO'))
}

