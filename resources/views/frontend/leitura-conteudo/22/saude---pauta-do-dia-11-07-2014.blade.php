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
<title>Saúde - Pauta do dia 11/07/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 11/07/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 11/07/2014</h4>
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
			<div>E que, por ora, só foi apresentado de maneira parcial e incompleta, contendo, apenas, as tabelas por jornada dos servidores da Secretaria Municipal de Saúde. As entidades solicitaram ao Governo que apresente o projeto na íntegra, inclusive com todos os anexos.</div><div><br></div><div>O representante do Governo reiterou que o Projeto de Lei deverá ser encaminhado à Câmara Municipal, para apreciação e votação pelos Srs. Vereadores, somente no mês de agosto, após o recesso parlamentar, tendo em vista que ainda é necessário concluir alguns estudos sobre a proposta.</div><div><br></div><div>Sobre a questão do enquadramento dos funcionários das autarquias, o representante do HSPM informou que ocorrerá uma reunião no dia 15/07, para definir algumas pendências.</div><div><br></div><div>No que se refere aos servidores que atuam nos CEIs, relativamente à sua transferência para a Secretaria Municipal de Educação, a solicitação foi enviada à SME, onde obteve boa acolhida.</div><div>No encerramento desta, foi estabelecida a data de 31/07/2014 para a realização de nova Reunião da Mesa Setorial da Saúde.</div>
		</div>
	</div>
</div>
@endsection