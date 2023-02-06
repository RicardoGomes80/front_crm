$(document).ready(function() {
	$('#add-telefone').on('click',function(e){
		$('#cliente-ramal').val('');
		$('#cliente-telefone').val('');
		$('#cliente-ddd').val('');
		$('#cliente-horario-f').val('');
		$('#cliente-horario-i').val('');
		if($("#cliente-tipo-telefone option:selected").val() != ''){
			$('#cliente-tipo-telefone').val('').change();
		}
	});

	$('#btn-modal-form-item-enderecos').on('click',function(e){

		$('#tipo').val('').change();			
		$('#cep').val('');
		$('#endereco').val('');
		$('#numero').val('');
		$('#complemento').val('');
		$('#bairro').val('');
		$('#cidade').val('');
		$('#estado').val('');
		$('#pais').val('');
		
		$('#receber_correspondencia').attr('checked',false);
		$('#receber_jornal').attr('checked',false);
		$('#receber_doc').attr('checked',false);
		$('#receber_correspondencia').prop("checked", false);
		$('#receber_jornal').prop("checked", false);
		$('#receber_doc').prop("checked", false);

		$('#receber_correspondencia_gravar').attr('checked',false);
		$('#receber_jornal_gravar').attr('checked',false);
		$('#receber_doc_gravar').attr('checked',false);
		$('#receber_correspondencia_gravar').prop("checked", false);
		$('#receber_jornal_gravar').prop("checked", false);
		$('#receber_doc_gravar').prop("checked", false);
	});

	$('#btn-modal-form-item-dado-bancario').on('click',function(e){
		$('#dbc-agencia').val('');
		$('#dbc-digito-agencia').val('');
		$('#conta').val('');
		$('#dbc-digito-conta').val('');
		$('#dbc-tipo').val('').change();
		$('#dbc-banco-id').val('').change();
	});

	$('#btn-modal-form-item-dependente').on('click',function(e){
		$('#modal-form-item-dependente').modal('show');
		$('#dep-tipo-dependente-id').val('').change();
		$('#dep-nome').val('');
		$('#dep-email').val('');
		$('#dep-data-nascimento').val('');
		$('#dep-documento').val('');
		$('#dep-celular').val('');
		$('#dep-telefone').val('');
		$('#modal-form-item-dependente').modal('show')
	});

	$('#btn-modal-form-item-informacao-funcional').on('click',function(e){
		$('#jornada').val('').change();
		$('#padrao').val('').change();
		$('#situacao-aprofem').val('').change();
		$('#situacao-funcional').val('').change();
		$('#cargo').val('').change();
		$('#vinculo').val('').change();
		$('#dre').val('').change();
		$('#lotacao').val('').change();
		$('#cargo-comissao').val('').change();			
		$('#horario-contato-uei').val('');
		$('#horario-contato-uef').val('');
		$('#horario-contato-res-i').val('');
		$('#horario-contato-residencia-f').val('');
	});

	$('#btn-modal-form-item-email').on('click',function(e){
		$('#email').val('');
	});
});