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
<title>APROFEM participa de Seminário na Câmara Municipal</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">APROFEM participa de Seminário na Câmara Municipal</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>APROFEM participa de Seminário na Câmara Municipal</h4>
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
			<div>Realizou-se, em 3 de junho de 2014, no Salão Nobre da Câmara Municipal de Vereadores da Cidade de São Paulo, o Seminário "Violência nas Escolas", promovido pelo Vereador Eliseu Gabriel.</div><div><br></div><div>Abrilhantaram o evento com seus pronunciamentos: Prof. Waldir Romero e Prof. Braz Rodrigues Nogueira (Relatos de Prática) e Beatriz de Paula Souza e Vitor Henrique Paro (Conferencistas).</div><div><br></div><div>Compondo a primeira mesa, que contou com a participação de outras Entidades, a <b>APROFEM</b> pode se manifestar na abertura dos trabalhos parabenizando a iniciativa do Vereador Eliseu Gabriel e apresentando as ações desenvolvidas por nossa Entidade, relativamente ao tema do Seminário.</div><div><br></div>
		</div>
	</div>
</div>
@endsection