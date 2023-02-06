$(document).ready(function() {
	$("#rf,#identificador,#search_identificador,.identificador").removeClass('border-danger');
	$("#rf,#identificador,#search_identificador,.identificador").removeClass('border-success');
	$("#rf,#identificador,#search_identificador,.identificador").removeClass('bg-danger-success')
	$("#rf,#identificador,#search_identificador,.identificador").removeClass('text-danger')
	$("#rf,#identificador,#search_identificador,.identificador").addClass('input-mask-trigger')
	$("#rf,#identificador,#search_identificador,.identificador").attr('maxlength',15)
	$('#rg,.rg').inputmask("mask", { "mask": '99.999.999-*' });
	$('#rg,.rg').inputmask();	
	$('#cpf,.cpf').inputmask("mask", { "mask": '999.999.999-99' });
	$('#cpf,.cpf').inputmask();
	$('.celular_com_ddd').inputmask("mask", { "mask": '99-99999-9999' });
	$('.celular_com_ddd').inputmask();	
	$('.telefone_com_ddd').inputmask("mask", { "mask": '99-9999-9999' });
	$('.telefone_com_ddd').inputmask();	

});  

var pathname = window.location.pathname;
origin = window.location.origin

if(pathname.indexOf("public") > 2) {
	origin = window.location.origin
	const myArray = pathname.split("public");
	var	urlLangDatatables = origin+myArray[0]+"/public/vendors/datatables/i18n/Brazilian.json";	
}else{
	var	urlLangDatatables = origin+"/vendors/datatables/i18n/Brazilian.json";
}

$(document).on('input', '#rf,#identificador,#search_identificador,.identificador', function(event) {
	identificador = ''
	identificador = this.value.toUpperCase().replace(/[^0-9\-.,c_C]/g, '');
	checkIdentificador = identificador.charAt(0)
	if(checkIdentificador == 'C'){
		testeIdentificador = identificador.substring(1).replace("C","");
		identificador = 'C'+testeIdentificador
	}	
	$('#identificador').val(identificador)
	validaCampoIdeintificador(checkIdentificador,identificador, $(this)) 
})

$(document).keypress(function(e) {
	if(e.which == 13) {
		identificador = $('#identificador,#search_identificador,.identificador').val();
		
		if(identificador !='' && identificador != undefined){
			if($('#identificador,#search_identificador,.identificador').val().length >=1){
				$('.btn-procura-por-identificador').click();
			}
		}
	}
});

function contaIdentificador(input) {
	identificador = $(input).val();
	if(identificador !=''){
		lengthIdent = identificador.length 
		if(lengthIdent >= 1){
			$(input).addClass('border-success')
			$('.btn-procura-por-identificador').removeAttr('disabled');
			$('.btn-procura-por-identificador').removeClass('btn-danger')
			$('.btn-procura-por-identificador').addClass('btn-success')
		}else{
			$("#nome").val('')
			$("#email").val('')
			$("#data_filiacao").val('')
			$("#dre").val('')
			$("#unidade").val('')
			$("#situacao").val('')
			$("#cliente_id").val('')
			$('#horario_contato_ue_inicio').val('');
			$('#horario_contato_ue_fim').val('');
			// $('.btn-procura-por-identificador').attr('disabled', 'disabled');
			$(input).removeClass('border-success')
			$('.btn-procura-por-identificador').removeClass('btn-success')
			$('.btn-procura-por-identificador').addClass('btn-danger')
		}
	}
}

function validaCampoIdeintificador(checkIdentificador,identificador, input) 
{
	identificadorLenght = identificador.length;

	if(identificadorLenght < 2){
		$(".input-mask-trigger").inputmask();
		data_inputmask ="'mask\': \'***\'";
		$(input).attr('data-inputmask',data_inputmask);
	}
	if(checkIdentificador == 'C'){
		$(".input-mask-trigger").inputmask();
		data_inputmask ="'mask\': \'*999.999\'";
		$(input).attr('data-inputmask',data_inputmask);
	}else{
		if(identificadorLenght < 6){
			$(".input-mask-trigger").inputmask();
			data_inputmask ="'mask\': \'999.999-9\'";
			$(input).attr('data-inputmask',data_inputmask);
		}
		else if(identificadorLenght >= 6){
			$(".input-mask-trigger").inputmask();
			data_inputmask ="'mask\': \'999.999-9/99\'";
			$(input).attr('data-inputmask',data_inputmask);
		}
	}	
	if(identificadorLenght >= 1){
		$(input).removeClass('text-danger')
		$(input).removeClass('border-danger')
		$(input).addClass('border-success');
		$(input).addClass('bg-success');
		$(input).addClass('text-white')
		$('.btn-pesquisar').removeAttr('disabled')
		$('.btn-pesquisar').addClass('btn-success')
		$('.btn-pesquisar').removeClass('btn-danger')
	}
	else{
		$(input).removeClass('text-white')
		$(input).addClass('text-danger')
		$(input).addClass('border-danger')
		$(input).removeClass('border-success');
		$(input).removeClass('bg-success');
		// $('.btn-pesquisar').attr('disabled', 'disabled');
		// $('.btn-pesquisar').removeClass('btn-success')
		// $('.btn-pesquisar').removeClass('btn-primary')
		// $('.btn-pesquisar').addClass('btn-danger')
	}
}
$(document).on("input","#ddd,#telefone",function(event) {
	this.value = this.value.replace(/[^0-9\-.,]/g, '');
});
$(document).on("input",".numerosSemCaracteres",function(event) {
	this.value = this.value.replace(/[^0-9]/g,'');
});
$(document).on("input",".numerosComCaracteres",function(event) {
	this.value = this.value.replace(/[^0-9\-.,]/g, '');
});
function numerosSemCaracteres(string) {
	return string.replace(/[^0-9]/g,'');
}
function capitalize(string) {
	return string.trim().toLowerCase().replace(/\w\S*/g, (w) => (w.replace(/^\w/, (c) => c.toUpperCase())));
}
function valida_email(email) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email)) {		    
		toastr.error('Email inválido', 'ATENÇÃO')
		return false;
	}else{
		return true;
	}
}

