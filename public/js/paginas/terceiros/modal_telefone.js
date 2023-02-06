$(document).ready(function () {
	$('#tipo-telefone').on('change', function (e) {
		tipo = $("#tipo-telefone option:selected").val();
		$('#ramal').val('');
		$('#telefone').val('');
		$('#ddd').val('');
		$('#ddd').attr('disabled', 'disabled');
		$('#telefone').attr('disabled', 'disabled');
		$('#ramal').attr('disabled', 'disabled');
		if (tipo == 'celular') {
			$('#ddd').removeAttr('disabled');
			$('#telefone').removeAttr('disabled');
			$("#telefone").attr('minlength', 10)
			$("#telefone").attr('maxlength', 10)
			$("#telefone").inputmask("mask", { "mask": '99999-9999' });
			$('#ddd').focus();
		}
		else if (!tipo) {
			$('#ddd').attr('disabled', 'disabled');
			$('#telefone').attr('disabled', 'disabled');
			$('#ramal').attr('disabled', 'disabled');
		}
		else {
			$('#ddd').focus();
			$('#ddd').removeAttr('disabled');
			$('#telefone').removeAttr('disabled');
			$('#ramal').removeAttr('disabled');
			$("#telefone").attr('minlength', 9)
			$("#telefone").attr('maxlength', 9)
			$("#telefone").inputmask("mask", { "mask": '9999-9999' });
		}
	});
	$('#tipo-telefone-edit').on('change', function (e) {
		tipo = $("#tipo-telefone-edit option:selected").val();
		$('#ramal-edit').val('');
		$('#telefone-edit').val('');
		$('#ddd-edit').val('');
		$('#ddd-edit').attr('disabled', 'disabled');
		$('#telefone-edit').attr('disabled', 'disabled');
		$('#ramal-edit').attr('disabled', 'disabled');
		if (tipo == 'celular') {
			$('#ddd-edit').removeAttr('disabled');
			$('#telefone-edit').removeAttr('disabled');
			$("#telefone-edit").attr('minlength', 10)
			$("#telefone-edit").attr('maxlength', 10)
			$("#telefone-edit").inputmask("mask", { "mask": '99999-9999' });
			$('#ddd-edit').focus();
		}
		else if (!tipo) {
			$('#ddd-edit').attr('disabled', 'disabled');
			$('#telefone-edit').attr('disabled', 'disabled');
			$('#ramal-edit').attr('disabled', 'disabled');
		}
		else {
			$('#ddd-edit').focus();
			$('#ddd-edit').removeAttr('disabled');
			$('#telefone-edit').removeAttr('disabled');
			$('#ramal-edit').removeAttr('disabled');
			$("#telefone-edit").attr('minlength', 9)
			$("#telefone-edit").attr('maxlength', 9)
			$("#telefone-edit").inputmask("mask", { "mask": '9999-9999' });
		}
	});

	$(document).on('click', '.btn-add-telefone', function (event) {
		ddd = $('#ddd').val();
		telefone = $('#telefone').val();
		ramal = $('#ramal').val();
		if (!ddd || !telefone || !tipo) {
			toastr.warning('Existem campos vazios', 'warning');
			return
		}
		edita = $('#edita').val();
		line = $('#table-telefones tbody tr').length;
		$('#table-telefones .dataTables_empty').remove()
		$('#ddd').val('');
		$('#telefone').val('');
		$('#ramal').val('');
		var t = $('#table-telefones').DataTable();
		html = '<tr>'
		html += '<td id="telefones_tipo_label_' + counter_telefones + '" class="telefones_tipos_value">' + tipo + '</td>';
		html += '<td id="telefones_ddd_label_' + counter_telefones + '" class="telefones_ddd_value">' + ddd + '</td>';

		html += '<td id="telefones_telefone_label_' + counter_telefones + '" class="telefones_telefones_value">' + telefone + '</td>';
		html += '<td id="telefones_ramal_label_' + counter_telefones + '" class="telefones_ramals_value">' + ramal + '</td>';
		html += '<td>'
		html += '<button type="button" id="btn-telefone-editar_' + counter_telefones + '" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-telefone-editar" title="Editar" role="' + counter_telefones + '" telefone="' + telefone + '" ddd="' + ddd + '" tipo="' + tipo + '" ramal="' + ramal + '">';
		html += '<i class="pe-7s-note btn-icon-wrapper text-primary font-size-xlg"></i>';
		html += '</button>';
		html += '<button type="button" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-telefone-delete" title="Remover" role="000000' + counter_telefones + '">';
		html += '<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>';
		html += '</button>';
		html += '</td>';
		html += '</tr>';

		t.row.add($(html)).draw();
		counter_telefones++;

		$('#modal-form-item-telefone').modal('hide')
	})

	$(document).on('click', '.btn-telefone-editar', function (event) {

		$("#telefoneAtaual").val($(this).attr('role'))
		$("#tipo-telefone-edit").val($(this).attr('tipo')).change()
		$("#ddd-edit").val($(this).attr('ddd'))
		$("#telefone-edit").val($(this).attr('telefone'))
		$("#ramal-edit").val($(this).attr('ramal'))
		$("#modal-editar-form-item-telefone").modal('show')

	})
	$(document).on('click', '.btn-edit-telefone', function (event) {
		id = $("#telefoneAtaual").val()
		tipo_telefone = $('#tipo-telefone-edit').val()
		ddd = $('#ddd-edit').val()
		telefone = $('#telefone-edit').val()
		ramal = $('#ramal-edit').val()
		if (!ddd || !telefone || !tipo) {
			toastr.warning('Existem campos vazios', 'warning');
			return;
		}
		$("#modal-editar-form-item-telefone").modal('hide')
		$("#telefones_tipo_label_" + id).html(tipo_telefone)
		$("#telefones_ddd_label_" + id).html(ddd)
		$("#telefones_telefone_label_" + id).html(telefone)
		$("#telefones_ramal_label_" + id).html(ramal)

		$('#btn-telefone-editar_' + id).attr('tipo', tipo)
		$('#btn-telefone-editar_' + id).attr('ddd', ddd)
		$('#btn-telefone-editar_' + id).attr('telefone', telefone)
		$('#btn-telefone-editar_' + id).attr('ramal', ramal)

	})

	$('#modal-editar-form-item-telefone').on('hide.bs.modal', function () {
		$('.limpaTelefone').val('')
	})

	$(document).on('click', '.btn-telefone-delete', function (event) {
		id = $(this).attr('role');
		tr = $(this)

		var table = $('#table-telefones').DataTable();
		reference = id.substring(0, 6)
		Swal.fire({
			title: "ATENÇÃO",
			text: "Deseja remover esse registro de telefone?",
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
})