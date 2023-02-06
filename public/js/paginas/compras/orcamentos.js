$(document).on('hide.bs.modal', function () {
	$('.campoModal').val('')
})

$(document).ready(function () {
	$('.btnAtualizaDescricao').hide();
	$('.tabelasDoVisualizarOrcamentos').hide();
	$('.select').select2({
		placeholder: "TODOS",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
	});

	$('.datepicker').datepicker({
		language: 'pt-BR',
		zIndex: 99999,
		autoHide: true
	});

});

$(document).on('click', '.btnVisualiza', function () {
	zeraTabela()
	titulo = $(this).attr('titulo')
	id_orcamento = $(this).attr('id_orcamento')
	financeiro = $(this).attr('financeiro')

	getDadosDoOrcamento(id_orcamento, true, financeiro)
})

function getDadosDoOrcamento(id_orcamento, geraNovaTabela, financeiro) {
	return $.ajax({
		url: getDadosDoOrcamentoRoute,
		data: {
			id: id_orcamento
		},
		method: "get"
	}).done(function (response) {
		$('#titulo').val(response.titulo)
		$('#fornecedor').val(response.fornecedor || "AGUARDANDO APROVAÇÃO")
		$('#prev_entrega').val(response.prev_entrega ? response.prev_entrega.split('-').reverse().join('/') : "AGUARDANDO APROVAÇÃO")
		$('#status').val(response.status_orcamento || "AGUARDANDO APROVAÇÃO")
		$('#valor_orcamento').val(formatter.format(response.valor_orcamento) || "AGUARDANDO APROVAÇÃO")
		$('#descricao').val(response.descricao)
		$('#centro_de_custo').val(response.centro_de_custo)
		$('#id_orcamento_atual').val(id_orcamento)
		if (geraNovaTabela) {

			getTabelaLicitacoes(response, id_orcamento, financeiro)
		}
	})
}

function getTabelaLicitacoes(dadosOrcamento, id_orcamento, financeiro) {
	$('#tabelaLicitacoes').hide();
	$('.loader').fadeIn();
	$.ajax({
		url: tabelaLicitacoesRoute,
		data: {
			"_token": token,
			id: id_orcamento,
		},
		method: 'get'
	}).done(function (response) {
		if (!response) {

			return toastr.error('Erro para criar a tebela de licitações, tente novamente mais tarde', 'ATENÇÃO');
		}

		$('.loader').fadeOut(400, function () {
			$('#tabelaLicitacoes').fadeIn(400);
		});

		criaHeaderAndFooter(dadosOrcamento, response['fornecedores'], response['totalFornecedores'])

		criaTabela = criaTabelaInterna(response['fornecedoresProdutos'])

		if (criaTabela) {
			getArquivcosForOrcamento(id_orcamento);
			$('.input-mask-trigger').inputmask();
			$('.datepicker').datepicker({
				language: 'pt-BR',
				zIndex: 99999,
				autoHide: true
			});
			$('.tooltipActivator').tooltip()
		}
	})
}

function criaHeaderAndFooter(dadosOrcamento, dados, totalFornecedores) {
	$.each(dados, function (i, fornecedor) {
		valorFrete = '0,00';
		FreteStr = fornecedor.valor_frete;
		if (FreteStr) {

			valorFrete = formatter.format(FreteStr)
		}
		dataEntrega = fornecedor.prev_entrega

		adicionaHtmlFooter(valorFrete, dataEntrega)
		adicionaHtmlHeader(fornecedor.anotacoes, fornecedor.fornecedor)

		if (financeiro) {
			adicionaHTMLSelecionarOrcamento(dadosOrcamento.status_orcamento, id_orcamento, fornecedor.fornecedor_id, dadosOrcamento.fornecedor_id)
		};
	});

	$.each(totalFornecedores, function (i, total) {
		valor = parseFloat(total.valor) + parseFloat(total.valor_frete);
		adicionaHtmlTotal(formatter.format(valor))
	})

}

