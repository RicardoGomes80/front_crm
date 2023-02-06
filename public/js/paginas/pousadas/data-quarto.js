$(document).ready(function() {
	$('.set-select2').select2({
		placeholder: "Escolha uma opção",
		containerCssClass : "form-control",
		width: '100%',
		theme: "bootstrap4",
	});

	$('.bootstrap-multiselect').multiselect({
		allSelectedText: 'Todos',
		includeSelectAllOption: true,
		enableFiltering: true,
		enableCaseInsensitiveFiltering: true,
		buttonWidth: '100%',
		inheritClass: true
	});

	$(document).on('click', '#incluir-novo-periodo', function (e) {
		if (valida_campos_vazios() == false){
			return false;
		}
		if (valida_dados_conflitantes() == false){
			return false;
		}else{
			insere_registro();
		}		
	});
	
	$(document).on('change', '.bootstrap-multiselect', function (e) {
		$('.bootstrap-multiselect').removeClass('border-danger')
	});

	$(document).on('change', '#pousadas', function (e) {
		$('#collapseExample123').collapse('hide');
		$('#table-pousadas-card-body-resultados').addClass('d-none');
		$('#table-pousadas-card-body-carregando-aprofem').removeClass('d-none');
		pousada_id = $(this).val();		
		buscaDatas(pousada_id)
	});

	var date = new Date();
	var minYear = "01/01/"+ date.getFullYear();
	$('.daterange-liberacao').daterangepicker({
		minDate: minYear,
		timePicker: true,
		autoUpdateInput: true,
		timePicker24Hour: true,
		buttonClasses: "btn btn-success",
		cancelClass: "btn-link bg-transparent rm-border text-danger",
		opens: "center",
		drops: "up",
		locale: {
			format: "DD/MM/YYYY HH:mm",
			separator: " - ",
			applyLabel: "Aplicar",
			cancelLabel: "Cancelar",
			fromLabel: "De",
			toLabel: "até",
			customRangeLabel: "Custom",
			daysOfWeek: ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
			monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
			firstDay: 1,
		}
	}
	);

	$('.daterange-periodo').daterangepicker({
		timePicker: false,
		autoUpdateInput: true,
		buttonClasses: "btn btn-success",
		cancelClass: "btn-link bg-transparent rm-border text-danger",
		opens: "center",
		drops: "up",
		locale: {
			format: "DD/MM/YYYY",
			separator: " - ",
			applyLabel: "Aplicar",
			cancelLabel: "Cancelar",
			fromLabel: "De",
			toLabel: "até",
			customRangeLabel: "Custom",
			daysOfWeek: ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
			monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
			firstDay: 1,
		},
		isInvalidDate: function(date) {
			if (typeof blockedWeekDays != 'undefined' && blockedWeekDays.includes(date.day())) {
				return true
			}
			return false
		},
	});

	$(document).on('click', '#btn-collapse_add', function (e) {
		$('#collapseExample123').collapse('show');
		$('#incluir-novo-periodo').removeClass('d-none');
		$('#editar-periodo').addClass('d-none');
		$("#quartos").val('');
		$("#quartos").multiselect("refresh");
		$('.daterange-periodo').val('')
		$('.daterange-liberacao').val('')
	});

	$(document).on('click', '#cancelar', function (e) {
		$('.daterange-periodo').val('')
		$('.daterange-liberacao').val('')
		$("#quartos").val('');
		$("#quartos").multiselect("refresh");
		$('#incluir-novo-periodo').removeClass('d-none');
		$('#editar-periodo').addClass('d-none');
		$('#collapseExample123').collapse('hide');
	})

	$(document).on('click', '.form-editar', function (e) {
		id = $(this).attr('id');
		$('#periodo-editar').val(id);
		$('#incluir-novo-periodo').addClass('d-none');
		$('#editar-periodo').removeClass('d-none');
		$('#collapseExample123').collapse('show');
		quartos = $(this).attr('data-quartos'); 
		var dataarray=quartos.split(",");
		$("#quartos").val(dataarray);
		$("#quartos").multiselect("refresh");
		data_periodo = $(this).attr('data-periodo');
		data_liberacao_portal = $(this).attr('data-liberacao-portal');
		data_liberacao_portalArray = data_liberacao_portal.split(" - ");
		data_periodoArray = data_periodo.split(" - ");
		var date = new Date();
		var minYear = "01/01/"+ date.getFullYear();
		$('.daterange-liberacao').daterangepicker({
			"minDate": minYear,
			"timePicker": true,
			"autoUpdateInput": true,
			"timePicker24Hour": true,
			"startDate": data_liberacao_portalArray[0],
			"endDate": data_liberacao_portalArray[1],
			"locale": {
				"format": "DD/MM/YYYY HH:mm",
				"separator": " - ",
				"applyLabel": "Aplicar",
				"cancelLabel": "Cancelar",
				"fromLabel": "De",
				"toLabel": "até",
				"customRangeLabel": "Custom",
				"daysOfWeek": ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
				"monthNames": ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
				"firstDay": 1,
			},
		});
		$('.daterange-periodo').daterangepicker({
			"timePicker": false,
			"autoUpdateInput": true,
			"startDate": data_periodoArray[0],
			"endDate": data_periodoArray[1],
			"locale": {
				"format": "DD/MM/YYYY",
				"separator": " - ",
				"applyLabel": "Aplicar",
				"cancelLabel": "Cancelar",
				"fromLabel": "De",
				"toLabel": "até",
				"customRangeLabel": "Custom",
				"daysOfWeek": ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
				"monthNames": ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
				"firstDay": 1,
			},
		});
	});

	$(document).on('click', '#editar-periodo', function (e) {
		pousada_ids = $('#pousadas').val();
		periodo_id = $('#periodo-editar').val();
		data_liberacao_portal = $('input[name="data_liberacao_portal"]').val();
		data_periodo = $('input[name="data_periodo"]').val();
		quartos = $('#quartos').val();
		quartos_text = '';
		quartos_id = '';
		const quartosArray = [];
		$.each(quartos, function( index, value ) {
			var optionText = $("#quartos option[value="+value+"]").attr('data-nome');
			quartosArray.push({"pousada_id": pousada_id,"quarto_id": value, "quarto_text": optionText});
			quartos_text += ', ' + optionText;
			quartos_id += ',' + value;
		});
		quartos_text = quartos_text.replace(', ','');
		quartos_id = quartos_id.replace(',','');
		quartos = JSON.stringify(quartosArray)
		data_liberacao = data_liberacao_portal.split(" - ");
		data_periodo = data_periodo.split(" - ");
		pousada_text = $('#pousadas option:selected').text();
		$.ajax({
			url: routeEditar,
			data: {"_token": $('meta[name="csrf-token"]').attr('content'),"pousada_ids":pousada_ids,"data_liberacao_portal_inicial":data_liberacao[0],"data_liberacao_portal_final":data_liberacao[1],"data_inicial":data_periodo[0],"data_final":data_periodo[1],"quartos":quartos,"periodo_id":periodo_id},
			method: 'post',
			type: 'post',
			success: function(result){
				if(result > 0){
					acoes = '';
					$('#table-pousadas').DataTable().row($("#"+periodo_id).parents('tr')).remove().draw();
					if($('#can-config-listar').val() == 1){
						routeDeletar = routePatern.replace("000000", periodo_id);
						acoes = '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine form-editar" id="'+periodo_id+'" data-quartos="'+quartos_id+'" data-liberacao-portal="'+data_liberacao_portal+'" data-periodo="'+data_periodo+'" title="Editar" ><i class="pe-7s-note text-primary font-size-xlg text-success font-size-xlg"></i></button><button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine submit-form-delete" data-callback="callbackDelete" id_table="table-pousadas" id="'+periodo_id+'" title="Remover" data-rota="'+routeDeletar+'"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>' 
					}
					html += '<tr><td>'+pousada_text+'</td><td>'+quartos_text+'</td><td>'+data_liberacao_portal+'</td><td>'+data_periodo+'</td><td>'+acoes+'</td></tr>'
					$('#table-pousadas').DataTable().row.add($(html)).draw();
					$('#collapseExample123').collapse('hide');
					html = '';
					toastr.clear;
					toastr.success('Dados Gravados Corretamente', 'Sucesso');
				}else{
					toastr.clear;
					toastr.error('Não foi possivel executar ação Verifique os dados e tente novamente', 'Atenção');
				}
			}
		});
	});
});

