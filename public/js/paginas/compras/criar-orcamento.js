$(document).ready(function () {
	$("#smartwizard").smartWizard({
		keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)      
		selected: 0,
		transitionEffect: "fade",
		autoAdjustHeight: false,
		toolbarSettings: {
			toolbarPosition: "none",
		},
	});
	// External Button Events
	$("#prev-btn").on("click", function () {
		$("#smartwizard").smartWizard({
			transitionEffect: "fade",
		});
		// Navigate previous
		$("#smartwizard").smartWizard("prev");
		return true;
	});
	$('.btnPrev').hide();
	$('#tabelaLicitacoes').hide();
	$('#smartwizard').smartWizard("reset");
	$('.select').select2({
		placeholder: "Escolha uma opção",
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


$(document).on('click', '.btnRemoveArquivo', function () {
	id = $(this).attr('id_arquivo')
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse arquivo?",
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
			url: routeDeletarArquivoFornecedor,
			data: {
				"_token": token,
				id: id,
			},
			method: 'delete',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error(msgErr, 'ATENÇÃO');
				return;
			}
			$('#removeArquivo' + id).fadeOut(400);
			toastr.clear();
			toastr.success(msgSuccess, 'SUCESSO');
		});
	});
});

$('#modalAdicionaFornecedor').on('shown.bs.modal', function () {
	$('.limpar').val('');
	$('.selectClear').val('').trigger('change')
})

$('#modalAdicionaProduto').on('shown.bs.modal', function () {
	$('.limpar').val('');
	$('.selectClear').val('').trigger('change')
})


$(document).on("click", ".prev-btn", function () {
	$('#formularioLeituraTabela').submit();
	zeraTabelaEIncluiHtml();
	$('.next-btn2').addClass('next-btn');
	$('.next-btn').removeClass('next-btn2');
	$('.btnPrev').hide();
	return;
});

//prev button 2
$(document).on("click", ".prev-btn2", function () {
	$(this).removeClass('prev-btn2')
	$(this).addClass('prev-btn')
	$('.next-btn2').fadeIn(300);
	return;
});

$(document).on('click', '.next-btn2', function () {
	$('#formularioLeituraTabela').submit()
	$(this).fadeOut(300);
	$('.prev-btn').addClass('prev-btn2');
	$('.prev-btn').removeClass('prev-btn');
	$("#smartwizard").smartWizard({
		transitionEffect: "fade",
	});
	$("#smartwizard").smartWizard("next");
	$('.next-btn2').fadeOut;
	return true;
})

//execução do primeiro passo
$(document).on('click', '.next-btn', function () {
	centro_de_custo = $('#centro_de_custo_id').val();
	titulo = $('#titulo').val();
	if (centro_de_custo === '') {
		toastr.clear();
		toastr.error('Selecione um centro de custo!', 'ATENÇÃO');
		return;
	}
	if (titulo === '') {
		toastr.clear();
		toastr.error('O título não pode estar vazio', 'ATENÇÃO');
		return;
	}
	updated = updateOrcamento(centro_de_custo, titulo);
	if (updated) {
		$("#smartwizard").smartWizard({
			transitionEffect: "fade",
		});
		getTabelaDelicitacoes();
		$("#smartwizard").smartWizard("next");
		$('.next-btn').addClass('next-btn2');
		$('.next-btn2').removeClass('next-btn');
		$('.btnPrev').removeClass('d-none');
		teste = $('.btnPrev').val();
		$('.btnPrev').fadeIn(400);
		return true;
	}
	toastr.clear();
	toastr.error('Erro ao executar funções', 'ATENÇÃO');
	return;
})

function updateOrcamento(centro_de_custo, titulo) {
	$fazAjax = $.ajax({
		url: editarOrcamentoRoute,
		data: {
			"_token": token,
			id: id,
			titulo: titulo,
			centro_de_custo_id: centro_de_custo,
		},
		method: 'PUT',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO');
			return;
		}
		return true;
	});
	if ($fazAjax) {
		return true;
	}
}

