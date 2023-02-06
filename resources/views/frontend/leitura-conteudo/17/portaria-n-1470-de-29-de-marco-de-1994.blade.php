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
<title>Portaria n° 1.470, de 29 de março de 1994</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Portaria n° 1.470, de 29 de março de 1994</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Portaria n° 1.470, de 29 de março de 1994</h4>
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
			<div>Domingo, 30 de março de 1996, pág. 16</div><div><span rel="line-height: 1.2;"><br></span></div><div><span rel="line-height: 1.2;">O Secretário Municipal da Educação, no uso de suas atribuições legais e considerando o disposto no Decreto nº 3.390, de </span><span rel="line-height: 1.2;">01 de novembro de 1993, </span><span rel="line-height: 1.2;">RESOLVE:</span></div><div><br></div><div><b>Art 1º -</b> Aplica-se aos profissionais do Quadro do Magistério com restrição de função o disposto nos artigos 4º, 6º, 9º, 16 e 20 da Portaria nº 1.887, de 5 de março de 1993 e Portaria nº 2.093, de 13 de abril de 1994.</div><div><br></div><div><b>Art 2º -</b> Esta Portaria entrará em vigor na data de sua publicação, revogadas as disposições em contrário.</div>
		</div>
	</div>
</div>
@endsection