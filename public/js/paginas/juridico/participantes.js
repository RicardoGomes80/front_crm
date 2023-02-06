//criar participante
$(document).on('click', '.btnCriaParticipante', function () {
	acao_id = $('.id_acao').val();
	identificador = $('.rfParticipante').val();
	nome = $('.nomeClienteParticipante').val()
	$.ajax({
		data: {
			"_token": token,
			acao_id: acao_id,
			identificador: identificador,
		},
		url: criarParticipantesRota,
		method: 'post',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Não foi possível criar o participante', 'ATENÇÃO');
			return;
		}
		$('.rfParticipante').val('');
		$('.nomeClienteParticipante').val('')
		buscaParticipantes(acao_id)
		$('#adicionarParticipantes').modal('hide');
		toastr.success('Participante Criado', 'Sucesso');
	}).fail(function (error) {
		$('.rfParticipante').val('');
		$('.nomeClienteParticipante').val('')
		if (error.responseJSON.errors)
			$.each(error.responseJSON.errors, (index, erro) => {
				return toastr.error(erro, 'ATENÇÃO', { timeOut: 15000 });
			})
	});
})

$(document).on('click', '.btnBuscaPfParticipante', function () {
	identificador = $('.rfParticipante').val();
	$.ajax({
		data: {
			"_token": token,
			identificador: identificador,
		},
		url: localizaRfRoute,
		method: 'get',
	}).done(function (response) {
		if (!response) {
			$('.nomeClienteParticipante').val('');
			toastr.clear();
			toastr.error('Este RF não pertence a nenhum filiado!', 'ATENÇÃO');
			return;
		}
		$('.nomeClienteParticipante').val(response.nome);
	});
});


$('.rfParticipante').keypress(function (event) {
	if (event.keyCode == 13) {
		$('.btnBuscaPfParticipante').click();
	}
});

function buscaParticipantes(id_acao) {
	$('#tableParticipantes').DataTable().clear().draw();
	$('#verParticipantes').modal('show')
	$.ajax({
		data: {
			"_token": token,
			id: id_acao,
		},
		url: verParticipantesRoute,
		method: 'get',
	}).done(function (response) {
		$('.loading').hide();
		$('.tabelaParticipantes').fadeIn(400);
		$('.tabelaParticipantes').removeClass('d-none');
		if (!response) {
			toastr.clear();
			toastr.error('Não foi possivel localizar o participante', 'ATENÇÃO');
			return;
		}
		$.each(response, function (index, value) {
			adicionaHtmlParticipantes(value)
		});
	});
}

function adicionaHtmlParticipantes(value) {
	html = '<tr class="odd" id="participante' + value.id + '">'
	html += '<td>' + value.identificador + '</td>'
	html += '<td>' + value.nome + '</td>'
	html += '<td>' + value.desde + '</td>'
	html += '<td>'
	html += '<button type="button"class="mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-shadow btn-hover-shine remove-participante-btn" title="Remover" data-rota="' + inativaParticipanteRoute + '" id_participante="' + value.id + '" acao_id="' + value.acao_id + '"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>'
	html += '</td>'
	html += '</tr>'
	$('#tableParticipantes').DataTable({
		language: {
			url: urlDataTable
		}
	}).row.add($(html)).draw()
}

$(document).on('click', '.remove-participante-btn', function () {
	setarRota = $(this).attr('data-rota');
	id = $(this).attr('id_participante');
	acao_id = $(this).attr('acao_id');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse participante?",
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
		deleteParticipanteAjax(id, acao_id)
	});
});

function deleteParticipanteAjax(id, acao_id) {
	$.ajax({
		url: setarRota,
		data: {
			"_token": token,
			id: id,
			acao_id: acao_id,
		},
		method: 'post',
	}).done(function (response) {
		if (!response) {
			var msg = response.msg ||
				'Não foi possível remover este partcipante agora';
			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
			return;
		}
		var msg = response.msg || 'Participante removido';
		toastr.clear();
		toastr.success(msg, 'SUCESSO');
		$('#participante' + id).fadeOut(400);
	});
}