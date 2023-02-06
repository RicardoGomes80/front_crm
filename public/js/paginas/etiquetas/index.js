$('.buscaClientes').on('click', function () {
	rota_clientes = $(this).attr('data-rota-clientes')
	$('#etiqueta_id').val($(this).attr('etiqueta-id'))
	buscaClientes(rota_clientes)
})

$(document).on('click', '.deleteCliente', function () {
	cliente_id = $(this).attr('cliente_id')
	rota_delete = $(this).attr('data-rota')
	confirmeDelete(cliente_id, rota_delete)
})

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

$('#dre').on('change', function () {
	$('#unidades').attr('disabled', 'disabled')
	$('#unidades').html('')
	rota = $(this).val()
	buscarUnidades(rota)
})

$('#adcionarPorUnidade').on('click', function () {
	rota = $('#unidades').val()
	if (!rota) {
		toastr.warning('Selecione uma unidade!', 'ATENÇÃO')
		return;
	}
	!checaCorrespondencia() ?  ' ': adicionaPorUnidade(rota)
})

$('#adicionarPorCargo').on('click', function () {
	rota = $('#cargos').val()
	if (!rota) {
		toastr.warning('Selecione um cargo!', 'ATENÇÃO')
		return;
	}
	rota = rota.replace(':etiqueta_id', $('#etiqueta_id').val())
	!checaCorrespondencia() ?  ' ': adicionaPorCargo(rota)
})

$('#buscaFiliado').on('click', function () {
	identificador = $('#identificador').val()
	limparCampos()
	!checaCorrespondencia() ?  '': buscarFiliado(identificador)
})

$('#identificador').focusout(function () {
	identificador = $('#identificador').val()
	limparCampos()
	!checaCorrespondencia() ?  '':  buscarFiliado(identificador)
})

$('#adicionarPorRf').on('click', function () {
	adicionaPorRf($('#identificador').val(), $('#enderecos').val(), $('#cliente_id').val(), $('#etiqueta_id').val())
})

function buscaClientes(rota_clientes) {
	tableClientes = $('#table-clientes').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		paging: true,
		orderable: true,
		searching: true,
		iDisplayLength: 10,
		retrieve: true,
		scrollCollapse: true,
		dom: 'lfBrtip<"links">',
		order: [
			[0, 'desc']
		],
		ajax: {
			"type": "GET",
			"url": rota_clientes,
			headers: {
				'X-CSRF-TOKEN': token,
			},
			error: function (xhr, error, code) {
				buscaClientes(rota_clientes)
			}
		},
		buttons: [{
			extend: 'csv',
			exportOptions: {
				columns: [0, 1, 2, 3, 4]
			}
		},
		{
			extend: 'pdf',
			exportOptions: {
				columns: [0, 1, 2, 3, 4]
			}
		},
			'colvis'
		],
		columns: [
			{
				className: 'dt-control text-center',
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
				data: 'endereco',
				name: 'endereco',
				searchable: true,
			},
			{
				data: 'acoes',
				name: 'acoes',
				searchable: true,
			},

		],
		createdRow: function (row, data, dataIndex) {
			$(row).attr('data-entry-id', data.id);
		},
		language: languageDataTables
	}).draw();
}

function buscarFiliado(identificador) {
	$.ajax({
		url: etiquetaBuscarCliente,
		data: {
			"_token": token,
			identificador: identificador,
			tipo_correspondencia: $('#tiposCorrespondencias').val()
		},
		method: 'get'
	}).done(function (response) {

		if (response['warning']) {
			return toastr.warning(response['warning'], 'ATENÇÃO')
		}

		cliente = response['cliente']
		enderecos = response['enderecos']
		adicionaHtmlClientes(cliente)
		adicionarHtmlEnderecos(enderecos)
	}).fail(error => toastr.error('Erro inesperado ao buscar dados', 'ATENÇÃO'))
}

function checaCorrespondencia() {
	if(!$('#tiposCorrespondencias').val()) {
		toastr.warning('Prrencha o tipo de endereço da busca!')
		return;
	}
	return true;
}

function adicionaHtmlClientes(cliente) {
	$('#nomeFiliado').val(cliente.nome)
	$('#cliente_id').val(cliente.id)
}