//criar produto
$(document).on('click', '#adicionaProdutoNoOrcamento', function () {
	produto = $('#produto').val();
	produto_nome = $("#produto option:selected").text()
	quantidade = $('#quantidade').val();
	metodo_medida = $('#metodo_medida').val();
	metodo_medida_TEXT = $("#metodo_medida option:selected").text()
	$.ajax({
		url: criarPrudutoOnOrcamentoRoute,
		data: {
			"_token": token,
			orcamento_id: id,
			produto_id: produto,
			quantidade: quantidade,
			metodo_medida: metodo_medida,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Erro na requisção ou produto ja adicionado', 'ATENÇÃO');
			return;
		}
		html = '<tr id="remove' + response + '"><td>' + produto_nome + '</td>'
		html += '<td>' + quantidade + ' ' + metodo_medida_TEXT + '</td>'
		html += `<td>
                    <button type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm submit-form-delete3 btn-shadow btn-hover-shine" id_produto="` + response + `" title="Remover">
                        <i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>
                    </button>
                </td>`
		html += '</tr>'
		$('#modalAdicionaProduto').modal('hide');
		$('#adicionaProduto').prepend(html);
		$('#quantidade').val('');
		$('.selectClear').val('').trigger('change')
		$('#metodo_medida').val('').trigger('change')
	})
		.fail(function (error) {
			$.each(error.responseJSON.errors, (index, dados) => {
				toastr.error(dados, 'ATENÇÃO')
			})
		});
})

//criar fornecedor
$('#adicionaFornecedorNoOrcamento').on('click', function () {
	fornecedor = $('#fornecedor').val();
	fornecedor_nome = $("#fornecedor option:selected").text()
	prev_entrega = $('#data_prevista').val();
	var partesData = prev_entrega.split("/");
	var data = new Date(partesData[2], partesData[1] - 1, partesData[0]);
	if (data < new Date()) {
		toastr.clear();
		toastr.error(`A data de entrega não pode ser antes da data atual`, 'ATENÇÃO');
		return
	}
	$.ajax({
		url: criarFornecedorOrcamentoRoute,
		data: {
			"_token": token,
			orcamento_id: id,
			fornecedor_id: fornecedor,
			prev_entrega: prev_entrega,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgFornecedoresNull, 'ATENÇÃO');
			return;
		}
		html = '<tr id="remove2' + response + '"><td>' + fornecedor_nome + '</td>'
		html += '<td>' + prev_entrega + '</td>'
		html += `<td>`
		html += `<button type = "button"
            id_fornecedor = "` + fornecedor + `"
            class="adicionaAnotacao btn-icon btn-icon-only btn btn-link border-0 btn-transition btn-outline-light btn-hover-shine"
            data-toggle="modal"
            data-target="#adicionarAnotacao"
            title = "Anotações"> <i class="fa fa-sticky-note btn-icon-wrapper"></i></button>`
		html += `<button type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine criarArquivoFornecedor" fornecedor_id="` + fornecedor + `" title="Adicionar Arquivos" data-toggle="modal" data-target="#enviarArquivosDoFornecedor">
                        <i class="pe-7s-cloud-download btn-icon-wrapper text-danger font-size-xlg"></i>
                    </button>
                    <button type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm submit-form-delete2 btn-shadow btn-hover-shine" fornecedor_orcamento_id="` + response + `" title="Remover">
                        <i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>
                    </button>
                </td>`
		html += '</tr>'
		// $('#removeSemResultados2').fadeOut(400);
		$('#modalAdicionaFornecedor').modal('hide');
		$('#adicionaFornecedor').prepend(html);
		$('#data_prevista').val('');
		$('#valor').val('');
		$('.selectClear').val('').trigger('change')
	})
		.fail(function (error) {
			$.each(error.responseJSON.errors, (index, dados) => {
				toastr.error(dados, 'ATENÇÃO')
			})
		});
})

