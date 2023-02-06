title = $('title').text();
clearInterval(intervalos);	
iniciaIntervalos()

var intervalos = setInterval(iniciaIntervalos, 10000);
function iniciaIntervalos() {
	SistemaNotification(getNotificacoesCountUnreadDoSistemaRoute);
	Message_Notification(messageNotificationRoute, title);
	Notification(getNotificationRouteCountUnread);
}

$(function () {
	$('html').click(function (e) {
		$(".dropdown_inner").hide();
	});
});
isOpened = false

$(document).on('click', '.btn-notificarions', function (e) {
	if (!isOpened) {
		isOpened = true
		$(".dropdown_inner").show("fast");
		$(".notifications-box").html('');
		$(".notifications-box").html('Carregando');
		$(".notifications-sistema-box").html('');
		$(".notifications-sistema-box").html('Carregando');
		$(".notifications_exibindo b").html('p')
		getNotification()
	} else {
		isOpened = false
		$(".dropdown_inner").hide();
	}
});

function getNotification() {
	$(".notifications-box").html('');
	notifications = '';
	$.ajax({
		type: "POST",
		url: getNotificationRouteUnread,
		data: { _token: $('meta[name="csrf-token"]').attr('content'), 'limit': 10 },
		datatype: "html",
		success: function success(notifications) {
			$(".notifications_exibindo b").html(notifications.length)
			notificationsContents = '';
			$.each(notifications, function (key, value) {
				if (value.text.length > 40) {
					var texto = value.text.substr(0, 30) + '...';
				} else {
					texto = value.text;
				}
				dtH = value.data.split(" ");
				data = dtH[0].split("-");
				data = data[2] + '/' + data[1] + '/' + data[0] + ' ' + dtH[1];

				prioridade = 'success';

				if (value.prioridade == 'BAIXA') {
					prioridade = 'success'
				} else if (value.prioridade == 'MEDIA') {
					prioridade = 'warning'
				}
				else if (value.prioridade == 'ALTA') {
					prioridade = 'danger'
				}
				else if (value.prioridade == '') {
					prioridade = 'info'
				}

				notificationsContents += '<div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column class_anime pb-0">';
				notificationsContents += '  <div class="vertical-timeline-item dot-' + prioridade + ' vertical-timeline-element "> ';
				notificationsContents += '    <div>';
				notificationsContents += '      <span class="vertical-timeline-element-icon bounce-in"></span>';
				notificationsContents += '      <div class="vertical-timeline-element-content bounce-in">';
				notificationsContents += '      <a href="' + value.url + '" class="btn-notificacao-lida" id="' + value.id + '" <h4 class="timeline-title"> ' + texto + '</h4> as <span class="text-success">' + data + '</span>';
				notificationsContents += '      <span class="vertical-timeline-element-date"></span>';
				notificationsContents += '    </div>';
				notificationsContents += '  </div>';
				notificationsContents += '</div>';
			});
			$(".notifications-box").html(notificationsContents);
			getNotificationSistema()
		}
	})
}

function Notification(getNotificationRouteCountUnread) {
	$.ajax({
		type: "POST",
		url: getNotificationRouteCountUnread,
		data: { _token: $('meta[name="csrf-token"]').attr('content') },
		datatype: "html",
		success: function success(unreadNotificationsCounter) {
			unreadNotificationsCounter = parseInt(unreadNotificationsCounter) + parseInt($("#unreadNotificationsDoSistemaCounter").val());
			$(".notifications_n b").html(unreadNotificationsCounter)
			$(".unreadNotificationsCounter").fadeOut(400, function () {
				$(".unreadNotificationsCounter").html(unreadNotificationsCounter);
				$(".unreadNotificationsCounter").fadeIn(400)
			})
		}
	})
}

