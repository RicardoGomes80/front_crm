<!doctype html>
@php
$url= 'hotsite';
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title> {{ config('app.name', '') }} - @yield('title')</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"> 

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="msapplication-tap-highlight" content="no">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fonts -->
	<!-- Styles -->
	<link href="{{asset('./css/fonts/poppins.css')}}" rel="stylesheet" type="text/css" /> 
	<link rel="stylesheet" href="{{asset('./vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{asset('.//vendors/pe7-icon/dist/dist/pe-icon-7-stroke.min.css') }}">
	<link href="{{asset('./css/frontend/hotsite_width_1920.css')}}" media="screen and (min-width: 1367px)" rel="stylesheet" type="text/css" />
	<link href="{{asset('./css/frontend/hotsite_width_1366.css')}}" media="screen and (max-width: 1366px)" rel="stylesheet" type="text/css" />
	<link href="{{asset('./css/frontend/menu.css')}}" media="screen" rel="stylesheet" type="text/css" />
	<link href="{{asset('./css/frontend/menu.css')}}" media="screen" rel="stylesheet" type="text/css" />
	<link href="{{asset('./css/frontend/card-afiliado.css')}}" media="screen" rel="stylesheet" type="text/css" />
	
	<style>
		body {
			font-family: 'poppins';			
		}
	</style>
</head>
<body style="background-image: url('{{{asset('./images/cms/hot_site_imagem.png')}}}');background-position: center top;background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<header>
		<div id="main-menu" class="main-menu-container mb-0">
			<div class="main-menu mt-4 ">
				<div class="container pl-2 pr-0">
					<nav class="navbar ml-0 pl-0 pr-0">
						<a class="navbar-brand ml-0 pl-2 pr-0" href="#">
							<img src="{{asset('./images/cms/logo-black-text.png')}}" alt="Logo Aprofem">
						</a>                            
						<div class="form-inline">
							<a type="button" class="nav-link text-primary btn-home-contact" href="#">
								<span>{{__('FALE CONOSCO')}}</span>          
								<img class="ml-3 pt-2 pb-2 pr-3 pl-3 btn btn-light border border-light rounded-pill btn-hover-shine" src="{{asset('./images/cms/callcenter_32.png')}}">
							</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="space_home_hotsite_t_1"></div>
	<div class="container" >
		<div class="content">			
			<ul class="lista-afiliado row">
				<li class="col-md-10 col-lg-4 col-xl-4 col-12 ">
					<div class="card bg-transparent card-custom-primary mh180">
						<div class="card-body">
							<div class="ml-4 mt-5 mt-sm-1">
								<p class="mt-4 h6">{{__('NÃO SOU FILIADO') }}</p>
								<p class="h5"><b>{{__('Quero ser APROFEM')}}</b></p>								
							</div>
						</div>
						<a href="{{route('frontend.nao-sou-filiado')}}" class="text-white btn-hover-shine">
							<strong class="right-cicle-3x pull-right mr-3">
								<span class="pe-7s-angle-right-circle font-9"></span>
							</strong>
						</a>					
					</div>
				</li>
				<li class="col-md-10 col-lg-4 col-xl-4 col-12 ">
					<div class="card bg-transparent card-custom-orange mh180">
						<div class="card-body">
							<div class="ml-4 mt-5 mt-sm-1">
								<p class="mt-4 h6">{{__('SOU FILIADO')}}</p>
								<p class="h5"><b>{{__('Já sou APROFEM')}}</b></p>								
							</div>
						</div>
						<a href="{{route('frontend.index')}}" class="text-white btn-hover-shine">
							<strong class="right-cicle-3x pull-right mr-3">
								<span class="pe-7s-angle-right-circle font-9"></span>
							</strong>
						</a>				
					</div>
				</li>
			</ul>

			{{-- <div class="row">
				<div class="col-md-10 col-lg-4 col-xl-4 col-12 text-white mt-2">
					<div class="card bg-transparent card-custom-primary mh180">
						<div class="card-body">
							<div class="ml-4 mt-5 mt-sm-1">
								<p class="mt-4 h6">{{__('NÃO SOU FILIADO') }}</p>
								<p class="h5"><b>{{__('Quero ser APROFEM')}}</b></p>
								<div class="row">
									<div class="col-12 mt-4 mt-sm-1">
										<a href="{{route('frontend.nao-sou-filiado')}}" class="text-white">
											<strong class="right-cicle-3x pull-right mr-3">
												<span class="pe-7s-angle-right-circle btn-hover-shine font-9"></span>
											</strong>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-4 col-xl-4 col-12 text-white mt-2">
					<div class="card bg-transparent card-custom-orange mh180">
						<div class="card-body">
							<div class="ml-4 mt-5 mt-sm-1">
								<p class="mt-4 h6">{{__('SOU FILIADO')}}</p>
								<p class="h5"><b>{{__('Já sou APROFEM')}}</b></p>
								<div class="row">
									<div class="col-12 mt-4 mt-sm-1">
										<a href="{{route('frontend.index')}}" class="text-white">
											<strong class="right-cicle-3x pull-right mr-3">
												<span class="pe-7s-angle-right-circle btn-hover-shine font-9"></span>
											</strong>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	<div class="space_home_hotsite_t_2"></div>
	<div class="home container-fluid p-0 m-0 pt-4 ">
		<div class="justify-content-center p-0 m-0  d-none d-sm-none d-md-block d-lg-block d-xl-block">
			@include('frontend.layouts/menubar_secundario_hotsite')
		</div>
	</div>
	<div class="content">
		<div class="row mt-6 mt-md-10 mb-10"></div>
	</div>
	<div class="container-fluid bg-primary-2 p-0 m-0">
		@include('frontend.layouts.partials.footer')
	</div>
</body>
</html>
<script type="text/javascript" src="{{ asset('./vendors/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var showIcon =  $('.nav-item-header').find('li.active');
		showIcon.find('.set-icon').removeClass('d-none');
		$('.dropdown-menu-hover').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
		}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
		});
	});
</script>