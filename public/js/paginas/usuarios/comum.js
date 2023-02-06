$(document).ready(function() {
	$('.btn-novo-fake').click(function(){
		$('.btn-novo').click()
	});

	$('.btn-novo').click(function(){
		$('.inputText').val('')
	});

	$('.set-select-component').hide();
	$('.set-select-component').removeClass('d-none')

	setTimeout(function(){ 
		$('.set-select-component').select2({
			placeholder: "Escolha uma opção",
			containerCssClass : "form-control",
			width: '100%',
			theme: "bootstrap4",
		});
		$('.btn-novo').delay(200).fadeIn(500);		
	}, 500);
	
	$(document).on('click', '.btn-insert-select', function () {
		typeSet		=	$(this).attr('typeSet');
		role 		=	$(this).attr('role');
		text 		=	$('.'+role).val();
		routeAjax 	=	$(this).attr('routeAjax');
		if(text.length > 0){
			novo(text,routeAjax,role);
			if(typeSet == 'modal'){
				$('#modalCriar').modal("hide");
			}else{
				$('.select-setores').val("");
				$('#collapseSelect').collapse("hide");
			}
		}else{
			toastr.warning('Texto muito curto ou inexistente!', 'Atenção!')
		}
	});

	function sortSelectOptions(selector) {
		var options =  $(selector + ' option');
		var novos_items = [];
		options.each(function(i, o) {
			novos_items.push({'value': o.value,'name':o.text});
		});
		novos_items.sort(function(a, b) {
				var nameA = a.name.toUpperCase(); // ignore upper and lowercase
				var nameB = b.name.toUpperCase(); // ignore upper and lowercase
				if (nameA < nameB) {
					return -1;
				}
				if (nameA > nameB) {
					return 1;
				}
				return 0;
			});
		return novos_items;
	}

	function novo(text,routeAjax,role) {		
		$.ajax({
			type: "POST",
			data: {"_token": csrf_token ,"text": text 
		},
		url: routeAjax,
		success: function(result) {
			if(result > 0){
				select = $('#'+role);
				select.append($('<option>', { value: result, text: text }));
				novos_items = sortSelectOptions('#'+role);
				$('#'+role).html('');
				$.each( novos_items, function( key, value ) {
					if(value.name != 'Sem resultados'){
						$('#'+role).append($('<option>', { value: value.value, text: value.name }));
					}
				});
				$('#select-setores').multiSelect('refresh');
			}
		}
	});
	}

	$('#select-roles').change(function(){
		var text = "ACESSO_API";
		selecteds = $('#select-roles').find(":selected").text();
		if(selecteds.toLowerCase().indexOf(text.toLowerCase())  > 0){
			chamaAtencao() 
		}
	});

	function chamaAtencao() {
		Swal.fire({
			title: "ATENÇÃO",
			text: "A função ACESSO_API é especifica para acesso aos dados para telefonia.\n Se você incluir este acesso a seu usuário, não poderá mais efetuar login no sistema.",
			icon: "warning",
			iconColor: "#ff6f6f",
			showCancelButton: true,
			confirmButtonText: 'SIM',
			cancelButtonText: 'NÃO',
			cancelButtonColor: '#bbb',
			focusCancel: true
		}).then(function(actions) {
			if (actions.isConfirmed != true) {
				setApenasAcessoApi();
				return false;
			}
			setSelecionadosMenosAcessoApi()
		})
	}

	function setSelecionadosMenosAcessoApi() {
		select = $('#select-setores');
		var valor = null;
		var texto = null;
		$('#select-roles').find('option:selected').each(function( key, value) {
			valor = $(this).val();
			texto = $(this).text();		
			if(texto.trim() == 'ACESSO_API'){
				$("#select-roles option[value='"+valor+"']").remove();
				$('#select-roles').append($('<option>', { value: valor, text: 'ACESSO_API' }));
				$('#select-roles').multiSelect('refresh');
			}
		});
	}

	function setApenasAcessoApi() {
		zeraControles('select-roles')
	}

	function zeraControles(objeto) {
		var teee = [];
		var valor = null;
		var texto = null;
		$('#'+objeto).find('option').each(function( key, value) {
			valor = $(this).val();
			texto = $(this).text();
			if(valor != ""){
				teee.push({'value' : valor,'name' : texto});
			}
		});
		$('#'+objeto).html('');
		$.each( teee, function( key, value ) {
			$('#'+objeto).append($('<option>', { value: value.value, text: value.name }));
			if(objeto == 'select-roles'){
				if(value.name.trim() == 'ACESSO_API'){
					$('#select-roles').val(value.value).prop('selected', true);
				}
			}
		});
		$('#'+objeto).multiSelect('refresh');
	}
}); 

function validacao_part1(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x){
	if(horaFinalx > horaInicialx){
		horario.push(horaInicial);
		horario.push(horaFinal);
		horario.push(horaInicial2);
		horario.push(horaFinal2);
	}else {
		error = 1;
	}

	return error;
}

function validacao_part2(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x){
	if(horaFinal2x > horaInicial2x){
		horario.push(horaInicial);
		horario.push(horaFinal);
		horario.push(horaInicial2);
		horario.push(horaFinal2);
	}else {
		error = 2;
	}
	return error;
}