function adicionaHtmlHeader(anotacoes, fornecedor) {
	htmlHeader = '<th class="text-center odd" style="min-width: 600px !important; background-color: #3ac47d; color: white">';
	htmlHeader += fornecedor
	htmlHeader += '</th>'


	htmlAnotacoes = "<td>"
	if (anotacoes) {

		htmlAnotacoes += anotacoes
	}
	else {

		htmlAnotacoes += 'Sem anotações'
	}
	htmlAnotacoes += "</td>"

	$('#tabelaLicitacoesHeader').append(htmlHeader);
	$('#trAnotacoes').append(htmlAnotacoes)
}

function adicionaHtmlTotal(valor) {

	htmlTotal = "<td style='border-right: #9c9c9c solid 1px;'>";
	htmlTotal += valor
	htmlTotal += "</td>";
	$('#trValorTotal').append(htmlTotal)

}

function adicionaHtmlFooter(valorFrete, dataEntrega) {
	htmlTrFrete = "<td style='border-right: #9c9c9c solid 1px;'>";

	htmlTrFrete += valorFrete
	htmlTrFrete += "</td>";

	htmlDataPrevista = "<td style='border-right: #9c9c9c solid 1px;'>";
	htmlDataPrevista += "<div class='form-row'>";
	htmlDataPrevista += "<div class='col-md-6'>";
	htmlDataPrevista += '<div class="input-group">'
	htmlDataPrevista += '<div class="input-group-prepend">'
	htmlDataPrevista += '<div class="input-group-text">'
	htmlDataPrevista += '<i class="fa fa-calendar-alt"></i>'
	htmlDataPrevista += '</div></div>'
	htmlDataPrevista += '<input class="form-control input-mask-trigger" disabled style="background-color: white;" value="' + dataEntrega + '">'
	htmlDataPrevista += '</div></div></div>';
	htmlDataPrevista += '</td>';
	$('#trFreteFornecedores').append(htmlTrFrete)
	$('#trDataPrevista').append(htmlDataPrevista)
}

function adicionaHTMLSelecionarOrcamento(statusOrcamento, id_orcamento, fornecedor_id, fornecedor_escolhido) {
	if (statusOrcamento == 'COMPRA REALIZADA') {

		htmlSelecionar = '<td style="border-right: #9c9c9c solid 1px;">'
		htmlSelecionar += '<label class="text-center labelOrcamentoFinalizado">Orçamento ja finalizado</label>'
		htmlSelecionar += '</td>'
	}
	if (statusOrcamento == 'ORÇAMENTO APROVADO') {
		if (fornecedor_id == fornecedor_escolhido) {
			htmlSelecionar += '<td>'
			htmlSelecionar += '<div class="col-12">'
			htmlSelecionar += '<button class="btn btn-primary btn-block btn-hover btn-shine" onclick="desejaEncaminharAoCompras(' + id_orcamento + ')">REALIZAR COMPRA</button>'
			htmlSelecionar += '</div></td>'
		}
	}
	if (statusOrcamento == 'AGUARDANDO APROVAÇÃO') {
		htmlSelecionar = '<td style="border-right: #9c9c9c solid 1px;" id="botaoFornecedor' + fornecedor_id + '">'
		htmlSelecionar += '<div class="col-12" ><button fornecedor_id="' + fornecedor_id + '" orcamento_id="' + id_orcamento + '" class="btn btn-success btn-block btn-hover btn-shine btnAprovaOrcamento">APROVAR</button><div class="text-center odd">'
		htmlSelecionar += '</div>'
		htmlSelecionar += '</td>'
	}
	$('#selecionarOrcamento').append(htmlSelecionar)
}

