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