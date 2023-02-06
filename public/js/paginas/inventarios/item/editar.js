$('#criarFabricante').on('click', function () {
	nome = $('#nomeFabricante').val();
	return criarFabricante(nome)
})

function criarFabricante(nome) {
	$.ajax({
		url: criarFabricanteRoute,
		data: {
			token: token,
			nome: nome
		},
		method: 'post'
	}).done(function (response) {
		$('#select5').append('<option value="' + response + '" selected>' + nome + '</option>').trigger('change');
		$('#criarFabricanteModal').modal('hide')
		$('#nomeFabricante').val('');
		return toastr.success('Fabricante criado', 'Sucesso')
	})
}
$('#criarTipo').on('click', function () {
	nome = $('#nomeTipo').val();
	return criarTipo(nome)
})

function criarTipo(nome) {
	$.ajax({
		url: criarTipoRoute,
		data: {
			token: token,
			nome: nome
		},
		method: 'post'
	}).done(function (response) {
		$('#select6').append('<option value="' + response + '" selected>' + nome + '</option>').trigger('change');
		$('#criarTipoModal').modal('hide')
		$('#nomeTipo').val('');
		return toastr.success('Tipo criado', 'Sucesso')
	})
}


$('#adicionaAnotacao').on('click', function () {
	titulo = $('#titulo').val()
	anotacao = $('#anotacao').val()
	return adicionaAnotacaoAjax(titulo, anotacao);
})


function adicionaAnotacaoAjax(titulo, anotacao) {
	data = new Date();
	now = data.toLocaleDateString("pt-BR")
	$.ajax({
		url: adicionarAnotacaoRoute,
		data: {
			token: token,
			titulo: titulo,
			anotacao: anotacao,
			item_id: itemId
		},
		method: 'post'
	}).done(function (response) {
		if (!response) {
			return toastr.error('Não foi possível adicionar esta anotação agora', 'Erro')
		}
		html = `<div class="vertical-timeline-item vertical-timeline-element"><div>`
		html += `<span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"></i></span>`
		html += `<div class="vertical-timeline-element-content bounce-in">
                <h4 class="timeline-title">` + titulo + `</h4>
                <p>` + anotacao + ` ` + now + `</p>`
		html += `  </div></div></div>`
		$('#removeSemItems').fadeOut(400)
		$('#titulo').val('')
		$('#anotacao').val('')
		$('#adicionaItemGrid').prepend(html);
	}).fail(function (xhr, textStatus, errorThrown) {
		objeto = JSON.parse(xhr.responseText)
		$.each(objeto.errors, function (index, item) {
			toastr.error(item, 'Erro')
		})
		return;
	});
}