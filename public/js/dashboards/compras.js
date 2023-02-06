$('#botaoBuscarCompras').on('click', function () {
	periodo = $('#dataFiltroCompras').val()
	if (!periodo) return toastr.error('O período não pode estar vazio!', 'ATENÇÃO')
	return chartCompras(periodo)
})

function chartCompras(periodo) {
	$.ajax({
		url: buscaDadosTotalComprasRoute,
		data: {
			periodo: periodo
		},
		method: 'get'
	}).done((response) => {
		if (!response || !response.valor_compra || !response.compras) {
			$('#valorTotal').html('Sem resultados')
			$('#comprasTotal').html('Sem resultados')
			return toastr.warning('Não foram encontrados dados para as data especificadas', 'ALERTA')
		} else {
			$('#valorTotal').html(formatter.format(response.valor_compra))
			$('#comprasTotal').html(response.compras)
		}
	})
}

