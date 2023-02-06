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
<title>Reajustes salariais</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Reajustes salariais</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Reajustes salariais</h4>
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
			<p class="text-justify">Aos servidores da Câmara Municipal e do Tribunal de Contas do Município de São Paulo foi concedido, a partir de 1º de março de 2010, 4,84% a título de reajuste anual na data - base mais 6,01% a título de reposição parcial de perdas inflacionárias do período de fevereiro de 2004 a fevereiro de 2008 (DOC 30/03/2010, última página).</p><p class="text-justify">O Poder Executivo(Prefeito) já conhece a proposta da APROFEM de adoção de um Plano de Reposição de Perdas Inflacionárias para os servidores da Administração Direta - ativos, aposentados e pensionistas, não tendo ainda iniciado a negociação coletiva legalmente prevista.</p><p class="text-justify">O conjunto do funcionalismo municipal tem sido penalizado com a inexistência de reajustes quadrimestrais e anuais legalmente previstos(salvo se alguém entender que a concessão de 0,01% ou 0,1%, a guisa de reajustes anuais em anos pretéritos, não se constituíram em real afronta aos servidores).</p><p class="text-justify">A APROFEM entende ser um precedente relevante(sem entrar no mérito dos percentuais concedidos) a concessão de reposição por parte da Câmara e do TCM. Discutirá, com o Governo Municipal, a adoção de postura semelhante.</p><p class="text-justify">(A Pauta de Reivindicações 2010 da APROFEM está disponível para consulta neste Portal).</p>
		</div>
	</div>
</div>
@endsection