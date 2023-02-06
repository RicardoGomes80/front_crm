$('#criarCategoriaModal').on('hidden.bs.modal', function () {
	$('#nomeCategoria').val('')
	$('#iconeCategoria').val('')
})

$('#criarCategoria').on('click', function () {
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
		html = `<div class="col-sm-6">
        <div class="widget-chart widget-chart-hover">
            <div class="icon-wrapper"> <a type="button"
            class="btn btn-icon btn-icon-only"
            href="{{ route('inventarios.listar.por.categoria', ` + response + `) }}"><i class=" btn-icon-wrapper text-primary">` + codigo + `</i></a>
            </div><div class="widget-subheading pt-3">` + nome + `</div></div></div>`
		$('#criarCategoriaModal').modal('hide');
		$('#gridCategorias').prepend(html)
		$('#no_category').fadeOut(400)
		return toastr.success('Categoria criada', 'Sucesso')
	})
}