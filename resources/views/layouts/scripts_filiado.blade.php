<script type="text/javascript" src="{{asset('./vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/toastr/build/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/inputmask/dist/jquery.inputmask.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/uteis/inputForms.js') }}"></script>
<script type="text/javascript" src="{{asset('./vendors/block-ui/jquery.blockUI.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script>
	window._token = '{{ csrf_token() }}';
</script>


<style type="text/css">
	.bg-secondary-2 {
		background:  #44444e !important;
		border: 1px #44444e solid !important ;
	}
	.text-orange { color: #ee9500 !important; }
	.text-orange-2 { color: #e68236 !important; }
	.text-primary-2 { color: #024495 !important; }
	.btn-orange { height:100% !important; color: #fff !important; background-color: #f1a000 !important; }
	.btn-orange:hover{ color: #ffffffa9 !important; background-color: #ee8700ea !important}
	.btn-primary-2 { color: #fff !important; background-color: #024495 !important; }
	.card-image-cliente{min-width: 250px}
	.nav-item a { color: #495057 !important; }
	.nav-link a { color: #495057 !important; }
</style>
<script type="text/javascript" src="{{asset('./js/requireds-filiado.js')}}"></script>
@php
$url = url()->previous();
@endphp
<script type="text/javascript">
	//Route for message notification
	var messageNotificationRoute = '/'
	var getNotificationRouteCountUnread = '/'
	var getNotificacoesCountUnreadDoSistemaRoute = '/'
	var getNotificationRouteUnread = '/'
	var macarNotification = '/'
	var macarNotificacaoSistema = '/'	
	var getNotificacoesUnreadDoSistemaRoute = '/'
	var urlLeituraNotificacaoDoSistema = '/'
	var acceptedDropzones = '.ods,.xls,.xlsx,.jpeg,.jpg,.png,.doc,.docx,.pdf,.odf,.txt,.csv,.ods,.odt,.ott,.dot,.fodt,.uot,.docx,.ots,.dotx,.fods,.uos,.xlts,.rtf'
	@if (session('success'))
	toastr.success('{{session('success')}}', 'SUCESSO')
	@endif
	@if (session('error'))
	toastr.error('{{session('error')}}', 'ATENÇÃO')
	@endif
	@if (session('info'))
	toastr.info('{{session('info')}}', 'ATENÇÃO')
	@endif
	@if (!empty($errors) && $errors->all())
	errors = {!! $errors !!}
	if(Object.keys(errors).length > 0){
		$.each(errors, function(index, value) {
			msg = 	value[0];
			toastr.error(msg, 'ATENÇÃO')
		});
	}else{
		toastr.error('{{ __('Verifique os erros no formulário')}}', 'ATENÇÃO')
	}
	@endif
	$( document ).ajaxError(function( event, jqxhr ) {
		var responseData = jqxhr.responseJSON;
		if(responseData.error && responseData.logout_user && jqxhr.status == 403) {
			window.location.reload();
		}
	});
	$(document).on("click", ".btn-voltar", function() {
		route = $(this).attr('route')
		if((route == '') || (typeof route == "undefined")) {
			route = "{{$url}}";
		}
		window.location.href = route;
	});

	function bloqueiaPagina() {
		$.blockUI.defaults.css = {};
		$(".bloqueia-pagina").block({
			message: $("" + '<div class="loader mx-auto"><div><img src="{{asset('./images/carregando.gif')}}"> </div></div>' ),
		});
	}
	function desbloqueiaPagina() {
		$('.bloqueia-pagina').unblock();
	}
</script>