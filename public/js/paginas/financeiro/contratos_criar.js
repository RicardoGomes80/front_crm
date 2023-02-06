

Dropzone.autoDiscover = false;
temp_id = 0
hashArquivo = []
nomeArquivo = []
extensaoArquivo = []
descricaoArquivo = []
mimeTypeArquivo = []
$(".dropzone").dropzone({
	acceptedFiles: acceptedDropzones,
	addRemoveLinks: false,
	method: "POST",
	url: routeCriarArquivoTemp,
	headers: {
		'X-CSRF-Token': $('input[name="csrf-token"]').val()
	},
	init: function () {
		this.on("success", function (file, response) {
			temp_id++
			descricao = 'Sem descrição';
			descricaoHtml = '<a id="editaDescricaoArquivo_' + temp_id + ' "id_arquivo="' + temp_id + '" class="descricaoArquivo">Sem descrição</a>';
			arquivoHtml = ' <a id="editaNomeArquivo_' + temp_id + ' "id_arquivo="' + temp_id + '" class="nomeArquivo">' + response.OriginalName + '.' + response.extension + '</a>';

			urlArquivo = downloadRoute + '/'+response.hash
			html = '<tr id="removeArquivo' + temp_id + '">'
			html += '<td id="tdNomeArquivo_' + temp_id + '"data-toggle="tooltip" data-placement="top" title="" data-original-title="Click sobre o nome do arquivo para Renomear">' + arquivoHtml + '</td>';
			html += '<td id="tdDescricaoArquivo_' + temp_id + '">'
			html += descricaoHtml
			html += '</td>'
			html += '<td>'
			html += '<a href="' + urlArquivo + '" download="' + response
				.OriginalName + '.' + response.extension + '" type="button" class=" btn-icon btn-icon-only  btn btn-link btn-sm btn-shadow btn-hover-shine" title="download">'
			html += '<i class="pe-7s-cloud-download btn-icon-wrapper text-primary font-size-xlg"></i>'
			html += '</a>'
			html += '<button type="button" id_arquivo="' + temp_id + '" class=" btn-icon btn-icon-only  btn btn-link btn-sm btn-shadow btn-hover-shine btnRemoveArquivo" hash_arquivo="' + response.hash + '"  title="Remover">'
			html += '<i class="pe-7s-trash btn-icon-wrapper text-primary font-size-xlg"></i>'
			html += '</button>'
			html += '</td>'
			html += `</tr>`
			$('#descricaoDoArquivo').val('')
			$('#semArquivos').fadeOut(400);

			descricaoArquivo.push(descricao);

			hashArquivo.push(response.hash);

			nomeArquivo.push(response.OriginalName)

			extensaoArquivo.push(response.extension)

			mimeTypeArquivo.push(response.mimeType)

			$('#hashArquivo').val(hashArquivo)

			$('#nomeArquivo').val(nomeArquivo)
			$('#extensaoArquivo').val(extensaoArquivo)

			$('#descricoesArquivo').val(descricaoArquivo)

			$('#mimes').val(mimeTypeArquivo)

			$('#table1').DataTable().row.add($(html)).draw()

		})
		this.on("error", function (file, response) {
			let msg = response.errors.file[0] || 'Erro ao realizar o upload do arquivo'
			toastr.error(msg)
			$('#descricaoDoArquivo').val('')
			$(file.previewElement).find('.dz-error-message').text(msg)
		})
	}
});

$(document).ready(function () {
	temArquivo = $('#hashArquivo').val()
	if (temArquivo) {
		adicionaArquivosAnterioresNaTabela()
	}
})

$(document).on("click", ".descricaoArquivo", function () {
	resetaCampoDescricaoArquivo()
	id = $(this).attr("id_arquivo")
	nome = $(this).html().trim();
	$(this).parent().html('<input type="text" id_arquivo="' + id + '" id="editaDescricaoArquivo_' + id + '" name="editaDescricaoArquivo" descricaoArquivoAntigo="' + nome + '" value="' + nome + '" class="form-control editaDescricaoArquivo">');
	$('#editaArquivo_' + id).focus();
});

$(document).on("click", ".nomeArquivo", function () {
	id = $(this).attr("id_arquivo")
	nome = $(this).html().trim();
	$(this).parent().html('<input type="text" id_arquivo="' + id + '" id="editaNomeArquivo_' + id + '" "name="nomeArquivo" nomeAntigo="' + nome + '" value="' + nome + '" class="form-control editaNomeArquivo">');
});

$(document).on("blur", ".editaDescricaoArquivo", function () {
	$("#adicionaArquivoHtml tr .editaDescricaoArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		descricaoArquivo[id_arquivo - 1] = valorCampo
		$('#descricoesArquivo').val(descricaoArquivo)
	});
	resetaCampoDescricaoArquivo()
})

$(document).on("blur", ".editaNomeArquivo", function () {
	$("#adicionaArquivoHtml tr .editaNomeArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		nomeArquivo[id_arquivo - 1] = valorCampo
		$('#nomeArquivo').val(nomeArquivo)
	});
	resetaCampoNomeArquivo()
})

function resetaCampoDescricaoArquivo() {
	$("#adicionaArquivoHtml tr .editaDescricaoArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		valorCampoDescricaoAntigo = $(this).attr('descricaoArquivoAntigo');
		if (valorCampo == '') {
			valorCampo = 'Sem descrição';
		}
		$('#tdDescricaoArquivo_' + id_arquivo).html('<a id="editaDescricaoArquivo_' + id_arquivo + '" id_arquivo="' + id_arquivo + '" class="descricaoArquivo" style="cursor: pointer;">' + valorCampo + '</a>');
	});
}

function resetaCampoNomeArquivo() {
	$("#adicionaArquivoHtml tr .editaNomeArquivo").each(function (index) {
		id_arquivo = $(this).attr('id_arquivo').trim();
		valorCampo = $(this).val().trim();
		valorCampoNomeAntigo = $(this).attr('nomeantigo').trim();
		$('#tdNomeArquivo_' + id_arquivo).html('<a id="editaNomeArquivo_' + id_arquivo + '" id_arquivo="' + id_arquivo + '" class="nomeArquivo" style="cursor: pointer;">' + valorCampo + '</a>');
	});
}

function adicionaArquivosAnterioresNaTabela() {
	itens = $('#hashArquivo').val().split(',')
	nomes = $('#nomeArquivo').val().split(',')
	extensoes = $('#extensaoArquivo').val().split(',')
	$.each(itens, (index, element) => {
		html = '<tr>'
		html += '<td>' + nomes[index] + '.' + extensoes[index] + '</td>';
		html += '<td>'
		html += '</td>'
		html += '</tr>'
		$('#adicionaArquivoHtml').prepend(html);
	});
	$('#nomeArquivo').val(nomeArquivo)
	$('#extensaoArquivo').val(extensaoArquivo)
}

$(document).on('click', '.btnRemoveArquivo', function () {
	id = $(this).attr('id_arquivo')
	hash = $(this).attr('hash_arquivo')
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

	$('#removeArquivo' + id).fadeOut(400);
	hashArquivo.remove(hash)
	$('#hashArquivo').val(hashArquivo)
	});
});

Array.prototype.remove = function () {
	var what, a = arguments, L = a.length, ax;
	while (L && this.length) {
		what = a[--L];
		while ((ax = this.indexOf(what)) !== -1) {
			this.splice(ax, 1);
		}
	}
	return this;
};