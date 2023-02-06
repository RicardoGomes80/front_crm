$(document).ready(function () {
	listarParticipantesAtuais(evento_id);
	getGraficosFinalizado(evento_id);
	if ($(".is-invalid").length) {
		$('#tab-eg9-0').removeClass('active')
		$('#tab-eg9-1').addClass('active')
	}
})

$('#statusDoEvento').on('change', function () {
	oldVal = $(this).attr('data-value');
	statusDoEvento = $(this).val()
	return atualizaStatus(statusDoEvento, oldVal)
})

function atualizaStatus(statusDoEvento, oldVal) {
	 Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja alterar o status do evento para " + statusDoEvento + "?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return $('#statusDoEvento').val(oldVal);
		}
		$.ajax({
			url: atualizaStatusRoute,
			data: {
				"_token": token,
				evento_id: evento_id,
				situacao: statusDoEvento
			},
			method: 'put',
		}).done(function (response) {
			if (!response) {
				toastr.clear();
				toastr.error('Não foi possível atualizar este evento', 'ATENÇÃO');
				return;
			}

			return mudaStatus(statusDoEvento, oldVal);

		}).fail(function (response) {
			toastr.clear();
			toastr.error('Não foi possível atualizar este evento', 'ATENÇÃO');
		});
	});
}

function mudaStatus(statusDoEvento, oldVal) {
	$('#statusDoEvento').attr('data-value', statusDoEvento);
	$("#statusDoEvento option[value='" + oldVal + "']").remove();
	toastr.clear();

	if (statusDoEvento == 'Em Andamento') {
		$('#emAndamentoDiv').removeClass('d-none')
		$('#statusDoEvento').append('<option value="Finalizado">Finalizado</option>')
		return $('#emAndamentoDiv').fadeIn(200)
	}
	if (statusDoEvento == 'Finalizado') {
		$('#emAndamentoDiv').fadeOut(200)
		$('#finalizadoDiv').removeClass('d-none')
		$('#finalizadoDiv').fadeIn(200)
		return getGraficosFinalizado(evento_id)
	}
	toastr.success('Evento atualizado', 'SUCESSO');
}

function listarParticipantesAtuais(evento_id) {
	$('#adicionaEntrada').html('')
	$.ajax({
		url: eventoListarEntradaRoute,
		data: {
			evento_id: evento_id
		},
		method: 'get'
	}).done(function (response) {
		iniciaListagem(response)
	}).fail(function (error) {
		toastr.error('Erro desconhecido ao listar participantes do evento!', 'ATENÇÃO')
	})
}

function adicionaEntradaAppend(nome, documento, entrada, saida) {
	saida ? saida = saida : saida = ''
	if (!nome) {
		nome = '<label style="color: red;">NOME NÃO DÍSPONIVEL</label>'
	}
	else { 	
		nome = '<label style="color: green;">FILIADO</label> - ' + nome
	}
	htmlEntrada = ''
	htmlEntrada += '<ul class="todo-list-wrapper list-group list-group-flush">'
	htmlEntrada += '<li class="list-group-item">'
	htmlEntrada += '<div class="todo-indicator bg-warning"></div>'
	htmlEntrada += '<div class="widget-content p-0">'
	htmlEntrada += ' <div class="widget-content-wrapper">'
	htmlEntrada += '<div class="widget-content-left">'
	htmlEntrada += '<div class="widget-heading">'
	htmlEntrada += nome
	if (!saida) {
		htmlEntrada += '<button class="btn btn-icon btn-icon-only btnMarcaSaida" title="Marcar saida" documento="' + documento + '"><i class="fas fa-sign-out-alt text-primary font-size-xlg"></i></button>'
	}
	htmlEntrada += '<br>Documento: ' + documento
	htmlEntrada += '</div>'
	htmlEntrada += '<div class="widget-subheading">'
	htmlEntrada += '<i>Entrada: ' + entrada + ' -  Saída: <label id="saida_' + documento + '"></label>' + saida + '</i>'
	htmlEntrada += '</div></div></div></div></li></ul>'
	$('#semEntradas').fadeOut(200)
	$('#nomeParticipante').val('')
	$('#documento').val('')
	$('#adicionaEntrada').prepend(htmlEntrada)
}

function iniciaListagem(response) {
	$('#loadingParticipantes').fadeOut(200)
	if (response.length == 0) return semParticipantesAinda();
	$.each(response, (index, dados) => {
		adicionaEntradaAppend(dados.filiado, dados.documento, dados.entrou_at, dados.saiu_at)
	})
}

function semParticipantesAinda() {
	html = '<div class="ml-4" id="semEntradas"><label >Ainda não há participantes registrados neste evento.</label></div>'
	$('#adicionaEntrada').html(html)
}

