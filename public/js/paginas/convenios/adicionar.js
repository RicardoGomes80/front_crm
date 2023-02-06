$(document).on('click', '.btn-remove-telefone', function (evt) {
	id_telefone = $(this).attr("id")
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse produto?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		$('.tooltip').remove()
		$('#tableTelefones').DataTable().row($("#" + id_telefone).parents('tr')).remove().draw();
	})
	evt.preventDefault();
});

$(".btn-salva-telefone").click(function (evt) {
	erro = 0;
	$(".erro_descricao").hide();
	$(".erro_telefone").hide();
	$(".erro_ddd").hide();
	id_convenio = $("#id_convenio").val();
	ddd = $(".ddd").val();
	tipo = $("#tipo").val();
	ddd = ddd.allReplace({ '_': '' });
	$(".ddd").val(ddd);
	if (ddd.length < 2) {
		$(".erro_ddd").show();
		erro = 1
	}
	telefone = $(".telefone").val();
	telefone = telefone.allReplace({ '_': '' });
	$(".telefone").val(telefone);
	if (telefone.length < 8) {
		$(".erro_telefone").show();
		erro = 1
	}
	descricao = $(".descricao").val();
	if (descricao.length < 2) {
		$(".erro_descricao").show();
		erro = 1
	}
	visivel_site = $('#telefones_visivel_site').is(":checked")
	if (visivel_site == true) {
		visivel_site = 1;
	}
	else if (visivel_site == false) {
		visivel_site = 0;
	}

	if (erro == 0) {
		s = $("#init_s").val()
		if (visivel_site == 1) {
			varChecked = 'checked="checked"';
			labelChecked = 'Sim';
		} else {
			varChecked = '';
			labelChecked = 'Não';
		}
		input = '<tr id="linha_' + s + '">'
		input += '<td>'
		input += '<input type="text" value="' + tipo + '" name="telefones[' + s + '][tipo]" id="telefones[' + s + '][tipo]" maxlength="20" class="form-control " readonly>'
		input += '</td>'
		input += '<td>'
		input += '<input type="hidden" value="' + s + '" name="telefones[' + s + '][id_telefone]" id="telefones[' + s + '][id_telefone]" class="form-control ">'
		input += '<input type="text" value="' + ddd + '" name="telefones[' + s + '][ddd]" id="telefones[' + s + '][ddd]" maxlength="2" class="form-control ">'
		input += '</td>'
		input += '<td>'
		input += '<input type="text" value="' + telefone + '" name="telefones[' + s + '][telefone]" id="telefones[' + s + '][telefone]" maxlength="10" class="form-control ">'
		input += '</td>'
		input += '<td>'
		input += '<input type="text" value="' + descricao + '" name="telefones[' + s + '][descricao]" id="telefones[' + s + '][descricao]" maxlength="190" class="form-control ">'
		input += '</td>'
		input += '<td class="dtr-control sorting_1" tabindex="0">'
		input += '<div class="input-group custom-checkbox custom-control">'
		input += '<input type="checkbox" name="telefones[' + s + '][visivel_site]" id="telefones[' + s + '][visivel_site]" class="custom-control-input" ' + varChecked + ' >'
		input += '<label class="custom-control-label" for="telefones[' + s + '][visivel_site]"> ' + labelChecked + '  </label>'
		input += '</div>'
		input += '</td>'
		input += '<td width="20"> <div class="d-inline-block">'
		input += '<a href="#" type="button" id="' + s + '" class="btn btn-primary btn-shadow btn-hover-shine btn-remove-telefone" data-toggle="tooltip" data-placement="top" title="' + hintAdicionarTelefone + '" data-original-title="' + hintAdicionarTelefone + '">-</a>'
		input += ' </div></td></tr>';
		$('#tableTelefones').DataTable().row.add($(input)).draw();
		s++;
		$("#init_s").val(s)
		$("#modalTelefone").modal('toggle');
	}
});


$(document).on('change', '#tipo', function (e) {
	$('#telefone').val('');
	$('#telefones_ddd').val('');
	tipo = $(this).val()
	validaTipoCriar(tipo)
});

function validaTipoCriar(tipo) {
	$('#telefones_ddd').attr('disabled', 'disabled');
	$('#telefones_telefone').attr('disabled', 'disabled');
	if (tipo == 'celular') {
		$('#telefones_ddd').removeAttr('disabled');
		$('#telefones_telefone').removeAttr('disabled');
		$("#telefones_telefone").attr('minlength', 10)
		$("#telefones_telefone").attr('maxlength', 10)
		$("#telefones_telefone").inputmask("mask", {
			"mask": '99999-9999'
		});

		$('#telefones_ddd').focus();
	} else if (typeof tipo == "undefined") {
		$('#telefones_ddd').attr('disabled', 'disabled');
		$('#telefone').attr('disabled', 'disabled');
	} else {
		$('#telefones_ddd').focus();
		$('#telefones_ddd').removeAttr('disabled');
		$('#telefones_telefone').removeAttr('disabled');
		$("#telefones_telefone").attr('minlength', 9)
		$("#telefones_telefone").attr('maxlength', 9)
		$("#telefones_telefone").inputmask("mask", {
			"mask": '9999-9999'
		});
	}
}
