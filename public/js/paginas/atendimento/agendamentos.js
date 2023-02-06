dataToSelect = 0;
var today = new Date().toISOString().slice(0, 10);

function renderCalendar() {
	const dt = new Date();
	y = dt.getFullYear();
	m = (dt.getMonth() + 1).toString().padStart(2, "0");
	d = dt.getDate().toString().padStart(2, "0");
	const defaultDate = y + '-' + (m) + '-' + d;
	document.addEventListener('DOMContentLoaded', function () {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
				left: 'prevYear,prev,next,nextYear today',
				center: 'title',
				right: 'dayGridMonth,dayGridWeek,dayGridDay'
			},
			validRange: {
				start: today
			},
			locale: 'pt-BR',
			displayEventTime: true, 
			initialDate: defaultDate,
			navLinks: true,
			editable: false,
			dayMaxEvents: true, 
			events: dadosParaExibirNoCalendario,
			eventDrop: function (event, dayDelta, minuteDelta, allDay, revertFunc) {
			}
		});
		calendar.render();
	});
}
renderCalendar();

$('.btn-pesquisar').on('click', function (e) {
	identificador = $('#identificador').val();
	identificador = numerosSemCaracteres(identificador)
	$('#nome').val('')
	$('#email').val('')
	$('#ddd').val('')
	$('#telefone').val('')
	if (identificador.length >= 1) {
		dadosDoCliente = buscaDadosDoCliente(identificador)
	} else {
		toastr.error(' ', 'O identificador deve conter mais que 3 caracteres')
	}
	e.preventDefault();
})

$(document).keypress(function (e) {
	if (e.which == 13) {
		identificador = $('#identificador').val();
		identificador = numerosSemCaracteres(identificador)
		if (identificador.length >= 1) {
			$('.btn-pesquisar').click();
		}
	}
});

$('#selectAtendentes').on('change', function () {
	idSelected = $('#selectAtendentes option:selected').val();
	if (idSelected > 0) {
		window.location.href = UrlSelectAtendentes + 'ById/' + idSelected;
	} else if (idSelected == '') {
		window.location.href = UrlSelectAtendentes;
	}
});

$('#email').on('blur', function (e) {
	valida_email($('#email').val())
})

function getServicos() {
	$.ajax({
		url: urlgetServicos,
		type: 'post',
		data: {},
		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		success: function (result) {
			$.each(result, function (key, value) {
				id = value.id;
				nome = value.nome;
				description = value.description;
				multiplicador = value.multiplicador;
				$('.select-servicos').append('<option value="' + id + '" description="' + description + '" multiplicador="' + multiplicador + '" >' + nome + '</option>');
			});
		}
	});
}

var d = new Date();
var dia = d.getDate();
var ano = d.getFullYear();
var mes = ("0" + (d.getMonth() + 1)).slice(-2);
var array = [];
for (a = 1; a < dia; a++) {
	diaAtual = ("0" + (a)).slice(-2);
	array.push('' + ano + '-' + mes + '-' + diaAtual + '')
}

$('.select-servicos').change(function (evt) {
	servico_id = $(".select-servicos option:selected").val();
	if (servico_id != 0) {
		$('.btn-agendar').attr('disabled', 'disabled');
		$('#filtraAtendentes').removeAttr('disabled')
		$("#servico").val(servico_id);
		multiplicador = $(".select-servicos option:selected").attr('multiplicador');
		$('#multiplicador').val(multiplicador);
		var servico_description = $(".select-servicos option:selected").attr('description');
		$('.update-description').html(servico_description);
		$('.btn-salvar').fadeOut(400);
		$('.form-data').fadeOut(400);
		$('.grid-horarios').fadeOut(400);
		is_super = $('#is_super').val();
		if (is_super == 1) {
			getAtendentesPorServico(servico_id, 'agendamento')
		} else {
			id_func = $('#userLogado').val();
			if (dataToSelect == 0) {
				buscaDatasDisponiveis(id_func, 'agendamento')
			} else {
				agendaComDataPorClick(id_func, 'agendamento')
			}
		}
		multiplicador = $(".select-servicos option:selected").attr('multiplicador');
		$('#multiplicador').val(multiplicador);
		var servico_description = $(".select-servicos option:selected").attr('description');
		$('.update-description').html(servico_description);
	}
});

