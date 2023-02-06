function iniciaTabelaDatatable() {
	tabela = $('#tabelaTelefones').DataTable()
	tabela.clear().draw();
}
$('.cliente_nao').removeClass('d-none').hide();

$(document).on("click", ".btn-modal-arquivo", function () {
	$('#modalArquivo').modal('show');
})

function Reset() {
	var dropDown = document.getElementById("dre");
	dropDown.selectedIndex = 0;
}

function preencheDRE(ce_codigo, dre_codigo) {
	$("#dre option:selected").prop("selected", false).change()
	$("#dre option").each(function () {
		if (($(this).attr('ce_codigo') == ce_codigo) && ($(this).attr('dre_codigo') == dre_codigo)) {
			$(this).attr('unidade_codigo', unidade_codigo)
			$(this).prop("selected", true)
		}
	})
	$('#dre').trigger('change');
}

$(document).ready(function () {
	Dropzone.autoDiscover = false;
	var atendenteAtualNome = $("#novoAtendente option:selected").text();
	var atendenteAtual = $('#atendenteAtual').val();
	chamadoId = Math.floor(Math.random() * 1111)

	$("div#dropzone").dropzone({
		acceptedFiles: '.ods,.xls,.xlsx,.jpg,.png,.gif,.pdf,.doc,.docx',
		addRemoveLinks: false,
		method: "POST",
		url: route_import_file,
		params: {
			"chamadoId": chamadoId,
			"atendenteAtualNome": atendenteAtualNome,
			"atendenteAtual": atendenteAtual
		},
		headers: {
			'X-CSRF-Token': $('input[name="csrf-token"]').val()
		},
		init: function () {
			this.on("sending", function (file, response, formData) {
				if ($('#arquivoFiliado').is(':checked')) {
					arquivoFiliado = 1
				} else arquivoFiliado = 0
				formData.append("visivel_filiado", arquivoFiliado);
			})
			this.on("success", function (file, response) {
				if ($('#arquivoFiliado').is(':checked')) {
					arquivoFiliado = 1
				} else arquivoFiliado = 0
				target = 'target="_bank"';
				urlArquivo = urlDownload + '/' + chamadoId + '/' + response.hash;
				table = $('#table-imagem').DataTable();
				htmlArquivo = arquivoFiliado == 1 ? 'SIM' : 'NÃO';
				htmlBtn = '<a href="' + urlArquivo + '" ' + target + ' type="button" class="mr-2 btn-icon btn-icon-only btn btn-sm" title="Visualizar"><i class="lnr-eye icon-gradient bg-premium-dark btn-icon-wrapper text-info font-size-xlg"></i></a>';
				htmlBtn += '<button type="button" remove_id="' + response.id_file + '" hash="' + response.hash + '" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btn-remover-imagem"  title="Remover"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>';
				return table.row.add([' <input type="hidden" class="pastaInicial" name="pastaInicial" value="' + chamadoId + '">     <input type="hidden" class="mime" name="mime[]" value="' + response.mimeType + '">    <input type="hidden" class="arquivoFiliado" name="arquivoFiliado[]" value="' + arquivoFiliado + '"><input type="hidden" class="hashImage" name="hashImage[]" value="' + response.hash + '"><input type="hidden" class="extension" name="extension[]"  value="' + response.extension + '"><input type="hidden" class="OriginalName" name="OriginalName[]" value="' + response.OriginalName + '"><a  class="nomeImage" id="' + response.id_file + '" >' + response.OriginalName + '</a>', response.extension, htmlArquivo, htmlBtn]).draw().node()

			})
			this.on("error", function (file, response) {
				let msg = response.errors.file[0] || 'Erro ao realizar o upload do arquivo'
				toastr.error(msg)
				$(file.previewElement).find('.dz-error-message').text(msg)
			})
		}
	});

	$.blockUI.defaults = {
		timeout: 200000,
		fadeIn: 200,
		fadeOut: 400,
	};

	$(function () {
		identificador = $('#identificador').val();
		identificador = numerosSemCaracteres(identificador)
		lengthIdent = identificador.length
		if (lengthIdent >= 3) {
			$('#identificador').addClass('border-success')
			$('.btn-procura-por-identificador').removeAttr('disabled');
			$('.btn-procura-por-identificador').removeClass('btn-danger')
			$('.btn-procura-por-identificador').addClass('btn-success')
			$('.btn-procura-por-identificador').click();
		}
	});

	$('.cliente_nao').removeClass('d-none').hide();
	$(document).on("change", "#check_tipo_de_cliente", function () {
		$('#tabelaTelefones').DataTable().clear().draw();
		$('#prepara_cargo_ed').removeClass('col-10');
		$('#prepara_cargo_ed').removeClass('pr-0');
		$('#prepara_cargo_ed').removeClass('mr-0');
		$('#prepara_cargo_ed').addClass('col-12');
		$('.recebe-btn-adicionar-editar-cargo').parent().addClass('d-none');
		$('.btn-editar-email').addClass('d-none')
		$("#cargo_codigo  option:contains(Selecione)").attr('selected', true).change();
		$("#dre option:contains(Selecione)").attr('selected', true).change();
		$("#lotacao_id  option:contains(Selecione)").attr('selected', true).change();
		$('#cargo_codigo option:selected').attr('selected', false).change();
		$('#dre option:selected').attr('selected', false).change();
		$('#lotacao_id option:selected').attr('selected', false).change();
		if ($('#check_tipo_de_cliente').prop("checked") == false) {
			$("#btn-novo-telefone").removeClass('d-none')
			$("#cargo_codigo option:selected").val('').change();
			$("#dre option:selected").val('').change();
			$('#lotacao_id').attr("disabled", "disabled");
			data = {}
			$.ajax({
				'processing': true,
				'serverSide': false,
				type: "POST",
				data: data,
				url: url_chamados_pesquisa_dados_cargos_funcionais,
				success: function (res) {
					if (res == 'false') {
						toastr.error('Erro ao realizar busca', 'Atenção')
					} else {
						$.each(res, function (index, value) {
							$('#cargo_codigo').removeAttr("disabled");
							$('#dre').removeAttr("disabled");
							// $('#lotacao_id').removeAttr("disabled");
							$('#cargo_codigo').append('<option value="' + value.codigo + '" >' + value.descricao + '</option>');
						})
						$('#cargo_codigo').change();
					}
				},
				error: function (res) {
					toastr.error('Erro ao realizar busca', 'Atenção')
				}
			})
			$('#tipo_de_cliente').val(0);
			$('#email,#nome').removeAttr('readonly');

			$('.cliente_sim').fadeOut(400, function () {
				$('#email,#nome,#data_filiacao,#situacao,#dre,#unidade').val('')
				$('#horario_contato_ue_inicio').val('')
				$('#horario_contato_ue_fim').val('')
				$("#linha_telefone").html('')
				htmlTelefone = '<tr><td width="10%"><select id="tipo" name="tipo" class=" form-control"><option value="">Selecione</option><option value="residencial">Residencial</option><option value="comercial">Comercial</option><option value="celular">Celular</option></select></td><td width="7%"><input type="text" name="ddd" id="ddd" maxlength="2" class="form-control ddd"></td><td width="12%"><input type="text" name="telefone" id="telefone" class="form-control telefone"></td><td width="10%"><input type="number" id="ramal" name="ramal" class="form-control" disabled></td><td width="10%"><input type="text" name="melhor_horario_inicio" id="melhor_horario_inicio" class="input-time form-control"></td><td width="10%"><input type="text" name="melhor_horario_fim" id="melhor_horario_fim" class="input-time form-control"></td></tr>'
				$("#linha_telefone").append(htmlTelefone);
				$('.input-time').bootstrapMaterialDatePicker({
					date: false,
					format: 'HH:mm',
					showHeader: false,
					cancelText: 'FECHAR',
					okText: 'PRÓXIMO',
					switchOnClick: true,
					showButtons: true,
					clearButton: true,
				})
				$('.cliente_nao').fadeIn(400)
			})
		} else {
			$('#email,#nome').attr('readonly', true);
			$('#cargo_codigo').attr("disabled", "disabled");
			$('#dre').attr("disabled", "disabled");
			$('#lotacao_id').attr("disabled", "disabled");
			$('.cliente_nao').fadeOut(400, function () {
				$('#tipo_de_cliente').val(1);
				$('#email,#nome,#data_filiacao,#situacao,#dre,#unidade').val('')
				$("#linha_telefone").html('')
				$('.cliente_sim').fadeIn(400)
			})
		}
	})
	$(document).on("input", "#identificador", function (evt) {
		contaIdentificador(this)
	});

	$(document).on("keyup", "#documento", function (evt) {
		str = $("#documento").val()
		str = str.replace(/[ÀÁÂÃÄÅ]/g, "A");
		str = str.replace(/[àáâãäå]/g, "a");
		str = str.replace(/[ÈÉÊË]/g, "E");
		$("#documento").val(str.replace(/[^a-z0-9]/gi, ''));
	});

	$(document).on("change", "#tipo", function () {
		id = $("#tipo option:selected").val();
		if (id == 'celular') {
			$("#telefone").attr('minlength', 10)
			$("#telefone").attr('maxlength', 10)
			$("#telefone").inputmask("mask", { "mask": '99999-9999' });
			$("#ramal").attr('disabled', 'disabled');
		} else {
			$("#telefone").attr('minlength', 9)
			$("#telefone").attr('maxlength', 9)
			$("#telefone").inputmask("mask", { "mask": '9999-9999' });
			$("#ramal").removeAttr("disabled");
		}
	})

	$(document).on("click", ".btn-procura-por-identificador", function () {
		identificador = $('#identificador').val();
		lengthIdent = identificador.length
		if (lengthIdent >= 3) {
			$("#nome").val('')
			$("#email").val('')
			$("#data_filiacao").val('')
			$("#dre").val('')
			$("#unidade").val('')
			$("#situacao").val('')
			$("#cliente_id").val('')
			$('#linha_telefone').html('');
			$('#horario_contato_ue_inicio').val('');
			$('#horario_contato_ue_fim').val('');
		}
		$('.btn-editar-email').addClass('d-none');
		$("#cargo_codigo option:selected").prop("selected", false).change();
		$("#dre option:selected").prop("selected", false).change();
		$("#lotacao_id option:selected").prop("selected", false).change();
		$('#cargo_codigo').html('');
		$('#cargo_codigo').append('<option value="">Selecione</option>');
		if (identificador == '') {
			toastr.error('Por favor verifique o campo de RF', 'Atenção')
		} else {
			$.blockUI({
				message: $(".body-block-carregando-aprofem")
			});
			data = { 'identificador': identificador }
			$.ajax({
				'processing': true,
				'serverSide': false,
				type: "POST",
				data: data,
				url: url_chamados_pesquisa_dados_cliente,
				success: function (res) {
					data_filiacao = '';
					dre = '';
					unidade = '';
					html_info_funcional = '';
					$.unblockUI()
					if (res == 'false') {
						toastr.warning('Filiado não encontrado', 'Atenção')
						$('#prepara_cargo_ed').removeClass('col-10');
						$('#prepara_cargo_ed').removeClass('pr-0');
						$('#prepara_cargo_ed').removeClass('mr-0');
						$('#prepara_cargo_ed').addClass('col-12');
						$('.recebe-btn-adicionar-editar-cargo').parent().addClass('d-none');
					} else {
						const obj = JSON.parse(res);
						$("#cargo_codigo").html('')
						$('#cargo_codigo').removeAttr("disabled");
						$('#prepara_cargo_ed').removeClass('col-12');
						$('#prepara_cargo_ed').addClass('col-10');
						$('#prepara_cargo_ed').addClass('pr-0');
						$('#prepara_cargo_ed').addClass('mr-0');
						$('.recebe-btn-adicionar-editar-cargo').parent().removeClass('d-none');
						if (obj.info_funcional.length > 0) {
							if (obj.info_funcional[0].unidade_codigo != null) {
								$('#cargo_codigo').append('<option value="">Selecione</option>');
								$('#cargo_codigo').append('<option selected value="">Selecione</option>');
								$('#cargo_codigo').append('<option value="Não Informado">Não Informado</option>');
								$.each(obj.info_funcional, function (index, value) {
									html_info_funcional = '';
									html_info_funcional = ' id="' + value.id + '"';
									html_info_funcional += ' data_vinculo="' + value.vinculo + '"';
									html_info_funcional += ' cargo_em_comissao_codigo="' + value.cargo_em_comissao_codigo + '"';
									html_info_funcional += ' unidade_id="' + value.unidade_id + '"';
									if (value.horario_contato_ue_inicio != null) {
										html_info_funcional += ' horario_contato_ue_inicio="' + value.horario_contato_ue_inicio.substring(0, 5) + '"';
										html_info_funcional += ' horario_contato_ue_fim="' + value.horario_contato_ue_fim.substring(0, 5) + '" ';
									}
									html_info_funcional += ' unidade_codigo="' + value.unidade_codigo + '"';
									html_info_funcional += ' unidade_descricao="' + value.unidade_descricao + '"';
									html_info_funcional += ' dre_codigo="' + value.dre_codigo + '"';
									html_info_funcional += ' dre_descricao="' + value.dre_descricao + '"';
									html_info_funcional += ' ce_codigo="' + value.ce_codigo + '"';
									cargo_codigo = value.cargo_codigo;
									cargo_descricao = value.cargo_descricao;
									if (obj.info_funcional.length == 1) {
										$('#cargo_codigo').append('<option ' + html_info_funcional + ' value="' + cargo_codigo + '" selected>' + cargo_descricao + '</option>');
									} else {
										$('#cargo_codigo').append('<option ' + html_info_funcional + ' value="' + cargo_codigo + '" >' + cargo_descricao + '</option>');
									}
								})
								$('#cargo_codigo').change();
							}
							else {
								$('#cargo_codigo').append('<option selected value="">Selecione</option>');
								$('#cargo_codigo').append('<option value="Não Informado">Não Informado</option>');
								$('#cargo_codigo').change();
								$('#dre').val("Não Informado");
								$('#unidade').val("Não Informado");
							}
						} else {
							$('#cargo_codigo').append('<option selected value="">Selecione</option>');
							$('#cargo_codigo').append('<option value="Não Informado">Não Informado</option>');
							$('#cargo_codigo').change();
							$('#dre').val("Não Informado");
							$('#unidade').val("Não Informado");
						}
						$("#nome").val(obj.nome)
						$("#email").val(obj.email)
						$("#cliente_id").val(obj.cliente_id)
						$("#email_id").val(obj.email_id)
						$("#editar_email").val(obj.email) //#email no modal
						$("#emailAnterior").val(obj.email) //#email no modal
						$('.btn-editar-email').removeClass('d-none')
						if (obj.data_filiacao != null) {
							part2 = obj.data_filiacao.split(" ");
							part1 = part2[0].split("-");
							data_filiacao = part1[2] + '/' + part1[1] + '/' + part1[0]
						}
						$("#data_filiacao").val(data_filiacao)
						$("#situacao").val(obj.situacao)
						$("#cliente_id").val(obj.cliente_id)
						if ($.fn.dataTable.isDataTable('#tabelaTelefones')) {
							iniciaTabelaDatatable();
						} else {
							iniciaTabelaDatatable();
						}
						if (obj.telefones == '') {
							$("#btn-novo-telefone").removeClass('d-none')
						}
						$.each(obj.telefones, function (index, value) {
							ramal = '';
							melhor_horario_inicio = '-';
							melhor_horario_fim = '-';
							if (value.ramal != null) {
								ramal = value.ramal;
							}
							if (value.melhor_horario_inicio != null) {
								melhor_horario_inicio = value.melhor_horario_inicio.substring(0, 5);
							}
							if (value.melhor_horario_fim != null) {
								melhor_horario_fim = value.melhor_horario_fim.substring(0, 5);
							}
							tipo = value.tipo.toUpperCase()
							btnTelefone = '<button type="button" class="input-group-text btn-editar-telefone btn btn-info"';
							btnTelefone += 'id="' + value.telefone_id + '"';
							btnTelefone += 'tipo="' + value.tipo + '"';
							btnTelefone += 'ddd="' + value.ddd + '"';
							btnTelefone += 'telefone="' + value.telefone + '"';
							btnTelefone += 'ramal="' + value.ramal + '"';
							btnTelefone += 'melhor_horario_inicio="' + value.melhor_horario_inicio + '"';
							btnTelefone += 'melhor_horario_fim="' + value.melhor_horario_fim + '"';
							btnTelefone += '>';
							btnTelefone += '<i class="pe-7s-refresh-2"></i>'
							btnTelefone += '</button>';
							htmlTelefone = $('<tr><td id="tipo_' + value.telefone_id + '">' + tipo + '</td><td id="ddd_' + value.telefone_id + '">' + value.ddd + '</td><td id="telefone_' + value.telefone_id + '">' + value.telefone + '</td><td id="ramal_' + value.telefone_id + '">' + ramal + '</td><td class="text-center" id="horario_' + value.telefone_id + '">' + melhor_horario_inicio + ' até ' + melhor_horario_fim + '</td><td>' + btnTelefone + '<td></tr>')
							tabela.row.add(htmlTelefone).draw()
						});
					}
				},
				error: function (res) {
					toastr.error('Filiado não encontrado', 'Atenção')
					$.unblockUI();
				}
			});
		}
	})
})