$(document).on('click', '.btnMarcaSaida', function () {
	documento = $(this).attr('documento')
	$(this).fadeOut(200)
	return marcarSaidaParticipante(documento);
})

$('#adicionaEntradaRestrita').on('click', function () {
	documento = $('#documentoRestrito option:selected').val();

	nome = $('#documentoRestrito').text()
	return adicionaEntradaRestrita(documento, nome);
})

$('#adicionaEntradaLivre').on('click', function () {
	documento = $('#documento').val();
	buscaParticipanteFiliado(documento)
	nome = $('#nomeParticipante').val()
	return adicionaEntradaLivre(documento, nome);
})

$('#btnBuscaParticipante').on('click', function () {
	documento = $('#documento').val()
	if (!documento) return toastr.warning('O documento não pode estar vazio', 'ATENÇÃO')
	return buscaParticipanteFiliado(documento)
})

function adicionaEntradaLivre(documento, nome) {
	$.ajax({
		url: adicionaEntradaLivreRoute,
		data: { token: token, evento_id: evento_id, documento: documento },
		method: 'post'
	}).done(async function (response) {
		if (!response) return toastr.error('Não foi póssível dar entrada neste momento', 'Atenção')
		toastr.success('Entrada adicionada', 'Sucesso')
		return adicionaEntradaAppend(nome, documento, dataAgora())
	}).fail(function (error) {
		listaErrosToastr(error)
	})
}

function adicionaEntradaRestrita(documento, nome) {
	$.ajax({
		url: adicionaEntradaRestritaRoute,
		data: { token: token, evento_id: evento_id, documento: documento },
		method: 'post'
	}).done(async function (response) {
		if (!response) return toastr.error('Não foi póssível dar entrada neste momento', 'Atenção')
		toastr.success('Entrada adicionada', 'Sucesso')
		$("#documentoRestrito option[value='" + documento + "']").remove();
		$('#documentoRestrito').val('').trigger('change')

		return adicionaEntradaAppend(nome, documento, dataAgora())
	}).fail(function (error) {
		listaErrosToastr(error)
	})
}

function listaErrosToastr(error) {
	$('#nomeParticipante').val('')
	$('#documento').val('').trigger('change')
	$.each(error.responseJSON.errors, (index, erro) => {
		return toastr.error(erro, 'ATENÇÃO', { timeOut: 15000 });
	})
}

function dataAgora() {
	const h = new Date().getHours();
	const m = new Date().getMinutes()
	const s = new Date().getSeconds()
	return h + ':' + m + ':' + s
}

function marcarSaidaParticipante(documento) {
	return $.ajax({
		url: marcarSaidaRoute,
		data: {
			token: token,
			evento_id: evento_id,
			documento: documento
		},
		method: 'put'
	}).done(function (response) {
		if (!response) {
			return toastr.error('Não foi possível marcar esta saída', 'ATENÇÃO')
		}
		$('#saida_' + documento).html(dataAgora())
		return toastr.success('Saida marcada', 'Sucesso')
	}).fail(error => toastr.error('Erro desconhecido ao marcar sáida do participante', 'ATENÇÃO'))
}


function getGraficosFinalizado(evento_id) {
	$('#totalDeParticipantes').html('');
	$('#duracaoDoEvento').html('');
	return $.ajax({
		url: getGraficosEventoFinalizadoRoute,
		data: {
			token: token,
			evento_id: evento_id
		},
		method: 'get'
	}).done(function (response) {
		atualizaCharts(response)
	})
}


function atualizaCharts(response) {
	duracaoOriginal = response['duracaoEvento']
	duracao = duracaoOriginal + ' minutos'
	if (duracaoOriginal > 60) {
		var h = Math.floor(duracaoOriginal / 60);
		var m = duracaoOriginal % 60;
		h = h < 10 ? '0' + h : h;
		m = m < 10 ? '0' + m : m;
		duracao = h + ':' + m
	}
	$('#totalDeParticipantes').html(response['totalParticipantes']);
	$('#duracaoDoEvento').html(duracao);
}


function buscaNaPagina() {
	// Declare variables
	var input, filter, ul, li, a, i, txtValue;
	input = document.getElementById('buscaNaPagina');
	filter = input.value.toUpperCase();
	ul = document.getElementById("emAndamentoDiv");
	li = ul.getElementsByClassName('widget-heading');
	console.log(li)
  
	// // Loop through all list items, and hide those who don't match the search query
	// for (i = 0; i < li.length; i++) {
	//   a = li[i].getElementsByTagName("a")[0];
	//   txtValue = a.textContent || a.innerText;
	//   if (txtValue.toUpperCase().indexOf(filter) > -1) {
	// 	li[i].style.display = "";
	//   } else {
	// 	li[i].style.display = "none";
	//   }
	// }
  }