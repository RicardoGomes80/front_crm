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
<title>Vagas para Professores de Ens. Fund. I</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Vagas para Professores de Ens. Fund. I</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Vagas para Professores de Ens. Fund. I</h4>
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
			<div><b>CIEJA Santo Amaro - EJA informa que duas turmas encontram-se sem Professor Fund. I em sua Unidade:</b></div><div><br></div><div><ul><li><span style="line-height: 1.2;">Trinta (30) aulas das 7h30 às 12h15 - alfabetização adultos - Módulo I;</span><br></li><li><span style="line-height: 1.2;">Trinta (30) aulas das 17h30 às 22h15 - alfabetização continuidade - Módulo II;</span><br></li><li><span style="line-height: 1.2;">JEIF às 3ª feiras, das 13h às 16h;</span><br></li><li><span style="line-height: 1.2;">JEIF às 5ª feiras, das 14h20 às 17h20.</span><span style="line-height: 1.2;"> <br><br></span></li></ul></div><div><b>Solicitação da Coordenadoria Geral da Unidade, recebida em 11/07/2014.</b></div>
		</div>
	</div>
</div>
@endsection