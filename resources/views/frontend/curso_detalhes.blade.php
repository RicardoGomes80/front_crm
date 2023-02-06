@extends('frontend.layouts.app_frontend')
@section('title', !empty($curso->nome) ? __('Detalhes do curso: ') . $curso->nome : __('Detalhes do curso'))
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./css/pulse-button.css')}}">
<link rel="stylesheet" href="{{asset('/vendors/linearicons-master/dist/web-font/style.css')}}">
<link rel="stylesheet" href="{{ asset('./vendors/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush
@section('content')
<div class="p-0 m-0 imagem_principal_full cursor-pointer">
	@if (empty($curso->image_src))
	<img src="{{asset('storage/uploads/images/sem-imagem.jpg')}}" class="img-fluid" width="100%" height="850px">
	@else
	<img src="{{Helper::viewS3($curso->image_src)}}" class="img-fluid" width="100%" height="850px">
	@endif
</div>
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12 mt-4 mb-4">
			@if(!empty($curso))
			<div class="row">
				<div class="col-12">
					<div class="app-page-title">
						<div class="page-title-wrapper">
							<div class="page-title-actions scroll-top-button">
								<div class="d-inline-block">
									@if(Route::currentRouteName() == 'frontend.cursos.show.detalhes.home')
									<a href="{{route('frontend.cursos.buscar.home')}}" class="btn btn-lg  btn-primary btn-shadow btn-hover-shine" type="button">
										{{__('VOLTAR')}}
									</a>
									@else
									<a href="{{route('open_route.cursos.buscar')}}" class="btn btn-lg  btn-primary btn-shadow btn-hover-shine" type="button">
										{{__('VOLTAR')}}
									</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-3">
					@include('layouts/sidebar_cursos_esquerda', compact('categorias', 'cursos'))
				</div>
				<div class="col-9">
					<div class="page-title-heading">
						<h5><strong>{{ mb_strtoupper($curso->nome) }}</strong></h5>
					</div>					
					<div class="col-12 mt-5">
						<h6> {{__('Descrição')}} </h6>
						<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
							<div class="progress-bar progress-bar-xs bg-primary indicador-progress-bar"></div>						
						</div>
					</div>
					<div class="col-12  mt-3 text-left">
						<div class="row">
							<div class="col-12 mb-3">
								@guest
								<button class="btn btn-success btn-shadow btn-hover-shine enter-for-subscribe" >{{__('ENTRE PARA SE INSCREVER')}}</button>
								@else
								@if(!empty($vagasEsgotadas) && empty($naEspera) && !$hasInscrito)
								<button class="btn btn-success btn-shadow btn-hover-shine start-course" lista_espera="true">{{__('ENTRAR NA LISTA DE ESPERA')}}</button>
								@elseif(!empty($naEspera) && empty($hasInscrito))
								<button class="btn btn-warning btn-shadow btn-hover-shine" disabled>{{__('NA LISTA DE ESPERA')}}</button>
								@elseif (!$hasInscrito && $permitirInscricao)
								<button class="btn btn-success btn-shadow btn-hover-shine start-course">{{__('INSCREVER-SE')}}</button>
								@else
								@if (!empty($cursoInscricao->finalizado))
								@if(!empty($cursoInscricao->concluido) && !$permitirInscricao)
								<button class="btn btn-primary disabled" disabled title="{{__('CONCLUÍDO')}}">{{__('CONCLUÍDO')}}</button>
								@else
								<button class="btn btn-primary disabled" disabled title="{{__('FINALIZADO')}}">{{__('FINALIZADO')}}</button>
								@endif

								@else
								<button class="btn btn-primary disabled" disabled title="{{__('INSCRITO')}}">{{__('INSCRITO')}}</button>
								@endif
								@endif
								@endguest
							</div>
						</div>
					</div>
					<div class="col-12 mt-5 font-10 text-muted">
						{!! $curso->descricao !!}
					</div>
					<div class="col-12 mt-2  mb-3 text-left">
						<div class="row">
							<div class="col-12 mb-3">
								@guest
								<button class="btn btn-success btn-shadow btn-hover-shine enter-for-subscribe" >{{__('ENTRE PARA SE INSCREVER')}}</button>
								@else
								@if(!empty($vagasEsgotadas) && empty($naEspera) && !$hasInscrito)
								<button class="btn btn-success btn-shadow btn-hover-shine start-course" lista_espera="true">{{__('ENTRAR NA LISTA DE ESPERA')}}</button>
								@elseif(!empty($naEspera) && empty($hasInscrito))
								<button class="btn btn-warning btn-shadow btn-hover-shine" disabled>{{__('NA LISTA DE ESPERA')}}</button>
								@elseif (!$hasInscrito && $permitirInscricao)
								<button class="btn btn-success btn-shadow btn-hover-shine start-course">{{__('INSCREVER-SE')}}</button>
								@else
								@if (!empty($cursoInscricao->finalizado))
								@if(!empty($cursoInscricao->concluido) && !$permitirInscricao)
								<button class="btn btn-primary disabled" disabled title="{{__('CONCLUÍDO')}}">{{__('CONCLUÍDO')}}</button>
								@else
								<button class="btn btn-primary disabled" disabled title="{{__('FINALIZADO')}}">{{__('FINALIZADO')}}</button>
								@endif

								@else
								<button class="btn btn-primary disabled" disabled title="{{__('INSCRITO')}}">{{__('INSCRITO')}}</button>
								@endif
								@endif
								@endguest
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@else
		<div class="mt-10 mb-20 text-center">
			<div class="col-12">
				<strong class="h5 text-dark">{{ __('SEM DADOS PARA EXIBIR') }}</strong>
			</div>
			<div class="col-12 mt-5">
				<a href="{{route('open_route.cursos.buscar')}}" class="btn btn-lg  btn-primary btn-shadow btn-hover-shine" type="button">
					{{__('VOLTAR')}}
				</a>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
