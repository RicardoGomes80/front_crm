$('.btn-submit-chamado').click(function (e) {
	erros = 0;
	uei = $('#horario_contato_ue_inicio').val();
	uef = $('#horario_contato_ue_fim').val();
	if (uei && uef) {

		if ((uef != '') && (uei == '')) {
			erros = 1;
			$('#horario_contato_ue_inicio').addClass('is-invalid-modal');
			toastr.error('Melhor horário para contato na U.E. (início) só pode ser vazio quando o (fim) também for vazio.', 'ATENÇÃO')
		}
		else if ((uef == '') && (uei != '')) {
			erros = 1;
			$('#horario_contato_ue_fim').addClass('is-invalid-modal');
			toastr.error('Melhor horário para contato na U.E. (fim) só pode ser vazio quando o (início) também for vazio.', 'ATENÇÃO')
		}
		else {
			var dataInicial = new Date('2022/06/27 ' + uei);
			var dataFinal = new Date('2022/06/27 ' + uef);
			var diferencaEntreDatas = dataFinal.getTime() - dataInicial.getTime();
			var resultadoEmMinutos = Math.round(diferencaEntreDatas / 60000);
			if (resultadoEmMinutos < 1) {
				$('#horario_contato_ue_inicio').addClass('is-invalid-modal');
				$('#horario_contato_ue_fim').addClass('is-invalid-modal');
				toastr.error('Melhor horário para contato na U.E. (início) não pode ser maior que o Melhor horário para contato na U.E. (fim).', 'ATENÇÃO')
				erros = 1;
			}
		}
	}
	for (instance in CKEDITOR.instances) {
		CKEDITOR.instances[instance].updateElement();
	}
	if ($('#check_tipo_de_cliente').prop("checked") == false) {
		if ($("#tipo").val() == '') {
			erros = 1;
			toastr.error('O tipo de telefone nao pode estar vazio', 'Atenção')
		}
		if ($("#ddd").val() == '') {
			toastr.error('O DDD do telefone nao pode estar vazio', 'Atenção')
			erros = 1;
		}
		if ($("#telefone").val() == '') {
			toastr.error('O Telefone nao pode estar vazio', 'Atenção')
			erros = 1;
		}
	}
	cargo_codigo = $("#cargo_codigo").val();
	nome = $("#nome").val();
	email = $("#email").val();
	atendente_id = $("#atendente_id option:selected").val();
	status_chamado_id = $("#status_chamado_id option:selected").val();
	tipo_chamado_id = $("#tipo_chamado_id option:selected").val();
	categoria_chamado_id = $("#categoria_chamado_id option:selected").val();
	descricao = $("#descricao").val();
	tipo_retorno = $("#tipo_retorno option:selected").val();
	dre_codigo = $("#dre option:selected").val();
	ce_codigo = $("#dre option:selected").attr('ce_codigo');
	unidade_codigo = $("#lotacao_id option:selected").val();
	$("#ce_codigo").val(ce_codigo)
	$("#dre_codigo").val(dre_codigo)
	$("#unidade_codigo").val(unidade_codigo)
	if (atendente_id == '') {
		$("#atendente_id").removeAttr("disabled");
		$("#atendente_id").parent('div').addClass('has-error')
		erros = 1;
		toastr.error('Atendente não pode ser Vazio', 'Atenção')
	}
	if (nome == '') {
		$("#nome").addClass('is-invalid')
		erros = 1;
		toastr.error('O nome não pode ser Vazio', 'Atenção')
	}
	if (email == '') {
		$("#email").addClass('is-invalid')
		erros = 1;
		toastr.error('O E-mail não pode ser Vazio', 'Atenção')
	}
	if (cargo_codigo == '') {
		$("#cargo_codigo").parent('div').addClass('has-error');
		erros = 1;
		toastr.error('Cargo não pode ser Vazio', 'Atenção')
	}
	if (categoria_chamado_id == '') {
		$("#categoria_chamado_id").parent('div').addClass('has-error');
		erros = 1;
		toastr.error('Categoria não pode ser Vazio', 'Atenção')
	}
	if (tipo_chamado_id == '') {
		$("#tipo_chamado_id").parent('div').addClass('has-error');
		erros = 1;
		toastr.error('Tipo não pode ser Vazio', 'Atenção')
	} if (status_chamado_id == '') {
		$("#status_chamado_id").parent('div').addClass('has-error');
		erros = 1;
		toastr.error('Status não pode ser Vazio', 'Atenção')
	}
	if (descricao == '') {
		erros = 1;
		toastr.error('Descrição do chamado não pode ser Vazio', 'Atenção')
	}
	if (tipo_retorno == '') {
		toastr.error('Tipo de Retorno do chamado não pode ser Vazio', 'Atenção')
	}
	tipo_de_cliente = $('#tipo_de_cliente').val()
	if (tipo_de_cliente == 0) {
		documento = $("#documento").val();
		if (documento == '') {
			$("#documento").addClass('is-invalid')
			erros = 1;
			toastr.error('O nome não pode ser Vazio', 'Atenção')
		}
		telefone = $('#telefone_9999999').text();
		if (telefone == '') {
			erros = 1;
			toastr.error('Telefone para Não Filiado não pode ser Vazio', 'Atenção')
		}
	}
	if (erros == 0) {
		Swal.fire({
			title: title,
			text: "Deseja incluir uma nova interação no mesmo chamado ?",
			icon: "question",
			iconColor: "#ff6f6f",
			showCancelButton: true,
			confirmButtonText: "SIM",
			cancelButtonText: "Não",
			cancelButtonColor: '#bbb',
			focusCancel: true
		}).then(function (actions) {
				if (actions.isConfirmed != true) {
					if (is_modal) {
						$('#btn-close-modal').click();
						$("#retorno_submit").val('chamado');
						
					} else {

						$("#retorno_submit").val('lista');
					}
					$('#form').submit();
				} else {
					$("#retorno_submit").val('chamado');
					$('#form').submit();
				}
		});
	}
})

$(document).on("change", "#categoria_chamado_id", function () {
	$("#categoria_chamado_id").parent('div').removeClass('has-error');
})

$(document).on("change", "#tipo_chamado_id", function () {
	$("#tipo_chamado_id").parent('div').removeClass('has-error');
})

$(document).on("change", "#status_chamado_id", function () {
	$("#status_chamado_id").parent('div').removeClass('has-error');
})

$(document).on("change", "#atendente_id", function () {
	$("#atendente_id").parent('div').removeClass('has-error');
})