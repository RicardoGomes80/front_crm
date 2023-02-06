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
<title>Erratas - Apostila do curso preparatório para o concurso de ATE</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Erratas - Apostila do curso preparatório para o concurso de ATE</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Erratas - Apostila do curso preparatório para o concurso de ATE</h4>
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
			<div><b>Página 52</b></div><div> </div><div>A expressão e (com potenciação) deve ser grafada 3²+10+(2+3)² e não como constou.</div><div> </div><div><b>Página 73</b></div><div> </div><div>As alternativas da questão nº 36 devem ser grafadas da forma abaixo, e não como constou:</div><div><br></div><div><b>a)</b> R$ 490,00</div><div><b>b)</b> R$ 420,00</div><div><b>c) </b>R$ 510,00</div><div><b>d)</b> R$ 535,00</div>
		</div>
	</div>
</div>
@endsection