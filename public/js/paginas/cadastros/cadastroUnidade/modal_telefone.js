$(document).ready(function(){
	$(document).on('click', '.btn-telefone-editar', function(event) {
		id = $(this).attr('role');
		$("#telefones_ddd_edit_"+id).get(0).type = 'text';
		$("#telefones_telefone_edit_"+id).get(0).type = 'text';
		$("#telefones_ramal_edit_"+id).get(0).type = 'text';
		$(".input-mask-trigger").inputmask();
		$("#telefones_ddd_label_"+id).html('');
		$("#telefones_telefone_label_"+id).html('');
		$("#telefones_ramal_label_"+id).html('');
		$("#btn-telefone-update_"+id).removeClass('d-none').hide()
		$("#btn-telefone-editar_"+id).fadeOut(500, function(){
			$("#btn-telefone-update_"+id).fadeIn(500);
		})
	})

	$(document).on('click', '.btn-telefone-update', function(event) {
		id = $(this).attr('role');
		$("#telefones_ddd_edit_"+id).get(0).type = 'hidden';
		$("#telefones_telefone_edit_"+id).get(0).type = 'hidden';
		$("#telefones_ramal_edit_"+id).get(0).type = 'hidden';
		$("#telefones_ddd_label_"+id).html($("#telefones_ddd_edit_"+id).val());
		$("#telefones_telefone_label_"+id).html($("#telefones_telefone_edit_"+id).val());
		$("#telefones_ramal_label_"+id).html($("#telefones_ramal_edit_"+id).val());
		$("#btn-telefone-update_"+id).fadeOut(500, function(){
			$("#btn-telefone-editar_"+id).fadeIn(500);
		})
	})

	$(document).on('click', '.btn-telefone-delete', function(event) {
		id = $(this).attr('role');
		reference = id.substring(0,6)
		if(reference == '000000'){
			var table = $('#table-telefones').DataTable();
			table.row( $(this).parents('tr') ).remove().draw();
		}else{
			if(id > 0){
				Swal.fire({
					title: "ATENÇÃO",
					text: "Deseja remover esse registro de telefone?",
					icon: "question",
					iconColor: "#ff6f6f",
					showCancelButton: true,
					confirmButtonText: 'SIM',
					cancelButtonText: 'CANCELAR',
					cancelButtonColor: '#bbb',
					focusCancel: true
				}).then(function(actions) {
					if (actions.isConfirmed == true) {
						$('.remove_linha_telefone_'+id).fadeOut(500)
						$.ajax({
							method: 'POST',
							url: urlRemoverTelefone,
							data: {_token: csrf_token,id: id }
						})
						.done(function(response) {
							var msg = response.msg || 'Solicitação concluída';
							toastr.clear();
							toastr.success(msg, 'SUCESSO');
						});
					}
				})
			}
		}
	})			

	$(document).on('click', '.btn-add-telefone', function(event) {
		ddd = $('#ddd').val();
		telefone = $('#telefone').val();
		ramal = $('#ramal').val();

		if(verificaTelefoneExite(telefone) == true) {
			var msg = 'Telefone já Informado';
			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
		}else{
			$('#table-telefones .dataTables_empty').parent().remove();
			counter_telefones = $('#table-telefones tbody tr').length;
			$('#ddd').val('');
			$('#telefone').val('');
			$('#ramal').val('');
			var t = $('#table-telefones').DataTable();
			table_ddd = '<input name="telefones[telefone_id][]" type="hidden" value="null"> <input class="form-control input-mask-trigger" data-inputmask="\'mask\': \'99\'" id="telefones_ddd_edit_'+counter_telefones+'" name="telefones[ddd][]" type="hidden" value="'+ddd+'"><span id="telefones_ddd_label_'+counter_telefones+'">'+ddd+'</span>';				
			table_telefone ='<input class="form-control input-mask-trigger" data-inputmask="\'mask\': \'9999-9999\'" id="telefones_telefone_edit_'+counter_telefones+'" name="telefones[telefone][]" type="hidden" value="'+telefone+'"><span id="telefones_telefone_label_'+counter_telefones+'">'+telefone+'</span>';
			table_ramal ='<input class="form-control" id="telefones_ramal_edit_'+counter_telefones+'" name="telefones[ramal][]" type="hidden" value="'+ramal+'"><span id="telefones_ramal_label_'+counter_telefones+'">'+ramal+'</span>';				
			actions ='<button type="button" id="btn-telefone-editar_'+counter_telefones+'" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-telefone-editar" title="Editar" role="'+counter_telefones+'">';
			actions +='<i class="pe-7s-note btn-icon-wrapper text-primary font-size-xlg"></i>';
			actions +='</button>';
			actions +='<button type="button" id="btn-telefone-update_'+counter_telefones+'" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-telefone-update d-none" title="Salvar" role="'+counter_telefones+'">';
			actions +='<i class="pe-7s-refresh-2 btn-icon-wrapper text-primary font-size-xlg"></i>';
			actions +='</button>';
			actions +='<button type="button" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-telefone-delete" title="Remover" role="000000'+counter_telefones+'">';
			actions +='<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>';
			actions +='</button>';
			t.row.add( [table_ddd, table_telefone, table_ramal, actions] ).draw( false );
			counter_telefones++;
			$('#modal-form-item-telefone').modal('hide')
		}
	})

	function verificaTelefoneExite(telefone) 
	{
		retornoVerificaTelefoneExite = false;
		$('#table-telefones .dataTables_empty').parent().remove();
		counter_telefones = $('#table-telefones tbody tr').length;
		for (let i = 0; i <= counter_telefones; i++) {
			dddTabela =  $('#telefones_ddd_edit_'+i).val()
			telefoneTabela =  $('#telefones_telefone_edit_'+i).val();
			if(typeof telefoneTabela != "undefined"){			
				telefoneTabela = telefoneTabela.replace(/-/, '');
				telefoneDigitado = $('#telefone').val()
				ramalTabela =  $('#telefones_ramal_edit_'+i).val()
				telefoneDigitado = telefoneDigitado.replace(/-/, '');
				if($('#ddd').val() == dddTabela && telefoneDigitado == telefoneTabela && $('#ramal').val() == ramalTabela ) {
					return true;
				}
			}
		}
		return false;
	}
})