//deletar fornecedor
var formatter = new Intl.NumberFormat('pt-BR', {
	style: 'currency',
	currency: 'BRL',
});

$(document).on('click', '.btnConfereModal', function (e) {
	id_compra = $(this).attr('id_compra');
	$('.btnEntregaInvalida').attr('id_compra', id_compra)
	$('.btnConfirmaProdutos').attr('id_compra', id_compra)
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja iniciar a conferencia desta compra?",
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
		$('#modalVerificarProdutos').modal('show')
		return getConferirProdutos(id_compra)
	})
});

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
			compra_id: id_compra,
		},
		method: 'get'
	}).done(function (response) {
		$.each(response, function (i, item) {
			html = '<tr>'
			html += '<td>'
			html += item.produto
			html += '</td>'
			html += '<td>'
			html += item.data_validade_lote ?? 'NÃO INFORMADA'
			html += '</td>'
			html += '<td>'
			html += item.quantidade + ' ' + item.metodo_medida
			html += '</td>'

			html += '<td class="text-center">'
			if (item.link_produto) {
				html += '<a'
				html += ' href="' + item.link_produto + '" target="_blank"'
				html += '><i class="fa fa-fw mt-2 mr-2'
				html += ' fa-anchor '
				html += ' btn-icon-wrapper text-primary font-size-xlg"></i></a>'
			} else {
				html += '--'
			}
			html += '</td>'
			html += '</tr>'
			$('#produtosOnModal').append(html)
		});
	})
}

function getConferirProdutos(id_compra) {
	$('#produtosCofnerirTr').html('')
	$.ajax({
		url: produtosToConferirRoute,
		data: {
			"_token": token,
			compra_id: id_compra,
		},
		method: 'get'
	}).done(function (response) {
		$.each(response, function (i, item) {
			valorProduto = item.valor_unitario
			html = '<tr>'
			html += '<td>'
			html += item.produto
			html += '</td>'
			html += '<td>'
			html += item.codigo ?? 'NÃO INFORMADO'
			html += '</td>'
			html += '<td>'
			html += formatter.format(valorProduto)
			html += '</td>'
			html += '<td>'
			html += item.data_validade_lote ?? 'NÃO INFORMADA'
			html += '</td>'
			html += '<td>'
			html += item.quantidade + ' ' + item.metodo_medida
			html += '</td>'
			html += '<td class="text-center">'
			if (item.link_produto) {
				html += '<a'
				html += ' href="' + item.link_produto + '" target="_blank"'
				html += '><i class="fa fa-fw mt-2 mr-2'
				html += ' fa-anchor '
				html += ' btn-icon-wrapper text-primary font-size-xlg"></i></a>'
			} else {
				html += '--'
			}
			html += '</td>'
			html += '</tr>'
			$('#produtosCofnerirTr').append(html)
		});
	})
}

$('.btnEntregaInvalida').on('click', function () {
	compra_id = $(this).attr('id_compra');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja cancelar o recebimento?",
		icon: "warning",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'NÃO',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		$.ajax({
			url: cancelarRecebimentoRoute,
			data: {
				"_token": token,
				compra_id: compra_id
			},
			method: 'post'
		}).done(function (response) {
			if (!response) {
				toastr.error('Erro ao confirmar, tente novamente mais tarde', 'ATENÇÃO');
				return;
			}
			$('#removeBotaoConfirma' + id_compra).fadeOut(400)
			$('#status' + id_compra).removeClass('badge-success')
			$('#status' + id_compra).addClass('badge-danger')
			$('#status' + id_compra).html('ENTREGA INVÁLIDA')
			$('#modalVerificarProdutos').modal('hide')
			toastr.success('A compra foi invalidada', 'SUCESSO');
		})
	})
})

$('.btnConfirmaProdutos').on('click', function () {
	id_compra = $(this).attr('id_compra')
	Swal.fire({
		title: "CONFIRMAR",
		text: "A encomenda está correta?",
		icon: "success",
		iconColor: "#fffff",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'NÃO',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		$.ajax({
			url: confimaRecebimentoRoute,
			data: {
				"_token": token,
				compra_id: id_compra,
			},
			method: 'post'
		}).done(function (response) {
			if (response['error']) {
				toastr.error(response['error'], 'ATENÇÃO');
				return;
			}
			if (!response) {
				toastr.error('Erro ao receber, tente novamente mais tarde', 'ATENÇÃO');
				return;
			}
			$('#removeBotaoConfirma' + id_compra).fadeOut(400)
			$('#status' + id_compra).removeClass('badge-success')
			$('#status' + id_compra).addClass('badge-warning')
			$('#status' + id_compra).html('RECEBIDO')
			$('#modalVerificarProdutos').modal('hide')
			toastr.success('A compra foi recebida', 'SUCESSO');
		})
	})
})