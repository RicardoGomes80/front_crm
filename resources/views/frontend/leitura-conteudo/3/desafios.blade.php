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
<title>Desafios</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Desafios</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Desafios</h4>
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
			<div>O ano de 2015 se delineia pródigo em dúvidas e questionamentos sobre os rumos das situações política e econômica do País, com as suas inevitáveis decorrências para os governos estaduais e municipais.</div><div><br></div>Consequência da desastrosa orientação econômica na gestão federal findada em dezembro passado, onde a proposta keynesiana de economizar nos tempos de fartura para garantir o sustento na escassez - "política da formiga" - foi, na prática, substituída pela corruptela de "gastar mais nos tempos de escassez, sem nunca poupar na fartura", é notório o crescimento dos índices inflacionários e o descrédito do Brasil junto aos investidores internacionais.<div><br></div><div>Para arrumar a casa e restabelecer a estabilidade fiscal, a atual equipe econômica partiu para o que era de se esperar: <b>cortar gastos e aumentar impostos,</b> ficando o ônus (mais uma vez) nas costas da população economicamente ativa. Já foram anunciadas algumas maldades: "flexibilização de direitos trabalhistas e previdenciários, cortes até mesmo nos recursos da educação da "pátria educadora", criação e aumento de impostos (com aumento da gasolina e outros derivados, quando os preços caem nos países mais estruturados, face à queda do preço do petróleo!) e veto na correção da tabela do Imposto de Renda. É possível, ainda, que a Presidente da República postergue a sanção da lei aprovada pelo Senado, em novembro passado, que reduz a dívida que a cidade de São Paulo tem com a União, com possível prejuízo da esperada elevação da capacidade de investimentos da Prefeitura.<div><br></div><div>Para a parcela trabalhadora e produtiva da população, um recado curto e grosso do Governo Federal: enfrentaremos meses de "contração" (sofisma para "recessão"; em bom português, expectativa de alta de inflação e arrocho).</div><div><br></div><div>É nesse contexto que a <b>APROFEM</b> apresenta suas propostas e estratégias de atuação, na defesa das conquistas e da integridade profissional de seus filiados. Consultando seletivamente o conteúdo deste Portal, o leitor atento constatará a seriedade desse compromisso.</div><div><br></div><div>Da resistência em aceitar a implantação da remuneração por subsídio sem uma negociação de fato, ao compromisso de esclarecimentos frente ao fato consumado; do compromisso em restabelecer, com regularidade e seriedade, as reuniões das Mesas de Negociação do SINP; da expectativa em estabelecer diálogo propositivo com o novo Secretário Municipal de Educação e com os demais interlocutores credenciados pelo Prefeito, com a expectativa de um natural tratamento respeitoso e isonômico frente às Entidades Representativas; da sinalização de que não aceitaremos, inertes, assistir recair sobre os já injustiçados servidores municipais o peso da responsabilidade e os efeitos dessa política perversa, com evidências de descarado assistencialismo já ao longo de várias gestões, comprometendo recursos financeiros destináveis  recomposição salarial digna dos servidores municipais ativos, aposentados e pensionistas.</div><div><br></div><div>Esses são os nossos compromissos frente aos desafios que se apresentam. Que o sentimento "como eu posso contribuir com a Entidade para conquistar o que reivindicamos?" prepondere frente ao recorrente bordão: "o que a Entidade pode fazer por mim?".</div></div>
		</div>
	</div>
</div>
@endsection