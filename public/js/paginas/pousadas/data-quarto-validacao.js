function valida_campos_vazios () {
	erros = 0;
	msg = 'Não foi possivel executar ação Verifique o(s) campo(s) ';
	data_liberacao_portal = $('input[name="data_liberacao_portal"]').val();
	data_periodo = $('input[name="data_periodo"]').val();
	quartos = $('#quartos').val();
	if(quartos.length == 0){
		$('.bootstrap-multiselect').addClass('border-danger')
		erros = 1
		msg +='<br> <b>Quartos </b>'; 
	}
	if(data_liberacao_portal == ''){
		$('input[name="data_liberacao_portal"]').addClass('border-danger')
		erros = 1
		msg +='<br> <b>Data de Liberação </b>'; 
	}
	if(data_periodo == ''){
		$('input[name="data_periodo"]').addClass('border-danger')
		erros = 1
		msg +=' <br> <b>Data de Período </b>'; 
	}
	if(erros != 0){
		toastr.clear;
		toastr.error(msg +' e tente novamente', 'Atenção');
		return false;
	}
	return true;
}

function valida_dados_conflitantes() {
	erros = 0;
	var ajaxObj = isTrue();	
	const obj = JSON.parse(ajaxObj);
	if(obj.status == false){
		toastr.clear;
		toastr.error(obj.msg, 'Atenção');
	}
	return obj.status;
}

$.extend({
	xResponse: function(url, data) {
		var theResponse = null;
		$.ajax({
			url: url,
			type: 'POST',
			data: data,
			dataType: "html",
			async: false,
			success: function(respText) {
				theResponse = respText;
			}
		});
		return theResponse;
	}
});

function isTrue() {
	pousada_id = $('#pousadas').val();
	pousada_text = $('#pousadas option:selected').text();
	data_liberacao_portal = $('input[name="data_liberacao_portal"]').val();
	data_periodo = $('input[name="data_periodo"]').val();
	data_liberacao = data_liberacao_portal.split(" - ");
	data_periodo = data_periodo.split(" - ");
	quartosValidar = $('#quartos').val();

console.log(quartos)
	/*const quartosArray = [];
		$.each(quartos, function( index, value ) {
			var optionText = $("#quartos option[value="+value+"]").attr('data-nome');
			quartosArray.push({"quarto_id": value, "quarto_text": optionText});
			quartos_text += ', ' + optionText;
			quartos_id += ',' + value;
		});
		quartos_text = quartos_text.replace(', ','');
		quartos_id = quartos_id.replace(',','');
		quartos = JSON.stringify(quartosArray)*/

console.log(quartos)

	dataaaa = 	{"_token": $('meta[name="csrf-token"]').attr('content'),"pousada_id":pousada_id,"data_liberacao_portal_inicial":data_liberacao[0],"data_liberacao_portal_final":data_liberacao[1],"data_inicial":data_periodo[0],"data_final":data_periodo[1],"quartos":quartosValidar}
	var xData = $.xResponse(routeVerificarDados, dataaaa);
	return xData
}