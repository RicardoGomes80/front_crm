$(document).on("click", ".btn-remover-imagem", function (e) {
	id = $(this).attr("remove_id")
	hash = $(this).attr('hash');
	chamadoId = $(this).attr('chamadoId');
	pedeConfirmacao('Atenção', 'Deseja remover este arquivo?', id, hash, chamadoId);
});

$(document).ready(function () {
	$("div#dropzone").dropzone({
		acceptedFiles: '.ods,.xls,.xlsx,.jpg,.png,.gif,.pdf,.doc,.docx',
		addRemoveLinks: false,
		method: "POST",
		url: route_import_file,
		params: {
			"chamadoId": chamadoIdSendFile,
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
				urlArquivo = donwloadArquivoRoute.replace(':id', response.id_file)
				table = $('#table-imagem').DataTable();

				htmlArquivo = arquivoFiliado == 1 ? 'SIM' : 'NÃO';
				htmlBtn = '<a href="' + urlArquivo + '" ' + target + ' type="button" class="mr-2 btn-icon btn-icon-only btn btn-sm" title="Visualizar"><i class="lnr-eye icon-gradient bg-premium-dark btn-icon-wrapper text-info font-size-xlg"></i></a>';
				htmlBtn += '<button type="button" remove_id="' + response.id_file + '" hash="' + response.hash + '" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btn-remover-imagem"  title="Remover"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>';
				return table.row.add(['<a  class="nomeImage" id="' + response.id_file + '" >' + response.OriginalName + '</a>', response.extension, htmlArquivo, htmlBtn]).draw().node()
			})
			this.on("error", function (file, response) {
				let msg = response.errors.file[0] || 'Erro ao realizar o upload do arquivo'
				toastr.error(msg)
				$(file.previewElement).find('.dz-error-message').text(msg)
			})
		}
	});
	CKEDITOR.replace('assunto', {
		toolbar: [
			['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
			['FontSize']
		],
		height: ['180px']
	});
	CKEDITOR.config.autoGrow_onStartup = true;
	CKEDITOR.config.image_previewText = ' ';
	CKEDITOR.config.htmlEncodeOutput = false;
	CKEDITOR.config.entities = false;

	$(".multiselect-dropdown").select2({
		theme: "bootstrap4",
	})
});

function retornoConfirmacao(id, hash, chamadoId) {
	let url = deletaArquivoRoute
	let data = {
		"_token": csrf_token,
		"id": id,
		'hash': hash,
		'chamadoId': chamadoId
	}
	let type = "POST";
	sendAjax(url, data, type, 'removeResult')
}

$(document).on("blur", ".editaArquivo", function () {
	let href = $('#visualizar_' + id).attr('href')
	let nome = $(this).val();
	nome = nome.trim();
	$(this).val(nome);
	let nomeAntigo = $(this).attr('nomeAntigo');
	let url = routeEditarArquivo
	let data = {
		"_token": csrf_token,
		"id": id,
		"nome": nome,
		"nomeAntigo": nomeAntigo
	}
	let type = "POST";
	sendAjax(url, data, type, 'updateResult');
});

function updateResult(res, data) {
	if (res == 1) {
		$('#' + data.id).parent().html('<a class="nomeImage" id="' + data.id + '"> ' + data.nome + '</a>');
		toastr.success('Registro atualizado', 'SUCESSO')
	} else {
		$('#' + data.id).parent().html('<a class="nomeImage" id="' + data.id + '"> ' + data.nomeAntigo + '</a>');
		toastr.error('Registro não atualizado', 'ATENÇÃO')
	}
}

function pedeConfirmacao(title, text, id, hash, chamadoId) {
	Swal.fire({
		title: title,
		text: text,
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: "SIM",
		cancelButtonText: "CANCELAR",
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		retornoConfirmacao(id, hash, chamadoId);
	});
}

function sendAjax(url, data, type, funcao) {
	$.ajax({
		'processing': true,
		'serverSide': false,
		type: type,
		data: data,
		url: url,
		success: function (res) {
			if (funcao == 'removeResult') {
				removeResult(res, data);
			}
			if (funcao == 'updateResult') {
				updateResult(res, data);
			}
		},
		error: function (res) {
			if (funcao == 'removeResult') {
				removeResult(false, data);
			}
			if (funcao == 'updateResult') {
				updateResult(false, data);
			}
		}
	});
}

function removeResult(res, data) {
	table = $('#table-imagem').DataTable();
	table.row($("#" + data.id).parents('tr')).remove().draw();
}
$('#novoAtendente').change(function () {
	atendenteNome = $("#novoAtendente option:selected").text();
	$('#atendenteNome').val(atendenteNome)
})
$('#resposta').change(function () {
	resposta = $("#resposta option:selected").val();
	$('#assunto').val(resposta)
	$('.cke_wysiwyg_frame').fadeOut(300, function () {
		CKEDITOR.instances.assunto.setData(resposta);
		$('.cke_wysiwyg_frame').fadeIn(300);
	})
})
$('#categoria_chamado').change(function () {
	categoria_chamado = $("#categoria_chamado option:selected").text();
	$('#categoria_chamado_texto').val(categoria_chamado)
})
$('#statusChamado').change(function () {
	status_chamado_texto = $("#statusChamado option:selected").text();
	$('#status_chamado_texto').val(status_chamado_texto)
})

