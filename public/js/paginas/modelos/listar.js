$(document).on('click', '.removeModelo', function() {
	id = $(this).attr('modelo_id')
	rota = $(this).attr('data-rota')
	return removeModelo(id, rota);
})

$('.limpar').on('click', function() {
	$('.clear').val('')
})

$(document).on('click', '.btnHtmlIframe', function(event) {
	$('#Html_iframe').html('');
	modelo_id =  $(this).attr('modelo_id');
	html = '';
	html += $('.html_modelo_'+modelo_id).html();
	$('#Html_iframe').html(html);
	$('.modal-fullscreen').modal('show');
});

function removeModelo(id, rota) {
	return Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse modelo?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function(actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		$.ajax({
			url: rota,
			data: {
				id: id,
			},
			method: 'DELETE',
		}).done(function(response) {
			if (!response) {
				toastr.clear();
				toastr.error('Não foi possível excluir este modelo', 'ATENÇÃO');
				return;
			}
			var msg = response.msg || 'Solicitação concluída';
			toastr.clear();
			toastr.success('Modelo inativado', 'SUCESSO');
			$('#remove' + id).fadeOut(300);
		}).fail(function(response) {
			toastr.clear();
			toastr.error('Não foi possível excluir este modelo', 'ATENÇÃO');
		});
	});
}