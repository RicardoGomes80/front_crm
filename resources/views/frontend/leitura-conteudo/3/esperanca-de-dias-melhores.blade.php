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
<title>Esperança de dias melhores</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Esperança de dias melhores</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Esperança de dias melhores</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Janeiro/Fevereiro 2013 </sup></em></p><p class="text-justify"><br></p><p class="text-justify">As coisas já se afiguraram diferentes com o inédito e histórico comparecimento no período pré-eleições, à Sede da APROFEM, dos principais candidatos à cadeira de Prefeito da Capital. Todos tiveram oportunidade de expor seus programas e, além de ouvir, levaram documento contendo as reivindicações da Entidade.</p><p class="text-justify">Logo no início da gestão do prefeito eleito Fernando Haddad, a APROFEM recebeu a também inédita e honrosa visita do prof. Cesar Callegari, Secretário Municipal de Educação. Para além do pertinente simbolismo político e logístico da visita, pode o sr. Secretário discorrer sobre os propósitos e desafios da sua missão: acomodar a demanda não atendida de crianças e buscar a educação de qualidade, sem descurar da valorização dos Profissionais de Educação - síntese da pré-anunciada plataforma de atuação do prefeito Haddad, na área da Educação.</p><p class="text-justify">Conhecido e respeitado profissional, tradicional palestrante nos Congressos da APROFEM, o agora Secretário Cesar Callegari é uma das maiores autoridades em legislação educacional, mormente de seus recursos e conselhos de acompanhamento/fiscalização (FUNDEB), e na estruturação de seus sistemas. De diálogo fácil e posicionamento transparente e objetivo, Callegari poderá empreender eficiente gestão, se lhe forem asseguradas as condições e o apoio para tanto.</p><p class="text-justify">As demais Secretarias e as Subprefeituras serão contactadas pela APROFEM, na busca por diálogos semelhantes e que possam resultar em atendimento às expectativas dos servidores municipais da Capital. Os vereadores da Câmara Municipal e o IPREM serão acionados, no que couber, com as mesmas finalidades.</p><p class="text-justify">O contraponto ficou por conta da recente decisão do Prefeito de congelar 12% do orçamento municipal de 2013 (R$ 5,2 bilhões), com <b><i>"... a ordem de tocar apenas obras que tenham dinheiro reservado em caixa ou sejam consideradas prioridades, especialmente nas áreas da Saúde e Educação".</i></b> (Estadão, 15/01/2013, C1).</p><p class="text-justify">As reivindicações da APROFEM, amplamente divulgadas, serão debatidas e defendidas pelos representantes da Entidade junto aos interlocutores do Governo Municipal, em diálogos objetivos nas instâncias que se fizerem necessárias. O aceno com um crédito de confiança à uma gestão que se inicia, com um programa de governo julgado consistente nas urnas eleitorais, deverá preceder e balizar as nossas ações, mantendo, contudo, o funcionalismo municipal permanentemente mobilizado para a adoção de outras estratégias, se restarem frustradas as expectativas emergenciais da categoria.</p>
		</div>
	</div>
</div>
@endsection