$(document).ready(function () {
	CKEDITOR.config.height = '160px'
	CKEDITOR.config.autoGrow_onStartup = true
	CKEDITOR.config.image_previewText = ' '
	CKEDITOR.config.htmlEncodeOutput = false
	CKEDITOR.config.entities = false
	editor = CKEDITOR.replaceAll('CKEDITOR')
})

$(document).on('hide.bs.modal', function () {
	$('.limpar').val('')
	$('.limpar').val(null).trigger('change')
})

function buscaNomeFiliado(identificador, input) {
	identificador = identificador.replace(/[^0-9\-.,c_C]/g, '');
	$.ajax({
		url: buscarPorIdentificadorRoute,
		data: {
			identificador: identificador
		},
		method: 'get'
	}).done(function (response) {
		if (!input) {

			$('#nome').val(response)

		} else[
			$('#' + input).val(response)
		]
	})
}

$('body').on('shown.bs.modal', function () {
	$('#identificador').trigger('focus');
	$('#nomeChapa').trigger('focus');
})