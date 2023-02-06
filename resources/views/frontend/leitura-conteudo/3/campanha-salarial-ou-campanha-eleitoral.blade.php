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
<title>Campanha Salarial ou Campanha Eleitoral?</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Campanha Salarial ou Campanha Eleitoral?</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Campanha Salarial ou Campanha Eleitoral?</h4>
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
			<p><em><sup>Publicado em 29/03/2012</sup></em></p><p><br></p><p class="text-justify">A APROFEM foi criada, há três décadas, para servir de alternativa àqueles servidores que não aceitavam o uso da estrutura sindical para atender a interesses político-partidários pessoais e/ou de grupos.</p><p class="text-justify">Até hoje, atuando em rigorosa consonância com os seus princípios de <b><i>"independência e apartidarismo"</i></b>, direciona sua ação para a incisiva defesa das conquistas e dos direitos dos servidores que representa. A Entidade não tergiversa e procura esgotar todos os canais de diálogo e negociação, antes de cogitar a adoção de estratégia mais dura de mobilização.</p><p class="text-justify">Essa postura de ponderação foi e é entendida pela expressiva maioria dos servidores municipais que a APROFEM representa, respaldando a postura civilizada e respeitosa, mas não menos objetiva e eficaz, dos responsáveis pelos rumos da respeitada APROFEM.</p><p class="text-justify">Um Quadro de Filiados com 50.000 nomes é a melhor constatação desse fato.</p>
		</div>
	</div>
</div>
@endsection