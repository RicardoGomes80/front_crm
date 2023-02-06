$('#addLotacao').attr('disabled', 'disabled');
$('#data_inicio_cargo').attr('disabled', 'disabled');
$('#data_fim_cargo').attr('disabled', 'disabled');	
$('#representanteToogle').prop('checked', false).change();		
$('.tipo_representacao_funcional_id').addClass("d-none");
$('.representacao_funcional_inicio').addClass("d-none");
$('.representacao_funcional_fim').addClass("d-none");
$('#addDre').on('select2:select', function (e) {
	$('#addLotacao').html('<option></option>');
	$('#addLotacao').attr('disabled', 'disabled');	
	let routeAjax = $(e.params.data.element).attr('data-rota');
	dataCodigo = $(e.params.data.element).attr('data-codigo');

	$('.ce_codigo').val($(e.params.data.element).attr('ce_codigo'))
	$('.ce_descricao').val($(e.params.data.element).attr('ce_descricao'))
	$('.dre_descricao').val($(e.params.data.element).attr('dre_descricao'))
	itemId = e.params.data.id;
	if (itemId) {
		$.ajax({
			url: routeAjax,
			context: document.body
		}).done(function (response) {
			for (var prop in response.data) {
				values = response.data[prop];
				html_info_funcional = ' codigo="'+values.codigo+'"';
				descricao = values.codigo + ' - ' + values.descricao;
				$('#addLotacao').append('<option  unidade_descricao="' + descricao +'"  '+html_info_funcional+' value="' + values.codigo + '">' + descricao +'</option>');
				$('#addLotacao').removeAttr("disabled");
			}
		});
	}
});

$(document).on('click', '.btn-gravar_novas_informacoes_funcionais', function (event) {
	data = getcampos();
	if(data != false){
		$.ajax({
			type: "POST",
			data: data,
			url: urlInformacoesFuncionaisAjax,
			success: function(result) {
				populaCampo(result,'insere')			
			}
		});
	}
});

$(document).on("click", ".btn-adicionar-cargo", function () {
	limpaCampos();
	cliente_id = $('#cliente_id').val();
	urlInformacoesFuncionaisAjax = urlInformacoesFuncionaisAjax.replace("cliente_id", cliente_id);
	$('#titulo-modal-informacao-funcional').html('Inserir nova Informação funcional');
	$('.btn-decide-botao').removeClass('btn-editar_informacoes_funcionais');
	$('.btn-decide-botao').addClass('btn-gravar_novas_informacoes_funcionais');
	$('#modal-form-item-informacao-funcional').modal('show');
})