function SistemaNotification(getNotificacoesCountUnreadDoSistemaRoute) {
	$.ajax({
		type: "POST",
		url: getNotificacoesCountUnreadDoSistemaRoute,
		data: { _token: $('meta[name="csrf-token"]').attr('content') },
		datatype: "html",
		success: function success(unreadNotificationsDoSistemaCounter) {
			$("#unreadNotificationsDoSistemaCounter").val(unreadNotificationsDoSistemaCounter)
		}
	})
}

function getNotificationSistema() {
	$(".notifications-sistema-box").html('');
	$.ajax({
		type: "POST",
		url: getNotificacoesUnreadDoSistemaRoute,
		data: { _token: $('meta[name="csrf-token"]').attr('content'), 'limit': 10 },
		datatype: "html",
		success: function success(notificacaoSistema) {
			notificacaoSistemaConteudo = '';
			$.each(notificacaoSistema, function (key, value) {
				prioridade = '';
				texto = '';
				//console.log(value.prioridade)
				if (value.text.length > 40) {
					var texto = value.chamada.substr(0, 30) + '...';
				} else {
					texto = value.chamada;
				}
				if (value.prioridade == 'BAIXA') {
					prioridade = '<div class="vertical-timeline-item dot-success vertical-timeline-element">';
				} else if (value.prioridade == 'MEDIA') {
					prioridade = '<div class="vertical-timeline-item dot-warning vertical-timeline-element">';
				}
				else if (value.prioridade == 'ALTA') {
					prioridade = '<div class="vertical-timeline-item dot-danger vertical-timeline-element">';
				}
				else if (value.prioridade == '') {
					prioridade = 'success'
				}
				notificacaoSistemaConteudo += '<div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column class_anime pb-0">';
				notificacaoSistemaConteudo += prioridade;
				notificacaoSistemaConteudo += '    <div>';
				notificacaoSistemaConteudo += '      <span class="vertical-timeline-element-icon bounce-in"></span>';
				notificacaoSistemaConteudo += '      <div class="vertical-timeline-element-content bounce-in">';
				notificacaoSistemaConteudo += '			<b>' + texto + '</b>'
				if (value.url != '') {
					notificacaoSistemaConteudo += '<a href="' + value.url + ' " class="btn-notificacao-sistema-lida" id="' + value.id + '"><span class="text-success"> Ver </span></a>';
				} else {
					notificacaoSistemaConteudo += '<a href="' + urlLeituraNotificacaoDoSistema + ' " class="btn-notificacao-sistema-lida" id="' + value.id + '"><span class="text-success"> Ver </span></a>';
				}
				notificacaoSistemaConteudo += '    </div>';
				notificacaoSistemaConteudo += '  </div>';
				notificacaoSistemaConteudo += '</div>';
			});
			$(".notifications-sistema-box").html(notificacaoSistemaConteudo);
		}
	})
}

function montaResumoDeMensagensChat(data) {
	$('.unreadMessages').empty();
	incoming_msg = '';
	$(data.threads).each(function (key, value) {
		if ($(location).attr('pathname').indexOf("public") > 0) {
			host = $(location).attr('protocol') + '//' + $(location).attr('hostname') + '/crm/painel/messages/?thread=' + value.thread_id;
			verTodas = $(location).attr('protocol') + '//' + $(location).attr('hostname') + '/crm/painel/messages/';
		}
		else {
			host = $(location).attr('protocol') + '//' + $(location).attr('host') + '/painel/messages/?thread=' + value.thread_id;
			verTodas = $(location).attr('protocol') + '//' + $(location).attr('host') + '/painel/messages/';
		}
		data = value.created_at.split('-')
		var ano = data[0];
		mes = data[1];
		data = data[2].split('T')
		dia = data[0];
		dia2 = ("0" + (dia)).slice(-2);
		hora = data[1].replace(".000000Z", "");
		incoming_msg += '<div class="divider"></div>';
		incoming_msg += '<a href="' + host + '" ><button type="button"class="dropdown-item">De: ' + value.title + ' &nbsp;';
		incoming_msg += '<span class="time_date">     ' + ' ' + dia2 + '/' + mes + '/' + ano + ' ' + hora + ' </span>';
		incoming_msg += '</button></a>';
	});
	incoming_msg += '<a href="' + verTodas + '" class="text-justify"><div class="col-12 btn btn-info  text-center">Ver todas</div></a>';
	$('.unreadMessages').append(incoming_msg);
}

