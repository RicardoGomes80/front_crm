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
<title>Reduzida a dívida da Prefeitura</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Reduzida a dívida da Prefeitura</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Reduzida a dívida da Prefeitura</h4>
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
			<div style="text-align: left;">No dia 5 de novembro passado, o Senado aprovou um projeto de lei que altera o fator de correção das dívidas que 7 Estados (São Paulo, inclusive) e cerca de 180 Prefeituras (a desta Capital, inclusive e principalmente) têm com a União. A lei, que ainda não havia sido sancionada pela presidente Dilma Rousseff até o fechamento desta edição, reduzirá a dívida da cidade de São Paulo em 42% (ou R$ 26 bilhões), passando de R$ 62 bilhões para R$ 36 bilhões (segundo reportagem do Estadão).</div><div style="text-align: left;"><br></div><div style="text-align: left;">Com essa redução a Prefeitura da Capital, que paga cerca de R$ 4 bilhões por ano em amortização da dívida, terá sua capacidade de investimentos sensivelmente elevada. O prefeito Haddad, um dos líderes do movimento pela aprovação da lei, sempre brandiu a existência da dívida "impagável" como um dos principais fatores impeditivos para a realização de seu programa de metas e, em especial, de maiores investimentos na valorização salarial e profissional dos servidores municipais ativos, aposentados e pensionistas.</div><div style="text-align: left;">O episódio demonstra a irresponsabilidade de alguns, incumbidos de gerir os recursos públicos (ou seja, o dinheiro dos nossos impostos): a dívida original de R$ 11 bilhões, contraída no ano 2000; desde então, a Prefeitura de São Paulo já pagou R$ 25 bilhões e o saldo devedor atual é de R$ 62 bilhões!</div><div style="text-align: left;"><br></div><div style="text-align: left;">A <b>APROFEM</b> aproveita para reiterar, na oportunidade em que divulga essa vitória parcial da Cidade e a sua Pauta Geral de Reivindicações, o sábio e pouco acolhido bordão: "a valorização salarial do servidor público não deve ser considerada despesa, e sim investimento".</div><div style="text-align: left;"><br></div><div style="text-align: left;"><b>P.S. - No dia 26 de novembro passado, o Tribunal de Justiça - São Paulo autorizou o Prefeito da Capital a aumentar o IPTU (Imposto Predial e Territorial Urbano) de 1.600.000 contribuintes. Com o reajuste, a Prefeitura terá uma receita adicional, para 2015, de cerca de R$ 789 milhões.</b></div><div style="text-align: left;"><b>Com isso, desaparece o outro grande fator impeditivo de valorização salarial para os servidores municipais e prenuncia-se uma Campanha Salarial 2015 com grande mobilização de servidores, em busca de salários dignos e respeito profissional.</b></div>
		</div>
	</div>
</div>
@endsection