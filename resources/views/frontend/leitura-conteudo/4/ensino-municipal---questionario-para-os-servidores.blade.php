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
<title>Ensino Municipal - Questionário para os Servidores</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Ensino Municipal - Questionário para os Servidores</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Ensino Municipal - Questionário para os Servidores</h4>
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
			<div><b>Posição da APROFEM<br><br></b></div><div><b>São Paulo, 31 de janeiro de 2014.<br></b></div><div><br></div><div>A <b>APROFEM </b>entende que oportunizar ao servidor a possibilidade de ser consultado individualmente, podendo emitir opiniões e, a seu critério, fornecer informações solicitadas com a expectativa de melhoria das suas condições de desempenho profissional, é iniciativa que não deve merecer óbice prévio por parte da Entidade.</div><div><br></div><div>Trata-se do necessário respeito profissional, deixar a critério de cada interessado a decisão pela sua participação, ao invés de inviabilizar a oportunidade de opinar diretamente junto à SME.</div><div><br></div><div>Por outro lado, surgiram as dúvidas óbvias, motivadoras das nossas críticas e sugestões ao conteúdo do mencionado questionário:</div><div><br></div><div><ul><li><span style="line-height: 1.2;">divulgação prévia e detalhada do escopo dessa iniciativa: no que ela contribuirá para a melhoria das condições de trabalho e valorização dos nossos Profissionais?</span><br></li><li><span style="line-height: 1.2;">assegurar a retirada de qualquer campo destinado a informação que possa identificar o servidor que preencher o questionário, ainda que o seu preenchimento seja optativo;</span><br></li><li><span style="line-height: 1.2;">sugerir a retirada de questões que solicitam informações  sobre salários, aplicações financeiras, bens pessoais, planos de saúde etc. que, a nosso jugo, não são pertinentes ou necessárias;</span><br></li><li><span style="line-height: 1.2;">sugerir a inclusão de questões que contenham alternativa(s) em que o servidor possa assinalar a sua discordância ou concordância com os programas assistencialistas que dilapidam os recursos (dinheiro) da Educação (distribuição massiva e indiscriminada de uniforme escolar, material escolar e didático, Leve-Leite, Programa de Renda Familiar Mínima etc.);<br></span></li><li><span style="line-height: 1.2;">sugerir a inclusão, em questão específica, de campo onde o Profissional possa fornecer detalhes da sua satisfação / insatisfação com o salário que recebe da Prefeitura.<br><br><br></span></li></ul></div><div><b>APROFEM</b></div>
		</div>
	</div>
</div>
@endsection