$(document).ready(function () {

	$(document).on('click', '.btn-add-email', function (event) {
		email = $('#email').val();
		contato = $('#contato').val();
		if (!email) {
			toastr.warning('Email não pode ser estar vazio!', 'ATENÇÃO');

		}
		if (validacaoEmail(email) == false) {
			toastr.clear();
			toastr.warning('Email Inválido!', 'ATENÇÃO');
			return;
		}

		$('#email').val('');
		$('#contato').val('');
		linhaEmail = '<span id="emails_email_label_' + counter_emails + '" class="emails_emails_values">' + email + '</span>';
		linhaContato = '<span id="emails_contato_label_' + counter_emails + '" class="emails_contatos_value">' + contato + '</span>';
		var t = $('#table-emails').DataTable();

		actions = '<button type="button" id="btn-email-editar_' + counter_emails + '" data-toggle="modal" data-target="#modal-form-edit-item-emails" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-email-editar" title="Editar" role="' + counter_emails + '" email="' + email + '" contato="' + contato + '">';
		actions += '<i class="pe-7s-note btn-icon-wrapper text-primary font-size-xlg"></i>';
		actions += '</button>';
		actions += '<button type="button" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-email-delete" title="Remover" role="000000' + counter_emails + '">';
		actions += '<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>';
		actions += '</button>';
		t.row.add([linhaEmail, linhaContato, actions]).draw(false);
		counter_emails++;
		$('#modal-form-item-email').modal('hide');

	})

	$(document).on('click', '.btn-email-editar', function () {
		$('#email-edit').val($(this).attr('email'))
		$('#contato-edit').val($(this).attr('contato'))
		$('#emailAtual').val($(this).attr('role'))
	})

	$('#modal-form-edit-item-emails').add('hide.bs.modal', function () {
		$('.limpaEmail').val('')
	})


	$(document).on('click', '.btn-edit-email', function () {
		id = $('#emailAtual').val()
		email = $('#email-edit').val()
		contato = $('#contato-edit').val()
		if (!email) {
			toastr.warning('Email não pode estar vazio!', 'ATENÇÃO');

		}
		if (validacaoEmail(email) == false) {
			toastr.clear();
			toastr.warning('Email Inválido!', 'ATENÇÃO');
			return;
		}

		$('#emails_email_label_' + id).html(email)
		$('#emails_contato_label_' + id).html(contato)

		$('#btn-email-editar_' + id).attr('email', email)
		$('#btn-email-editar_' + id).attr('contato', contato)
		$('#modal-form-edit-item-emails').modal('hide')


	})

	$(document).on('click', '.btn-email-delete', function (event) {
		id = $(this).attr('role');
		var table = $('#table-emails').DataTable();
		tr = $(this)

		Swal.fire({
			title: "ATENÇÃO",
			text: "Deseja remover esse registro de email?",
			icon: "question",
			iconColor: "#ff6f6f",
			showCancelButton: true,
			confirmButtonText: 'SIM',
			cancelButtonText: 'CANCELAR',
			cancelButtonColor: '#bbb',
			focusCancel: true
		}).then(function (actions) {
			if (actions.isConfirmed == true) {
				table.row(tr.parents('tr')).remove().draw();
			}
		})
	})

	function validacaoEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
})