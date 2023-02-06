$('#criarCategoria').on('show.bs.modal', function () {
	setTimeout(function () {
		$('input[name="nome"]').focus()
	}, 500);
})
$('#criarCategoria').on('hidden.bs.modal', function () {
	$('.limpar').val('');
})

$(document).on('click', '#btnCriarCategoria', function () {
	nome = $('#nomeCategoria').val()
	nome ?
		adicionaCategoria(nome) :
		toastr.warning('O nome da categoria não pode estar vazio', 'ATENÇÃO')
});

function adicionaCategoria(nome) {
	$.ajax({
		url: criarCategoriaProdutosRoute,
		data: {
			"_token": token,
			nome: nome
		},
		method: 'post',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error('Erro ao adicionar categoria', 'ATENÇÃO');
			return;
		}
		adicionaCategoriaHtml(response, nome)
		$('#semResultados').fadeOut(400)
		$('#criarCategoria').modal('hide');
		toastr.clear();
		toastr.success('Categoria adicionada', 'SUCESSO');

	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	})
}

function adicionaCategoriaHtml(response, nome) {

	actions = '<button type="button" class="btn-icon btn-icon-only  btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine" id="editaCusto' + response + '" id_categoria="' + response + '" nome_edita="' + nome + '" data-toggle="modal" data-target="#editarCategoria">'
	actions += '<i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i></button>'
	actions += `<button type="button" class="btn-icon btn-icon-only  btn btn-link btn-sm submit-form-delete btn-shadow btn-hover-shine" id="` + response + `" title="Remover" data-rota="` + removeCategoriaRoute + `">`
	actions += '<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>'
	actions += '</button>'
	$('#table').DataTable().row.add([nome, actions,]).draw(false);
}

$(document).on('click', '.btnEdita', function () {
	id = $(this).attr('id_categoria');
	nomeEdita = $(this).attr('nome_edita');
	$('#nomeEdita').val(nomeEdita);
	$('#idEdita').val(id);
})

$(document).on('click', '#btnEditarCategoria', function () {
	id = $('#idEdita').val()
	nome = $('#nomeEdita').val()
	id && nome ? editaCategoriaAjax(id, nome) : toastr.warning('O nome da categoria não pode estar vazio', 'ATENÇÃO')
});

function editaCategoriaAjax(id, nome) {
	$.ajax({
		url: editarCategoriaProdutosRoute,
		data: {
			"_token": token,
			id: id,
			nome: nome
		},
		method: 'put',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error("Erro ao editar categoria", 'ATENÇÃO');
			return;
		}
		var msg = "Categoria editada";
		$('#nomeTd' + id).html(nome);
		$('#editaCusto' + id).attr('nome_edita', nome);
		$('#editarCategoria').modal('hide');
		toastr.clear();
		toastr.success(msg, 'SUCESSO');
	}).fail(function (error) {
		$.each(error.responseJSON.errors, (index, dados) => {
			toastr.error(dados, 'ATENÇÃO')
		})
	})
}