$('#filtraAtendentes').change(function (evt) {
	$('.datepicker-container').html('');
	$('.btn-salvar').fadeOut(400);
	$('.form-data').fadeOut(400);
	$('.grid-horarios').fadeOut(400);
	id_func = $("#filtraAtendentes option:selected").val();
	$("#id_func_pesquisa_horarios").val(id_func);
	$('.datepicker-container').html('');
	$('.form-data').html(datepicker_container);
	if (id_func > 0) {
		$('.btn-voltar-agendamento').hide();
		$('.btn-voltar-agendamento').addClass('d-none');
		if (dataToSelect == 0) {
			buscaDatasDisponiveis(id_func, 'agendamento')
		} else {
			agendaComDataPorClick(id_func, 'agendamento')
		}
	}
})

$('.btn-agendar').click(function (evt) {
	if ($('#identificador').val() == '') {
		toastr.error('Erro', 'O Campo RF deve ser preenchido.')
	} else if ($('#nome').val() == '') {
		toastr.error('Erro', 'O Campo nome deve ser preenchido.')
	} else if ($('#email').val() == '') {
		toastr.error('Erro', 'O Campo email deve ser preenchido.')
	} else if ($('#ddd').val() == '') {
		toastr.error('Erro', 'O Campo ddd deve ser preenchido.')
	} else if ($('#telefone').val() == '') {
		toastr.error('Erro', 'O Campo telefone deve ser preenchido.')
	} else if ($('#descricao').val() == '') {
		toastr.error('Erro', 'O Campo descrição deve ser preenchido.')
	} else if (valida_email($('#email').val()) == false) {
		return false;
	} else {
		$('#nome').removeAttr('disabled');
		$('#email').removeAttr('disabled');
		$('#ddd').removeAttr('disabled');

		$('#telefone').removeAttr('disabled');
		$('#formAgendamento').submit();
		$('#modalAgendamento').modal('hide');
		$.blockUI({ message: $(".body-block-carregando-aprofem") });
	}
})

function agendaComDataPorClick(id_func, situacao) {
	date = dataToSelect;
	$('#data').val(date)
	button = '<div class="row"><div class="col-4"><button type="button" class="btn btn-success btn-shadow btn-hover-shine btn-sm mb-0 mr-0 btn-voltar-agendamento d-none">voltar</button></div>    <div class="col-2">' + date + '</div>  </div>';
	$('.name_dia').html(button);
	$('.form-data').fadeOut(400, function () { $('.grid-horarios').fadeIn(400); });
	multiplicador = $('#multiplicador').val();
	$.ajax({
		'processing': true,
		'serverSide': false,
		type: "POST",
		data: {
			"_token": csrf_token, "data": date, "multiplicador": multiplicador, 'id_func': id_func
		},
		url: urlBuscaHorasAjax,
		success: function (result) {
			preencheHorasPorServico(result);
		}
	});
}