function confirmacao(title, text, id, hash, chamadoId) {
	Swal.fire({
		title: title,
		text: text,
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: "SIM",
		cancelButtonText: "'CANCELAR",
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		retornoConfirmacao(id, hash, chamadoId);
	});
}

$('#tipo_chamado_id').change(function () {
	$('#tipo_chamado').val($("#tipo_chamado_id option:selected").text());
});

$('#status_chamado_id').change(function () {
	$('#status_chamado').val($("#status_chamado_id option:selected").text());
});

$('#categoria_chamado_id').change(function () {
	$('#atendente_id').attr('disabled', 'disabled');
	$('#atendente_id').html('');
	user_id = $('#user_id').val();
	id = $("#categoria_chamado_id option:selected").val();
	$('#categoria_chamado').val($("#categoria_chamado_id option:selected").text());
	$.ajax({
		type: "POST",
		data: {
			"_token": csrf_token,
			"id": id
		},
		url: urlGetAtendentesjax,
		success: function (result) {
			$('#atendente_id').append('<option value="">Selecione</option>');
			$.each(result, function (key, value) {
				id = value.id;
				name = value.name;
				if (user_id == id) {
					$('#atendente_id').append('<option  selected value="' + id + '" >' + name + '</option>');
				} else {
					$('#atendente_id').append('<option value="' + id + '" >' + name + '</option>');
				}
			});
			$('#atendente_id').removeAttr("disabled");
		}
	});
});

