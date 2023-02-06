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
<title>Fórum Municipal de Educação da Cidade de São Paulo - FME</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Fórum Municipal de Educação da Cidade de São Paulo - FME</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Fórum Municipal de Educação da Cidade de São Paulo - FME</h4>
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
			<div>As reuniões, realizadas entre dezembro de 2013 e maio de 2014 e que contaram com a participação da <b>APROFEM</b>, têm se restringido a discussões e elaboração do Regimento Interno do Fórum Municipal de Educação, agora em fase final de elaboração/revisão.</div><div> </div><div>Em encontro realizado por integrantes do Fórum, ficou estabelecido que a próxima reunião, em caráter extraordinário, ocorrerá no dia 27 de maio de 2014, às 18 horas, em local a ser confirmado.</div>
		</div>
	</div>
</div>
@endsection