function adicionarHtmlEnderecos(enderecos) {
	$('#enderecos').removeAttr('disabled')
	html = ''
	$.each(enderecos, (index, value) => {
		if (value.endereco) {
			html += '<option value="' + value.id + '">' + value.cep + ' - ' + value.endereco + ', ' + value.numero;
			if (value.complemento) {
				html += ' - ' + value.complemento
			}
			html += '</option>';
		}
	})
	$('#enderecos').html(html)
}

function adicionaPorUnidade(rota) {
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja mesmo adicionar todos os filiados da unidade selecionada na lista?",
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
		$.ajax({
			url: rota,
			data: {
				"_token": token,
				tipo_correspondencia: $('#tiposCorrespondencias').val()
			},
			method: 'post'
		}).done(function (response) {
			somaOrDeleteFiliado(response, true)
			toastr.success('Filiados Adicionados', 'SUCESSO')
			tableClientes.ajax.reload()
		}).fail(error => toastr.error('Erro inesperado ao adicionar filiados da lista.', 'ATENÇÃO'))
	})
}

function adicionaPorCargo(rota) {
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja mesmo adicionar todos os filiados deste cargo selecionado na lista?",
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
		$.ajax({
			url: rota,
			data: {
				"_token": token,
				tipo_correspondencia: $('#tiposCorrespondencias').val()
			},
			method: 'post'
		}).done(function (response) {
			toastr.success('Filiados Adicionados', 'SUCESSO')
			tableClientes.ajax.reload()
			somaOrDeleteFiliado(response, true)
		}).fail(error => toastr.error('Erro inesperado ao adicionar filiados da lista.', 'ATENÇÃO'))
	})
}

function adicionaPorRf(identificador, endereco_id, cliente_id, etiqueta_id) {
	$.ajax({
		url: adicionarClienteRoute,
		data: {
			identificador: identificador,
			cliente_id: cliente_id,
			endereco_id: endereco_id,
			etiqueta_id: etiqueta_id,
		},
		method: 'post'
	}).done(function (response) {
		if (response) {
			$('#identificador').val('')
			toastr.success('Sucesso ao adicionar Filiado na Lista', 'SUCESSO')
			limparCampos()
			somaOrDeleteFiliado(1, true)
			tableClientes.ajax.reload()
		}
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}

function buscarUnidades(rota) {
	etiqueta_id = $('#etiqueta_id').val()
	$.ajax({
		url: rota,
		method: 'get'
	}).done(function (response) {
		$('#unidades').removeAttr('disabled')
		$('#unidades').html('')
		html = ''
		html = '<option value="">Selecione</option>'
		$.each(response, (index, value) => {
			rota = rotaAdicionar.replace(':ce_codigo', value.ce_codigo).replace(':dre_codigo', value.dre_codigo).replace(':unidade_codigo', value.unidade_codigo).replace(':etiqueta_id', etiqueta_id)
			html += '<option value="' + rota + '">' + value.ce_codigo + '.' + value.dre_codigo + '.' + value.unidade_codigo + ' - ' + value.unidade_descricao + '</option>'
		})
		$('#unidades').html(html)
	}).fail(error => toastr.error('Erro inesperado ao buscar unidades', 'ATENÇÃO'))
}

function confirmeDelete(cliente_id, rota_delete) {
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse filiado?",
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
		$.ajax({
			url: rota_delete,
			data: {
				cliente_id: cliente_id
			},
			method: 'get'
		}).done(function (response) {
			if (response == 1) {
				toastr.success('Filiado removido da lista.', 'Sucesso')
				somaOrDeleteFiliado(1, false)
				tableClientes.ajax.reload()
			} else {
				toastr.error('Erro inesperado ao exlcuir filiado da lista.', 'ATENÇÃO')
			}
		}).fail(error => toastr.error('Erro inesperado ao exlcuir filiado da lista.', 'ATENÇÃO'))
	})
}

function somaOrDeleteFiliado(value, sum) {
	etiquetaId = $('#etiqueta_id').val()
	value = parseInt(value)
	totalAtual = parseInt($('#counter_clientes' + etiquetaId).html())
	if (sum) {
		$('#counter_clientes' + etiquetaId).html(totalAtual + value)
	} else {
		$('#counter_clientes' + etiquetaId).html(totalAtual - value)
	}
}

function limparCampos() {
	$('#enderecos').attr('disabled', 'disabled')
	$('#enderecos').html('')
	$('#nomeFiliado').val('')
	$('#cliente_id').val('')
	$('.limpar').val('').change()
}