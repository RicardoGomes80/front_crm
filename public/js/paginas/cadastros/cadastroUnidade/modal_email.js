	$(document).ready(function(){
		$(document).on('click', '.btn-email-editar', function(event) {
			id = $(this).attr('role');
			$("#emails_email_edit_"+id).get(0).type = 'text';
			$("#emails_contato_edit_"+id).get(0).type = 'text';				
			$("#emails_email_label_"+id).html('');
			$("#emails_contato_label_"+id).html('');
			$("#btn-email-update_"+id).removeClass('d-none').hide()
			$("#btn-email-editar_"+id).fadeOut(500, function(){
				$("#btn-email-update_"+id).fadeIn(500);
			})
		})

		$(document).on('click', '.btn-email-update', function(event) {
			id = $(this).attr('role');
			email = $("#emails_email_edit_"+id).val();			
			if(validacaoEmail(email) == true ){
				$("#emails_email_edit_"+id).get(0).type = 'hidden';
				$("#emails_contato_edit_"+id).get(0).type = 'hidden';
				$("#emails_email_label_"+id).html($("#emails_email_edit_"+id).val());
				$("#emails_contato_label_"+id).html($("#emails_contato_edit_"+id).val());
				$("#btn-email-update_"+id).removeClass('d-none').hide()
				$("#btn-email-update_"+id).fadeOut(500, function(){
					$("#btn-email-editar_"+id).fadeIn(500);
				})
			}
		})

		$(document).on('click', '.btn-email-delete', function(event) {
			id = $(this).attr('role');
			reference = id.substring(0,6)
			if(reference == '000000'){
				var table = $('#table-emails').DataTable();
				table.row( $(this).parents('tr') ).remove().draw();
			}else{
				if(id > 0){
					Swal.fire({
						title: "ATENÇÃO",
						text: "Deseja remover esse registro de email?",
						icon: "question",
						iconColor: "#ff6f6f",
						showCancelButton: true,
						confirmButtonText: 'SIM',
						cancelButtonText: 'CANCELAR',
						cancelButtonColor: '#bbb',
						focusCancel: true
					}).then(function(actions) {
						if (actions.isConfirmed == true) {
							$('.remove_linha_email_'+id).fadeOut(500)
							$.ajax({
								method: 'POST',
								url: urlRemoverEmail,
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

		$(document).on('click', '.btn-add-email', function(event) {
			email = $('#email').val();
			if(validacaoEmail(email) == true ){
				if(verificaEmailExite(email) != true ){
					$('#email').val('');
					contato = $('#contato').val();
					$('#contato').val('');
					linhaEmail = '<input name="emails[email_id][]" type="hidden" value="null"><input class="form-control" id="emails_email_edit_'+counter_emails+'" name="emails[email][]" type="hidden" value="'+email+'"><span id="emails_email_label_'+counter_emails+'">'+email+'</span>';
					linhaContato = '<input class="form-control" id="emails_contato_edit_'+counter_emails+'" name="emails[contato][]" type="hidden" value="'+contato+'"><span id="emails_contato_label_'+counter_emails+'">'+contato+'</span>';
					var t = $('#table-emails').DataTable();
					actions ='<button type="button" id="btn-email-editar_'+counter_emails+'" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-email-editar" title="Editar" role="'+counter_emails+'">';
					actions +='<i class="pe-7s-note btn-icon-wrapper text-primary font-size-xlg"></i>';
					actions +='</button>';
					actions +='<button type="button" id="btn-email-update_'+counter_emails+'" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-email-update d-none" title="Salvar" role="'+counter_emails+'">';
					actions +='<i class="pe-7s-refresh-2 btn-icon-wrapper text-primary font-size-xlg"></i>';
					actions +='</button>';
					actions +='<button type="button" class="pl-0 pr-0 mr-2 btn-icon btn-icon-only  btn btn-link btn-sm btn-email-delete" title="Remover" role="000000'+counter_emails+'">';
					actions +='<i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i>';
					actions +='</button>';
					t.row.add( [linhaEmail,linhaContato,actions,] ).draw( false );
					counter_emails++;
					$('#modal-form-item-email').modal('hide');
				}else{
					toastr.clear();
					toastr.error('Email Já cadastrado', 'ATENÇÃO');				
					retornoVerificaEmail = false;
				}
			}
			else{
				toastr.clear();
				toastr.error('Email Inválido', 'ATENÇÃO');				
				retornoVerificaEmail = false;
			}
		})

		function validacaoEmail(email) 
		{
			var re = /\S+@\S+\.\S+/;
			return re.test(email);
		}

		function verificaEmailExite(email) 
		{
			retornoVerificaEmail = false;
			$('#recebeEmail > tr > td > input').each(function(index, tr) { 
				if(tr.value == email){
					retornoVerificaEmail = true;
				}
			});
			return retornoVerificaEmail;
		}
	})