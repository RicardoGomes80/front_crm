
$('#old-editar-situacao-id').val($('#editar-situacao-id option:selected').val());

$('#editar-situacao-id').on('change', function (e) {
	situacao = $('#editar-situacao-id option:selected').text().trim();
	if ((situacao == 'DESLIGADO') || (situacao == 'EXCLUÍDO')) {
		$('#editar-situacao-id').removeAttr("disabled");
		$('#motivo-desligamento').removeAttr("disabled");
		$('#editar-data-saida').attr('required', true);
		$('#motivo-desligamento').attr('required', true);
	}
	else {
		$('#motivo-desligamento').attr('disabled', true);
		$('#editar-data-saida').removeAttr('required');
	}
});


$('#editar-data-saida').on('change', function (e) {
	date = new Date();
	mes = date.getMonth();
	ano = date.getFullYear();
	dia = date.getDate();
	dataDeSaida = $('#editar-data-saida').val();
	dataDeSaida = dataDeSaida.split("/");
	var d1 = new Date();
	var d2 = new Date(dataDeSaida[2] + '-' + dataDeSaida[1] + '-' + dataDeSaida[0]);
	if (d1.getTime() <= d2.getTime()) {
		toastr.error('Data de saída é inválida', 'ATENÇÃO');
		$('#motivo-desligamento').attr('disabled', true);
		$('#motivo-desligamento').removeAttr('required');
		old_editar_situacao_id = $('#old-editar-situacao-id').val()
		$('#editar-situacao-id').val(old_editar_situacao_id).change();
	} else {
		if ($('#editar-data-saida').val() == '') {
			$('#motivo-desligamento').attr('disabled', true);
			$('#motivo-desligamento').removeAttr('required');
			old_editar_situacao_id = $('#old-editar-situacao-id').val()
			$('#editar-situacao-id').val(old_editar_situacao_id).change();
		} else {
			$('#editar-situacao-id').val(6).change();
			$('#editar-situacao-id').removeAttr('disabled');
			$('#motivo-desligamento').removeAttr('disabled');
			$('#motivo-desligamento').attr('required', true);
		}
	}
})
$('.btn-item-editar-filiacao').on('click', function (e) {
	let modalName = $(this).attr('data-target');
	setAction = $(this).attr('data-href');
	setActionForm = $(this).attr('data-action-form');
	formName = $(this).attr('data-form-name');
	hashFormName = '#' + formName;
	$(modalName).find('form').attr('id', formName).attr('action', setAction);
	setForm = $(hashFormName);
	setForm.attr('action', setActionForm);
	$('#div-editar-data-saida').addClass('d-none')
	$('#editar-data-saida').removeClass('d-none')
	$('#editar-situacao-id').removeAttr("selected");
	$.ajax({
		url: setAction,
		context: document.body
	}).done(function (response) {
		$('#old_filiacao').val(JSON.stringify(response));
		if (!response.id) {
			toastr.error('Não foi possível retornar os dados solicitados', 'ATENÇÃO');
			return;
		}
		if (response.data_saida == null) {
			disabled = false;
		}
		else {
			disabled = 'disabled';
		}
		$('#editar-data-cadastro').val(response.data_cadastro);
		$('#editar-data-filiacao').val(response.data_filiacao);
		$('#editar-data-adesao').val(response.data_adesao);
		$('#editar-data-saida').val(response.data_saida);
		$('#motivo-desligamento').val(response.motivo_desligamento_id).change();
		$('#div-editar-data-saida').text(response.data_saida);
		if (response.data_saida != null) {
			$('#editar-data-saida').addClass('d-none')
			$('#div-editar-data-saida').removeClass('d-none')
			$('#editar-situacao-id').attr('disabled', 'disabled')
		}
		$('#editar-txt-observacao').text(response.observacao);
		valor_mensalidade = response.valor_mensalidade || '0';
		valor_ressarcimento = response.valor_ressarcimento || '0';
		valor_mensalidade_view = valor_mensalidade.replace(".", ",");
		valor_ressarcimento_view = valor_ressarcimento.replace(".", ",");
		$('#editar-valor-mensalidade').val(valor_mensalidade_view);
		$('#editar-valor-ressarcimento').val(valor_ressarcimento_view);
		$('#editar-data-cadastro').attr('disabled', disabled);
		$('#editar-data-filiacao').attr('disabled', disabled);
		$('#editar-data-adesao').attr('disabled', disabled);
		$('#editar-data-saida').attr('disabled', disabled);
		$('#btn-submit-form-editar-filiacao').attr('disabled', disabled);
		$('#editar-valor-ressarcimento').attr('disabled', disabled)
		$('#editar-valor-mensalidade').attr('disabled', disabled)
		$('#editar-txt-observacao').attr('disabled', disabled)
		$(modalName).modal('show');
	}).fail(function (response) {
		toastr.error('Não foi possível retornar os dados solicitados', 'ATENÇÃO');
	});
});


$(document).ready(function () {

	$('.moedaReal').inputmask('decimal', {
		radixPoint: ",",
		groupSeparator: ".",
		autoGroup: true,
		digits: 2,
		digitsOptional: false,
		placeholder: '0',
		rightAlign: false,
		onBeforeMask: function (value, opts) {
			return value;
		}
	});


	$('#gravar-situacao-id').attr('disabled', 'disabled')

	$("#gravar-situacao-id option").filter(function () {
		return $.trim($(this).text()) == 'DESLIGADO'
	}).remove();
	$("#gravar-situacao-id option").filter(function () {
		return $.trim($(this).text()) == 'EXCLUÍDO'
	}).remove();
	$("#gravar-situacao-id").val(10).change();
	$('#data-cadastro').on('change', function (e) {
		$('#gravar-situacao-id').removeAttr("disabled");
	})
	$('#gravar-situacao-id').on('change', function (e) {
		selecao = $('#gravar-situacao-id option:selected').text();
		if ((selecao.trim() == 'ATIVO - INADIMPLENTE') || (selecao.trim() == 'ATIVO') && $('#data-adesao').val() == '') {
			toastr.error('Não foi possível selecionar como ATIVO/ATIVO - INADIMPLENTE sem data de adesão', 'ATENÇÃO');
			$("#gravar-situacao-id").val(10).change();
		}
	})
});

$('.gravar-status').on('change', function () {
	$('#gravar-status').val($('.gravar-status option:selected').text())
})

$('.gravar-status-edit').on('change', function () {
	$('#gravar-status-edit').val($('.gravar-status-edit option:selected').text())
})
