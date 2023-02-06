@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@section('content')
<div class="container-fluid">
	<div class="row mr-auto ml-auto d-flex justify-content-center">
		<div class="col-navbar-menu-2 mt-5 mb-5">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
				<div class="col-12 ">
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $dadosDaUrl->sessao }}</b></h5>
					<div class="progress-bar-xs progress h2px">
						<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-navbar-menu-2 mt-5 mb-10">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
				<div class="col-12 rounded p-0 m-0">
					<div class="row">

						{!! Helper::descobreYouTubeVimeoView($result->url_arquivo) !!}
						
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
@endsection