function Message_Notification(messageNotificationRoute, title) {
	ja_e = 0;
	$.ajax({
		type: "POST",
		url: messageNotificationRoute,
		data: { _token: $('meta[name="csrf-token"]').attr('content') },
		datatype: "html",
		success: function success(data) {
			$('title').text('[' + data.unreadMessageCount + '] ' + title)
			$('.unreadMessageCounter').removeClass('d-none').html(data.unreadMessageCount);
			if (data.unreadMessageCount > 0) {
				montaResumoDeMensagensChat(data)
				$('title').text('[' + data.unreadMessageCount + '] ' + title)
				$('.unreadMessageCounter').removeClass('d-none').html(data.unreadMessageCount);
				msg_history = $(document).find('.msg_history').html();
				if (typeof (msg_history) != "undefined") {
					$('.mob-notification').removeClass('d-none').html('!');
					$('.unreadMessageCounter').removeClass('d-none').html(data.unreadMessageCount);
					var host = $(location).attr('protocol') + '//' + $(location).attr('hostname') + '/user/messages/?thread=';
					$(data.threads).each(function (key, value) {
						var message = $(".inbox_chat").find("[data-thread='" + value.thread_id + "']");
						message.find('.badge').html(value.unreadMessagesCount)
						message.find('p').html(value.message)
						ja_e = $('#message_id' + value.message_id).val()
						if (ja_e != value.message_id) {
							incoming_msg = '<div class="divider"></div><div class="incoming_msg"><input type="hidden" id="message_id' + value.message_id + '" value="' + value.message_id + '">';
							incoming_msg += '<div class="incoming_msg_img">';
							incoming_msg += '<img src="teste_123_ale" alt=""></div>';
							incoming_msg += '<div class="received_msg">';
							incoming_msg += '<div class="received_withd_msg">';
							incoming_msg += '<p>' + value.message + '</p>';
							var data = new Date();
							var mes = ("0" + (data.getMonth() + 1)).slice(-2);
							var dia = ("0" + data.getDate()).slice(-2);
							var ano = data.getFullYear();
							var hora = ("0" + data.getHours()).slice(-2);
							var min = ("0" + data.getMinutes()).slice(-2);
							incoming_msg += '<span class="time_date"> ' + hora + ':' + min + ' | ' + dia + '/' + mes + '/' + ano;
							incoming_msg += '</span></div></div>';
							incoming_msg += '</div>';
							$('#recebe_' + value.thread_id).append(incoming_msg);
						}
					});
					$('.msg_history').animate({
						scrollTop: $('.msg_history')[0].scrollHeight
					}, 1000);
				} else {
					$('.mob-notification').addClass('d-none');
				}
			}
		}
	});
}

$(document).on('click', '.btn-notificacao-lida', function (e) {
	id = $(this).attr('id');
	$.ajax({
		type: "POST",
		url: macarNotification,
		data: { _token: $('meta[name="csrf-token"]').attr('content'), 'id': id },
		datatype: "html",
		success: function success(data) {
			date = new Date();


			$('#lida' + id).html(date.toLocaleDateString("pt-BR")+ ' '+ date.getHours() + ':'+date.getMinutes()+':'+date.getSeconds() )
		}
	})
});

$(document).on('click', '.btn-notificacao-sistema-lida', function (e) {
	id = $(this).attr('id');
	$.ajax({
		type: "POST",
		url: macarNotificacaoSistema,
		data: { _token: $('meta[name="csrf-token"]').attr('content'), 'id': id },
		datatype: "html",
		success: function success(data) {
		}
	})
});