function getTabelaDelicitacoes() {
	zeraTabela = zeraTabelaEIncluiHtml();
	if (zeraTabela) {
		$.ajax({
			url: tabelaLicitacoesRoute,
			data: {
				"_token": token,
				id: id,
			},
			method: 'get'
		}).done(function (response) {
			if (!response) {
				toastr.error('Erro para criar a tebela, tente novamente mais tarde', 'ATENÇÃO');
				return;
			}
			if (response['fornecedores'].length !== 0) {
				$.each(response['fornecedores'], function (i, fornecedor) {
					str = fornecedor.valor_frete;
					valorFrete = '';
					if (str) {

						valorFrete = str.replace('.', ',')
					}
					var newDate = fornecedor.prev_entrega;
					htmlHeader = '<th style="min-width: 400px !important; border-right: #9c9c9c solid 1px;">'
					htmlHeader += fornecedor.fornecedor
					htmlHeader += '</th>'
					htmlTrFrete = "<td fornecedor_id='" + fornecedor.fornecedor_id + "'>";
					htmlTrFrete += "<div class='form-row'>";
					htmlTrFrete += "<div class='col-md-6'>";
					htmlTrFrete += `<input type="hidden" name="insert[fornecedores][` + fornecedor.fornecedor_id + `][fornecedor_id]" class="form-control" value="` + fornecedor.fornecedor_id + `">`;
					htmlTrFrete += `<input type="text" value="` + valorFrete + `" name="insert[fornecedores][` + fornecedor.fornecedor_id + `][valor_frete]" class="form-control input-mask-trigger" data-inputmask="'alias': 'numeric', 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': 'R$ '" placeholder="Valor do frete">`;
					htmlTrFrete += "</div>";
					htmlTrFrete += "</div>";
					htmlTrFrete += "</td>";

					htmlDataPrevista = "<td>";
					htmlDataPrevista += "<div class='form-row'>";
					htmlDataPrevista += "<div class='col-md-6'>";
					htmlDataPrevista += "<input type='text' class='form-control' disabled value=" + newDate + ">";
					htmlDataPrevista += "</div>";
					htmlDataPrevista += "</div>";
					htmlDataPrevista += "</td>";
					$('#tabelaLicitacoesHeader').append(htmlHeader);
					$('#trFreteFornecedores').append(htmlTrFrete)
					$('#trDataEntrega').append(htmlDataPrevista)
				});
				$('.loader').fadeOut(400, function () {
					$('#tabelaLicitacoes').fadeIn(400);
				});
				id_produto = 0;
				criaTabela = $.each(response['fornecedoresProdutos'], function (i, fornecedorProduto) {
					htmlBody = '';
					if (id_produto !== fornecedorProduto.produto_id) {
						htmlBody = '<tr>';
						htmlBody += '<td>';
						htmlBody += fornecedorProduto.produto;
						htmlBody += "</td>";
						htmlBody += '<td style="text-align: center;">';
						htmlBody += fornecedorProduto.produto_quantidade_text;
						htmlBody += '</td>';
						$.each(response['fornecedoresProdutos'], function (i, fornecedor) {
							str = fornecedor.valor_unitario
							valorProduto = ''
							if (str) {

								valorProduto = str.replace('.', ',')
							}
							if (fornecedor.produto_id === fornecedorProduto.produto_id) {
								if (fornecedor.link_produto !== null) {
									link_produto = fornecedor.link_produto.replace('.', ',')
								} else {
									link_produto = ''
								}
								htmlBody += "<td id='" + fornecedorProduto.produto_id + "-" + fornecedor.fornecedor_id + "'>";
								htmlBody += "<div class='form-row'>";
								htmlBody += `<input type='hidden' class='form-control' value='` + fornecedor.fornecedor_id + `' name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][fornecedor_id]">`;
								htmlBody += `<input type='hidden' class='form-control' value='` + fornecedorProduto.produto_id + `' name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][produto_id]">`;
								htmlBody += "<div class='col-md-3'>";
								htmlBody += `<input name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][valor_unitario]" value="` + valorProduto + `" type="text" class="form-control input-mask-trigger valor_unitario" data-inputmask="'alias': 'numeric', 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': 'R$ '" placeholder="Valor únitario"`
								if (fornecedor.disponibilidade == 0) {
									htmlBody += " disabled"
								}
								htmlBody += ` >`;
								htmlBody += "</div>";
								htmlBody += "<div class='col-md-3'>";
								htmlBody += `<input type='text' class='form-control datepicker input-mask-trigger' data-inputmask-alias='datetime' data-inputmask-inputformat='dd/mm/yyyy'  name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][data_validade_lote]" value="` + fornecedor.data_validade_lote + `" placeholder="Vencimento"`;
								if (fornecedor.disponibilidade == 0) {
									htmlBody += " disabled "
								}
								htmlBody += `>`;
								htmlBody += "</div>";
								htmlBody += "<div class='col-md-4'>";
								htmlBody += `<input type='text' class='form-control' name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][link_produto]" value="` + link_produto + `" placeholder='Link'`
								if (fornecedor.disponibilidade == 0) {
									htmlBody += " disabled "
								}
								htmlBody += `>`;
								htmlBody += "</div>";
								htmlBody += "<div class='col-md-2'>";
								htmlBody += `<div class="form-check">`
								htmlBody += `<input class="form-check-input checkHaveProduto" name="insert[fornecedoresProdutos][` + fornecedor.fornecedor_id + `][` + fornecedorProduto.produto_id + `][disponibilidade]"
                        value="`
								if (fornecedor.disponibilidade == 1) {
									htmlBody += "1"
								} else {
									htmlBody += "0"
								}
								htmlBody += `" id_td="` + fornecedorProduto.produto_id + `-` + fornecedor.fornecedor_id + `" type="checkbox"`
								if (fornecedor.disponibilidade == 0) {
									htmlBody += " checked "
								}
								htmlBody += `>`
								htmlBody += `<label class ="form-check-label tooltipActivator" for="flexCheckDefault"`
								htmlBody += `data-toggle="tooltip" data-placement="top" title="Item não dísponivel">N/D</label></div>`
								htmlBody += "</div>";
								htmlBody += "</div>";
								htmlBody += "</td>";
							}
						});
						htmlBody += "</tr>";
					}
					id_produto = fornecedorProduto.produto_id;
					$('#tabelaLicitacoesBody').prepend(htmlBody);
				});
				if (criaTabela) {
					$('.input-mask-trigger').inputmask();
					$('.datepicker').datepicker({
						language: 'pt-BR',
						zIndex: 99999,
						autoHide: true
					});
					$('.tooltipActivator').tooltip()
				}
			} else {
				$('.loader').fadeOut(400, function () {
					$('#tabelaLicitacoes').fadeIn(400);
				});
				htmlBody = `<tr><td colspan="100%">É preciso registrar pelo menos um fornecedor</td></tr>`
				$('#tabelaLicitacoesBody').prepend(htmlBody);
			}
		})
	}
}