function validacao_completa(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x){
	horario.push(horaInicial);
	if (horaFinal != undefined) {
		if((horaInicialx != '') && (horaFinalx != '')){
			if(horaFinalx > horaInicialx){
				horario.push(horaFinal);
			}else {
				error = 3;
			}
		}else if((horaInicialx != '') || (horaFinalx == '')){
			horario.push(horaFinal);
		}
	}
	if (horaInicial2 != undefined) {					
		if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x != '')){
			if(horaInicial2x > horaFinalx){
				horario.push(horaInicial2);
			}else {
				error = 4;
			}
		}else if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x == '')){
			horario.push(horaInicial2);
		}
	}
	if (horaFinal2 != undefined) {
		if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x != '') && (horaFinal2x != '')){
			if(horaFinal2x > horaInicial2x){
				horario.push(horaFinal2);
			}else {
				error = 5;
			}
		}else if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x != '') && (horaFinal2x == '')){
			horario.push(horaFinal2);
		}
	}
	return error;
}

function percorrerTabela() {
	horario = [];
	error = 0;
	isChecked = $('#checkbox').prop("checked");

	if (isChecked) {
		$('#isChecked').val('checked')
		tabela = $('.horariosUser').find('tr td').each(function() {
			id = $(this).attr('identificador');
			dia = $(this).attr('dia');
			if (dia != undefined) {
				horario.push(dia);
			}

			horaInicial = $('#deSelect_' + id + ' option:selected').attr('horaInicial');
			horaFinal = $('#ateSelect_' + id + ' option:selected').attr('horaFinal');
			horaInicial2 = $('#deSelect2_' + id + ' option:selected').attr('horaInicial2');
			horaFinal2 = $('#ateSelect2_' + id + ' option:selected').attr('horaFinal2');

			if (horaInicial != undefined) {
				horaInicialx = 	horaInicial.replace("horaI_", "")
				if(horaInicialx != ''){
					horaInicialx = parseInt(horaInicialx)
				}
			}
			if (horaFinal != undefined) {
				horaFinalx = 	horaFinal.replace("horaF_", "")
				if(horaFinalx != ''){
					horaFinalx = parseInt(horaFinalx)
				}
			}
			if (horaInicial2 != undefined) {
				horaInicial2x = horaInicial2.replace("horaI2_", "")
				if(horaInicial2x != ''){
					horaInicial2x = parseInt(horaInicial2x)
				}
			}
			if (horaFinal2 != undefined) {
				horaFinal2x = horaFinal2.replace("horaF2_", "")
				if(horaFinal2x != ''){
					horaFinal2x = parseInt(horaFinal2x)
				}
			}
			if (dia != undefined) {
				if((horaInicialx == '') && (horaFinalx == '') && (horaInicial2x == '') && (horaFinal2x == '')){
					horario.push(horaInicial);
					horario.push(horaFinal);
					horario.push(horaInicial2);
					horario.push(horaFinal2);
				}

				if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x == '') && (horaFinal2x == '')){
					error =	validacao_part1(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x)
				}

				if((horaInicialx == '') && (horaFinalx == '') && (horaInicial2x != '') && (horaFinal2x != '')){
					error =	validacao_part2(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x)			
				}

				if((horaInicialx != '') && (horaFinalx != '') && (horaInicial2x != '') && (horaFinal2x != '')){
					error =	validacao_completa(horaInicial,horaFinal,horaInicial2,horaFinal2,horaInicialx,horaFinalx,horaInicial2x,horaFinal2x)
				}
			}
		})
		$('#arrayHora').val(horario);
	} else if (!isChecked) {
		horario = [];
		$('#isChecked').val('unChecked')
		$('#arrayHora').val(horario);
	}
	if(error > 0){
		toastr.error('Erro na tabela de horários' , 'ATENÇÃO')
		return false;
	}
	return true;
};

$(document).on("input","#password",function(evt) {
	validaCamposPassword()
});

$(document).on("input","#password-confirm",function(evt) {
	validaCamposPassword()
});

function validaCamposPassword(){

	password = $("#password").val()
	passwordConfirm = $("#password-confirm").val()


	lengthPassword = password.length
	lengthPasswordConfirm = passwordConfirm.length
	console.log(lengthPasswordConfirm)

	if(lengthPassword >= 6){
		$('#msg_senha').html('*')
		$('#password').removeClass('border-danger');
		$('#password').addClass('border-success');
	}
	else{
		$('#msg_senha').html('* A Senha deve ter 6 ou mais digitos.')
		$('#password').removeClass('border-success');
		$('#password').addClass('border-danger');
	}


	if(lengthPasswordConfirm > 0){
		if(lengthPasswordConfirm >= 6){
			$('#msg_confirma_senha').html('*')
			$('#password-confirm').removeClass('border-danger');
			$('#password-confirm').addClass('border-success');
			if(passwordConfirm != password){
				$('#msg_senha').html('* A Senha deve igual a confirmação de senha.')
				$('#msg_confirma_senha').html('* A Senha deve igual a confirmação de senha.')	
				$('#password').removeClass('border-success');
				$('#password').addClass('border-danger');
				$('#password-confirm').removeClass('border-success');
				$('#password-confirm').addClass('border-danger');
			}
		}
		else{
			$('#msg_confirma_senha').html('* A Senha deve ter 6 ou mais digitos.')
			$('#password-confirm').removeClass('border-success');
			$('#password-confirm').addClass('border-danger');
		}
	}

}