$(document).on("change", "#cargo_codigo", function () {
	$('#dre').removeAttr("disabled");
	$('#lotacao_id').removeAttr("disabled");
	$("#lotacao_id option:selected").prop("selected", false).change();
	$("#dre option:selected").prop("selected", false).change();
	id = $("#cargo_codigo option:selected").val();
	if ((id == '') || (id == 'Não Informado')) {
		$("#dre option:selected").prop("selected", false).change();
		$("#lotacao_id option:selected").prop("selected", false).change();
		$('.recebe-btn-adicionar-editar-cargo').removeClass('btn-editar-cargo')
		$('.recebe-btn-adicionar-editar-cargo').removeClass('btn-info')
		$('.recebe-btn-adicionar-editar-cargo').addClass('btn-adicionar-cargo')
		$('.recebe-btn-adicionar-editar-cargo').addClass('btn-success')
		$('.icone-recebe-btn').removeClass('pe-7s-refresh-2')
		$('.icone-recebe-btn').addClass('pe-7s-plus')
	} else {
		$('.recebe-btn-adicionar-editar-cargo').removeClass('btn-adicionar-cargo')
		$('.recebe-btn-adicionar-editar-cargo').removeClass('btn-success')
		$('.recebe-btn-adicionar-editar-cargo').addClass('btn-editar-cargo')
		$('.recebe-btn-adicionar-editar-cargo').addClass('btn-info')
		$('.icone-recebe-btn').removeClass('pe-7s-plus')
		$('.icone-recebe-btn').addClass('pe-7s-refresh-2')
		ce_codigo = $("#cargo_codigo option:selected").attr('ce_codigo');
		dre_codigo = $("#cargo_codigo option:selected").attr('dre_codigo');
		unidade_codigo = $("#cargo_codigo option:selected").attr('unidade_codigo');
		dre_descricao = $("#cargo_codigo option:selected").attr('dre_descricao');
		unidade_descricao = $("#cargo_codigo option:selected").attr('unidade_descricao');
		horario_contato_ue_inicio = $("#cargo_codigo option:selected").attr('horario_contato_ue_inicio');
		horario_contato_ue_fim = $("#cargo_codigo option:selected").attr('horario_contato_ue_fim');
		$('#dre').removeAttr("disabled");
		$('#lotacao_id').removeAttr("disabled");
		if ($('#check_tipo_de_cliente').prop("checked") == true) {
			preencheDRE(ce_codigo, dre_codigo)
			$('#dre').attr("disabled", "disabled");
			$('#lotacao_id').attr("disabled", "disabled");
		}
		$("#unidade").val(ce_codigo + '.' + dre_codigo + '.' + unidade_codigo + ' - ' + unidade_descricao)
		$('#horario_contato_ue_inicio').val($("#cargo_codigo option:selected").attr('horario_contato_ue_inicio'))
		$('#horario_contato_ue_fim').val($("#cargo_codigo option:selected").attr('horario_contato_ue_fim'))
	}
});

