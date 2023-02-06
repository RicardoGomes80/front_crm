$(document).ready(function() {
	$('.datepicker').datepicker({
		language: 'pt-BR',
		zIndex: 99999,
		autoHide: true
	});

	$('.select-multiplo').multiselect({
		allSelectedText: 'Todos',
		includeSelectAllOption: true,
		enableFiltering: true,
		enableCaseInsensitiveFiltering: true,
		buttonWidth: '100%',
		maxHeight: 400,
	});

	$('.set-select2').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function(params, data) {
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
})

$('#modalClientesSelecionados').on('hide.bs.modal', function() {
	$('#table').DataTable().clear().draw();
})

$('#tipo').on('change', function() {
	$('#divGeral').addClass('d-none').fadeOut()
	$('#divPorUnidade').addClass('d-none').fadeOut()
	$('#divPorEndereco').fadeOut()
	$('#spanEndereco').fadeOut()
	$('#etiqueta_select').addClass('d-none').fadeOut()
	$('#tipo_etiqueta_select').addClass('d-none').fadeOut()
	$('#divTerceiros').addClass('d-none').fadeOut()
	$('#unidadeDiv').addClass('d-none').fadeOut()
	$('#divAutorizacao').addClass('d-none').fadeOut()
	if ($(this).val() == "endereco_filiado" || $(this).val() == "endereco_prontuario") {
		$('#spanEndereco').fadeIn()
		$('#divPorEndereco').fadeIn()
		$('#divGeral').removeClass('d-none').fadeIn()
		$('#unidadeDiv').removeClass('d-none').fadeIn()
		$('#divAutorizacao').removeClass('d-none').fadeIn()
	} else if ($(this).val() == "lista_impressao") {
		$('#tipo_etiqueta_select').removeClass('d-none').fadeIn()
		$('#etiqueta_select').removeClass('d-none').fadeIn()
	} else if ($(this).val() == "endereco_unidade") {
		$('#divPorUnidade').removeClass('d-none').fadeIn()
		$('#divGeral').removeClass('d-none').fadeIn()
		$('#unidadeDiv').removeClass('d-none').fadeIn()
	} else if ($(this).val() == "endereco_terceiros") {

		$('#divGeral').removeClass('d-none').fadeIn()
		$('#divTerceiros').removeClass('d-none').fadeIn()
	}
})

$('#preview-modal').on('hide.bs.modal', function() {
	$("#pdf_iframe").contents().find("body").html('');
	$('#carregando').removeClass('d-none')
	$('#carregado').addClass('d-none')
})

$('#submitForm').on('click', function() {
	data = buscaInputs();
	if (!data) {
		return;
	}
	buscaDadosAjax(data)
})

document.getElementById('pdf_iframe').onload = function() {
	$('#carregando').addClass('d-none')
	$('#carregado').removeClass('d-none')
}

$('#btnfiltar').on('click', function() {
	data = buscaInputs();
	if (!data) {
		return;
	}
	buscaDadosAjax(data, true);
})

function buscaInputs() {
	tipo = $('#tipo').val()
	etiquetas_per_page = $('#etiquetas_per_page').val()
	order_by = $('#order_by').val()
	situacao_funcional = $('#situacao_funcional').val()
	categoria_funcional = $('#categoria_funcional').val()
	etiqueta_id = $('#etiqueta_id').val()
	curso = $('#curso').val()
	turma = $('#turma').val()
	situacao = $('#situacao').val()
	unidade_inicial = $('#unidade_inicial').val()
	unidade_final = $('#unidade_final').val()
	categoria = $('#categoria').val()
	cargo = $('#cargo').val()
	categoria = $('#categoria').val()
	data_saida_inicial = $('#data_saida_inicial').val()
	data_saida_final = $('#data_saida_final').val()
	autorizacao_debito = $('#autorizacao_debito').val()
	data_filiacao_inicial = $('#data_filiacao_inicial').val()
	data_filiacao_final = $('#data_filiacao_final').val()
	data_cadastro_inicial = $('#data_cadastro_inicial').val()
	data_cadastro_final = $('#data_cadastro_final').val()
	id_terceiros_tipo = $('#id_terceiros_tipo').val()
	tipo_etiqueta_lista = $('#tipo_etiqueta_lista').val()
	cep_inicial = $('#cep_inicial').val()
	cep_final = $('#cep_final').val()
	rf_inicial = $('#rf_inicial').val()
	rf_final = $('#rf_final').val()
	tipo_acao = $('#tipo_acao').val()
	acoes = $('#acoes').val()

	data = {
		tipo: tipo,
		order_by: order_by,
		etiquetas_per_page: etiquetas_per_page,
		unidade_inicial: unidade_inicial,
		unidade_final: unidade_final,
		cep_inicial: cep_inicial,
		cep_final: cep_final,
		autorizacao_debito: autorizacao_debito,
		rf_inicial: rf_inicial,
		rf_final: rf_final,
		cargo: cargo,
		curso: curso,
		turma: turma,
		categoria: categoria,
		situacao_funcional: situacao_funcional,
		categoria_funcional: categoria_funcional,
		situacao: situacao,
		data_saida_inicial: data_saida_inicial,
		data_saida_final: data_saida_final,
		data_filiacao_inicial: data_filiacao_inicial,
		data_filiacao_final: data_filiacao_final,
		data_cadastro_inicial: data_cadastro_inicial,
		data_cadastro_final: data_cadastro_final,
		id_terceiros_tipo: id_terceiros_tipo,
		tipo_etiqueta_lista: tipo_etiqueta_lista,
		tipo_acao: tipo_acao,
		acoes: acoes
	}
	if (tipo == 'lista_impressao') {
		data.etiqueta_id = etiqueta_id;
	}
	return data;
}

function buscaDadosAjax(dados, naTabela) {
	if (naTabela) {
		buscaParaTabela(dados)
	} else {
		buscaParaPDF(dados)
	}
}

$('#categoria').on('change', function() {
	$('#curso').html('')
	$('#curso').multiselect('rebuild');
	buscarCursos($(this).val())
})

function buscarCursos(cursos) {
	$.ajax({
		url: routeBuscarCursos,
		data: {
			cursos: cursos
		},
		method: 'get'
	}).done(function(response) {
		
		html = ''
		$.each(response, (index, value) => {
			html += '<option value="' + value.id + '">' + value.descricao + '</option>'
		})
		$('#curso').html(html)

		$('#curso').multiselect('rebuild');
	})
}

function buscaParaTabela(data) {
	$('#table').DataTable().clear().draw()
	$('#table').DataTable().destroy()
	$('#modalClientesSelecionados').modal('show')
	tabela = $('#table').DataTable({
		processing: true,
		serverSide: true,
		iDisplayLength: 10,
		retrieve: true,
		dom: 'lfBrtip<"links">',
		order: [
			[0, 'asc']
		],
		buttons: [{
				extend: 'csv',
				exportOptions: {
					columns: [0, 1]
				}
			},
			{
				extend: 'pdf',
				exportOptions: {
					columns: [0, 1]
				}
			},
			'colvis'
		],
		ajax: {
			"type": "POST",
			"url": filtroRoute,
			headers: {
				'X-CSRF-TOKEN': token,
			},
			data: data,
		},

		columns: [{
				searchable: true,
				orderable: true,
				data: "identificador",
				name: 'identificador'
			},
			{
				searchable: true,
				orderable: true,
				data: "nome",
				name: 'nome'
			},
			{
				searchable: true,
				orderable: true,
				data: null,
				name: 'endereco',
				render: function(data, type, row) {
					html = data.cep + ' - ' + data.endereco + ', ' + data.numero
					if (data.complemento) {

						html += ' - ' + data.complemento
					}

					return html
				}
			},
		],
		createdRow: function(row, data, dataIndex) {
			$(row).attr('data-entry-id', data.id);
		},
		language: languageDt
	}).draw();
}

function buscaParaPDF(dados) {

	$('#formPDF').submit()
	$('#preview-modal').modal('show')
}

function limparFiltros() {
	$('.limpar').val('').change()
}