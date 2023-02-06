$(document).ready(function () {
	if ($('#identificador').val()) {
		buscaDadosCliente($('#identificador').val())
	}
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
})

$('#identificador').on('keypress', function (e) {
	if (e.which == 13) {
		buscaDadosCliente(identificador)
	}
});

$('#buscaFiliado').on('click', function () {
	buscaDadosCliente(identificador)
})

function countChar(val) {
	var len = val.value.length;
	if (len >= 2000) {
		val.value = val.value.substring(0, 2000);
	} else {
		cunt = 2000 - len;
		$('#charNum').text('Caracteres disponíveis: ' + cunt);
	}
};

function buscaDadosCliente() {
	identificador = $('#identificador').val();

	if (!identificador) {
		toastr.error('O identificado não pode estar vazio');
		return;
	}

	bloqueiaPagina();
	$('#dadosCliente').html('')
	$('.campoDesabilitado').attr('readonly', 'readonly')
	$.ajax({
		url: buscaDadosClienteRoute,
		data: {
			identificador: identificador
		},
		method: 'get'
	}).done(function (response) {
		if (!response) {
			return toastr.warning('Filiado não encontrado', 'ATENÇÃO')
		}
		erros = checkHasErrors(response)
		if (!erros) {
			$.each(response, function (index, value) {
				if (index != 'id') {
					colSize = 2;
					if (index == 'cpf') {
						index = 'CPF'
						value = formataCPF(value)
					}
					if (index == 'nascimento') {
						data = new Date(value);
						value = data.toLocaleDateString("pt-BR")
					}
					html = '<div class="col-' + colSize + '">'
					html += '<label for="name" class=" col-form-label">' + capitalizeFirstLetter(index) + '</label>'
					html += '<input type="text" value="' + value + '" class="form-control " readonly name="' + index + '">'
					html += '</div>'
				} else {
					html = '<input type="hidden" name="cliente_id" value="' + value + '" class="form-control" >'
				}
				$('#dadosCliente').append(html)
			})
			$('.campoDesabilitado').removeAttr('readonly')
		}
		desbloqueiaPagina()
	}).fail(error => desbloqueiaPagina())
}

function checkHasErrors(response) {
	erros = 0
	html = '<div class="col-12"><label class="text-danger"> * Corrija as pendências deste filiado antes de emitir uma cobrança:</label><ul>'
	$.each(response, (index, value) => {
		if (!value) {
			html += '<li> É preciso adicionar um ' + index + ' para este filiado.</li>'
			erros = 1
		}
	})
	if (erros) {
		rota = url.replace(':id', response.id)
		html += '</ul>'
		html += '<a type="button" href="' + rota + '" class="btn btn-primary">Corrigir</a>';
		html += '</div>'
		html += '<hr>';
		$('#dadosCliente').append(html)
	}
	return erros;
}

function formataCPF(cpf) {
	cpf = cpf.replace(/[^\d]/g, "");
	return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
}

function capitalizeFirstLetter(string) {
	return string.charAt(0).toUpperCase() + string.slice(1);
}

$('.input-escolha').on('change', function () {
	$(this).val() == 1 ? $('#escolher-forma-de-pagamento').addClass('d-none') : $('#escolher-forma-de-pagamento').removeClass('d-none')
})