$('#dre').change(function () {
	$('#lotacao_id').attr("disabled", 'disabled');
	codigo = $("#dre option:selected").val();
	ce_codigo = $("#dre option:selected").attr('ce_codigo');
	unidade_codigo = $("#cargo_codigo option:selected").attr('unidade_codigo');
	if (unidade_codigo == '') {
		unidade_codigo = $("#dre option:selected").attr('unidade_codigo');
	}
	if (codigo != '') {
		text = $("#dre option:selected").text().split("-");
		url_clientes_unidades_dres = $("#dre option:selected").attr('data-rota');
		$.ajax({
			url: url_clientes_unidades_dres,
			context: document.body
		}).done(function (response) {
			if (response.data.length > 0) {
				$('#lotacao_id').html('<option>Selecione</option>');
				for (var prop in response.data) {
					values = response.data[prop];
					textSelecionado = $("#unidade").val();
					if (unidade_codigo == values.codigo) {
						$('#lotacao_id').append('<option value="' + values.codigo + '" selected>' + values.codigo + ' - ' + values.descricao + '</option>');
					} else {
						$('#lotacao_id').append('<option value="' + values.codigo + '" >' + values.codigo + ' - ' + values.descricao + '</option>');
					}
				}
				$('#lotacao_id').removeAttr("disabled");
			} else {
				return toastr.warning('Esta DRE não possuí unidades', 'ATENÇÃO');
			}
		});
	}
});

