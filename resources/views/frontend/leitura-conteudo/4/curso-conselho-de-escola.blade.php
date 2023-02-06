@extends('frontend.layouts.app_frontend')
@section('content')
<link rel="stylesheet" href="{{asset('/vendors/pgwslideshow/pgwslideshow.min.css')}}"/>
@push('js-scripts')
<script type="text/javascript" src="{{asset('/vendors/pgwslideshow/pgwslideshow.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		if($('#useSlider').val() ==1){
			$('.pgwSlideshow').pgwSlideshow(
			{
				transitionEffect : 'fading',
				adaptiveDuration : 400,
				autoSlide: 1,
			});
		}
	});
</script>
@endpush
<title>Curso Conselho de Escola</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Curso Conselho de Escola</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Curso Conselho de Escola</h4>
		</div>
		<div class="col-sm">
			<!-- TEXTO_PUPLICADO_POR -->
		</div>
		<div class="col-sm">
			<!-- TEXTO_DATA_PUPLICACAO -->
		</div>
	</div>
</div>
<div class="container pb-5 mb-5">
	<div class="row">
		<div class="col-sm">
			<div>Instituto Paulo Freire oferecerá, entre fevereiro e março, um curso gratuito para pais/familiares que participam dos Conselhos de Escola. A intenção é contribuir com a atuação deste segmento nos Conselhos com os quais estão envolvidos. O curso é gratuito e será coordenado pela professora Ângela Antunes, autora do livro "Aceita um Conselho: como organizar os colegiados escolares".</div><div> </div><div>O curso será às quartas-feiras à noite ou aos sábados, dependendo da preferência dos inscritos.</div><div><br></div><div><div><br></div><div><b>Mais informações clique no link:</b> <a href="http://www.paulofreire.org/instituto-paulo-freire-abre-inscricao-para-curso-gratuito-sobre-conselho-de-escola" target="blank"><b>INSTITUTO PAULO FREIRE</b></a></div></div>
		</div>
	</div>
</div>
@endsection