function buscaDatasDisponiveis(id_func, situacao) {
	array = '';
	$.ajax({
		'processing': true,
		'serverSide': false,
		type: "POST",
		data: {
			"_token": csrf_token, "id_func": id_func,
		},
		url: urlBuscaDatasAjax,
		success: function (result) {
			if (situacao == 'agendamento') {
				if (result == 0) {
					$('.form-data').fadeOut(400);
					$('.grid-horarios').fadeOut(400);
					$('.btn-show-modal').attr('data-toggle', '');
					$('.btn-show-modal').css('cursor', 'pointer');
					$('.btn-show-modal').addClass('text-muted');
				} else {
					array = result;
					$("#data_de_agendamento").datepicker("destroy");
					$("#data_de_agendamento").datepicker("refresh");
					$('#data_de_agendamento').datepicker({
						beforeShowDay: function (date) {
							var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
							return [array.indexOf(string) == -1]
						},
						onSelect: function (date, datepicker) {
							$('#data').val(date)
							button = '<div class="row"><div class="col-4"><button type="button" class="btn btn-success btn-shadow btn-hover-shine btn-sm mb-0 mr-0 btn-voltar-agendamento">voltar</button></div>    <div class="col-2">' + date + '</div>  </div>';
							$('.name_dia').html(button);
							$('.form-data').fadeOut(400, function () { $('.grid-horarios').fadeIn(400); });
							multiplicador = $('#multiplicador').val();
							$.ajax({
								'processing': true,
								'serverSide': false,
								type: "POST",
								data: {
									"_token": csrf_token, "data": date, "multiplicador": multiplicador, 'id_func': id_func
								},
								url: urlBuscaHorasAjax,
								success: function (result) {
									preencheHorasPorServico(result);
								}
							});
						},
						onChangeMonthYear: function (year, month, datepicker) {
						}
					});
					$("#data_de_agendamento").datepicker("refresh");
					month = $('.ui-datepicker-month').text();
					$('.ui-datepicker-prev').hide();

					$('.grid-horarios').fadeOut(400);
					$('.form-data').delay(400).fadeIn(400);
					$('.form-data').html(datepicker_container);
					$('.btn-show-modal').css('cursor', 'pointer');
					$('.btn-show-modal').addClass('text-success');
					$('.btn-show-modal').removeClass('text-muted');
					$('.btn-show-modal').attr('data-toggle', 'modal');
				}
			}
			else if (situacao == 'reAgendamento') {
				if (result == 0) {
					$('.form-data-reAgendamento').fadeIn(400);
					$('.grid-horarios-reAgendamento').fadeOut(400);
					$('.btn-show-modal').attr('data-toggle', '');
					$('.btn-show-modal').css('cursor', 'pointer');
					$('.btn-show-modal').addClass('text-muted');
				} else {
					array = result;
					$("#data_de_reAgendamento").datepicker("destroy");
					$("#data_de_reAgendamento").datepicker("refresh");
					$('#data_de_reAgendamento').datepicker({
						beforeShowDay: function (date) {
							var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
							return [array.indexOf(string) == -1]
						},
						onSelect: function (date, datepicker) {
							$('#data').val(date)
							button = '<div class="row"><div class="col-4"><button type="button" class="btn btn-success btn-shadow btn-hover-shine btn-sm mb-0 mr-0 btn-voltar-reAgendamento">voltar</button></div>    <div class="col-2">' + date + '</div>  </div>';
							$('.name_dia').html(button);
							$('.form-data-reAgendamento').fadeOut(400, function () { $('.grid-horarios-reAgendamento').fadeIn(400); });
							multiplicador = $('#multiplicador').val();
							$.ajax({
								'processing': true,
								'serverSide': false,
								type: "POST",
								data: {
									"_token": csrf_token, "data": date, "multiplicador": multiplicador, 'id_func': id_func
								},
								url: urlBuscaHorasAjax,
								success: function (result) {
									preencheHorasPorServico(result);
								}
							});
						},
						onChangeMonthYear: function (year, month, datepicker) {
						}
					});
					$("#data_de_reAgendamento").datepicker("refresh");
					$('.grid-horarios-reAgendamento').fadeOut(400);
					$('.form-data-reAgendamento').delay(400).fadeIn(400);
					$('.form-data-reAgendamento').html(datepicker_container);
					$('.btn-show-modal').css('cursor', 'pointer');
					$('.btn-show-modal').addClass('text-success');
					$('.btn-show-modal').removeClass('text-muted');
					$('.btn-show-modal').attr('data-toggle', 'modal');
				}
			}
		}
	});
}

function buscaDadosDoCliente(identificador) {
	$.ajax({
		'processing': true,
		'serverSide': false,
		type: "POST",
		data: {
			"_token": csrf_token, "identificador": identificador,
		},
		url: urlBuscaDadosDoClienteAjax,
		success: function (result) {
			if (result == '') {
				toastr.error('Identificador inválido ou Inativo', 'Atenção')
			} else {
				$('#cliente_id').val(result.cliente_id)
				$('#nome').val(result.nome)
				$('#email').val(result.email)
				// $('#ddd').val(result.ddd)
				$('.btn-add-item-dados-numero-celular').removeAttr('disabled');
				if ((result.celulares != null) && (result.celulares != '')) {
					$('#numero-celular').html('<option>Selecione</option>');
					$.each(result.celulares, function (index, value) {
						if (result.celulares.length == 1) {
							$('#numero-celular').append('<option data-ddd="' + value.ddd + '" data-telefone="' + value.telefone + '" value="' + value.id + '" >' + value.ddd + ' - ' + value.telefone + '</option>');
						} else {
							$('#numero-celular').append('<option data-ddd="' + value.ddd + '" data-telefone="' + value.telefone + '" value="' + value.id + '">' + value.ddd + ' - ' + value.telefone + '</option>');
						}
					})
				} else {
					toastr.error('Este Filiado não tem telefone celular cadastrado', 'Atenção')
				}
				if ((result.ddd != null) && (result.ddd != '')) {
					$('#ddd').attr('disabled', 'disabled');
				}

				if ((result.nome != null) && (result.nome != '')) {
					$('#nome').attr('disabled', 'disabled');
				}
				if ((result.email != null) && (result.email != '')) {
					$('#email').attr('disabled', 'disabled');
				}

			}
		}
	});
}

