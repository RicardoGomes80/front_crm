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
<title>Gabarito Provisório - Professor de Educação Infantil e Ensino Fundamental I</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Gabarito Provisório - Professor de Educação Infantil e Ensino Fundamental I</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Gabarito Provisório - Professor de Educação Infantil e Ensino Fundamental I</h4>
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
			<div>O Diário Oficial da Cidade publicou no dia 29/07/2014, à página 51, o Gabarito Provisório das Provas do Concurso para Professor de Educação Infantil e Ensino Fundamental I, realizadas no dia 27/07.</div><div><br></div><div>Confira abaixo as alternativas consideradas corretas.</div><div><br></div><div><div><b>Atenção:</b></div><div><ul><li><span style="line-height: 1.2;">O prazo recursal contra o Gabarito da Prova Objetiva será no período de 0h00 de 30/7/2014 até 23h59 de 31/7/2014, no site do <a href="www.ibfc.org.br"><b>IBFC</b></a> , através do link específico do Concurso Público para provimento de cargos vagos de Professor de Educação Infantil e Ensino Fundamental I.</span><br></li><li><span style="line-height: 1.2;">Somente serão analisados os Recursos interpostos em total conformidade ao Capítulo 14, do Edital de Abertura das Inscrições.</span><br></li></ul></div></div>
		</div>
	</div>
</div>
@endsection