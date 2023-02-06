$(document).ready(function () {
	$('#titulo').focus();
	$('.select').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		"language": {
			"noResults": function () {
				return "Sem resultados.";
			}
		},
		escapeMarkup: function (markup) {
			return markup;
		},
		width: '100%',
		theme: "bootstrap4",
	});

	$('.formularioArquivos').hide();
	$('.datepicker').datepicker({
		language: 'pt-BR',
		zIndex: 99999,
		autoHide: true
	});
});

//envia o formulario na tab de arquivos
$(document).on('click', '#enviaFormulario', function () {
	$('#formulario').submit();
})

$(document).on('click', '.abreArquivos', function () {
	$('.abreFormulario').removeClass('active');
	$('.abreArquivos').addClass('active');
	$('.formularioCria').fadeOut(400, function () {
		$('.formularioArquivos').fadeIn(400);
	})
})

$(document).on('click', '.abreFormulario', function () {
	$('.abreArquivos').removeClass('active');
	$('.abreFormulario').addClass('active');

	$('.formularioArquivos').fadeOut(400, function () {
		$('.formularioCria').fadeIn(400);
	});
})

$(document).on('hide.bs.modal', function () {
	Dropzone.forElement('.dropzone').removeAllFiles(true)
	$('#descricaoDoArquivo').val('')
})