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
<title>Saúde - Pauta do dia 24/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 24/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 24/06/2014</h4>
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
			<div>E que, por ora, apresentou apenas as tabelas por jornada dos servidores da Secretaria Municipal de Saúde. Foi esclarecido aos participantes que a expressão "em construção" (na minuta) refere-se à discussão de tópicos que ainda permanecem pendentes de discussões e encaminhamentos.</div><div><br></div><div>O representante do Governo afirmou que o Projeto de Lei deverá ser encaminhado à Câmara Municipal, para apreciação e votação pelos Srs. Vereadores, somente no mês de agosto, após o recesso parlamentar, tendo em vista que ainda é necessário concluir alguns estudos sobre a proposta.</div><div style="text-align: right;"><br></div><div>Ficou também definido um cronograma de discussões pelas Entidades, além de ter sido estabelecida a data de 11/07/2014 para a realização de nova Reunião da Mesa.</div>
		</div>
	</div>
</div>
@endsection