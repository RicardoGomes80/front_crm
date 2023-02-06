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
<title>Afronta aos Servidores Municipais</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Afronta aos Servidores Municipais</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Afronta aos Servidores Municipais</h4>
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
			<p class="text-justify">O Prefeito da Capital enviou projeto de lei à Câmara Municipal (DOC de 5/8/2010), dispondo sobre uma gratificação destinada a servidores das carreiras de níveis básico e médio de alguns quadros da Prefeitura. A posição de repúdio da APROFEM quanto à política de gratificações (nociva aos interesses dos servidores) e ao fato de não ter sido motivo de negociação em Mesa, já é sobejamente conhecida.</p><p class="text-justify">Entretanto, o referido projeto também traz a proposta de um reajuste de 0,01% (um centésimo por cento!) a partir de 1º de maio de 2009 e de outro 0,01%, a partir de 1º de maio de 2010, em cumprimento ao disposto no inciso X do artigo 37 da Constituição Federal (g.n.).</p><p class="text-justify">Afirmar que essa proposta cumpre o que prevê a Constituição é, no mínimo, questionável, já que uma "Constituição Cidadã" não preveria a possibilidade desse acintoso "reajuste" (Atenção servidor: para cada R$ 100 do seu salário-base, a proposta o reajusta em R$ 0,01 - um centavo de real, a cada um dos dois anos!)</p><p class="text-justify">Independentemente da nossa esperança e propósito de convencer os vereadores da Capital a rechaçar essa vexatória proposta já na etapa de análise pelas Comissões, sem cairmos na "arapuca" de inviabilizar/retardar a aprovação da gratificação a ser criada pelo mesmo projeto, já é de se registrar quão indigna e descomprometida é a postura desse Governo Municipal, ao repetir repudiadas práticas de gestões anteriores.</p><p class="text-justify">Nossa obrigação é de denunciar, protestar, agir para reverter essas práticas e esperar que os servidores afetados dêem o troco!!!</p>
		</div>
	</div>
</div>
@endsection