$(document).on('click', '.adicionaAnotacao', function () {
	fornecedor_id = $(this).attr('id_fornecedor');
	$.ajax({
		url: buscaAnotacaoRoute,
		data: {
			fornecedor_id: fornecedor_id,
			orcamento_id: id,
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
	$.ajax({
		url: adicionaAnotacaoRoute,
		data: {
			fornecedor_id: fornecedor_id,
			orcamento_id: id,
			anotacoes: anotacoes
		},
		method: 'post'
	}).done(function (response) {
		$('#adicionarAnotacao').modal('hide')
		return toastr.success('Anotação atualizada', 'Sucesso')
	})
})

function zeraTabelaEIncluiHtml() {
	$('#tabelaLicitacoesHeader').html('');
	$('#tabelaLicitacoesBody').html('');
	$('#tabelaLicitacoesFooter').html('');
	$('#tabelaLicitacoesHeader').append("<th>" + produtoLabel + "</th>");
	$('#tabelaLicitacoesHeader').append("<th>QUANTIDADE</th>");
	$('#tabelaLicitacoesFooter').append(`<tr role="row" id="trFreteFornecedores"><td>FRETE</td><td></td></tr><tr role="row" id="trDataEntrega"><td>DATA PREVISTA</td><td></td></tr>`);
	$('#tabelaLicitacoes').hide();
	$('.loader').fadeIn();
	return true;
}

$(document).on('click', '.checkHaveProduto', function () {
	isChecked = $(this).is(':checked');
	id_Disable = $(this).attr('id_td')
	if (isChecked === true) {
		$(this).val('0');
		$('#' + id_Disable + ' input[type=text]').attr('disabled', 'true');
	} else {
		$(this).parent().parent().removeClass('disabled')
		$(this).val('1');
		$('#' + id_Disable + ' input[type=text]').removeAttr('disabled');
	}
})

// cria dados dos produtos e fornecedores na tabela
$('#formularioLeituraTabela').submit(function (e) {
	e.preventDefault();
	var $inputs = $('#formularioLeituraTabela :input');
	var values = {};
	$inputs.each(function () {
		values[this.name] = $(this).val();
	});
	updated = $.ajax({
		url: gerarTabelaFornecedoresProdutos,
		data: {
			"_token": token,
			orcamento_id: id,
			dados: values,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Ocorreu um erro ao salvar os dados, verifique-os e tente novamente', 'ATENÇÃO');
			return
		}
		return true;
	})
	if (updated)  {

		return true;
	}
});

function formularioEnvia() {
	var $inputs = $('#formularioLeituraTabela :input');
	var values = {};
	$inputs.each(function () {
		values[this.name] = $(this).val();
	});
	updated = $.ajax({
		url: gerarTabelaFornecedoresProdutos,
		data: {
			"_token": token,
			orcamento_id: id,
			dados: values,
		},
		method: 'POST',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Ocorreu um erro ao salvar os dados, verifique-os e tente novamente', 'ATENÇÃO');
			return
		}
		return true;
	})
	if (updated)  {

		return true;
	}
}

//deletar fornecedor
$(document).on('click', '.submit-form-delete2', function (e) {
	id_delete = $(this).attr('fornecedor_orcamento_id');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse fornecedor?",
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
			url: deletarFornecedorOrcamentoRoute,
			data: {
				"_token": token,
				id: id_delete,
			},
			method: 'DELETE',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error(msgErr, 'ATENÇÃO');
				return;
			}
			var msg = response.msg || 'Solicitação concluída';
			toastr.clear();
			toastr.success(msg, 'SUCESSO');
			$('#remove2' + id_delete).fadeOut(300);
		}).fail(function (response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO');
		});
	});
});

