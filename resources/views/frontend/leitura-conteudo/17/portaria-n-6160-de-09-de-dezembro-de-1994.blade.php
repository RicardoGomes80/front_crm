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
<title>Portaria nº 6.160, de 09 de dezembro de 1994</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Portaria nº 6.160, de 09 de dezembro de 1994</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Portaria nº 6.160, de 09 de dezembro de 1994</h4>
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
			<p>Altera a redação do Artigo 7º da Portaria nº 1.887, de 5 de março de 1993, que regulamenta a situação funcional do Profissional do Ensino Readaptado.</p><div><br></div><div>O Secretário Municipal de Educação, no uso de suas atribuições legais, <span rel="line-height: 1.2;">RESOLVE:</span></div><div><br></div><div><b>Art. 1º -</b> O Artigo 7º, da Portaria nº 1.887 de 5 de março de 1993, passa a vigorar com a seguinte redação:</div><div><br></div><div>"<b>Art. 7º -</b> Os Profissionais da Educação do Quadro do Magistério, pertencentes à Classe III da carreira, portadores de Laudo Médico Definitivo, cumprirão sua jornada de trabalho na DREM a qual pertencer a sua Unidade Escolar de lotação, respeitado o módulo constante do anexo desta Portaria.</div><div><br></div><p>Parágrafo único - Os servidores a que se refere o "caput" deste Artigo, portadores de Laudos Médicos Temporários, cumprirão, igualmente a sua jornada de trabalho na DREM à qual pertencer a sua Unidade Escolar de lotação, independentemente do módulo constante do anexo desta Portaria."</p><div><br></div><div><b>Art. 2º - </b> Esta Portaria entrará em vigor na data de sua publicação, revogadas as disposições em contrário.</div>
		</div>
	</div>
</div>
@endsection