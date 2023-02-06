$(document).ready(function () {
	$('.select-categorias').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
	});
});

$(document).on('show.bs.modal', function () {
	$('#nome').focus();
})

$(document).on('hidden.bs.modal', function () {
	$('.limpar').val('');
	$('#nome').val('');
	$('#codigo').val('');
	$('#estoque_min').val('');
	$('#estoque_max').val('');
	$('#descricao').val('');
	$('.select-categorias').val('').trigger('change')
	$('#categoria_id').val('').trigger('change')
})

$(document).on('click', '#btnCriarProduto', function () {
	nome = $('#nome').val()
	codigo = $('#codigo').val()
	categoria_id = $('#categoria_id').val()
	categoria_nome = $("#categoria_id option:selected").text()
	estoque_min = $('#estoque_min').val()
	estoque_max = $('#estoque_max').val()
	if (parseInt(estoque_min) > parseInt(estoque_max))
		return toastr.error('O estoque minimo não pode ser maior que o estoque máximo', 'ATENÇÃO')

	descricao = $('#descricao').val()
	data = {
		"_token": token,
		nome: nome,
		codigo: codigo,
		categoria_id: categoria_id,
		estoque_min: estoque_min,
		estoque_max: estoque_max,
		descricao: descricao,
		categoria_nome: categoria_nome
	}

	return adicionaProdutoAjax(data)
});

function adicionaProdutoAjax(data) {
	$.ajax({
		url: criarProdutoRoute,
		data: data,
		method: 'post',
	}).done(function (response) {
		if (!response) erroToastr(msgErr)
		is_orcamento = document.getElementById('produto')
		if (is_orcamento) adicionaNoselect(response, data.nome)
		adicionaHtmlProdutos(response, data)
		$('#criarProduto').modal('hide');
		toastr.clear();
		toastr.success('Produto adicionado', 'SUCESSO');
		$('#removeSemResultados').fadeOut(400);
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	})
}

function adicionaNoselect(id, nome) {
	$('#produto').append('<option value="' + id + '" selected>' + nome + '</option>')
}

function adicionaHtmlProdutos(id, data) {
	codigo = data.codigo.length > 0 ? data.codigo : '--'
	html = '<tr id="remover' + id + '">'
	html += '<td id="nomeTd' + id + '">'
	html += data.nome
	html += '</td>'
	html += '<td id="codigoIdTD' + id + '" class="text-center">'
	html += codigo
	html += '</td>'
	html += '<td id="categoria_idTd' + id + '">'
	html += data.categoria_nome
	html += '</td>'
	html += '<td>'
	html += '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine" categoria_nome="` + categoria_nome + `" id_produto="' + id + '" id="editaProduto' + id + '" nome="' + data.nome + '" codigo="' + data.codigo + '" categoria_id="' + data.categoria_id + '" estoque_min="' + estoque_min + '" estoque_max="' + data.estoque_max + '" descricao="' + data.descricao + '" data-toggle="modal" data-target="#editarProduto">'
	html += '<i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i>'
	html += '</button>'
	html += '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm submit-form-delete btn-shadow btn-hover-shine" id="' + id + '" title="Remover" data-rota="' + produtoDeletarRoute + '">'
	html += '<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>'
	html += '</button>'
	html += '</td>'
	html += '</tr>'
	$('#table').DataTable().row.add($(html)).draw();
}

$(document).on('click', '.btnEdita', function () {
	id = $(this).attr('id_produto');
	nomeEdita = $(this).attr('nome');
	codigoEdita = $(this).attr('codigo');
	categoria_idEdita = $(this).attr('categoria_id');
	estoque_minEdita = $(this).attr('estoque_min');
	estoque_maxEdita = $(this).attr('estoque_max');
	descricaoEdita = $(this).attr('descricao');
	categoria_nome = $(this).attr('categoria_nome');

	$('#idEdita').val(id);
	$('#nomeEdita').val(nomeEdita);
	$('#codigoEdita').val(codigoEdita);
	$('#categoria_idEdita').val(categoria_idEdita);
	$('#categoria_idEdita').attr('nome', categoria_nome);
	$('#estoque_minEdita').val(estoque_minEdita);
	$('#estoque_maxEdita').val(estoque_maxEdita);
	$('#descricaoEdita').val(descricaoEdita);
})

$(document).on('click', '#btnEditarProduto', function () {
	id = $('#idEdita').val();
	nome = $('#nomeEdita').val();
	codigo = $('#codigoEdita').val();
	categoria_id = $('#categoria_idEdita').val();
	estoque_min = $('#estoque_minEdita').val();
	estoque_max = $('#estoque_maxEdita').val();
	if (parseInt(estoque_min) > parseInt(estoque_max))
		return toastr.error('O estoque minimo não pode ser maior que o estoque máximo')
	descricao = $('#descricaoEdita').val();
	categoria_nome = $('#categoria_idEdita').attr('nome');
	if ($("#categoria_idEdita option:selected").text() !== categoria_nome)
		categoria_nome = $("#categoria_idEdita option:selected").text()

	data = {
		"_token": token,
		id: id,
		nome: nome,
		codigo: codigo,
		categoria_id: categoria_id,
		estoque_min: estoque_min,
		estoque_max: estoque_max,
		descricao: descricao,
		categoria_nome: categoria_nome
	}
	return editaProdutoAjax(data)
});

function editaProdutoAjax(data) {
	$.ajax({
		url: editarProdutoRoute,
		data: data,
		method: 'put',
	}).done(function (response) {
		if (!response) erroToastr(msgErr)
		$('#nomeTd' + id).html(data.nome);
		$('#codigoIdTD' + id).html(data.codigo)
		$('#categoria_idTd' + id).html(data.categoria_nome);
		$('#editaCusto' + id).attr('nome_edita', data.nome);
		$('#editarProduto').modal('hide');
		$('#editaProduto' + id).attr('id_produto', data.id);
		$('#editaProduto' + id).attr('nome', data.nome);
		$('#editaProduto' + id).attr('codigo', data.codigo);
		$('#editaProduto' + id).attr('categoria_id', data.categoria_id);
		$('#editaProduto' + id).attr('estoque_min', data.estoque_min);
		$('#editaProduto' + id).attr('estoque_max', data.estoque_max);
		$('#editaProduto' + id).attr('descricao', data.descricao);
		$('#editaProduto' + id).attr('categoria_nome', data.categoria_nome);
		toastr.clear();
		toastr.success(msgSuccess, 'SUCESSO');

	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	});
}