function getDadosClienteByid(cliente_identificador, data) {
	$.ajax({
		url: urldadosCliente,
		type: 'post',
		data: { 'id': cliente_identificador, 'data': data },
		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		success: function (result) {
			obj = JSON.parse(result);
			nome = obj.cliente_nome;
			ddd = obj.cliente_ddd;
			email = obj.cliente_email;
			telefone = obj.cliente_telefone;
			atendente = obj.atendente;
			if (obj.origem == 'cliente') {
				$('.modal-body #agendadoPor').html(nome)
			}
			$('.modal-body #modalNome').html(nome)
			$('.modal-body #modalTelefone').html('(' + ddd + ') ' + telefone)
			$('#modalEmail').val(email)

			notaslength = $('#notas').val().length
			if (notaslength < 30) {
				$('#countNotas').removeClass('text-success')
				$('#countNotas').addClass('text-danger')
				$('#countNotas').html('Total de ' + notaslength + ' Caracteres! É preciso uma anotação com mais de 30 Caracteres para Finalizar.')
				$('.modal-body .btn-finalizar').hide();
			}
			else {
				$('#countNotas').removeClass('text-danger')
				$('#countNotas').addClass('text-success')
				$('#countNotas').html('Total de ' + notaslength + ' Caracteres! ')
			}
			$('#modalAgendado').modal('show');
		}
	});
}
$("#id_func_pesquisa_horarios").val(id_func);

function preencheHorasPorServico(arrayHoras) {
	$('#recebeHoraiosDisponiveis').html('')
	$('#recebeHoraiosDisponiveisReAgendamento').html('')
	conteudoDiasDisponiveis = '<tr>';
	quebra = 5;
	$.each(arrayHoras, function (index, value) {
		if (index == quebra) {
			quebra = quebra + 5;
			conteudoDiasDisponiveis += '</tr><tr>';
		}
		if (value['disponivel'] == 'S') {
			indices_ = value['indices'];
			if (indices_ != null) {
				var indices = '';
				$.each(indices_, function (key, value) {
					indices += ',' + value;
				});
			} else {
				indices = '';
			}
			conteudoDiasDisponiveis += '<td class=" undefined btn-select-dia" data-handler="selectDay" data-event="click">';
			conteudoDiasDisponiveis += '<a class="ui-state-default text-select-dia" href="#" indice ="' + value['indice'] + '" id_funcionario="' + value['id_funcionario'] + '" >' + value['horario'] + '</a>';
			conteudoDiasDisponiveis += '<input type="hidden" value="' + indices + '" id="indice_' + value['indice'] + '">';
			indices = '';
		} else {
			conteudoDiasDisponiveis += '<td class="ui-state-disabled undefined btn-select-dia" data-handler="selectDay" data-event="click">';
			conteudoDiasDisponiveis += '<span class=" text-select-dia text-muted" href="#">' + value['horario'] + '</span>';
		}
		conteudoDiasDisponiveis += '</td>';
	});
	conteudoDiasDisponiveis += '</tr>';
	$('#recebeHoraiosDisponiveis').append(conteudoDiasDisponiveis)
	$('#recebeHoraiosDisponiveisReAgendamento').append(conteudoDiasDisponiveis)
}

$(document).on("click", ".btn-select-dia", function (evt) {
	$(".btn-select-dia").removeClass('btn-success')
	$(".text-select-dia").css("color", "#878686");
	$(".text-select-dia").css("background-color", "#f6f6f6");
	$(this).addClass('btn-success')
	$(this).find('.text-select-dia').css("background-color", "#268d5d");
	$(this).find('.text-select-dia').css("color", "#fff");
	text = $(this).find('.text-select-dia').text();
	id_func = $(this).find('.text-select-dia').attr('id_funcionario');
	indice = $(this).find('.text-select-dia').attr('indice');
	indices = indice + $('#indice_' + indice).val();
	$('#hora').val(text)
	$('#id_func').val(id_func)
	$('#indice').val(indice)
	$('#indices').val(indices)
	$('.btn-agendar').removeAttr('disabled');
	localTipo = $(this).parent().parent().attr('id');
	if (localTipo == 'recebeHoraiosDisponiveisReAgendamento') {
		$('.btn-trocaAtendenteSalvar').css({ 'margin-top': "20px" });
		$('.btn-trocaAtendenteSalvar').fadeIn(400)
	}
});

$(document).on("keyup", "#identificador", function (evt) {
	contaIdentificador(this)
});

function contaIdentificador(element) {
	identificador =element.val();
	identificador = numerosSemCaracteres(identificador)
	if (identificador.length >= 3) {
	} else {
		$('#nome').val('')
		$('#email').val('')
		$('#ddd').val('')
		$('#telefone').val('')
	}
}