@push('js-scripts')
<script type="text/javascript" src="{{asset('./vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.btn-overflow').on('click',function(e) {
			e.stopPropagation();
			if ($(this).hasClass('less')) {
				$(this).removeClass('less');
				$(this).addClass('more');
				$(this).text("{{__('Mostrar menos')}}");

				text.animate({'height': h});
			} else {
				$(this).addClass('less');
				$(this).removeClass('more');
				$(this).text("{{__('Mostrar mais')}}");
				text.animate({'height': '120px'});
			}  
		});
		@if (!$hasInscrito && $permitirInscricao)
		$('.inscricao-curso').on('click', function() {
			$('.start-course').addClass('btn-pulse');
			$([document.documentElement, document.body]).animate({
				scrollTop: $('.scroll-top-button').offset().top
			},1500)
		})
		$('.start-course').on('click', function() {
			$(this).attr('disabled',true);
			naEspera = $(this).attr('lista_espera')
			Swal.fire({
				title: "ATENÇÃO",
				text: "Deseja se inscrever neste curso?",
				icon: "question",
				iconColor: "#ff6f6f",
				showCancelButton : true,
				confirmButtonText: 'SIM',
				cancelButtonText : 'CANCELAR',
				cancelButtonColor: '#bbb',
				focusCancel: true,
				didOpen: (toast) => {
					return $(this).text("{{__('AGUARDE...')}}");
				}
			}).then(function(actions) {

				if (actions.isConfirmed != true) {
					$('.start-course').removeAttr('disabled').text("{{__('INSCREVER-SE')}}");
					return false;
				}
				makeAjax(naEspera)			
			});	
		});

		function makeAjax(naEspera) {
			var url  = '{{ route("frontend.user.cursos.iniciar", [$curso->id, $turma->id, "naEspera" => "replace"])}}';	
			url = url.replace('replace', naEspera ?? '')
			$.post(url, function(response) {
			}).done(function(response) {
				toastr.options.onHidden = function(){
					window.location.reload(true)
				};
				if(naEspera) {
					var msg = response.msg ?? "{{__('INSCRITO NA LISTA DE ESPERA')}}";
					$('.start-course')
					.text("{{__('NA LISTA DE ESPERA')}}")
					.removeClass('btn-succss btn-shadow btn-hover-shine')
					.addClass('btn btn-warning disabled')
					.attr('disabled',true);
					var msg = response.msg ?? "{{__('Inscrito na lista de espera')}}";
					toastr.success(msg, "{{__('SUCESSO')}}");
					return;
				}
				var msg = response.msg ?? "{{__('Curso iniciado')}}";
				toastr.success(msg, "{{__('SUCESSO')}}");
				
				$('.start-course').text("{{__('INSCRITO')}}").removeClass('btn-success btn-shadow btn-hover-shine').addClass('btn btn-primary disabled').attr('disabled',true);

			}).fail(function(response) {
				var msg =  response.responseJSON.msg ?? "{{__('Não foi possível se inscrever o curso')}}";
				if(response.responseJSON.lista_espera) {
					toastr.warning(msg, "{{__('ATENÇÃO')}}");
					$('.start-course').text("{{__('VAGAS ESGOTADAS, ADICIONADO NA LISTA DE ESPERA')}}").removeClass('btn-success btn-shadow btn-hover-shine')
					.addClass('btn btn-warning disabled').attr('disabled',true);
					return;
				} else {
					toastr.error(msg, "{{__('ATENÇÃO')}}");
				}
				$('.start-course').removeAttr('disabled').text("{{__('INSCREVER-SE')}}");
			});
		}
		@endif
		$('.enter-for-subscribe').on('click', function () {
			$('#rf-login').focus()
		})
	});
</script>
@endpush