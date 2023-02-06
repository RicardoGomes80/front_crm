$(document).on('click', '.btn-remove-telefone', function (evt) {
	$('.tooltip').remove()
	evt.preventDefault();
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

		$.ajax({
			'processing': true,
			'serverSide': false,
			type: "POST",
			data: {
				"_token": csrf_token, "id_telefone": id_telefone
			},
			url: urlRemoveTelefoneAjax,
			success: function (s) {
				$('#tableTelefones').DataTable().row($("#" + id_telefone).parents('tr')).remove().draw();
			}
		});
	});
});

$(".btn-editar-convenio").click(function (evt) {
	$("#editar_convenio").submit();
});

$(".btn-salva-telefone").click(function (evt) {
	erro = 0;
	$(".erro_descricao").hide();
	$(".erro_telefone").hide();
	$(".erro_ddd").hide();
	id_convenio = $("#id_convenio").val();
	tipo = $('#tipo').val()
	ddd = $(".ddd").val();
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
		$.ajax({
			'processing': true,
			'serverSide': false,
			type: "POST",
			data: {
				"_token": csrf_token,
				"tipo": tipo,
				"id_convenio": id_convenio,
				"ddd": ddd,
				"telefone": telefone,
				"descricao": descricao,
				"visivel_site": visivel_site
			},
			url: urlAdicionaTelefoneAjax,
			success: function (s) {
				if (s > 0) {
					$("#modalTelefone").modal('toggle');
					if (visivel_site == 1) {
						varChecked = 'checked="checked"';
						labelChecked = 'Sim';
					} else {
						varChecked = '';
						labelChecked = 'Não';
					}
					input = '<tr id="linha_' + s + '">'
					input += '</td>'
					input += '<td><input type="text" value="' + tipo + '" name="telefones[' + s + '][tipo]" id="telefones[' + s + '][tipo]" maxlength="10" class="form-control" readonly>'
					input += '</td>'
					input += '<td>'
					input += '<input type="hidden" value="' + s + '" name="telefones[' + s + '][id_telefone]" id="telefones[' + s + '][id_telefone]" class="form-control ">'
					input += '<input type="text" value="' + ddd + '" name="telefones[' + s + '][ddd]" id="telefones[' + s + '][ddd]" maxlength="2" class="form-control ">'
					input += '</td>'
					input += '<td><input type="text" value="' + telefone + '" name="telefones[' + s + '][telefone]" id="telefones[' + s + '][telefone]" maxlength="10" class="form-control ">'
					input += '</td>'
					input += '<td>'
					input += '<input type="text" value="' + descricao + '" name="telefones[' + s + '][descricao]" id="telefones[' + s + '][descricao]" maxlength="190" class="form-control ">'
					input += '</td>'
					input += '<td class="dtr-control sorting_1" tabindex="0">'
					input += '<div class="input-group custom-checkbox custom-control">'
					input += '<input type="checkbox" name="telefones[' + s + '][visivel_site]" id="telefones[' + s + '][visivel_site]" class="custom-control-input" ' + varChecked + ' >'
					input += '<label class="custom-control-label" for="telefones[' + s + '][visivel_site]"> ' + labelChecked + '  </label></div></td><td width="20">'
					input += '<div class="d-inline-block">'
					input += '<a href="#" type="button" id="' + s + '" class="btn btn-primary btn-shadow btn-hover-shine btn-remove-telefone" data-toggle="tooltip" data-placement="top" title="' + hintAdicionarTelefone + '" data-original-title="' + hintAdicionarTelefone + '">-</a>'
					input += '</div></td></tr>';

					$('#tableTelefones').DataTable().row.add($(input)).draw();
				}
			}
		});
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

$(".btn-novo-historico").click(function (evt) {
	$("#descricao").val('');
	$("#titulo").val('');
	$(".erro_titulo").hide();
	$(".erro_descricao").hide();
	$('input:radio[name=relevancia]').filter('[value=text-muted]').prop('checked', true);
});

$(document).on('click', '.btn-deletar-historico', function (evt) {
	evt.preventDefault();
	id = $(this).attr('id');
	id = id.replace("deletar_historico_", "");
	$.ajax({
		type: "POST",
		data: {
			"_token": csrf_token, "id": id
		},
		url: urlRemoveHistoricoAjax,
		success: function (s) {
			if (s == 1) {

			}
		}
	});
	$(this).parent().parent().parent().fadeOut(300);
});

$(".btn-salva-historico").click(function (evt) {
	const d = new Date();
	month = (d.getMonth() + 1);
	month = month < 10 ? '0' + month : '' + month; // ('' + month) for string result
	data = d.getDate() + '/' + month + '/' + d.getFullYear();
	hora = d.getHours() + ':' + d.getMinutes() + '/' + d.getSeconds();
	$(".erro_titulo").hide();
	$(".erro_descricao").hide();
	erro = 0;
	titulo = $("#titulo").val();
	relevancia = $('input[name="relevancia"]:checked').val();
	descricao = $("#descricao").val();
	if (titulo.length < 8) {
		$(".erro_titulo").show();
		erro = 1
	}
	if (descricao.length < 8) {
		$(".erro_descricao").show();
		erro = 1
	}
	if (erro == 0) {
		$("#formHistorico").submit();
		setTimeout(function () {
			novo_id = $('iframe[name=farmeHistorico]').contents().find('body').html();
			novo_id = novo_id.split("<");
			$("#modalHistorico").modal('toggle');
			textoAppend = '<div class="vertical-timeline-item vertical-timeline-element" id="main_historico_' + novo_id[0] + '">';
			textoAppend += '<span class="vertical-timeline-element-icon bounce-in">';
			textoAppend += '<i class="badge badge-dot badge-dot-xl badge-success" wfd-invisible="true"></i>';
			textoAppend += '</span>';
			textoAppend += '<div class="vertical-timeline-element-content bounce-in">';
			textoAppend += '<h4 class="timeline-title ' + relevancia + ' ">' + titulo + ' </h4>';
			textoAppend += '<div class="row">';
			textoAppend += '<div class="col-10">';
			textoAppend += '<div class="timeline-text">' + descricao + '</div> '
			textoAppend += '</div>';;
			textoAppend += '<div class="col-sm" style="text-align: end">';
			textoAppend += '<a href="#" id="deletar_historico_' + novo_id[0] + '" type="button" class="mr-2 btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine btn-deletar-historico" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar"><i class="fa fa-fw fa-times-circle fa-lg"></i></a>';
			textoAppend += ' </div>';
			textoAppend += '</div>';
			textoAppend += '<span class="vertical-timeline-element-date"><b>' + data + '<br>' + hora + '</b></span>';
			textoAppend += '</div>';
			textoAppend += '</div>';
			$(".vertical-timeline").append(textoAppend);
		}, 500);
	}
});

$(document).ready(function () {
	$('#telefones_ddd').attr('disabled', 'disabled');
	$('#telefones_telefone').attr('disabled', 'disabled');
})