$(document).ready(() => {
	$('.btn-danger').attr('disabled', 'disabled');
	function initCores() {
		var classList = $(document).find('.fc-daygrid-event-harness')
		$.each(classList, function (index, item) {
			$.each(item, function (index2, item2) {
				if (index2 === 'outerHTML') {
					texto = item2.split('id="')
					texto2 = texto[1];
					texto3 = texto2.split('"')
					getcor = texto[2].split('cor="')
					getcor = getcor[1].split('"')
					id = texto3[0];
					cor = getcor[0];
					$("#" + id).parent().parent().find('.fc-event').css("background", cor)
				}
			});
		});
	}

	$(document).on("click", ".fc-dayGridWeek-button , .fc-prev-button , .fc-prevYear-button ,.fc-next-button ,.fc-nextYear-button,.fc-today-button,.fc-dayGridMonth-button", function (e) {
		initCores()
	})

	$('.fc-today-button').click(function () {
		initCores()
	})

	initCores();
	$(document).on("click", ".fc-more-link", function (e) {
		var classList = $(this).parent().parent().find('.fc-daygrid-event-harness')
		$.each(classList, function (index, item) {
			$.each(item, function (index2, item2) {
				if (index2 === 'outerHTML') {
					texto = item2.split('id="')
					texto2 = texto[1];
					texto3 = texto2.split('"')
					getcor = texto[2].split('cor="')
					getcor = getcor[1].split('"')
					id = texto3[0];
					cor = getcor[0];
					$(document).find('.fc-daygrid-event-harness').find("#" + id).parent().parent().find('.fc-event').css("background", cor)
				}
			})
		})
	})

	$(document).on("click", ".fc-dayGridDay-button", function (e) {
		var classList = $(this).parent().parent().parent().parent().find('.fc-daygrid-event-harness')
		$.each(classList, function (index, item) {
			$.each(item, function (index2, item2) {
				if (index2 === 'outerHTML') {
					texto = item2.split('id="')
					texto2 = texto[1];
					texto3 = texto2.split('"')
					getcor = texto[2].split('cor="')
					getcor = getcor[1].split('"')
					id = texto3[0];
					cor = getcor[0];
					$(document).find('.fc-daygrid-event-harness').find("#" + id).parent().parent().find('.fc-event').css("background", cor)
				}
			})
		})
	})

	$('.modal-body .btn-finalizado').hide();
	$('.modal-body .btn-finalizar').hide();

	$(document).on("mouseover", ".fc-daygrid-event", function (e) {
		$(this).find('.fc-event-title , .fc-event-time').css("color", "#000");
	});

	$(document).on("mouseout", ".fc-daygrid-event", function (e) {
		$(this).find('.fc-event-title , .fc-event-time').css("color", "#fff");
	});

	$(document).on("click", ".fc-daygrid-event", function (e) {
		$('#notas').val('')
		$('.modal-body #responsavel_finalizacao').html('');
		id = $(this).find('.fc-event-title').attr('id');
		descricao = $(this).find('.fc-event-title').attr('descricao');
		notas = $(document).find('#' + id).attr('notas'); // feito dessa forma para edição real time quando a mais de 3 objetos
		hora = $(this).find('.fc-event-time').text();
		$('#hora_do_agendamento_anterior').val(hora);
		indice = $(this).find('.fc-event-title').attr('hora');
		indices = $(this).find('.fc-event-title').attr('indices');
		horalabel = $(this).find('.fc-event-title').attr('horalabel');
		data = $(this).find('.fc-event-title').attr('data');
		cliente_identificador = $(this).find('.fc-event-title').attr('cliente_identificador');
		atendente = $(this).find('.fc-event-title').attr('atendente');
		$('.modal-body #modalAtendente').html(atendente)
		$('#cliente_identificador').html(cliente_identificador);
		servico = $(this).find('.fc-event-title').html();
		servico_id = $(this).find('.fc-event-title').attr('servico_id');
		multiplicador = $(this).find('.fc-event-title').attr('multiplicador');
		$('#multiplicador').val(multiplicador);
		$('#data_do_agendamento_anterior').val(data);
		funcId = $(this).find('.fc-event-title').attr('funcId');
		confirmado = $(this).find('.fc-event-title').attr('confirmado');
		confirmado_at = $(this).find('.fc-event-title').attr('confirmado_at');
		responsavel_finalizacao = $(this).find('.fc-event-title').attr('responsavel_finalizacao');
		finalizado_at = $(this).find('.fc-event-title').attr('finalizado_at');
		$('.modal-body #servico_id').val(servico_id)
		if (confirmado_at != null) {
			split = confirmado_at.split("-");
			split2 = split[2].split(" ");
			hora_confimacao = split2[1].split(":");;
			confirmado_at = split2[0] + '/' + split[1] + '/' + split[0] + ' às ' + hora_confimacao[0] + ':' + hora_confimacao[1];
		}
		agendadoPor = $(this).find('.fc-event-title').attr('agendadoPor');
		if (typeof agendadoPor != "undefined") {
			$('.modal-body #agendadoPor').html(agendadoPor)
		}
		$('.modal-body #modalConfirmacaoDot').removeClass('fc-daygrid-event-dot-nao-confirmado')
		if (confirmado == 0) {
			$('.modal-body #modalConfirmacaoText').html('Não confirmado')
			$('.modal-body #modalConfirmacaoDot').addClass('fc-daygrid-event-dot-nao-confirmado')
			$('.modal-body .btn-finalizar').show();
			$('.modal-body .btn-deletar').removeAttr('disabled')
		}
		if (confirmado == 1) {
			$('.modal-body #modalConfirmacaoText').html('Confirmado ' + confirmado_at)
			$('.modal-body #modalConfirmacaoDot').addClass('fc-daygrid-event-dot-confirmado')
			$('.modal-body .btn-finalizar').show();
			$('.modal-body .btn-deletar').removeAttr('disabled')
		}
		if (confirmado == 2) {
			if (confirmado_at != null) {
				$('.modal-body #modalConfirmacaoText').html('Confirmado ' + confirmado_at)
				$('.modal-body #modalConfirmacaoDot').addClass('fc-daygrid-event-dot-confirmado')
			}
			else if (confirmado_at == null) {
				$('.modal-body #modalConfirmacaoText').html('Não confirmado')
				$('.modal-body #modalConfirmacaoDot').removeClass('fc-daygrid-event-dot-confirmado')
				$('.modal-body #modalConfirmacaoDot').addClass('fc-daygrid-event-dot-nao-confirmado')
			}
			$('.modal-body .btn-finalizar').hide();
			$('.modal-body .btn-finalizado').show();
			$('.modal-body .btn-deletar').attr('disabled', true)
		}
		e.preventDefault();
		getDadosClienteByid(cliente_identificador, data);
		data = data.split('-');
		data = data[2] + '/' + data[1] + '/' + data[0];
		$('#modalTitle').html('<b> Agendamento:</b> ' + servico)
		$('.modal-body #modalData').html(data)
		$('.modal-body #modalHora').html(horalabel)
		$('.modal-body #modalFuncId').val(funcId)
		$('.modal-body #modalIndices').val(indices)
		$('.modal-body #modalIndice').val(indice)
		$('.modal-body #modalIdentificador').val(cliente_identificador)
		$('.modal-body #servico_nome').val(servico)
		if (descricao == '') {
			descricao = 'Sem Descrição';
		} else {
			$('.modal-body #modalDescricao').val(descricao)
		}
		$('#notas').text(notas)
		$('#notas').val(notas)
		$('#idmodalAction').val(id)

		if (finalizado_at != null) {
			split = finalizado_at.split("-");
			split2 = split[2].split(" ");
			hora_finalizado = split2[1].split(":");;
			finalizado_at = split2[0] + '/' + split[1] + '/' + split[0] + ' às ' + hora_finalizado[0] + ':' + hora_finalizado[1];
		}
		if (responsavel_finalizacao != null) {
			$('#notas').attr('disabled', 'disabled');
			$('.btn-deletar').attr('disabled', 'disabled');
			$('.modal-body #responsavel_finalizacao').html(responsavel_finalizacao + ' - ' + finalizado_at)
			$('.btn-finalizar').hide();
			$('.btn-finalizado').show();
		}
	});
	$(document).on("click", ".btn-trocaAtendente", function (e) {
		$('#collapseReagendamento').collapse('toggle');
	})

	$(document).on("click", ".fc-daygrid-day-frame", function (e) {
		$(".modal-title").html('Agendamento ')
		$('.datepicker-container').html('');
		$('.collapse-form-data-reAgendamento,#collapseReagendamento').collapse('hide');
		$('.grid-horarios-reAgendamento').fadeOut(400);
		$('.btn-trocaAtendenteSalvar').fadeOut(400)
		linkClick = e.target
		$('.select-servicos').val(0).trigger('change')
		$('#filtraAtendentes').attr('disabled', 'disabled');
		$('#filtraAtendentes').val('').trigger('change')
		$('.datepicker-container').html('');
		$('.btn-salvar').fadeOut(400);
		$('.form-data').fadeOut(400);
		$('.grid-horarios').fadeOut(400);

		if ($('.select-servicos > option').length == 1) {
			getServicos();
		}
		setTimeout(function () {
			myArr = linkClick.outerHTML.split(">");
			myArr = myArr[2];
			myArr = myArr.split('data_');
			verificacao = myArr[0].indexOf("fc-daygrid-day-number") >= 0;
			if (verificacao == true) {
				result = myArr[1].substring(0, 10);
				result = result.split('_')
				ano = result[0];
				mes = result[1];
				dia = result[2]
				dataToSelect = dia + '/' + mes + '/' + ano
				$(".modal-title").html('Agendamento : ' + dataToSelect)
			}
			if ($("#modalAgendado").hasClass("show") == false) {
				if (verificacao == true) {
					limpaCamposAgendamento()
					$('#modalAgendamento').modal('show');
				}
			}
		}, 500);
	})

	$('.btn-novo-agendamento').click(function () {
		dataToSelect = 0
		limpaCamposAgendamento();
		$('.btn-salvar').fadeOut(400);
		$('.form-data').fadeOut(400);
		$('.grid-horarios').fadeOut(400);
		if ($('.select-servicos > option').length == 1) {
			getServicos();
		}
		$('.select-servicos').val(0).trigger('change')
		$('#filtraAtendentes').attr('disabled', 'disabled');
		$('#filtraAtendentes').val('').trigger('change')
		$('#modalAgendamento').modal('show');
	});

	$('.btn-finalizar').click(function (e) {
		idmodalAction = $('#idmodalAction').val()
		modalIdentificador = $('#modalIdentificador').val();
		notas = $('#notas').val()
		$("#" + idmodalAction).attr('notas', notas);
		funcId = $('#modalFuncId').val();
		notaslength = $('#notas').val().length;
		if (notaslength < 30) {
			toastr.error('Erro', 'É preciso uma anotação com mais de 30 Caracteres.')
		} else {
			$('#modalAgendado').modal('hide');
			Swal.fire({
				title: "ATENÇÃO",
				text: "Deseja Finalizar esse registro?",
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
				$('.modal-body .btn-finalizar').hide();
				$('.modal-body .btn-finalizado').show();
				$('.modal-body .btn-deletar').attr('disabled', true)
				$('#' + idmodalAction).attr('confirmado', 2)
				$('#' + idmodalAction).prev().prev().removeClass('fc-daygrid-event-dot-confirmado').addClass('fc-daygrid-event-dot-finalizado');
				$.ajax({
					url: urlAtualizaNotasAgendamento,
					type: 'post',
					data: { 'id': idmodalAction, 'notas': notas },
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					success: function (result) {
						if (result == true) {
							//toastr.success('SUCESSO', 'Nota editada com sucesso')
						} else {
							toastr.error('Erro', 'Impossivel editar nota.')
						}
					}
				});
				$.ajax({
					url: urlFinalizaAgendamento,
					type: 'post',
					data: { 'id': idmodalAction },
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				})
			});
		}
	})

	$('.btn-deletar').click(function (e) {
		modalData = $('#modalData').html();
		modalIdentificador = $('#modalIdentificador').val();
		funcId = $('#modalFuncId').val();
		$('#modalAgendado').modal('hide');
		Swal.fire({
			title: "ATENÇÃO",
			text: "Deseja remover esse registro?",
			icon: "question",
			iconColor: "#ff6f6f",
			html: `<div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: block;">Deseja cancelar este agendamento?</div><textarea id="motivo" name="motivo" class="swal2-textarea" style="display: block;" placeholder="Digite o motivo do cancelamento"></textarea></div>`,
			showCancelButton: true,
			confirmButtonText: 'SIM',
			cancelButtonText: 'CANCELAR',
			cancelButtonColor: '#bbb',
			focusCancel: true
		}).then(function (actions) {
			if (actions.isConfirmed != true) {
				return false;
			}
			motivo = $('#motivo').val();
			idmodalAction = $('#idmodalAction').val()
			responsavel_cancelamento = $('#userLogado').val()
			cancelaAtendimento(idmodalAction, motivo, responsavel_cancelamento)

		});
	});

	$('#notas').keyup(function (e) {
		notaslength = $('#notas').val().length;
		if (responsavel_finalizacao == null) {
			if (notaslength < 30) {
				$('#countNotas').removeClass('text-success')
				$('#countNotas').addClass('text-danger')
				$('#countNotas').html('Total de ' + notaslength + ' Caracteres! É preciso uma anotação com mais de 30 Caracteres para Finalizar.')
				$('.btn-finalizar').fadeOut(400)
			} else {
				$('#countNotas').html('Total de ' + notaslength + ' Caracteres! ')
				$('#countNotas').removeClass('text-danger')
				$('#countNotas').addClass('text-success')
				$('.btn-finalizar').fadeIn(400);
			}
		}
		else {
			$('#notas').attr('disabled', 'disabled');
		}
	})

	$('.btn-close-modal').click(function (e) {
		$('#modalAgendado').modal('hide');
	})

	$(document).on("click", ".btn-voltar-agendamento", function (evt) {
		$('.btn-salvar').fadeOut(400);
		$('.grid-horarios').fadeOut(400, function (evt) {
			$('.form-data').fadeIn(400);
		});
	})

	$(document).on("click", ".btn-cancelar", function (evt) {
		$('.btn-salvar').fadeOut(400);
		$('.form-data').fadeOut(400);
		$('.grid-horarios').fadeOut(400);
		$('#modalAgendamento').modal('hide');
	})
});

