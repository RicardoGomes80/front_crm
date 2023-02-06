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
<title>Cronograma das Reuniões de Representantes Sindicais e Reuniões do Grupo de Assessoria</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Cronograma das Reuniões de Representantes Sindicais e Reuniões do Grupo de Assessoria</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Cronograma das Reuniões de Representantes Sindicais e Reuniões do Grupo de Assessoria</h4>
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
			<div>Reuniões de Representantes Sindicais</div><div>06/03/2014</div><div>24/04/2014</div><div>03/06/2014</div><div>14/08/2014</div><div>01/10/2014</div><div>25/11/2014</div><div>Reuniões do Grupo de Assessoria</div><div>25/02/2014</div><div>14/04/2014</div><div>23/05/2014</div><div>31/07/2014</div><div>23/09/2014</div><div>14/11/2014</div>
		</div>
	</div>
</div>
@endsection