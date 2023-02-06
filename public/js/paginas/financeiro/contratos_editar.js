$(document).on("click", ".nomeArquivo", function () {
	resetaCampos()
	id = $(this).attr("id_arquivo")
	nome = $(this).html().trim();

	$(this).parent().html('<input type="text" id_arquivo="' + id + '" id="editaArquivo_' + id + '" "name="editaArquivo" nomeAntigo="' + nome + '" value="' + nome + '" class="form-control editaArquivo">');
	$('#editaArquivo_' + id).focus();
});

$(document).on("click", ".descricaoArquivo", function () {
	resetaCampos()
	id = $(this).attr("id_arquivo")
	nome = $(this).html().trim();
	$(this).parent().html('<input type="text" id_arquivo="' + id + '" id="editaArquivo_' + id + '" name="editaDescricaoArquivo" descricaoArquivoAntigo="' + nome + '" value="' + nome + '" class="form-control editaDescricaoArquivo">');
	$('#editaArquivo_' + id).focus();
});

$(document).on("change", ".editaArquivo", function () {
	let nome = $(this).val().trim();
	let id = $(this).attr('id_arquivo');
	$(this).val(nome);
	let nomeAntigo = $(this).attr('nomeAntigo');
	if (nome == '') {
		nome = nomeAntigo;
	}

	extensao = $('#extensao_editaArquivo_' + id).val();
	nome = nome.replace('.' + extensao, '');
	nomeAntigo = nomeAntigo.replace('.' + extensao, '');
	let url = editarArquivoRoute;
	let csrf_token = token;
	let data = { "_token": csrf_token, "id": id, "nome": nome, "nomeAntigo": nomeAntigo, "extensao": extensao }
	let type = "PUT";
	sendAjax(url, data, type, 'updateNomeArquivo');
});

$(document).on("change", ".editaDescricaoArquivo", function () {
	let descricaoarquivo = $(this).val();
	let id = $(this).attr('id_arquivo');
	descricaoarquivo = descricaoarquivo.trim();
	$(this).val(descricaoarquivo);
	let descricaoarquivoantigo = $(this).attr('descricaoarquivoantigo');
	let url = editarArquivoDecricaoRoute;
	let csrf_token = token;
	let data = { "_token": csrf_token, "id": id, "descricaoarquivo": descricaoarquivo, "descricaoarquivoantigo": descricaoarquivoantigo }
	let type = "PUT";
	sendAjax(url, data, type, 'updateDescricaorquivo');
});

function resetaCampos() {
	$("#adicionaArquivoHtml tr .editaArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		valorCampoNomeAntigo = $(this).attr('nomeantigo').trim();
		if (valorCampo == valorCampoNomeAntigo) {
			$('#tdNomeArquivo_' + id_arquivo).html('<a id="editaArquivo_' + id_arquivo + '" id_arquivo="' + id_arquivo + '" class=" nomeArquivo" style="cursor: pointer;">' + valorCampo + '</a>');
		}
	});

	$("#adicionaArquivoHtml tr .editaDescricaoArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		valorCampoDescricaoAntigo = $(this).attr('descricaoArquivoAntigo');
		if (valorCampo == '') {
			valorCampo = 'Sem descrição';
		}
		if (valorCampo == valorCampoDescricaoAntigo) {
			$('#tdDescricaoArquivo_' + id_arquivo).html('<a id="editaDescricao_' + id_arquivo + '" id_arquivo="' + id_arquivo + '" class="descricaoArquivo" style="cursor: pointer;">' + valorCampo + '</a>');
		}
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
				removeResult(res, data,);
			}
			if (funcao == 'updateNomeArquivo') {
				updateNomeArquivo(res, data,);
			}
			if (funcao == 'updateDescricaorquivo') {
				updateDescricaorquivo(res, data,);
			}
		},
		error: function (res) {
			if (funcao == 'removeResult') {
				removeResult(false, data);
			}
			if (funcao == 'updateNomeArquivo') {
				updateNomeArquivo(false, data);
			}
			if (funcao == 'updateDescricaorquivo') {
				updateDescricaorquivo(false, data);
			}
		}
	});
}