$(document).on("change", "#lotacao_id", function () {
	text = $("#lotacao_id option:selected").text();
	$('#unidade').val(text)
});

$(document).ready(function () {
	CKEDITOR.config.extraPlugins = 'autogrow';
	CKEDITOR.config.autoGrow_onStartup = true;
	CKEDITOR.config.image_previewText = ' ';
	CKEDITOR.config.htmlEncodeOutput = false
	CKEDITOR.config.entities = false;
	CKEDITOR.replace('descricao', {
		toolbar: [
			['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
			['FontSize']
		],
		height: ['300px']
	});

	$(".multiselect-dropdown").select2({
		theme: "bootstrap4",
	})

	$('.set-select2-desc').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4"
	});

	$('.input-time').bootstrapMaterialDatePicker({
		date: false,
		format: 'HH:mm',
		showHeader: false,
		cancelText: 'FECHAR',
		okText: 'PRÓXIMO',
		switchOnClick: true,
		showButtons: true,
		clearButton: true,
	})

	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'pt-BR',
	});
});

$(document).on('click', '.btn-procura-por-nao-cliente', function () {
	
	if (rf) {
		$.blockUI({
			message: $(".body-block-carregando-aprofem")
		});
		buscaNaoCliente(rf)
	}
})

$(document).on('focusout', '#rf', function () {
	
	if (rf) {
		$.blockUI({
			message: $(".body-block-carregando-aprofem")
		});
		buscaNaoCliente(rf)
	}
})

