$(document).ready(function () {

	$(".select2").select2({
		theme: "bootstrap4",
		placeholder: "Selecione uma Pessoa",
	});

	$('.msg_history').animate({
		scrollTop: $('.msg_history')[0].scrollHeight
	}, 1000);
	setTimeout(function () {
		var message = $(".inbox_chat").find("[data-thread='" + thread + "']");
		message.parent('a').removeClass('unread');
		message.find('span.badge').remove();
	}, 500);
	$("#myInput").on("keyup", function () {
		var value = $(this).val().toLowerCase();
		$(".chat_list").parent('a').filter(function () {
			$(this).toggle($(this).find('h5,p').text().toLowerCase().trim().indexOf(value) > -1)
		});
	});
});

$('input[type=radio][name=tipo_envio]').change(function () {
	if (this.value == 'individual') {
		$('#individual').removeClass('d-none')
		$('#grupos').addClass('d-none')
	} else if (this.value == 'grupos') {
		$('#individual').addClass('d-none')
		$('#grupos').removeClass('d-none')
	} else if (this.value == 'todos') {
		$('#individual').addClass('d-none')
		$('#grupos').addClass('d-none')
	}
});

$(".btn-show-users").on("click", function () {
	$(".show-users").toggleClass('d-none');
})

$(".msg_send_btn").on("click", function () {

	$('.incoming_msg').removeClass('bg-danger')
	loop = 0;
	erros = 0;
	thread_id = '';
	message = $('#message').val();
	if (message == '') {
		toastr.error('A mensagem não pode estar vazia', 'Atenção');
		return;
	}
	recipients = [];
	action = $(this).attr('action');
	id_form = $(this).attr('id_form');
	if (id_form == 'form_2') {
		recipients = getRecipientes()
	} else if (id_form == 'form_1') {
		thread_id = $('#thread_id').val();
		if (thread_id == '') {
			erros = 1;
		}
	}
	if (!erros) {
		ajaxMensagens(message, id_form, thread_id, action, recipients)

	} else {
		toastr.error('Verifique seus dados', 'Atenção');
	}
});

function getRecipientes() {
	nome_recipiente = ''
	recipients = []
	$("#recipients :selected").each(function () {
		nome_recipiente = $(this).text();
		val = $(this).val();
		recipients.push(val);
	});

	return recipients;
}

function ajaxMensagens(message, id_form, thread_id, action, recipients) {
	tipo_envio = $('input[name=tipo_envio]:checked').val()
	$.ajax({
		method: "POST",
		url: action,
		data: {
			_token: $('meta[name="csrf-token"]').attr('content'),
			'thread_id': thread_id,
			'message': message,
			'recipients': recipients,
			'role_id': $('#grupos_select').val(),
			'tipo_envio': tipo_envio
		},
		datatype: "html",
		success: function (data_thread_id) {
			if (!data_thread_id) {
				return toastr.error('Erro ao inserir sua mensagem', 'ATENÇÃO')
			}
			if (tipo_envio == 'grupos') {
				nome_recipiente = $('#grupos_select :selected').text()
			}
			if (tipo_envio == 'todos') {
				nome_recipiente = 'Para Todos'
			}
			adicionaHTML(id_form, message, thread_id, data_thread_id)
		},
		error: function () {
			toastr.error('Erro desconhecido ao adcionar mensagem', 'ATENÇÃO')
		}
	})
}

function adicionaHTML(id_form, message, thread_id, data_thread_id) {
	if (id_form == 'form_1') {
		var_messagem = '<div class="outgoing_msg">';
		var_messagem += '<div class="sent_msg">';
		var_messagem += '<p>' + message + '</p>';
		var data = new Date();
		var mes = ("0" + (data.getMonth() + 1)).slice(-2);
		var dia = ("0" + data.getDate()).slice(-2);
		var ano = data.getFullYear();
		var hora = ("0" + data.getHours()).slice(-2);
		var min = ("0" + data.getMinutes()).slice(-2);
		var_messagem += '<span class="time_date text-right"> ' + hora + ':' + min + ' | ' + dia + '/' + mes + '/' + ano;
		var_messagem += '</span>'
		var_messagem += '</div>';
		var_messagem += '</div>';
		$('#recebe_' + thread_id).append(var_messagem);
		$('#message').val('');
		$('.msg_history').animate({
			scrollTop: $('.msg_history')[0].scrollHeight
		}, 1000);
	}
	if (id_form == 'form_2') {
		var_messagem = '<a class="" href="' + route + '?thread=' + data_thread_id + '">';
		var_messagem += '<div data-thread="' + data_thread_id + '" class="chat_list">';
		var_messagem += '<div class="chat_people">';
		var_messagem += '<div class="chat_ib">';
		var_messagem += '<h5>' + nome_recipiente;
		var_messagem += '<span class="chat_date">Agora</span>';
		var_messagem += '</h5> <p>' + message + '</p>';
		var_messagem += '</div>';
		var_messagem += '</div>';
		var_messagem += '</div>';
		$('#message').val('');
		$('#recipients').val('').change();
		$('.inbox_chat').append(var_messagem);
		$('.inbox_chat').animate({
			scrollTop: $('.inbox_chat')[0].scrollHeight
		}, 1000);
		window.location.href = window.location+'?thread='+data_thread_id
	}
}