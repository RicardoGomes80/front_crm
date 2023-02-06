@extends('frontend.layouts.app_frontend')
{{-- @section('title', trans('labels.frontend.home.title').' | '.app_name()) --}}
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
@endpush
@section('content')
<div id="click" class="p-0 m-0 imagem_principal_full cursor-pointer">
	<img src="{{asset('storage/uploads/cms/header-filie-se.png')}}" width="100%">
</div>
<div  class="container-fluid pl-0 ml-0 ">
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 p-0 m-0 mt-4 pt-4 pb-4">
			<h5><b>Conheça alguns de nossos serviços</b></h5>
			<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
				<div class="progress-bar progress-bar-xs bg-warning indicador-progress-bar"></div>
			</div>
		</div>
		<div id="ancora"></div>
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4">
			<div class="row pl-0 ml-0 pr-0 mr-0">
				@include('frontend.layouts.partials.nao-filiado-beneficios')
			</div>
		</div>
	</div>
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4">
			<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center cursor-pointer btn-filiar-me"> 
				<img src="{{asset('storage/uploads/cms/ads.png')}}" width="100%">
			</div>
		</div>
	</div>
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4 mb-4 pb-4">
			<h5><b>Você vai se interessar</b></h5>
			<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
				<div class="progress-bar progress-bar-xs bg-success indicador-progress-bar"></div>
			</div>
		</div>
		<div class="col-11 m-0 p-0 ml-2 pl-1 ">
			<div class="row">
				@include('frontend.layouts.partials.nao-filiado-cursos')
			</div>
		</div>
	</div>
	@include('frontend.layouts.partials.nao-filiado-sedes')	
</div>
@endsection
@push('after-scripts')
<script type="text/javascript">
	$(document).ready(function () {
		route = "{{route('frontend.filie-se')}}";
		$('.btn-filiar-me').on('click', function(){
			window.location.replace(route);
		});
		$('.btn-conhecer').on('click', function(){
			window.location.replace(route);
		});
		$("#click").click(function (){
			$('html, body').animate({
				scrollTop: $("#ancora").offset().top
			}, 1500);
		});
	})
</script>
@endpush