function callbackDelete() {
	periodo_id = $(this).attr('id');
	$('#table-pousadas').DataTable().row($("#"+periodo_id).parents('tr')).remove().draw();
}

function buscaDatas(pousada_id) {
	$('.bootstrap-multiselect').multiselect('destroy');
	$.ajax({
		url: route,
		data: {"_token": $('meta[name="csrf-token"]').attr('content'),"pousada_id":pousada_id},
		method: 'post',
		type: 'post',
		success: function(result){
			$('#quartos').html('')
			html = '';
			$('#table-pousadas').DataTable().clear().draw();
			$.each( result, function( pousada_key, pousada_value ) {
				if(pousada_value['quartos'].length > 0){
					index_pousada_atual = 0;		
					$.each( pousada_value['quartos'], function( key, value ) {
						textox_33 = 'Pousada ' + $('#pousadas option[value="'+value.pousada_id+'"]').text()
						index_pousada = textox_33;
						if(index_pousada != index_pousada_atual){
							$('#quartos').append('<optgroup label="'+textox_33+'" class="form-check-label font-weight-bold bg-info">')
						}
						$('#quartos').append('<option data-nome="'+value.nome+'" data-pousada-id="'+value.pousada_id+'" value="'+value.id +'">'+value.nome + ' Hospedes: '+value.total_hospedes + '</option')
						if(index_pousada != index_pousada_atual){
							$('#quartos').append('</optgroup>')
						}
						index_pousada_atual = textox_33
					});					
				}
				if(pousada_value['datas'].length > 0){
					$.each( pousada_value['datas'], function( key, value ) {
						
						pousada = $('#pousadas option[value="'+value.pousada_id+'"]').text();
						const obj = JSON.parse(value.quartos);
						quartos_text = '';
						quartos_id = '';
						$.each( obj, function( keyx, valuex ) {
							quartos_text += ', '+ valuex.quarto_text;
							quartos_id += ','+ valuex.quarto_id;
						});
						quartos_text = quartos_text.replace(', ','');
						quartos_id = quartos_id.replace(',','');
						acoes = '';
						if($('#can-config-listar').val() == 1){
							routeDeletar = routePatern.replace("000000", value.data_id);
							acoes = '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine form-editar" id="'+value.data_id+'" title="Editar" data-quartos="'+quartos_id+'" data-liberacao-portal="'+value.data_liberacao_portal_inicialBr+' - ' + value.data_liberacao_portal_finalBr+ '" data-periodo="'+value.data_inicialBr+' - '+value.data_finalBr+'"><i class="pe-7s-note text-primary font-size-xlg text-success font-size-xlg"></i></button><button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine submit-form-delete" data-callback="callbackDelete" id_table="table-pousadas" id="'+value.data_id+'" title="Remover" data-rota="'+routeDeletar+'"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>' 
						}
						html += '<tr><td>'+pousada+'</td><td>'+quartos_text+'</td><td>'+value.data_liberacao_portal_inicialBr+' - ' + value.data_liberacao_portal_finalBr+ '</td><td>'+value.data_inicialBr+' - '+value.data_finalBr+'</td><td>'+acoes+'</td></tr>'
						$('#table-pousadas').DataTable().row.add($(html)).draw();
						html = '';
					});
				}
			})//##each acaba aki
			$('.bootstrap-multiselect').multiselect({
				allSelectedText: 'Todos',
				includeSelectAllOption: true,
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,
				buttonWidth: '100%',
				inheritClass: true
			});
			$('#table-pousadas-card-body-carregando-aprofem').addClass('d-none');
			$('#table-pousadas-card-body-resultados').removeClass('d-none');
		}
	});
}