$(document).on("click", ".btn-editar-cargo", function () {
	$('#cargoConvencionalToogle').prop('checked', true).change();
	cliente_id = $('#cliente_id').val();
	item_id = $('#cargo_codigo option:selected').attr('id');
	$('.btn-decide-botao').removeClass('btn-gravar_novas_informacoes_funcionais');
	$('.btn-decide-botao').addClass('btn-editar_informacoes_funcionais');	
	urlInformacoesFuncionaisAtualizarAjax = urlInformacoesFuncionaisAtualizarAjax.replace("cliente_id", cliente_id);
	urlInformacoesFuncionaisAtualizarAjax = urlInformacoesFuncionaisAtualizarAjax.replace("item_id", item_id);
	cargo_descricao = $('#cargo_codigo option:selected').text();
	cargo_codigo = $('#cargo_codigo option:selected').val();
	vinculo = $('#cargo_codigo option:selected').attr('data_vinculo');	
	setAction = setAction.replace("cliente_id", cliente_id);
	setAction = setAction.replace("item_id", item_id);	
	getVinculos = getVinculos.replace("cliente_id", cliente_id);
	$.ajax({
		url: setAction,
		context: document.body
	}).done(function (response) {
		data = new Date();
		d = ('0' + data.getDate()).slice(-2)
		m = ('0' + (data.getMonth()+1)).slice(-2)
		a = data.getFullYear();
		data = a+'-'+m+'-'+d	
		$('#data_inicio_cargo').val('')
		$('#data_fim_cargo').val('')
		if (!response.data.id) {
			toastr.error('Não foi possível retornar os dados solicitados', 'ATENÇÃO')
			return
		}
		$('#modal-form-item-informacao-funcional').modal('show');
		setData = response.data

		unidades = response.unidades
		if ((setData.tipo_representacao_funcional_id > 0) && (setData.tipo_representacao_funcional_id != null) ){
			$('#old_representante').val(1);
			$('#old_representacao_funcional_inicio').val(setData.representacao_funcional_inicio);
			$('#old_representacao_funcional_fim').val(setData.representacao_funcional_fim);
			$('#old_tipo_representacao_funcional_id').val(setData.tipo_representacao_funcional_id);
			$('#representanteToogle').prop('checked', true).change();
		}else{
			$('#representanteToogle').prop('checked', false).change();
		}
		$("#tipo_representacao_funcional_id").find('option[value="'+setData.tipo_representacao_funcional_id+'"]').attr('selected','selected').change()
		$('#titulo-modal-informacao-funcional').html('Editar Informação funcional');
		if(setData.representacao_funcional_inicio != null){
			representacao_funcional_inicio = dateToDateBrJs(setData.representacao_funcional_inicio)
			$('#representacao_funcional_inicio').val(representacao_funcional_inicio);
		}
		if(setData.representacao_funcional_fim != null){
			representacao_funcional_fim = dateToDateBrJs(setData.representacao_funcional_fim);
			$('#representacao_funcional_fim').val(representacao_funcional_fim);
		}
		$("#vinculo").val(setData.vinculo)
		$("#vinculo_atual").val(setData.vinculo)	
		$('#addCargo_codigo').val(setData.cargo_codigo).change();
		$('#addDre').val(setData.dre_codigo).change();
		dreItem = $('#addDre').find(':selected');
		dreCodigo = '';
		dreCodigo = dreItem.attr('dre_codigo')
		$('.ce_codigo').val(dreItem.attr('ce_codigo'))
		$('.ce_descricao').val(dreItem.attr('ce_descricao'))
		$('.dre_codigo').val(dreItem.attr('dre_codigo'))
		$('.dre_descricao').val(dreItem.attr('dre_descricao'))
		$('#addLotacao').removeAttr('disabled');
		$('#addLotacao').html('<option>Selecione</option>')
		for (var prop in unidades) {
			values = unidades[prop]
			if(setData.unidade_codigo == values.codigo ){
				$('#addLotacao').append('<option value="' + values.codigo + '" selected>'+ values.codigo + ' - ' + values.descricao +'</option>');
			}else{
				$('#addLotacao').append('<option value="' + values.codigo + '">'+ values.codigo + ' - ' + values.descricao +'</option>');
			}					
		}
		$('#tipo_jornada_id').val(setData.tipo_jornada_id).change()
		$('#codigo_vencimento_id').val(setData.codigo_vencimento_id).change()
		$('#situacao-funcional').val(setData.situacao_funcional).change()
		$('#padrao').val(setData.codigo_vencimento_id).change()
		$('#editar_horario_contato_ue_inicio').val(setData.horario_contato_ue_inicio)
		$('#editar_horario_contato_ue_fim').val(setData.horario_contato_ue_fim)
	})
})
$(document).on('click', '.btn-editar_informacoes_funcionais', function (e) {
	e.preventDefault();
	uei = 	$('#editar_horario_contato_ue_inicio').val();
	uef = 	$('#editar_horario_contato_ue_fim').val();
	if((uef =='') && (uei=='') ){
		
	}
	else if( (uef !='') && (uei=='')){
		erros = 1;
		$('#editar_horario_contato_ue_inicio').addClass('is-invalid-modal');
		toastr.error('Melhor horário para contato na U.E. (início) só pode ser vazio quando o (fim) também for vazio.', 'ATENÇÃO')
	}
	else if( (uef =='') && (uei!='') ){
		erros = 1;
		$('#editar_horario_contato_ue_fim').addClass('is-invalid-modal');
		toastr.error('Melhor horário para contato na U.E. (fim) só pode ser vazio quando o (início) também for vazio.', 'ATENÇÃO')
	}
	else{
		var dataInicial = new Date('2022/06/27 '+ uei); 
		var dataFinal = new Date('2022/06/27 '+ uef);  
		var diferencaEntreDatas = dataFinal.getTime() - dataInicial.getTime();
		var resultadoEmMinutos = Math.round(diferencaEntreDatas / 60000);
		if(resultadoEmMinutos < 1){
			$('#editar_horario_contato_ue_inicio').addClass('is-invalid-modal');
			$('#editar_horario_contato_ue_fim').addClass('is-invalid-modal');
			toastr.error('Melhor horário para contato na U.E. (início) não pode ser maior que o Melhor horário para contato na U.E. (fim).', 'ATENÇÃO')
			erros = 1;
		}
	}
	if(erros == 0){
		data = getcampos();
		$.ajax({
			type: "PUT",
			data: data,
			url: urlInformacoesFuncionaisAtualizarAjax,
			success: function(result) {
				populaCampo(result,'edita')
			}
		});
	}
});