$('#modalAgendamento').on('hide.bs.modal', function () {
	$('#numero-celular').html('')
})
function cancelaAtendimento(id, motivo, responsavel_cancelamento) {
	$.ajax({
		url: urlRemoveAgendamento,
		type: 'post',
		data: { 'id': id, 'motivo': motivo, 'responsavel_cancelamento': responsavel_cancelamento }
	}).done(function (response) {
		$('#modalAgendado').modal('hide');
		$('#' + id).parent().hide();
	}).fail(function (response) {
		toastr.error('Não foi possível retornar os dados solicitados', 'ATENÇÃO');
	});
}

function getAtendentesPorServico(servico_id, situacao) {
	$.ajax({
		type: "POST",
		data: {
			"_token": csrf_token, "id": servico_id,
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		},
		url: urlGetAtendentesPorServicoAjax,
		success: function (result) {
			if (situacao == 'agendamento') {
				$('#filtraAtendentes').html('')
				$('#filtraAtendentes').append('<option value="">Selecione</option>');
			}
			if (situacao == 'reAgendamento') {
				$('#atendentesRemarcar').html('')
				$('#atendentesRemarcar').append('<option value="">Selecione</option>');
			}

			$.each(result, function (key, value) {
				id = value.id;
				nome = value.nome;
				if (situacao == 'agendamento') {
					$('#filtraAtendentes').append('<option value="' + id + '">' + nome + '</option>');
				}
				if (situacao == 'reAgendamento') {
					$('#atendentesRemarcar').append('<option value="' + id + '">' + nome + '</option>');
				}
			});
		}
	});
}

