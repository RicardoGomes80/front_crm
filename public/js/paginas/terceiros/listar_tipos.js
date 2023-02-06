$(document).ready(() => {
	$(".multiselect-dropdown").select2({
		theme: "bootstrap4",
	});
	$('.hidden').removeClass('d-none').hide();
});
$('.btn-editar-descricao').on('click', function (e) {
	e.preventDefault();
	$('.hidden').hide();
	$('.display_descricao').fadeIn(400);
	role = $(this).attr('role')
	old_val = $('#' + role).val();

	$('#' + role).attr('old_val', old_val)
	$('#display_' + role).hide();
	$('#edit_' + role).fadeIn(400);
});


$('.btn-gravar').on('click', function () {
	role = $(this).attr('role');
	id = $(this).attr('id');
	descricao = $('#' + role).val();
	$.ajax({
		url: setarRota,
		method: 'post',
		data: { _token: $('meta[name="csrf-token"]').attr('content'), 'descricao': descricao, 'id': id }
	})
		.done(function (response) {
			$('#display_' + role).html(descricao)
			msg = 'Registro atualizado com sucesso';
			toastr.success(msg, 'SUCESSO');
		}).fail(function (response) {
			old_val = $('#' + role).attr('old_val')
			old_val = old_val.trim()
			$('#' + role).val(old_val);
			$('#display_' + role).html(old_val)
			var responseJson = response.responseJSON;
			msg = 'Não foi possivel atualizar este registro';
			if (responseJson && responseJson.msg) {
				msg = responseJson.msg || msg;
			}
			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
		});
	$('#display_' + role).fadeIn(400);
	$('#edit_' + role).hide();
});