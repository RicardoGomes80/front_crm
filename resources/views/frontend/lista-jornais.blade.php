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
<div class="widget-content-right p-0 m-0 pb-4">
	<img src="storage/{{ $dadosDaUrl->CMS_CAT_BANNER ?? $dadosDaUrl->imagem_miniatura}}" alt="" data-description="">
</div>
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
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
				<div class="col-12 rounded p-0 m-0">
					<div class="row">
						@foreach($result as $conteudo)
						<a href="{{env('APP_URL')}}/storage/{{$conteudo->arquivo}}" target="_blank">
							<div class="ml-3 mt-2 mB-2 col-11">
								<div class="col-12 mb-xs-2">
									<div class="  border-left border-3 pl-1 border-success">
										<b>{{ $conteudo->titulo }}</b>
									</div>
									<div class="font-9 pl-2 text-muted pb-4">
										<a href="{{env('APP_URL')}}/storage/{{$conteudo->arquivo}}" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light" target="_blank">
											{{__('Ver Mais')}}
										</a>
									</div>
								</div>
							</div>
						</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection