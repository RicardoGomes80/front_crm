$(document).on('click', '.btnVisualizaCompra', function () {
	compra_id = $(this).attr('compra_id')
	$('#produtosOnModal').html('')
	return getProdutosOfCompras(compra_id)
})

function getProdutosOfCompras(id_compra) {
	$('#tabelaLicitacoes').hide();
	$('.loader').fadeIn();
	$.ajax({
		url: getComprasRoute,
		data: {
			"_token": token,
			compra_id: id_compra,
		},
		method: 'get'
	}).done(function (response) {

		$.each(response, function (i, item) {
			valorProduto = ''
			str = item.valor_unitario
			if (str) {valorProduto = str.replace('.', ',')}
			html = '<tr>'
			html += '<td>'
			html += item.produto
			html += '</td>'
			html += '<td>'
			html += item.data_validade_lote ?? 'NÃO INFORMADA'
			html += '</td>'
			html += '<td >'
			html += item.quantidade + ' ' + item.metodo_medida
			html += '</td>'
			html += '<td>'
			html += 'R$ ' + valorProduto
			html += '</td>'
			html += '<td class="text-center">'
			if (item.link_produto) {
				html += '<a'
				html += ' href="' + item.link_produto + '" target="_blank"'
				html += '><i class="fa fa-fw mt-2 mr-2'
				html += ' fa-anchor '
				html += ' btn-icon-wrapper text-primary font-size-xlg"></i></a>'
			}
			else {
				html += '--'
			}
			html += '</td>'
			html += '</tr>'

			$('#produtosOnModal').append(html)
		});

	})
}