function insere_registro() {	
	pousada_ids = $('#pousadas').val();
	pousada_text = $('#pousadas option:selected').text();
	data_liberacao_portal = $('input[name="data_liberacao_portal"]').val();
	data_periodo = $('input[name="data_periodo"]').val();
	quartos = $('#quartos').val();
	quartos_text = '';
	quartos_id = '';
	const quartosArray = [];
	$.each(quartos, function( index, value ) {
		optionText = $("#quartos option[value="+value+"]").attr('data-nome');
		optionPousadaId = $("#quartos option[value="+value+"]").attr('data-pousada-id');
		quartosArray.push({"pousada_id": optionPousadaId, "quarto_id": value, "quarto_text": optionText});
		quartos_text += ', ' + optionText;
		quartos_id += ', ' + value;
	});
	quartos_text = quartos_text.replace(', ','');
	quartos_id = quartos_id.replace(',','');
	quartos = JSON.stringify(quartosArray)
	data_liberacao = data_liberacao_portal.split(" - ");
	data_periodo = data_periodo.split(" - ");
	text = pousada_ids.toString();
	array_pousada_ids = text.split(",");
	$.ajax({
		url: routeGravar,
		data: {"_token": $('meta[name="csrf-token"]').attr('content'),"pousada_ids":pousada_ids,"data_liberacao_portal_inicial":data_liberacao[0],"data_liberacao_portal_final":data_liberacao[1],"data_inicial":data_periodo[0],"data_final":data_periodo[1],"quartos":quartos},
		method: 'post',
		type: 'post',
		success: function(result){
			if(result > 0){
				$.each(array_pousada_ids, function( array_pousada_index, array_pousada_id ) {
					quartos_id = '';
					quartos_text = '';
					$.each($('#quartos').val(), function( quartos_index, quartos_value ) {						
						optionText = $("#quartos option[value="+quartos_value+"]").attr('data-nome');
						pousada_text = $('#pousadas option[value='+array_pousada_id+']').text();
						optionPousadaId = $("#quartos option[value="+quartos_value+"]").attr('data-pousada-id');
						if(optionPousadaId == array_pousada_id){
							quartosArray.push({"pousada_id": optionPousadaId, "quarto_id": quartos_value, "quarto_text": optionText});
							quartos_text += ', ' + optionText;
							quartos_id += ', ' + quartos_value;
						}
					});
					acoes = '';
					if($('#can-config-listar').val() == 1){
						routeDeletar = routePatern.replace("000000", result);
						acoes = '<button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine form-editar" id="'+result+'" data-quartos="'+quartos_id+'" data-liberacao-portal="'+data_liberacao_portal+'" data-periodo="'+data_periodo+'" title="Editar" ><i class="pe-7s-note text-primary font-size-xlg text-success font-size-xlg"></i></button><button type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine form-delete" data-callback="callbackDelete" id_table="table-pousadas" id="'+result+'" title="Remover" data-rota="'+routeDeletar+'"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></button>' 
					}
					html += '<tr><td>'+pousada_text+'</td><td>'+quartos_text+'</td><td>'+data_liberacao_portal+'</td><td>'+data_periodo+'</td><td>'+acoes+'</td></tr>'
					$('#table-pousadas').DataTable().row.add($(html)).draw();
					html = '';
				});
				toastr.clear;
				toastr.success('Dados Gravados Corretamente', 'Sucesso');
			}else{
				toastr.clear;
				toastr.error('Não foi possivel executar ação Verifique os dados e tente novamente', 'Atenção');
			}
		}
	});
	$('#collapseExample123').collapse('hide');
}