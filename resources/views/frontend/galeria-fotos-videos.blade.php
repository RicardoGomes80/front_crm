@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}">    
@endpush
@php
$url= 'sou_filiado';
@endphp
@section('content')
<div class="container-fluid">
	<div class="row mr-auto ml-auto d-flex justify-content-center">
		<div class="col-navbar-menu-2 mt-5 mb-5">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
				<div class="col-12 ">
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $dadosDaUrl->sessao }}</b></h5>
					<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
						<div class="progress-bar progress-bar-xs bg-primary indicador-progress-bar"></div>						
					</div>
				</div>
			</div>
		</div>
		<div class="col-navbar-menu-2 mt-5 mb-10">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
				<div class="col-12 rounded p-0 m-0">
					<div class="row">
						@foreach($result as $conteudo)
						<div class="col-md-3">
							<div class="card mb-3 pt-2 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt btn btn-outline-success fs-6 btn-link_url" data-id="{{$conteudo->id}}" data-url_amigavel="{{$conteudo->url_amigavel}}">
								<i class="pe-7s-video text-success opacity-7 btn-icon-wrapper mb-2 pt-3" style="font-size: 5em !important;"></i>
								<div class="widget-description text-warning  mb-2 pt-3 font-9">									
									<span>{{$conteudo->titulo}}</span><br>
									<span>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</span>
								</div>								
							</div>
						</div>
						@endforeach
					</div>
				</div>
				{{$result}}
			</div>
		</div>
	</div>
</div>
@endsection
@section('more-scripts')
<script type="text/javascript">
	$(document).on('click', '.btn-link_url', function () {
		rota= $(this).attr('data-url_amigavel').trim();
		id= $(this).attr('data-id').trim();
		window.open(rota, "_blank");
	});	
</script>
@endsection