$(document).on("click", ".ui-datepicker-prev", function (evt) {
	monthText = $('.ui-datepicker-month').text();
	const month = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
	const d = new Date();
	let name = month[d.getMonth()];
	if (monthText == name) {
		$('.ui-datepicker-prev').hide();
	}
})

function limpaCamposAgendamento() {
	$(".modal-title").html('Agendamento')
	$('#identificador').val('');
	$('#nome').val('');
	$('#email').val('');
	$('#ddd').val('');
	$('#telefone').val('');
	$('#descricao').val('');
	$('#nome').removeAttr('disabled');
	$('#email').removeAttr('disabled');

	$('#identificador').removeClass('bg-success')
	$('#identificador').removeClass('border-success')
	$('.btn-pesquisar').removeClass('btn-success')
	$('.btn-pesquisar').addClass('btn-danger')
	$('.btn-pesquisar').attr('disabled', 'disabled');
	$('.btn-add-item-dados-numero-celular').attr('disabled', 'disabled');
}

$(document).on("change", "#numero-celular", function () {

	ddd = $('#numero-celular option:selected').attr('data-ddd').replace(/[^0-9]/g, '');
	console.log(ddd)
	$('#ddd').val(ddd);
	telefone = $('#numero-celular option:selected').attr('data-telefone').replace(/[^0-9]/g, '');

	$('#telefone').val(telefone);
})

$(document).on("click", ".btn-cadastrar-novo-celular", function () {
	novo_ddd_celular = $('#novo-ddd-celular').val();
	novo_numero_celular = $('#novo-numero-celular').val().replace(/[^0-9]/g, '');
	if (novo_numero_celular.length < 9) {
		toastr.error(' ', 'O Número de celular deve conter mais que 9 digitos')
	} else {
		id = 9;
		cliente_id = $('#cliente_id').val();
		$.ajax({
			url: urlAdicionaCelularDadosDoClienteAjax,
			type: 'post',
			data: { "_token": csrf_token, "tipo": 'celular', "ddd": novo_ddd_celular, "telefone": novo_numero_celular, 'cliente_id': cliente_id },
			success: function (result) {
				$('#numero-celular').append('<option data-ddd="' + novo_ddd_celular + '" data-telefone="' + novo_numero_celular + '" value="' + result + '" selected>' + novo_ddd_celular + ' - ' + novo_numero_celular + '</option>').change();
				$('#item-dados-numero-celular').removeClass('show')
			}
		});
	}
})