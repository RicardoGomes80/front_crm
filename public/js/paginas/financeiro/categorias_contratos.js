$('#criarCategoria').on('shown.bs.modal', function () {
	$('#nomeCategoria').focus();
});
$('#criarCategoria').on('hidden.bs.modal', function () {
	$('.limpar').val('');
})

$('.limpar').on('click', function () {
	$('.inputToclean').val('')
	$('.select').val('').trigger('change')
})

$(document).on('click', '.btnEdita', function () {
	id = $(this).attr('id_usuario');
	nomeEdita = $(this).attr('nome_edita');
	$('#nomeEdita').val(nomeEdita);
	$('#idEdita').val(id);
})

$(document).on('click', '#btnEditarCategoria', function () {
	id = $('#idEdita').val()
	nome = $('#nomeEdita').val()
	$.ajax({
		url: editarCategoriaRoute,
		data: {
			"_token": token,
			id: id,
			nome: nome
		},
		method: 'put',
	}).done(function (response) {
		if (!response) {

			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
			return;
		}
		$('#nomeTd' + id).html(nome);
		$('#editaCusto' + id).attr('nome_edita', nome);
		$('#editarCategoria').modal('hide');
		toastr.clear();
		toastr.success(msgSuccess, 'SUCESSO');
	}).fail(function (response) {
		toastr.clear();
		toastr.error(msgErr, 'ATENÇÃO');
	});
});


//CRIAR CATEGORIA
$(document).on('click', '#btnCriarCategoria', function () {
	nome = $('#nomeCategoria').val();
	nome ? adicionaCategoriaAjax(nome) : toastr.warning('O nome não pode estar vazio', 'ATENÇÃO')
});

function adicionaCategoriaAjax(nome) {
	$.ajax({
		url: criarCategoriaRoute,
		data: {
			"_token": token,
			nome: nome
		},
		method: 'post',
	}).done(function (response) {
		if (!response) {
			toastr.clear();
			toastr.error(msgErr, 'ATENÇÃO');
			return;
		}
		is_select = document.getElementById('categoria_id')
		$('#criarCategoria').modal('hide');
		if (is_select) {
			htmlBtn = '<option value="' + response + '" selected>' + nome + '</option>'
			return $('#categoria_id').append(htmlBtn)
		}
		adicionaCategoriaHtml(nome, response)
		$('#nome').val('');
		toastr.clear();
		toastr.success(msgSuccess, 'SUCESSO');
		$('.removeSemResultados').fadeOut(400);
	})
}

function adicionaCategoriaHtml(nome, id) {
	html = '<tr>'
	html += '<td id="nomeTd' + id + '">' + nome + '</td>'
	html += '<td align="center">'
	html += '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine" id="editaCusto' + id + '" id_usuario="' + id + '" nome_edita="' + nome + '" data-toggle="modal" data-target="#editarCategoria">'
	html += '<i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i>'
	html += '</button>'
	html += '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm submit-form-delete btn-shadow btn-hover-shine" id="' + id + '" title="Remover" data-rota="' + deletarCategoriaRoute + '">'
	html += '<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>'
	html += '</button>'
	html += '</td>'
	html += '</tr>'
	$('#table').DataTable().row.add($(html)).draw()
}