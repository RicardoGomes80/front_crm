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
<title>Aqui se faz, aqui se paga</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Aqui se faz, aqui se paga</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Aqui se faz, aqui se paga</h4>
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
			<p><em><sup>Publicado no Jornal APROFEM - Janeiro/Fevereiro 2011</sup></em><br></p><p><br></p><p class="text-justify">Com este título, recentemente a entidade coirmã UDEMO (representativa de gestores educacionais da rede estadual) editou feliz matéria em seu jornal, lembrando que a gestão estadual do ex-governador candidato a Presidente da República, notabilizada pelo arrocho e tratamento indigno frente aos servidores estaduais paulistas (N. do Editor - O que também ocorreu enquanto esteve como Prefeito da Capital) não seria por eles esquecida, negando-lhe, nas urnas, os seus votos, bem como os de seus familiares e demais eleitores do seu círculo de relacionamento.</p><p class="text-justify">E mais: que a sua "fama" já chegara aos servidores federais de todo o Brasil, provocando uma natural preocupação e mobilização contra a sua vitória na eleição.</p><p class="text-justify">O resultado, todos conhecemos. Que a mobilização dos servidores contribuiu para a sua derrota, é fato incontestável.</p><p class="text-justify">Tal lembrança vem a propósito do Prefeito Kassab e de suas pretensões políticas. No afã de credenciar-se como candidato a governador, em 2014, tem tomado decisões amplamente divulgadas pela mídia: gestões para troca de partido, acomodação de políticos sem cargo na administração municipal, empenho na eleição do Presidente da Câmara Municipal, direcionamento dos recursos municipais para obras de maior visibilidade política etc..</p><p class="text-justify">Enquanto isso, os servidores municipais continuam relegados a plano inferior nas prioridades do Governo Municipal - sem Plano de Revalorização Salarial consistente, segmentos significativos de servidores municipais enfrentam toda sorte de adversidades.</p><p class="text-justify">As propostas para a superação desses problemas encontram-se na Pauta de Reivindicações, para 2011, da APROFEM. Elas serão defendidas nas Mesas de Negociação e a Entidade incumbir-se-á de dar publicidade também ao funcionalismo estadual, através de suas entidades representativas, das decisões do atual Prefeito.</p><p class="text-justify">Assim, se ele pretende credenciar-se para vôos políticos mais ambiciosos, que comece por arrumar a sua própria casa, valorizando os servidores municipais da Capital.</p><div class="text-justify">Ou, então ... "aqui se faz, aqui se paga!"</div>
		</div>
	</div>
</div>
@endsection