function getcampos() {
	erros = 0;
	uei = 	$('#editar_horario_contato_ue_inicio').val();
	uef = 	$('#editar_horario_contato_ue_fim').val();
	if((uef =='') && (uei=='') ){
		
	}
	else if( (uef !='') && (uei=='')){
		erros = 1;
		$('#editar_horario_contato_ue_inicio').addClass('is-invalid-modal');
		toastr.error('Melhor horário para contato na U.E. (início) só pode ser vazio quando o (fim) também for vazio.', 'ATENÇÃO')
	}
	else if( (uef =='') && (uei!='') ){
		erros = 1;
		$('#editar_horario_contato_ue_fim').addClass('is-invalid-modal');
		toastr.error('Melhor horário para contato na U.E. (fim) só pode ser vazio quando o (início) também for vazio.', 'ATENÇÃO')
	}
	else{
		var dataInicial = new Date('2022/06/27 '+ uei); 
		var dataFinal = new Date('2022/06/27 '+ uef);  
		var diferencaEntreDatas = dataFinal.getTime() - dataInicial.getTime();
		var resultadoEmMinutos = Math.round(diferencaEntreDatas / 60000);
		if(resultadoEmMinutos < 1){
			$('#editar_horario_contato_ue_inicio').addClass('is-invalid-modal');
			$('#editar_horario_contato_ue_fim').addClass('is-invalid-modal');
			toastr.error('Melhor horário para contato na U.E. (início) não pode ser maior que o Melhor horário para contato na U.E. (fim).', 'ATENÇÃO')
			erros = 1;
		}
	}

	vinculo = $('#vinculo').val();
	data_inicio_cargo = $('#data_inicio_cargo').val();
	data_fim_cargo = $('#data_fim_cargo').val();
	cargo = $('#addCargo_codigo').val();
	cargo_descricao = $('#addCargo_codigo option:selected').text();
	situacao_funcional = $('#situacao-funcional').val();
	addDre = $('#addDre').val();	
	ce_codigo = $('.ce_codigo').val();
	ce_descricao = $('.ce_descricao').val();
	dre_codigo = $('#addDre option:selected').val();
	dre_descricao = $('.dre_descricao').val();
	unidade_codigo = $('#addLotacao option:selected').val();
	unidade_descricao = $('#addLotacao option:selected').attr('unidade_descricao');
	codigo_vencimento_id = $('#codigo_vencimento_id').val();
	jornada = $('#jornada').val();
	cliente_id = $('#cliente_id').val();
	user_id = $('#user_id').val();
	data_inicio_cargo = $('#data_inicio_cargo').val();
	data_fim_cargo = $('#data_fim_cargo').val();
	tipo_jornada_id = $('#tipo_jornada_id ').val();
	horario_contato_ue_inicio = $('#editar_horario_contato_ue_inicio').val();
	horario_contato_ue_fim = $('#editar_horario_contato_ue_fim').val();
	id_selecionado = $('#cargo_codigo option:selected').attr('id');
	representante = $('#representanteToogle').prop('checked');
	tipo_representacao_funcional_id = $('#tipo_representacao_funcional_id option:selected').val();
	representacao_funcional_inicio = $('#representacao_funcional_inicio').val();
	representacao_funcional_fim = $('#representacao_funcional_fim').val();
	old_representante = $('#old_representante').val();
	old_tipo_representacao_funcional_id = $('#old_tipo_representacao_funcional_id').val();
	old_representacao_funcional_inicio = $('#old_representacao_funcional_inicio').val();
	old_representacao_funcional_fim = $('#old_representacao_funcional_fim').val();

	if(vinculo =='') {
		toastr.error('vinculo não pode ser vazio.', 'ATENÇÃO')
		$('#vinculo').addClass('is-invalid-modal');
		erros = 1;
	}
	if(dre_codigo =='Selecione') {
		toastr.error('DRE não pode ser vazio.', 'ATENÇÃO')
		$('#select2-addDre-container').parent().addClass('is-invalid-modal');
		erros = 1;
	}
	if(unidade_codigo =='') {
		toastr.error('Unidade não pode ser vazio.', 'ATENÇÃO')
		$('#select2-addLotacao-container').parent().addClass('is-invalid-modal');
		erros = 1;
	}
	if(codigo_vencimento_id =='') {
		toastr.error('Padrão não pode ser vazio.', 'ATENÇÃO')
		$('#select2-codigo_vencimento_id-container').parent().addClass('is-invalid-modal');
		erros = 1;
	}
	if(tipo_jornada_id =='') {
		toastr.error('Jornada não pode ser vazio.', 'ATENÇÃO')
		$('#select2-tipo_jornada_id-container').parent().addClass('is-invalid-modal');
		erros = 1;
		erros = 1;
	}
	if(situacao_funcional =='') {
		toastr.error('Situação Funcional não pode ser vazio.', 'ATENÇÃO')
		$('#select2-situacao-funcional-container').parent().addClass('is-invalid-modal');
		erros = 1;
	}
	if(cargo =='') {
		toastr.error('Cargo não pode ser vazio.', 'ATENÇÃO')
		$('#select2-addCargo_codigo-container').parent().addClass('is-invalid-modal');
		erros = 1;
	}
	if(prop == true){
		cargo_em_comissao = 'on'
		cargo_em_comissao_codigo = 0;
	}
	else if(prop == false){
		cargo_em_comissao = 'off'
		cargo_em_comissao_codigo = 1;
	}
	if(erros == 0){
		data = {
			"_token": csrf_token,
			"ajax": true,
			"cargo_em_comissao_codigo":cargo_em_comissao,
			"vinculo": vinculo,
			"cargo_codigo": cargo,
			"situacao_funcional":situacao_funcional,
			"data_inicio_cargo": data_inicio_cargo,
			"data_fim_cargo": data_fim_cargo,
			"codigo_vencimento_id":codigo_vencimento_id,
			"tipo_jornada_id":tipo_jornada_id,
			"horario_contato_ue_inicio":horario_contato_ue_inicio,
			"horario_contato_ue_fim":horario_contato_ue_fim,
			'unidade_codigo':unidade_codigo,
			'unidade_descricao':unidade_descricao,
			'dre_codigo':dre_codigo,
			'dre_descricao':dre_descricao,
			'ce_codigo':ce_codigo,
			'ce_descricao':ce_descricao,
			'representante':representante,
			'tipo_representacao_funcional_id':tipo_representacao_funcional_id,
			'representacao_funcional_inicio':representacao_funcional_inicio,
			'representacao_funcional_fim':representacao_funcional_fim,
			'old_representante':old_representante,
			'old_tipo_representacao_funcional_id':old_tipo_representacao_funcional_id,
			'old_representacao_funcional_inicio':old_representacao_funcional_inicio,
			'representacao_funcional_fim':representacao_funcional_fim,
		}
		return data;
	}
	return false;
}

