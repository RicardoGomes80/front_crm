$('#criarCategoriaModal').on('hidden.bs.modal', function () {
	$('#nomeCategoria').val('')
	$('#iconeCategoria').val('')
})

$(document).on("click", "#criarCategoria", function () {

	nome = $('#nomeCategoria').val();
	icone = $('#iconeCategoria').val();
	codigo = $('#iconeCategoria :selected').attr('codigo');
	return criarCategoriaAjax(nome, icone, codigo);
})

function criarCategoriaAjax(nome, icone, codigo) {
	$.ajax({
		url: criarCategoriaRoute,
		data: {
			nome: nome,
			icone: icone
		},
		method: 'post'
	}).done(function (response) {
		html = '<tr id="remove' + response + '">'
		html += `<td id="iconeTD` + response + `" style="font-family: 'Font Awesome 5 Free', 'Font Awesome 5 Brands', 'Font Awesome 5 Pro';
        font-weight: 900;" class="text-center"> <i
        class="btn-icon-wrapper">` + codigo + `</i></td>`
		html += '<td id="nomeTD' + response + '">' + nome + '</td>'
		html += `<td><button type="button"
        class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btnEdita btn-shadow btn-hover-shine editarCategoriaModalBtn"
        id="editaCusto` + response + `"
        id_icone="` + icone + `"
        nome_edita="` + nome + `"
        id_categoria="` + response + `"
        data-toggle="modal"
        data-target="#editarCategoriaModal"><i class="pe-7s-settings btn-icon-wrapper text-primary font-size-xlg"></i></button>`
		html += `<button type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm delete-categoria btn-shadow btn-hover-shine"
        id_categoria="` + response + `" title="Remover"> <i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button></td>`
		html += '</tr>'
		$('#criarCategoriaModal').modal('hide');
		$('#adicionaCategoria').prepend(html)
		$('#removeSemResultados').fadeOut(400)
		return toastr.success('Categoria criada', 'Sucesso')
	})
}

$(document).on('click', '#btnEditaCategoria', function () {
	idCategoria = $('#idCategoriaEditar').val()
	nome = $('#nomeCategoriaEditar').val();
	icone = $('#iconeCategoriaEditar').val()
	codigo = $('#iconeCategoriaEditar :selected').attr('codigo');
	return editarCategoria(idCategoria, nome, icone, codigo);
})

$(document).on('click', '.editarCategoriaModalBtn', function () {
	id_categoria = $(this).attr('id_categoria')
	id_icone = $(this).attr('id_icone')
	nome = $(this).attr('nome_edita')
	$('#idCategoriaEditar').val(id_categoria)
	$('#nomeCategoriaEditar').val(nome)
	$('#iconeCategoriaEditar').val(id_icone)
})

function editarCategoria(idCategoria, nome, icone, codigo) {
	$.ajax({
		url: editarCategoriaRoute,
		data: {
			id_categoria: idCategoria,
			nome: nome,
			icone: icone
		},
		method: 'put'
	}).done(function (response) {
		$('#nomeTd' + idCategoria).html(nome)
		$('#iconeTd' + idCategoria).html(`<i btn-icon-wrapper font-size-xlg">` + codigo + `</i>`)
		$('#editarCategoriaModal').modal('hide');
		$('#editaCategoria' + idCategoria).attr('id_icone', icone)
		$('#editaCategoria' + idCategoria).attr('nome_edita', nome)
		return toastr.success('Categoria atualizada', 'Sucesso')
	})
}