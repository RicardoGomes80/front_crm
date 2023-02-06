$('.deleteEleicao').on('click', function () {
	eleicao_id = $(this).attr('eleicao_id')
	return deletaEleicao(eleicao_id)
})

function deletaEleicao(eleicao_id) {
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse registro?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false
		}
		$.ajax({
			url: removeEleicaoRoute,
			data: {
				"_token": token,
				id: eleicao_id,
			},
			method: 'DELETE',
		}).done(function (response) {
			if (!response) {
				var msg = "Erro ao remover este registro"
				toastr.clear()
				toastr.error(msg, 'ATENÇÃO')
				return
			}
			var msg = response.msg || 'Solicitação concluída'
			toastr.clear()
			toastr.success(msg, 'SUCESSO')
			$('#remove' + eleicao_id).fadeOut(300)
		})
	})
}