function retira_acentos(str) 
{
	com_acento = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝŔÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿŕ";
	sem_acento = "AAAAAAACEEEEIIIIDNOOOOOOUUUUYRsBaaaaaaaceeeeiiiionoooooouuuuybyr";
	novastr="";
	for(i=0; i<str.length; i++) {
		troca=false;
		for (a=0; a<com_acento.length; a++) {
			if (str.substr(i,1)==com_acento.substr(a,1)) {
				novastr+=sem_acento.substr(a,1);
				troca=true;
				break;
			}
		}
		if (troca==false) {
			novastr+=str.substr(i,1);
		}
	}
	return novastr;
} 

$(document).on('click','.submit-form-delete',function(e){
	setarRota = $(this).attr('data-rota');
	btn = $(this)
	no_datatable = $(this).attr('data-no-datatables');
	id = $(this).attr('id');
	id_table = $(this).attr('id_table');
	callback = $(this).attr('data-callback');
	Swal.fire({
		title: "ATENÇÃO",
		text: "Deseja remover esse registro?",
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
		return deletaAjax(id, setarRota,no_datatable,id_table, btn,callback)
	});
})

function deletaAjax(id, setarRota,no_datatable,id_table, btn,callback) {
	if (id_table === undefined ){
		id_table = '';
	}
	if (callback === undefined ){
		callback = '';
	}
	$.ajax({
		url: setarRota,
		data: { "_token": _token,id: id},
		method: 'get',
	}).done(function (response) {
		if (response == '' || response === null || response == 'false' ||  response === undefined) {
			toastr.clear();
			toastr.error('Erro na solicitação', 'ATENÇÃO');
			return;
		}else{
			toastr.clear();
			toastr.success('Registro removido', 'SUCESSO');
			if (response.email_principal) {
				$('tr[data-tr-email="' + response.email_principal + '"]').find('.td-principal').text('SIM');
				$('tr[data-tr-email="' + response.email_principal + '"]').find('.btn-item-editar-emails').attr('data-principal',1);
			}
			if (no_datatable === undefined || no_datatable === null || no_datatable == 'false') {
				if(id_table == ''){
					if($('#table').hasClass('SimpleDataTable')){
						$('#table').DataTable().row().remove().draw()
						var	table = $('#table').DataTable(window.dtSimpleDefaultOptions);
					}else{
						var	table = $('#table').DataTable(window.dtDefaultOptions);
					}	
				}else{
					if($('#'+id_table).hasClass('SimpleDataTable')){
						var	table = $('#'+id_table).DataTable(window.dtSimpleDefaultOptions);
						table.row($("#"+id).parents('tr')).remove().draw();
					}else{
						var	table = $('#'+id_table).DataTable(window.dtDefaultOptions);
						table.row($("#"+id).parents('tr')).remove().draw();					
					}
				}
				toastr.clear();
				if(callback != ''){
					window[callback]();
				}
			}else{
				$("#"+id).parents('tr').remove();
				toastr.clear();
				if(callback != ''){
					window[callback]();
				}
				toastr.clear();
				toastr.success('Registro removido', 'SUCESSO');
			}
			if(btn) {
				return btn.closest("tr").remove();
			}
		}
	}).fail(function (response) {
		toastr.clear();
		toastr.error('Erro na solicitação', 'ATENÇÃO');
	});
}

function dateToDateBrJs(data) {
	data = data.split(" ");
	data = data[0].split("-");
	data = data[2]+'/'+data[1]+'/'+data[0]
	return data
}

$(document).on("click",".btn-close-modal",function(event) {
	event.preventDefault();
	modal_id =  $(this).attr('modal-id')
	window.parent.$("#"+modal_id).modal('hide');
});

// função para validar emails
function isValidEmailAddress(email)
{
	var re = /\S+@\S+\.\S+/;
	return re.test(email);
}

$(document).on("input", "input[type=number], .number", function(evt) {
	$(this).val(this.value.replace(/[^0-9]|\./, ''))
	if($(this).attr('maxlength') && $(this).attr('maxlength') < $(this).val().length ){
		$(this).val($(this).val().slice(0, -1))
	}
});