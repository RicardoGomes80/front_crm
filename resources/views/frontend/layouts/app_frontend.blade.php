<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', '') }}</title>    
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="user-scalable=no, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="msapplication-tap-highlight" content="no">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=500, initial-scale=1" />

	<!-- Fonts -->	
	@include('frontend.layouts/load_scripts')		
	@yield('more-css')		
	@stack('after-styles')
	@inject('request', 'Illuminate\Http\Request')		
	<!-- Jquery -->
	<script type="text/javascript" src="{{ asset('./vendors/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('./js/main_frontend_filiado.js') }}"></script>
	<script type="text/javascript">
		function matchStart(params, data) {
			params.term = params.term || '';
			if (data.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
				return data;
			}
			return false;
		}
		$(document).ready(function(){
			$(document).on('click', '.btn-busca-site', function () {
				$('#form-busca-site').submit();
			})
			$(document).on('click', '#mp-pusher', function () {
				$('#menu-icon-trigger').click();
			})
		})
	</script>

	<style type="text/css">
		.datepicker-container{
			z-index: 1052 !important; 
		}
		.datepicker-dropdown{
			z-index: 1052 !important; 
		}
	</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="{{asset('./vendors/toastr/build/toastr.min.css')}}" />
	<input type="hidden" id="complemento-rota" value="{{$complemento_rota ?? 'sou-filiado'}}">
	<div id="preloader"></div>
	<div class="device d-none d-sm-block d-md-none d-xl-none">
		<div class="device__screen">
			<div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
				<svg width="1000px" height="1000px">
					<path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
					<path id="pathB" d="M 300 500 L 700 500"></path>
					<path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
				</svg>
				<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
			</div><!-- menu-icon-wrapper -->
			<div class="collapse" id="collapseMenu">
				<div id="dummy" class="dummy">
					<div class="dummy__item">
						<script type="text/javascript" src="{{ asset('./vendors/jquery/dist/jquery.min.js')}}"></script>
						<link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/multi-level-push-menu/normalize.css')}}" />
						<link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/multi-level-push-menu/multi-level-push-menu.css')}}" />
						<link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/multi-level-push-menu/icons.css')}}" />
						<link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/multi-level-push-menu/component.css')}}" />
						<script type="text/javascript" src="{{asset('/js/frontend/modernizr.custom.js')}}" type="text/javascript"></script>
						@include('frontend.layouts.partials.menu_mobile')
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger2"></a></p>
							</div>
						</div>
					</div><!-- /pusher -->
				</div><!-- /container -->
				<script type="text/javascript" src="{{asset('/js/frontend/classie.js')}}" type="text/javascript"></script>
				<script type="text/javascript" src="{{asset('/js/frontend/mlpushmenu.js')}}" type="text/javascript"></script>
				<script>
					$(document).ready(() => {
						new mlPushMenu( document.getElementById('mp-menu'), document.getElementById('trigger'), {
							type : 'cover',
							open : true
						});
					});
				</script>

			</div>
		</div><!-- /dummy -->
	</div>
</div><!-- /device-screen -->
</div><!-- /device -->
<!-- menu -->
<div class="menu-absoluto">
	<div class="col-12 p-0 m-0 d-none d-sm-block d-md-none d-xl-none bg-light" style="height:100px">
		<div class="d-flex justify-content-center p-0 m-0">
			<a  href="{{ config('app.url') }}" class="p-0 m-0" style="z-index:1001">
				<div  class="col-5 p-0 m-0 pt-4 pl-1">
					<img src="{{ asset('./images/cms/aprofem_40.png') }}" alt="{{__('Aprofem')}}" title="{{__('Aprofem')}}" class="">
				</div>
			</a>
			<div  class="col-1 p-0 m-0"></div>
			<div  class="col-6 p-0 m-0">
				<ul class="navbar-nav nav-item-header mr-auto ml-auto d-flex justify-content-center">
					@include('frontend.layouts.header_filiado_deslogado_mobile')
				</ul>
			</div>
		</div>
	</div>
	<div class="col-12 p-0 m-0 d-none d-sm-none d-md-block d-xl-block">
		<div class="d-flex justify-content-center p-0 m-0">
			<div  class="col-12 p-0 m-0">
				<nav class="ml-0 mr-0 p-0 m-0 navbar navbar-expand-lg bg-light ">
					@include('frontend.layouts.partials.menu')
				</nav>
			</div>
		</div>
	</div>
	<div class="col-12 bg-info p-0 m-0">
		<div class="d-flex justify-content-center p-0 m-0">
			<div class="col-12 p-0 m-0 d-none d-sm-none d-md-block d-xl-block menu-principal">
				<nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-light bg-white ml-0 mr-0 pt-4 pb-3">
					@include('frontend.layouts.menubar_secundario')
				</nav>
			</div>
			<div class="col-12 p-0 m-0 d-none d-sm-block d-md-none d-xl-none">
				<nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-light bg-white ml-0 mr-0 pt-4 pb-3">
					@include('frontend.layouts.menubar_secundario_mobile')
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- menu -->

<div class="container-fluid p-0 m-0">
	<div class="justify-content-center">
		@yield('content')
	</div>
</div>
<div class="container-fluid bg-light p-0 m-0">
	@include('frontend.layouts.partials.busca_site')
</div> 
<div class="container-fluid bg-light p-0 m-0">
	@include('frontend.layouts.partials.pre_footer_filiado')
</div>
<div class="container-fluid bg-primary-2 p-0 m-0">
	@include('frontend.layouts.partials.footer')
</div>
</body>
@yield('set-modal')
@include('frontend.layouts.modals.loginModal')
<!-- Scripts -->
@yield('more-scripts')
@stack('js-scripts')
@stack('before-scripts')
@include('layouts/scripts_filiado')
@stack('after-scripts')
<script type="text/javascript">
	@if((session()->has('show_login')) && (session('show_login') == true))
	$('#myModal').modal('show');
	@endif
		/*var font_color = "{{config('font_color')}}"
		setActiveStyleSheet(font_color);*/
	complemento = $('#complemento-rota').val();
	$('.btn-home-filiado-nao-filiado').attr('href',"{{ config('app.url') }}/"+complemento)
	$(document).on("click", ".menu-icon-trigger", function () {
		$('#collapseMenu').collapse('toggle')

	})

	/*menu absoluto*/
	$(window).on('scroll', function() {
        if ($(window).scrollTop() > 200) {
            $('.menu-absoluto').addClass('active');
        } else {
            $('.menu-absoluto').removeClass('active');
        }
    });
	/*menu absoluto*/
</script>

<script type="text/javascript" src="{{asset('/js/frontend/segment.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/js/frontend/ease.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/js/frontend/animated-menu-icon.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('./vendors/toastr/toastr.js')}}"></script>
</body>
</html>