//deletar produto
$(document).on('click', '.submit-form-delete3', function (e) {
	id_delete = $(this).attr('id_produto');
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
			url: deletarPrudutoOnOrcamentoRoute,
			data: {
				"_token": token,
				id: id_delete,
			},
			method: 'DELETE',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error(msgErr, 'ATENÇÃO');
				return;
			}
			var msg = response.msg || 'Solicitação concluída';
			toastr.clear();
			toastr.success(msg, 'SUCESSO');
			$('#remove' + id_delete).fadeOut(300);
		}).fail(function (response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO');
		});
	});
});

$(document).on('click', '.criarArquivoFornecedor', function () {
	$('#fornecedor_id').val($(this).attr('fornecedor_id'))
	$(".dropzone").html('')
	initDropzone()
})


//enviar arquivos do fornecedor
Dropzone.autoDiscover = false;
function initDropzone() {
	/* Make sure all Dropzone instances are destroyed */
	if (Dropzone.instances.length > 0) {
		Dropzone.instances.forEach((e) => {
			e.off();
			e.destroy();
		});
	}
	new Dropzone(".dropzone", {
		acceptedFiles: '.ods,.xls,.xlsx,.jpeg,,jpg,.png,.doc,.docx,.pdf,.odf,.txt,csv,.ods,.odt,.ott,.dot,.fodt,.uot,.docx,.ots,.dotx,.fods,.uos,.xlts',
		addRemoveLinks: false,
		method: "POST",
		url: criarFornecedorArquivosRoute,
		params: {
			"orcamento_id": id,
			"fornecedor_id": $('#fornecedor_id').val(),
		},
		headers: {
			'X-CSRF-Token': $('input[name="csrf-token"]').val(),
		},
		init: function () {
			this.on("success", function (file, response) { })
			this.on("error", function (file, response) {
				toastr.error(msgErr)
				$(file.previewElement).find('.dz-error-message').text(msgErr)
			})
		}
	})
}