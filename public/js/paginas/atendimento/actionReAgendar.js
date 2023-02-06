$(document).on("change","#atendentesRemarcar",function(evt) {
	$('.btn-trocaAtendenteSalvar').fadeOut(400)
	$('.datepicker-container').html('');
	$('.btn-voltar-reAgendamento').fadeOut(400);
	$('.grid-horarios-reAgendamento').fadeOut(400);
	id_func = $("#atendentesRemarcar option:selected").val();
	nome_novo_atendente = $("#atendentesRemarcar option:selected").text();
	$("#nome_novo_atendente").val(nome_novo_atendente);
	$("#id_func_pesquisa_horarios").val(id_func);
	$('.datepicker-container').html('');
	if(id_func > 0 ){
		$('.collapse-form-data-reAgendamento').collapse('show');
		buscaDatasDisponiveis(id_func,'reAgendamento')
	}else{
		$('.collapse-form-data-reAgendamento').collapse('hide');
	}
})

$(document).on("click",".btn-trocaAtendenteSalvar",function(evt) {
	$('#modalAgendado').modal('hide');
	$.blockUI({ message: $(".body-block-carregando-aprofem") });
	indices = $('#indices').val();
	indice = $('#indice').val();
	data = data = $('#data').val();
	data_do_agendamento_anterior = $('#data_do_agendamento_anterior').val();
	hora = $('#hora').val();
	hora_do_agendamento_anterior = $('#hora_do_agendamento_anterior').val();
	servico = $('#servico_id').val();
	multiplicador = $('#multiplicador').val();
	idmodalAction = $('#idmodalAction').val();
	atendente_remover = $('#modalFuncId').val();
	id_func = $('#id_func').val();
	userLogado = $('#userLogado').val();
	indices_remover = $('#modalIndices').val();
	indice_remover = $('#modalIndice').val();
	identificador = $('#modalIdentificador').val();
	nome_novo_atendente = $('#nome_novo_atendente').val();
	nome_anterior_atendente = $('#modalAtendente').html();
	nome_completo_cliente = $('#modalNome').html();
	telefone = $('#modalTelefone').html();
	email = $('#modalEmail').val();
	notificar = $('#notificar').prop('checked');
	data_do_agendamento_atual = data.split("/");
	data_do_agendamento_atual = data_do_agendamento_atual[2]+'-'+data_do_agendamento_atual[1]+'-'+data_do_agendamento_atual[0]
	arrayDados = {"_token": csrf_token,"data": data ,'hora':hora,'data_do_agendamento_anterior':data_do_agendamento_anterior,'hora_do_agendamento_anterior':hora_do_agendamento_anterior,'data_do_agendamento_atual':data_do_agendamento_atual,'multiplicador': multiplicador 
	,'id_func':id_func,'idmodalAction':idmodalAction,'indices':indices,'nome_completo_cliente':nome_completo_cliente
	,'indice':indice,'userLogado':userLogado,'notificar':notificar,'telefone':telefone,'email':email
	,'indices_remover':indices_remover,'indice_remover':indice_remover,'atendente_remover':atendente_remover,'identificador':identificador,'nome_novo_atendente':nome_novo_atendente,'nome_anterior_atendente':nome_anterior_atendente
}
$.ajax({
	'processing': true, 
	'serverSide': false,
	type: "POST",
	data: arrayDados,
	url: urlReagendar,
	success: function(result) {
		divClicada  = $('#'+idmodalAction).parent().parent().html();
		$('#'+idmodalAction).parent().parent().html('')
		data = data.split("/");
		data = '.data_'+data[2]+'_'+data[1]+'_'+data[0];			
		divClicada = divClicada.replaceAll(arrayDados.indices_remover, indices);
		divClicada = divClicada.replaceAll(arrayDados.hora_do_agendamento_anterior, hora);
		divClicada = divClicada.replaceAll(arrayDados.nome_anterior_atendente, nome_novo_atendente);
		divClicada = divClicada.replaceAll(arrayDados.data_do_agendamento_anterior, data_do_agendamento_atual);
		divClicada = divClicada.replaceAll('hora="'+arrayDados.indice_remover, 'hora="'+indice);
		if(arrayDados.notificar == 1){
			divClicada = divClicada.replaceAll('fc-daygrid-event-dot-confirmado', 'fc-daygrid-event-dot-nao-confirmado');
		}
		$(data).parent().next().append(divClicada);
		toastr.success('SUCESSO', 'Regendamento efetuado com sucesso')
		$.unblockUI();
	}
	})
})

$(document).on("click",".btn-voltar-reAgendamento",function(evt) {
	$('.btn-salvar-reAgendamento').fadeOut(400);
	$('.btn-trocaAtendenteSalvar').fadeOut(400)
	$('.grid-horarios-reAgendamento').fadeOut(400,function(evt) {
		$('.form-data-reAgendamento').fadeIn(400);
	});
})

$(document).on("click",".btn-trocaAtendente",function(e) {
	atendentesRemarcarId = $('#atendentesRemarcarId').val();
	$('.btn-trocaAtendenteSalvar').hide();
	$('#multiplicador').val();
	$('.btn-trocaAtendenteSalvar').hide();
	$('.datepicker-container').html('');
	$('.btn-voltar-reAgendamento').hide();
	$('.grid-horarios-reAgendamento').hide();
	$('.collapse-form-data-reAgendamento').collapse('hide');
	servico_id = $('.modal-body #servico_id').val();
	if(atendentesRemarcarId == 1){
		id_func =$('#userLogado').val()
		if(id_func > 0 ){
			$('.collapse-form-data-reAgendamento').collapse('show');
			buscaDatasDisponiveis(id_func,'reAgendamento')
		}else{
			$('.collapse-form-data-reAgendamento').collapse('hide');
		}
		$('#collapseReagendamento').collapse('show');
	}else{
		getAtendentesPorServico(servico_id,'reAgendamento');
	}
})