function populaCampo(result,action) {
	if(result == 1){
		html_info_funcional = '';		
		html_info_funcional = ' data_vinculo="'+vinculo+'"';
		html_info_funcional += ' cargo_em_comissao_codigo="'+cargo_em_comissao_codigo+'"';
		if((horario_contato_ue_inicio != '' ) && (horario_contato_ue_inicio != null )) {
			html_info_funcional += ' horario_contato_ue_inicio="'+horario_contato_ue_inicio.substring(0, 5)+'"';
		}
		if((horario_contato_ue_fim != '' ) && (horario_contato_ue_fim != null )) {
			html_info_funcional += ' horario_contato_ue_fim="'+horario_contato_ue_fim.substring(0, 5)+'" ';
		}
		html_info_funcional += ' unidade_codigo="'+unidade_codigo+'"';
		html_info_funcional += ' unidade_descricao="'+unidade_descricao+'"';
		html_info_funcional += ' dre_codigo="'+dre_codigo+'"';
		html_info_funcional += ' dre_descricao="'+dre_descricao+'"';
		html_info_funcional += ' ce_codigo="'+ce_codigo+'"';
		if(action =='insere'){
			$('#cargo_codigo').append('<option '+html_info_funcional+' value="' + cargo + '" selected>'+ cargo_descricao +'</option>');
			$('#cargo_codigo').change()
			toastr.success('Informações funcionais inseridas com sucesso', 'Sucesso')
		}
		if(action =='edita'){
			$('#cargo_codigo option:selected').remove();
			$('#cargo_codigo').change()
			$('#cargo_codigo').append('<option id="" '+html_info_funcional+' value="' + cargo + '" selected>'+ cargo_descricao +'</option>')
			$('#cargo_codigo').change()
			$('#cargo_codigo option:selected').attr('id',id_selecionado);
			toastr.success('Informações funcionais editadas com sucesso', 'Sucesso')
			$('#cargo_codigo').change()
		}
		$('#modal-form-item-informacao-funcional').modal('hide');
	}else{
		toastr.error('As informações funcionais Não foram editadas', 'Atenção')
	}
}

