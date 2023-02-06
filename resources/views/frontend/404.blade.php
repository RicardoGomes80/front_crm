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
@if(session()->has('alert'))
<div class="alert alert-light alert-dismissible fade my-alert show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>{{session('alert')}}</strong>
</div>
@endif
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12">
			<div class="col-navbar-menu-2 pt-5 mt-5 mb-0">
				<div class="container-fluid">
					<div class="row mr-auto ml-auto d-flex justify-content-center">
						<div class="col-navbar-menu-2 mt-5 mb-10">
							<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
								<div class="col-12 rounded p-0 m-0">
									<div class="row">
										<div class="col-12 text-center mt-10 ">
											<h5 class="font-16"> <b>Página Não encontrada</b></h5>
										</div>
										<div class="col-12 text-center mt-5 mb-10 font-12">
											<p>Olá {{auth()->user()->name ?? 'Visitante'}}.</p>
										</p>A Página digitada não foi encontrada, a Url pode ter sido removida ou alterada, por favor retorne a home do site.
									</p>
									<a href="./" class="w-100 text-center">
										<span class="btn btn-primary mt-3 pt-2 pl-4 pr-4 btn-pill text-write btn-shadow font-9">
											{{__('Voltar para Home')}}
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>
</div>
@endsection