$(document).ready(function () {
	$('.tabelaParticipantes').hide();

	//verifica se o request veio com erros e abre o modal
	validaErroInput = $("input").hasClass("is-invalid")
	validaErroSelect = $("select").hasClass("is-invalid")
	validaErroTA = $("textarea").hasClass("is-invalid")
	if (validaErroInput === true || validaErroSelect === true || validaErroTA === true) {
		$('#criar').modal('show')
	}

});

$(document).on('click', '#btnAdicionaParticipante', function () {
	$('#verParticipantes').modal('hide');
})

$(document).on('hide.bs.modal', '#verParticipantes', function () {
	$('#tableParticipantes').DataTable().clear().draw();
})



//ver participantes da ação
$(document).on('click', '.btnVerParticipantesDaAcao', function () {
	$('.nomeClienteParticipante').val('')
	$('.rfParticipante').val('')
	id = $(this).attr('id_acao')
	$('.id_acao').val(id);
	buscaParticipantes(id)
})