function criaTabelaInterna(fornecedoresProdutos) {
	var produtoId;
	return $.each(fornecedoresProdutos, function (i, fornecedorProduto) {
		htmlBody = '';

		if (produtoId != fornecedorProduto.produto) {

			quantidade = fornecedorProduto.produto_quantidade;
			htmlBody = '<tr>';
			htmlBody += '<td style="text-align: center;">';
			htmlBody += fornecedorProduto.produto;
			htmlBody += '</td>';
			htmlBody += '<td style="text-align: center;">';
			htmlBody += fornecedorProduto.produto_quantidade_text;
			htmlBody += '</td>';
			htmlBody = adicionaProdutosDoFornecedor(htmlBody, fornecedorProduto, fornecedoresProdutos, quantidade)
			htmlBody += "</tr>";
			htmlTotal = '';
			produtoId = fornecedorProduto.produto
		}

		$('#tabelaLicitacoesBody').append(htmlBody);
		$('#trValorTotal').append(htmlTotal);

	});
}

function adicionaProdutosDoFornecedor(htmlBody, fornecedorProduto, fornecedoresProdutos, quantidade) {
	$.each(fornecedoresProdutos, function (i, fornecedor) {
		link_produto = ''
		data_validade = 'Não disponível'

		valorStr = fornecedor.valor_unitario * quantidade;
		valorStr = valorStr.toString()
		valorProduto = '0,00';
		if (valorStr) {

			valorProduto = formatter.format(valorStr)
		}

		if (fornecedor.produto_id === fornecedorProduto.produto_id) {
			if (fornecedor.disponibilidade == 1) {
				if (fornecedor.link_produto !== null) {
					link_produto = fornecedor.link_produto
				}
				if (fornecedor.data_validade_lote !== null) {
					data_validade = fornecedor.data_validade_lote
				}
				valor_unitario = formatter.format(fornecedor.valor_unitario)
				htmlBody += "<td style='border-right: #9c9c9c solid 1px;'>";
				htmlBody += "<div class='form-row'>";
				htmlBody += `<input type='hidden' class='form-control' value='` + fornecedor.fornecedor_id + `' >`;
				htmlBody += `<input type='hidden' class='form-control' value='` + fornecedorProduto.produto_id + `' >`;
				htmlBody += '<div class="col-md-6">'
				htmlBody += `<input value="${valor_unitario} / ${valorProduto}" type="text" class="form-control" data-inputmask="'alias': 'numeric', 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false"`
				if (fornecedor.valor_unitario == fornecedor.menor_valor) {

					htmlBody += 'style= "background-color: #3ac47d; color: white"'
				}
				if (fornecedor.valor_unitario == fornecedor.maior_valor) {

					htmlBody += 'style= "background-color: #d92550; color: white"'
				}
				else {

					htmlBody += 'style= "background-color: white;" '
				}
				htmlBody += 'disabled>';
				htmlBody += "</div>";
				htmlBody += "<div class='col-md-5'>";
				htmlBody += '<div class="input-group"><div class="input-group-prepend"><div class="input-group-text">'
				htmlBody += '<i class="fa fa-calendar-alt"></i>'
				htmlBody += '</div></div>'
				htmlBody += '<input class="form-control input-mask-trigger" disabled style="background-color: white;" value="' + data_validade + '">'
				htmlBody += "</div></div>";
				if (link_produto) {
					htmlBody += "<div class='col-1'>";
					htmlBody += '<a href="' + link_produto + '" target="_blank">'
					htmlBody += '<i class="fa fa-fw mt-2 mr-2 fa-anchor font-size-xlg"></i>'
					htmlBody += '</a>'
					htmlBody += "</div>";
				}
				htmlBody += "</div>";
				htmlBody += "</td>";
			}
			if (fornecedor.disponibilidade == 0) {
				htmlBody += "<td style='text-align: center; border-right: #9c9c9c solid 1px;'>";
				htmlBody += "Não disponível";
				htmlBody += "</td>";
			}
		}
	});

	return htmlBody
}

var formatter = new Intl.NumberFormat('pt-BR', {
	style: 'currency',
	currency: 'BRL',
});

