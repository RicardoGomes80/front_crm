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
<title>Audiência Pública sobre o Plano Municipal de Educação (PME) da Cidade de São Paulo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Audiência Pública sobre o Plano Municipal de Educação (PME) da Cidade de São Paulo</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Audiência Pública sobre o Plano Municipal de Educação (PME) da Cidade de São Paulo</h4>
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
			<div>Realizou-se em 27 de setembro de 2014, na Câmara Municipal de São Paulo, a última Audiência Pública relativa ao PME. Em 2014, seis Audiências foram promovidas pela Comissão de Educação, Cultura e Esportes da Câmara para discutir o PL Substitutivo ao PL 415/2012, que "Aprova o Plano Municipal de Educação da Cidade de São Paulo".  </div><div><br></div><div><b>O tema:</b> Financiamento, Gestão Democrática e Regime de Colaboração - foi apresentado pelo Prof. Rubens Barbosa de Camargo (FEUSP).</div><div><br></div><div>Segundo informações da Mesa, a pretensão é concluir o trabalho de relatoria até 30 de outubro de 2014. Novas sugestões poderão ser apresentadas ao Relator da Comissão de Educação, até o dia 7 de outubro de 2014.</div><div><br></div><div><b>A tramitação</b>: Comissão de Educação Cultura e Esportes; Comissão de Finanças e, depois, ao Plenário da Câmara. A Câmara tem prazo para aprovar o PL até julho de 2015, segundo o PNE. Até lá, o Executivo pode enviar um outro PL à Câmara, poderá haver PLs substitutivos elaborados por outros Vereadores e/ou apresentação de emendas. Até o dia da votação final, o PME está aberto a sugestões/alterações.</div>
		</div>
	</div>
</div>
@endsection