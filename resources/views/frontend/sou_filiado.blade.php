@extends('frontend.layouts.app_frontend')
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}"> 
<style>
	
</style>
@endpush
@php
$url= 'sou_filiado';
@endphp
@section('content')
<div class="body-block-carregando-aprofem d-none">
	<div class="loader">
		<div><img src="{{asset('./images/carregando.gif')}}"> </div>
	</div>
</div>
@if(session()->has('alert'))
<div class="alert alert-light alert-dismissible fade my-alert show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>{{session('alert')}}</strong>
</div>
@endif
@include('frontend.layouts.partials.slider')
<div class="container p-0 ">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12">
			<div class="pt-5 mt-5 mb-0">
				@include('frontend.layouts.partials.noticias')
			</div>
		</div>
	</div>
</div>
<div class="container p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12">
			<banner class="banner-fique-ligado">
				@include('frontend.layouts.partials.fique-ligado')
			</banner>
			{{-- <div class="col-navbar-menu-2 mt-5 mb-0">
				@include('frontend.layouts.partials.fique-ligado')
			</div> --}}
		</div>
	</div>
</div>
<div class="container p-0 ">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12">
			<div class="pt-5 mt-0 mb-0">
				@include('frontend.layouts.partials.geral')
			</div>
		</div>
	</div>
</div>
<div class="container p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12">
			<div class="pt-5 mt-0 mb-0">
				@include('frontend.layouts.partials.mini-banner')
			</div>
		</div>
	</div>
</div>
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0 row_noticias_slide">
		<div class="col-12">
			<div class="pt-5 mt-0 mb-0">
				@include('frontend.layouts.partials.noticias-slide')
			</div>
		</div>
	</div>
</div>
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0 row_videos_newsletter">
		<div class="col-12 p-0">			
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-6 col-12 p-0 m-0">
					@include('frontend.layouts.partials.videos')
				</div>				
				<div class="col-xs-6 col-sm-6 col-lg-6 col-12 p-0 m-0 container-newsletter">
					@include('frontend.layouts.partials.newsletter')
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row bg-white"><div class="col-12 d-flex align-items-center justify-content-center mb-5"></div></div>

@endsection
@push('after-scripts')
<script type="text/javascript" src="{{asset('./vendors/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/slick-carousel/slick/slick.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.set-select2').select2({
			placeholder: "{{__('ESCOLHA A CATEGORIA')}}",
			width: "100%",
			selectionCssClass: "pt-4 pb-3 border border-light btn-block rounded bg-light h-100",            
			theme: "bootstrap4",
		})

		$(".slick-slider-fique-ligado").slick({
			infinite: true,
			autoplay: true,
			cols:2,
			autoplaySpeed: 2000,
			slidesToShow: 1,
			speed: 500,
			dots: false,
			adaptiveHeight: true,
			arrows: false,
			fade: true,
			cssEase: 'linear' 
		});

		$(".slick-slider-click-fique-ligado").slick({
			infinite: true,
			autoplay: true,
			dots: false,
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows: true,
			variableHeight: false,
		});


		$(".slick-slider-home").slick({
			infinite: true,
			autoplay: true,
			cols:2,
			autoplaySpeed: 2000,
			slidesToShow: 1,
			speed: 1500,
			dots: true,
			adaptiveHeight: true,
			responsive: [{
				breakpoint: 800,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '40px',
					variableWidth: false,
					slidesToShow: 1,
					dots: true
				},
				breakpoint: 1200,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '40px',
					variableWidth: false,
					slidesToShow: 1,
					dots: true
				}
			}],
			customPaging: function (slider, i) {
				return '<div class="bloco p-0 m-0" data-item="'+i+'">'  + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</div>';
			}
		});

		$('.goto-slide-home').on('click', function(){
			var goToItem =  $(this).attr('data-item');
			$(".slick-slider-home").slick('slickGoTo', goToItem)
			$('.goto-slide-home').removeClass('bg-dark-semi-2 rounded');
			$(this).addClass('bg-dark-semi-2 rounded');
		});
		$('.goto-slide-second').on('click', function(){
			var goToItem =  $(this).attr('data-item');
			$(".slick-slider-second").slick('slickGoTo', goToItem)
			$('.goto-slide-second').removeClass('border rounded');
			$(this).addClass('border rounded');
		});


		$('.goto-slide-fique-ligado').on('click', function(){
			var goToItem =  $(this).attr('data-item');
			$(".slick-slider-fique-ligado").slick('slickGoTo', goToItem)
			$('.goto-slide-fique-ligado').removeClass('border rounded');
			$(this).addClass('border rounded');
		});



		$(".slick-slider-noticia").slick({
			infinite: true,
			autoplay: true,
			dots: false,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: true,
			variableHeight: true,
		});

		$(".slick-slider-noticia-text").slick({
			infinite: true,
			autoplay: true,
			dots: false,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: false,
			variableHeight: true,
		});

		$(".slick-videos-home").slick({
			infinite: true,
			autoplay: true,
			dots: false,
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows: true,
			variableHeight: false,
		});

		$('.active_video').on('click', function(){
			var video_id =  $(this).attr('data-id');
			$(".video_player").addClass('d-none')
			$('.video_'+video_id).removeClass('d-none');
		});
		$('#form_add_newsletter').on('submit', function(){
			error = 0;
			prop = $('#de_acordo').prop('checked')
			$('.erro_de_acordo').removeClass('text-danger')
			if (prop == false) {
				toastr.error('Erro', 'Atenção é preciso aceitar os termos.')
				$('.erro_de_acordo').addClass('text-danger')
				return false;
			}
			$('#form_add_newsletter').trigger("submit")
		});
	})
</script>
@endpush