function getArquivcosForOrcamento(id_orcamento) {
	$('#tabelaArquivos').html('')
	$.ajax({
		url: arquivosFornecedoresRoute,
		data: {
			orcamento_id: id_orcamento
		},
		method: 'get',
	}).done(function (response) {
		if (!response) {
			toastr.error('Erro ao buscar arquivos', 'ATENÇÃO');
			return;
		}
		if (response.length === 0) {
			$('#tabelaArquivos').append(
				`<tr class="text-center odd"><td colspan="100%">Este orçamento não tem arquivos</td></tr>`
			)
		}

		$.each(response, function (i, arquivos) {
			id_arquivo = arquivos.id;
			downloadUrl = urlDownloadRoute.replace(':id', arquivos.id)
			rotaDownload = "{{ route('compras.orcamentos.fornecedor.aquivos.baixar', " + id_arquivo + ") }}"
			htmlArquivos = `<tr>`;
			htmlArquivos += `<td class="text-center">`;
			htmlArquivos += arquivos.fornecedor;
			htmlArquivos += `</td>`;
			htmlArquivos += `<td class="text-center">`;
			htmlArquivos += arquivos.arquivo + '.' + arquivos.extension;
			htmlArquivos += `</td>`;
			htmlArquivos += `<td class="text-center">`;
			htmlArquivos +=`<a href="` + downloadUrl + `" download>Clique aqui</a>`;
			htmlArquivos += `</td>`;
			htmlArquivos += `</tr>`;
			$('#tabelaArquivos').append(htmlArquivos)
		})
	})
}

$(document).on('click', '.adicionaAnotacao', function () {
	fornecedor_id = $(this).attr('id_fornecedor');
	id_orcamento = $('#id_orcamento_atual').val()
	$.ajax({
		url: buscaAnotacaoRoute,
		data: {
			fornecedor_id: fornecedor_id,
			orcamento_id: id_orcamento,
		},
		method: 'get'
	}).done(function (response) {
		$('#textAnotacao').val(response.anotacoes)
		$('#fornecedor_id_anotacao').val(fornecedor_id)
	})
})

$(document).on('click', '#adicionaAnotacaoNoOrcamento', function () {
	fornecedor_id = $('#fornecedor_id_anotacao').val();
	anotacoes = $('#textAnotacao').val()
	id_orcamento = $('#id_orcamento_atual').val()
	$.ajax({
		url: adicionaAnotacaoRoute,
		data: {
			fornecedor_id: fornecedor_id,
			orcamento_id: id_orcamento,
			anotacoes: anotacoes
		},
		method: 'post'
	}).done(function (response) {
		$('#adicionarAnotacao').modal('hide')
		 toastr.success('Anotação atualizada', 'Sucesso')
	})
})

$(document).on('click', '.delete_orcamento', function (e) {
	orcamento_id = $(this).attr('orcamento_id');
	rota = $(this).attr('data-rota');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse produto?",
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
				orcamento_id: orcamento_id,
			},
			method: 'DELETE',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error('Não foi possível excluir este orçamento', 'ATENÇÃO');
				return;
			}
			toastr.clear();
			toastr.success('Orçamento inativado', 'SUCESSO');
			$('#remove' + orcamento_id).fadeOut(300);
		}).fail(function (response) {
			toastr.clear();
			toastr.error('Não foi possível excluir este orçamento', 'ATENÇÃO');
		});
	});
});

$(document).on('click', '.btnAprovaOrcamento', function () {
	orcamento_id = $(this).attr('orcamento_id')
	fornecedor_id = $(this).attr('fornecedor_id')
	Swal.fire({
		title: "APROVAR ORÇAMENTO",
		text: "Deseja aprovar este orçamento?",
		icon: "info",
		iconColor: "#5fd47c",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'AGORA NÃO',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		return ajaxAprovaOrcamento(fornecedor_id, orcamento_id)
	});
})

