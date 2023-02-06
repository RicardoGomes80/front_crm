$('.validarFormulario').on('click', function () {
	$('#criaInputs').html('')
	$('.emails_emails_values').each(function () {
		html = '<input value="' + $(this).html() + '" name="emails[email][]" type="hidden">'
		$('#criaInputs').append(html)
	});
	$('.emails_contatos_value').each(function () {
		html = '<input value="' + $(this).html() + '" name="emails[contato][]" type="hidden">'
		$('#criaInputs').append(html)
	});
	$('.telefones_tipos_value').each(function () {
		html = '<input value="' + $(this).html() + '" name="telefones[tipo][]" type="hidden">'
		$('#criaInputs').append(html)
	});
	$('.telefones_ddd_value').each(function () {
		html = '<input value="' + $(this).html() + '" name="telefones[ddd][]" type="hidden">'
		$('#criaInputs').append(html)
	});
	$('.telefones_telefones_value').each(function () {
		html = '<input value="' + $(this).html() + '" name="telefones[telefone][]" type="hidden">'
		$('#criaInputs').append(html)
	});
	$('.telefones_ramals_value').each(function () {
		html = '<input value="' + $(this).html() + '" name="telefones[ramal][]" type="hidden">'
		$('#criaInputs').append(html)
	});

	$('#submitForm').click();
})


$(document).on('blur', '.viaCep', function () {
	cep = $(this).val().replace(/\D/g, '')
	buscaCep(cep)
})

function buscaCep(cep) {
	$.getJSON('https://viacep.com.br/ws/' + cep + '/json/?callback=?', (response) => {

		response.logradouro ? $('#endereco').val(response.logradouro) : $('#endereco').val('')
		response.bairro ? $('#bairro').val(response.bairro) : $('#bairro').val('')
		response.localidade ? $('#cidade').val(response.localidade) : $('#cidade').val('')

	})
}