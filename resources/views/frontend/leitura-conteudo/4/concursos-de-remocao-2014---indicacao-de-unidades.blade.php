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
<title>Concursos de Remoção 2014 - Indicação de Unidades</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Concursos de Remoção 2014 - Indicação de Unidades</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Concursos de Remoção 2014 - Indicação de Unidades</h4>
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
			<div>Através do Comunicado nº 1.584, de 14/10/2014, o Diário Oficial do Município do dia 15/10/2014 à <b>página 40</b>, traz a informação de que os servidores inscritos no Concurso de Remoção deverão indicar a(s) unidade(s) para onde pretendem se remover, no período de 20/10 a 24/10.</div><div><br></div><div>Os servidores que não procederem à indicação de pelo menos 01 (uma) Unidade, serão automaticamente considerados desistentes do Concurso, exceto os inscritos de ofício.</div><div>As indicações poderão ser realizadas nas unidades de exercício/lotação durante o seu horário de funcionamento, ou via internet através do site -> <b><a href=" http://eolservidor.prefeitura.sp.gov.br" target="blank">EOL RECURSO HUMANOS</a></b></div><div><br></div><div>Os servidores inscritos de ofício que preferirem proceder à indicação de unidade via internet, deverão solicitar ao operador do Sistema Escola On-line, o seu cadastramento como operador do sistema, informando o e-mail por meio do qual receberão a senha para efetuar a indicação.</div><div><br></div><div>Caberá às chefias imediatas, sob pena de responsabilidade funcional, dar ciência expressa do contido no referido Comunicado aos inscritos nos Concursos de Remoção/2014, bem como gerenciar o processo de indicação/digitação de unidades indicadas pelos servidores, assegurando o cumprimento do prazo fixado.</div><div><br></div><div>Na mesma publicação há, também, informações sobre todos os procedimentos necessários para a indicação das unidades.</div>
		</div>
	</div>
</div>
@endsection