function buscaNaoCliente(rf) {
	$("#nome").val('')
	$("#email").val('')
	$("#data_filiacao").val('')
	$("#dre").val('')
	$("#unidade").val('')
	$("#situacao").val('')
	$("#cliente_id").val('')
	$('#linha_telefone').html('');
	$('#horario_contato_ue_inicio').val('');
	$('#horario_contato_ue_fim').val('');
	$('#cargo_codigo').val('').change()
	$('#dre').val('').change()
	rf = $('#rf').val();

	unidade_codigo = ''
	$.ajax({
		url: buscaNaoClienteRota,
		data: {
			'_token': token,
			documento: rf
		},
		method: 'get'
	}).done(function (response) {
		$.unblockUI()

		if (response['type'] == 'warning') {
			toastr.warning(response['msg'], 'ATENÇÃO')
			return;
		}
		if (response['type'] == 'error') {
			toastr.error(response['msg'], 'ATENÇÃO')
			return;
		}
		if (!response) {
			toastr.warning('Este não filiado ainda não tem chamados', 'ATENÇÃO')
			return;
		}
		$('#nome').val(response.nome)
		$('#email').val(response.email)
		$('#horario_contato_ue_inicio').val(response.melhor_horario_inicio)
		$('#horario_contato_ue_fim').val(response.melhor_horario_fim)
		$('#cargo_codigo').val(response.cargo_codigo).change()
		$('#dre option[ce_codigo = "' + response.ce_codigo + '"][dre_codigo= "' + response.dre_codigo + '"]').prop('selected', true).change()
		unidade_codigo = response.unidade_codigo


	}).fail((error) => {
		$.unblockUI()
		toastr.error('Erro inesparado ao buscar dados', 'ATENÇÃO')
	})
	$('#dre').on('change', function () {
		$('#unidade').val(unidade_codigo).change()

	})
}