function ajaxAprovaOrcamento(fornecedor_id, orcamento_id) {
	$.ajax({
		url: aprovarOrcamentoRoute,
		data: {
			"_token": token,
			orcamento_id: orcamento_id,
			fornecedor_id: fornecedor_id,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Erro ao aprovar orçamento', 'ATENÇÃO');
			return;
		}
		getDadosDoOrcamento(orcamento_id)
		$('#orcamento_aprovado' + orcamento_id).html(`<label class="mb-2 mr-2 badge badge-success">ORÇAMENTO APROVADO</label>`)
		$('.btnAprovaOrcamento').fadeOut(400)
		$('#botaoFornecedor' + fornecedor_id).html('<div class="col-12"><button class="btn btn-primary btn-block btn-hover btn-shine" onclick="desejaEncaminharAoCompras(' + orcamento_id + ')">REALIZAR COMPRA</button></div>')
		desejaEncaminharAoCompras(orcamento_id)
	}).fail(function (response) {
		toastr.clear();
		toastr.error('Erro ao aprovar orçamento', 'ATENÇÃO');
	});
}

function desejaEncaminharAoCompras(orcamento_id) {
	Swal.fire({
		title: "ORÇAMENTO JÁ APROVADO",
		text: "Deseja realizar a compra?",
		icon: "success",
		iconColor: "#5fd47c",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'AGORA NÃO',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		return ajaxGeraCompra(orcamento_id)
	});
}

function ajaxGeraCompra(orcamento_id) {
	$.ajax({
		url: gerarCompraRoute,
		data: {
			"_token": token,
			orcamento_id: orcamento_id,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Erro ao gerar compra', 'ATENÇÃO');
			return;
		}
		var msg = response.msg || 'Compra Gerada!';
		toastr.clear();
		toastr.success(msg, 'SUCESSO');
		$('#orcamento_aprovado' + orcamento_id).html(`<label class="mb-2 mr-2 badge badge-primary">COMPRA REALIZADA</label>`)
		$('#visualizaOrcamentoModal').modal('hide')
		$('#btn_compras' + orcamento_id).fadeOut(400);
	}).fail(function (response) {
		toastr.clear();
		toastr.error('Erro ao gerar compra', 'ATENÇÃO');
	});
}

$('#descricao').click(function () {
	orcamento_id = $('#id_orcamento_atual').val();
	$('.btnAtualizaDescricao').fadeIn(400)
})

$(document).on('click', '.btnAtualizaDescricao', function () {
	descricao = $('#descricao').val();
	$.ajax({
		url: atualizaDescricaoRoute,
		data: {
			"_token": token,
			orcamento_id: id_orcamento,
			descricao: descricao,
		},
		method: 'put'
	}).done(function (response) {
		if (!response) {
			toastr.error('Não foi possivel atualizar a descrição', 'ATENÇÃO')
		}
		$('.btnAtualizaDescricao').fadeOut(400);
		toastr.success('Descrição atualizada', 'SUCESSO');
	}).fail(function (error) {
		if (error.responseJSON.errors.descricao)
			toastr.error(error.responseJSON.errors.descricao, 'ATENÇÃO');
	})
})

function zeraTabela() {
	$('#tabelaLicitacoesHeader').html('');
	$('#tabelaLicitacoesFooter').html('');
	$('#tabelaLicitacoesBody').html('');
	$('.btnAtualizaDescricao').hide();
	$('#tabelaLicitacoesHeader').append("<th width='10%'>" + produtoLabel + " </th><th width='5%'>QUANTIDADE</th>");

	html = '<tr id="trFreteFornecedores"><td><strong>FRETE</strong></td><td></td></tr>'
	html += '<tr id="trValorTotal"><td><strong>TOTAL</strong></td><td></td></tr>'
	html += '<tr id="trDataPrevista"><td><strong>PREVISÃO</strong></td><td></td></tr>'
	html += '<tr id="trAnotacoes"><td><strong>ANOTAÇÕES</strong></td><td></td></tr>'
	html += '<tr id="selecionarOrcamento"><td><strong>SELECIONE</strong></td><td></td></tr>'
	return $('#tabelaLicitacoesFooter').append(html);
}