$('#tipoChamado').change(function () {
	tipo_chamado_texto = $("#tipoChamado option:selected").text();
	$('#tipo_chamado_texto').val(tipo_chamado_texto)
})
$('.btn-submit').on('click', function () {
	novoAtendente = $("#novoAtendente option:selected").val();
	if (novoAtendente == '') {
		return toastr.error('Atendente não pode ser Vazio', 'Atenção')
	}
	if (!assunto) return toastr.error('O assunto não pode ser Vazio', 'Atenção')
	$('#form').submit();
})
$(document).on("mouseover", ".nomeImage", function () {
	$('.tooltip').show();
	$('.nomeImage').css('cursor', 'pointer');
}).mouseout(function () {
	$('.tooltip').hide();
});
$(document).on("click", ".btn-modal-arquivo", function () {
	$('#modalArquivo').modal('show');
})
$(document).on('click', '.updateVisivelClass', function () {
	$(this).removeClass('updateVisivelClass')
	arquivoId = $(this).attr('arquivo_id')
	text = $(this).html().trim()
	html = '<div class="form-check">'
	html += '<input class="form-check-input" id="checkVisivel' + arquivoId + '"'
	if (text == 'SIM')
		html += ' checked '
	html += 'type="checkbox">'
	html += '<label class="form-check-label" for="arquivoFiliado">'
	html += 'Vísivel ao filiado'
	html += '</label>'
	html += '<button class="ml-2 btn btn-primary updateFiliadoBtn" arquivo_id="' + arquivoId + '">'
	html += 'Salvar'
	html += '</button>'
	html += '</div>'
	$(this).html(html)
})
$(document).on('click', '.updateFiliadoBtn', function () {
	arquivoId = $(this).attr('arquivo_id')
	filiado = $('#checkVisivel' + arquivoId).is(':checked')
	if (filiado) {
		arquivoFiliado = 1
	} else arquivoFiliado = 0
	atualizaVisivelAjax(arquivoId, arquivoFiliado)
	$('#visivelTD' + arquivoId).addClass('updateVisivelClass')
	$('#visivelTD' + arquivoId).html(arquivoFiliado == 1 ? 'SIM' : 'NÃO')
})

function atualizaVisivelAjax(arquivo_id, arquivoFiliado) {
	$.ajax({
		url: atualizaVisivelRoute,
		data: {
			_token: token,
			arquivo_id: arquivo_id,
			visivel_filiado: arquivoFiliado
		},
		method: 'put'
	}).done((response) => response)
}

$(document).on("click", ".nomeImage", function () {
	id = $(this).attr("id")
	nome = $(this).html();
	$(this).parent().html('<input type="text" id="' + id + '" name="editaArquivo" value="' + nome + '" nomeAntigo="' + nome + '" class="form-control editaArquivo">');
	$('#' + id).focus()
});

$(document).on('click', '.btn-editar-descricao', function () {
	descricao = $('#descricaoSpan').html().trim()
	$('#old-descricao-editar').val(descricao)
	html = '<textarea class="form-control" id="descricaoEditada" rows=5>' + descricao + '</textarea><button class="btn btn-primary mt-2" id="editaDescricao">SALVAR</button><button class="btn btn-secondary mt-2 ml-2 descricao-cancelar-edicao">CANCELAR</button>'

	setTimeout(
		() => {

			CKEDITOR.replace('descricaoEditada', {
				toolbar: [
					['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
					['FontSize']
				],
				height: ['180px']
			});
			CKEDITOR.config.autoGrow_onStartup = true;
			CKEDITOR.config.image_previewText = ' ';
			CKEDITOR.config.htmlEncodeOutput = false;
			CKEDITOR.config.entities = false;
		}, 1000
	)
	$('#descricaoDiv').html(html)
})

$(document).on('click', '.descricao-cancelar-edicao', function () {
	descricao = $('#old-descricao-editar').val()
	atualizaHtmlDescricao(descricao)
})


$(document).on('click', '#editaDescricao', function () {
	descricao = CKEDITOR.instances['descricaoEditada'].getData();
	old_descricao = $('#old-descricao-editar').val()
	$.ajax({
		url: editaDescricaoRoute,
		data: {
			"_token": token,
			descricao: descricao,
			old_descricao: old_descricao,
			cliente_id: cliente_id
		},
		method: 'put'
	}).done((response => {
		if (!response) {
			return toastr.error('Erro inesperado ao editar descrição', 'ATENÇÃO')
		}
		if (response['error']) {
			return toastr.error(response['error'], 'ATENÇÃO')
		}
		if (response['warning']) {
			return toastr.warning(response['warning'], 'ATENÇÃO')
		}
		if (response['success']) {
			atualizaHtmlDescricao(descricao)
			return toastr.success(response['success'], 'SUCESSO')
		}
	})).fail(error => toastr.error('Erro inesperado ao editar descrição', 'ATENÇÃO'))
})

function atualizaHtmlDescricao(descricao) {
	html = '<h5 class="mb-0">'
	html += '<span class="pr-1" id="descricaoSpan">'
	html += descricao
	html += '</span>'
	html += '</h5>'
	html += '<button class="btn btn-danger mt-2 btn-editar-descricao">'
	html += 'EDITAR DESCRIÇÃO'
	html += '</button>'

	$('#descricaoDiv').html(html)
}