function updateNomeArquivo(res, data) {
	if (res == 1) {
		linhaEditada = '<a id="editaArquivo_' + data.id + '" id_arquivo="' + data.id + '" class=" nomeArquivo" style="cursor: pointer;">' + data
			.nome + '.' + data.extensao + ' </a>'
		$('#tdNomeArquivo_' + data.id).html(linhaEditada);
		toastr.success('Registro atualizado', 'SUCESSO')
	} else {
		linhaNaoEditada = '<a id="editaArquivo_' + data.id + '" id_arquivo="' + data.id + '" class=" nomeArquivo" style="cursor: pointer;">' + data
			.nomeAntigo + '.' + data.extensao + ' </a>'
		$('#tdNomeArquivo_' + data.id).html(linhaNaoEditada);
		toastr.error('Registro não atualizado', 'ATENÇÃO')
	}
}

function updateDescricaorquivo(res, data) {
	if (res == 1) {
		linhaEditada = '<a id="editaDescricaoArquivo_' + data.id + '" id_arquivo="' + data.id + '" class=" descricaoArquivo" style="cursor: pointer;">' + data
			.descricaoarquivo + '</a>'
		$('#tdDescricaoArquivo_' + data.id).html(linhaEditada);
		toastr.success('Registro atualizado', 'SUCESSO')
	} else {
		linhaNaoEditada = '<a id="editaDescricaoArquivo_' + data.id + '" id_arquivo="' + data.id + '" class=" descricaoArquivo" style="cursor: pointer;">' + data
			.descricaoarquivoantigo + '</a>'
		$('#tdDescricaoArquivo_' + data.id).html(linhaNaoEditada);
		toastr.error('Registro não atualizado', 'ATENÇÃO')
	}
}

Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
	acceptedFiles: acceptedDropzones,
	addRemoveLinks: false,
	method: "POST",
	url: adicionarArquivoRoute,
	params: {
		"contrato_id": id,
		"descricao": "Sem descrição",
	},
	headers: {
		'X-CSRF-Token': $('input[name="csrf-token"]').val()
	},
	init: function () {
		
		this.on("success", function (file, response,) {

			urlArquivo = routeDownload.replace(':id', response.id_file)

			html = '<tr id="removeArquivo' + response.id_file + '"><td id="tdNomeArquivo_' +
				response.id_file + '" ><a id="editaArquivo_' + response.id_file +
				'" id_arquivo="' + response.id_file + '" class="nomeArquivo">' + response
					.OriginalName + '.' + response.extension + '</td>';
			html += '<td>'
			html += $('#descricaoDoArquivo').val() || 'Sem descrição'
			html += '</td>'
			html += '<td class="text-center">'
			html += '<a href="' + urlArquivo + '" download="' + response
				.OriginalName + '.' + response.extension + '" type="button" class=" btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine" title="download">'
			html += '<i class="pe-7s-cloud-download btn-icon-wrapper text-primary font-size-xlg"></i>'
			html += '</a>'
			html += '<button type="button" id_arquivo="' + response.id_file + '" class="btn-icon btn-icon-only  btn btn-link btn-sm btn-shadow btn-hover-shine btnRemoveArquivo" title="Remover">'
			html += '<i class="pe-7s-trash btn-icon-wrapper text-primary font-size-xlg"></i>'
			html += '</button></td></tr>'
			$('#descricaoDoArquivo').val('')
			$('#table1').DataTable().row.add($(html)).draw()
		})
		this.on("error", function (file, response) {
			$('#descricaoDoArquivo').val('')
			toastr.error('Erro ao adicionar arquivo', 'ATENÇÃO')
			$(file.previewElement).find('.dz-error-message').text(msg)
		})
	}
});

$(document).on("mouseover", ".nomeArquivo", function () {
	$('.tooltip').show();
	$('.nomeArquivo').css('cursor', 'pointer');
}).mouseout(function () {
	$('.tooltip').hide();
});

$(document).on('click', '.btnRemoveArquivo', function () {
	btn = $(this)
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
			url: removeArquivoRoute,
			data: {
				"_token": token,
				id: id,
			},
			method: 'delete',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error("Erro ao remover arquivo", 'ATENÇÃO');
				return;
			}

			btn.closest("tr").remove();
			toastr.clear();
			toastr.success("Solicitação concluida", 'SUCESSO');
		});
	}).fail((error) => toastr.error("Erro ao remover arquivo", 'ATENÇÃO'));
});