$(document).on('change', '#addCargo_codigo', function (e) {
	$('#select2-addCargo_codigo-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#situacao-funcional', function (e) {
	$('#select2-situacao-funcional-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#tipo_jornada_id', function (e) {
	$('#select2-tipo_jornada_id-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#codigo_vencimento_id', function (e) {
	$('#select2-codigo_vencimento_id-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#addLotacao', function (e) {
	$('#select2-addLotacao-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#addDre', function (e) {
	$('#select2-addDre-container').parent().removeClass('is-invalid-modal');
})

$(document).on('change', '#vinculo', function (e) {
	$('#vinculo').removeClass('is-invalid-modal');
})

function limpaCampos() {
	$('#addCargo_codigo option:selected').prop("selected", false).change();
	$('#situacao-funcional option:selected').prop("selected", false).change();	
	$('#cargo_codigo option:selected').prop("selected", false).change();
	$('#addDre option:selected').prop("selected", false).change();
	$('#tipo_jornada_id option:selected').prop("selected", false).change();
	$('#codigo_vencimento_id option:selected').prop("selected", false).change();
	$('#addLotacao option:selected').prop("selected", false).change();
	$('#vinculo').val("");
	$('#editar_horario_contato_ue_inicio').val("");
	$('#editar_horario_contato_ue_fim').val("");
	$('#data_inicio_cargo').val("");
	$('#data_fim_cargo').val("");
}	
$(document).ready(function () {
	$('#addDre').select2({
		containerCssClass : "form-control",
		width: '100%',
		theme: "bootstrap4",
		matcher: function(params, data) {
			return matchStart(params, data);
		}
	});
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'pt-BR',
	});	
})

$(document).on('input', '#vinculo', function(event) {
	erro = 0;
	vinculo = parseInt($("#vinculo").val())
	$("#vinculo").removeClass('border-success')
	$("#vinculo").removeClass('border-danger')
	cliente_id = $('#cliente_id').val();
	checaVinculos = checaVinculos.replace("cliente_id", cliente_id);
	$.ajax({
		type: "post",
		data: {cliente_id: cliente_id},
		url: checaVinculos,
		success: function(result) {
			$.each( result, function( key, value ) {
				if(value.vinculo == vinculo){
					erro = 1;
				}
			});
			if(erro == 1){
				$("#vinculo").addClass('border-danger')
				$("#vinculo").val('')
				$('.btn-gravar_informacoes_funcionais').attr('disabled', 'disabled');
				toastr.warning('Vinculo já Utilizado por favor clique em  editar .', 'Atenção')
			}else{
				$('.btn-gravar_informacoes_funcionais').removeAttr("disabled");
				$("#vinculo").addClass('border-success')
			}
		}
	});	
});