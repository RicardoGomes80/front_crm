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
<title>Reivindicar com dignidade</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Reivindicar com dignidade</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Reivindicar com dignidade</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Março/Abril 2010</sup></em></p><p class="text-justify">Conforme anunciado, a APROFEM entregou aos interlocutores do Governo Municipal a sua Pauta de Reivindicações para 2010, com destaque para os pontos que defenderá na Campanha Salarial deste ano, posto que se aproxima a data-base dos servidores municipais da Capital (maio).</p><p class="text-justify">O encaminhamento da referida Pauta, contendo pontos inéditos sugeridos pelos nossos filiados e acolhidos pela Entidade, foi fruto de deliberação ocorrida em recente Reunião de Representantes Sindicais. Seu teor pode ser consultado no Portal APROFEM. Defendê-los nas Mesas de Negociação, com a expectativa de superar a recorrente resistência do Governo Municipal, será o nosso desafio.</p><p class="text-justify">A nossa Entidade, regida pelos princípios da independência e do apartidarismo, tem como meta de crescimento atingir, em breve, 50 mil filiados. A viabilidade do cumprimento desta meta decorre da reconhecida seriedade e transparência que regem os atos de seus diretores e funcionários.</p><p class="text-justify">E é pelo compromisso da preservação dessa imagem e da intransigente defesa da ampliação das conquistas dos servidores municipais, que honrosamente representamos, que nos manteremos mobilizados e atuantes.</p><p class="text-justify">"A união faz a força" - a APROFEM conclama o conjunto das Entidades Representativas para uma atuação conjugada e planejada, refratária a provocações e manipulações. Afinal, a lógica dita que os nossos interesses devem ser comuns.</p><p class="text-justify">O conjunto do funcionalismo municipal deve permanecer mobilizado e, imperando o bom-senso, a negociação poderá chegar a bom termo. Reinando a intransigência e esgotadas as tratativas administrativas, as instâncias deliberativas da Entidade poderão ser acionadas para definir os rumos a serem tomados.</p><p><br></p>
		</div>
	</div>
</div>
@endsection