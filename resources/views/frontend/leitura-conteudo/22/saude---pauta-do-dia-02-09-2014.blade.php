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
<title>Saúde - Pauta do dia 02/09/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 02/09/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 02/09/2014</h4>
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
			<div>Além das questões enviadas, havia ainda algumas outras que as Entidades gostariam de acrescentar. Assim sendo, houve concordância, de ambas as partes, de que todas as propostas fossem agrupadas em um único documento, a ser enviado até o dia 05/09. A partir dos prováveis consensos a que as partes chegarem, deverá ser elaborado um Protocolo de Negociação, que deverá acompanhar o Projeto de Lei a ser enviado à Câmara.</div><div> </div><div>Nova Reunião foi marcada para o dia 09/09 às 14 horas para finalização da redação do texto do Projeto de Lei que reestruturará as carreiras das carreiras da saúde do Município de São Paulo.</div>
		</div>
	</div>
</div>
@endsection