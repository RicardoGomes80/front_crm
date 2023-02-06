$(document).ready(function() {
	$(document).on('keypress',function(e) {
		if(e.which == 13) {
			if($(document).find(".ui-theme-settings").hasClass('settings-open')  ){
				if($(document).find(".btn-consulta-cep").attr('role') == 1 ){
					$(".btn-consulta-cep").click()
				}
			}
		}
	});

	$(".btn-consulta-cep").click(function() {
		var cep = $("#cep_tools").val().replace(/\D/g, '');
		$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
			if (!("erro" in dados)) {
				enderecoResult = dados.logradouro + ' - ' + dados.bairro + ' - ' + dados.complemento + ' - ' + dados.localidade + ' - ' + dados.uf;
				ResultadoTexto ='Resultado da busca de CEP';
				html = enderecoResult;
				$('#ResultadoTexto').html(ResultadoTexto);
				$('#recebeResultado').html(html);
				copiarFN();
			} 
			else {
				html = 'CEP não encontrado'
				$('#recebeResultado').html(html);
				toastr.error('Erro', 'Atenção. CEP não encontrado.')
			}
		});
	});

	$("#cep").blur(function() {
		cep = $("#cep").val().replace(/\D/g, '');
		old_endereco = $("#endereco").val();
		old_bairro = $("#bairro").val();
		old_complemento = $("#complemento").val();		
		old_cidade = $("#cidade").val();
		old_estado =  $("#estado").val();
		if (cep != "") {
			var validacep = /^[0-9]{8}$/;
			if(validacep.test(cep)) {
				$("#endereco").val("...");
				$("#bairro").val("...");
				$("#complemento").val("...");
				$("#cidade").val("...");
				$("#estado").val("...").change();
				$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
					if (!("erro" in dados)) {
						$("#endereco").val(dados.logradouro);
						$("#bairro").val(dados.bairro);
						$("#complemento").val(dados.complemento);
						$("#cidade").val(dados.localidade);
						$("#estado").val(dados.uf).change();
					} 
					else {
						$("#endereco").val('');
						$("#bairro").val('');
						$("#complemento").val('');
						$("#cidade").val('');
						$("#estado").val('').change();
						toastr.error('Erro', 'Atenção. CEP não encontrado.')
					}
				});
			} 
			else {
				$("#endereco").val('');
				$("#bairro").val('');
				$("#complemento").val('');
				$("#cidade").val('');
				$("#estado").val('').change();
				toastr.error('Erro', 'Atenção. Formato de CEP inválido.');
			}
		} 
		else {
			$("#endereco").val(old_endereco);
			$("#bairro").val(old_bairro);
			$("#complemento").val(old_complemento);
			$("#cidade").val(old_cidade);
			$("#estado").val(old_estado).change();
		}
	});
});