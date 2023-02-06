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
<title>Com o nosso dinheiro não, Sr. Prefeito!</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Com o nosso dinheiro não, Sr. Prefeito!</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Com o nosso dinheiro não, Sr. Prefeito!</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Setembro/Outubro 2009</sup></em></p><p class="text-justify">Com esta incisiva chamada, há algum tempo a APROFEM denunciou os gastos com propaganda pela Prefeitura (R$ 78,8 milhões); o corte de recursos para varrição e limpeza da cidade (atulhada de lixo e detritos, com o agravamento das enchentes); o aumento (300%!) dos salários dos secretários municipais e da vice-prefeita (cuja repercussão negativa provocou seu engavetamento provisório, segundo a mídia); e a iniciativa da lei para pagar bônus aos policiais estaduais.</p><p class="text-justify">Tudo isso contrapondo-se a um anunciado reajuste linear simbólico para o funcionalismo municipal da Capital (0,01%), justificado pela pretensa inexistência de recursos para a efetiva revalorização salarial dos servidores.</p><p class="text-justify">Os policiais militares e civis que exercerem "atividade municipal delegada ao Estado de São Paulo por meio de convênio celebrado com o Município de São Paulo" receberão gratificação mensal de até R$ 1.645 (oficiais da PM e delegados de polícia), e de até R$ 1.233 (demais PMs e policiais civis).</p><p class="text-justify">A APROFEM reitera: "a Polícia Militar e a Polícia Civil fazem parte do funcionalismo estadual (o orçamento do Estado de São Paulo só é menor que o orçamento do próprio Brasil!), cujo governador é que tem a obrigação de assegurar os salários dignos que aquelas corporações (a exemplo da maioria do funcionalismo estadual) merecem, mas não recebem".</p><p class="text-justify">A Entidade manifesta sua estranheza com essas concessões, somadas à notícia "Obras de vereadores terão R$ 142 milhões, dos quais R$ 71 milhões já foram liberados para obras como campos de grama sintética, criação de pista de cooper e construção de um estádio na zona leste" (FSP, 17/09/2009, C3), convivendo com dados de queda da arrecadação municipal e congelamento da verba da Saúde (menos R$ 644,4 milhões).</p><p class="text-justify">Os servidores municipais devem permanecer mobilizados e acompanhando o desenrolar dos fatos. A APROFEM persistirá na luta pela manutenção das conquistas dos servidores municipais e da aplicação dos recursos existentes na sua revalorização salarial.</p>
		</div>
	</div>
</div>
@endsection