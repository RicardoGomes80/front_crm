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
<title>Plano Municipal de Educação da Cidade de São Paulo - PME</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Plano Municipal de Educação da Cidade de São Paulo - PME</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Plano Municipal de Educação da Cidade de São Paulo - PME</h4>
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
			<div>Realizou-se, em 16 de junho de 2014, na Câmara Municipal de São Paulo, mais uma reunião do Grupo de Trabalho do Plano Municipal de Educação da Cidade de São Paulo - PME. </div><div>Seguindo o curso das reuniões programadas, as discussões giraram em torno do eixo "Financiamento e Infraestrutura da Educação".</div><div><br></div><div>Presente à reunião, a <b>APROFEM</b>, através de seus representantes, deixou sua habitual contribuição no debate, manifestando-se sobre alguns pontos do referido eixo, considerados críticos. Vale ressaltar que o eixo "Financiamento e Infraestrutura da Educação" - desde as discussões realizadas após a Conferência Municipal de Educação, bem como aquelas que antecederam o envio do PL à Câmara - sempre foi objeto de lembrança e encaminhamento por parte do GT, mas que, sequer foi mencionado no PL enviado à Câmara pela SME.</div><div><br></div>
		</div>
	</div>
</div>
@endsection