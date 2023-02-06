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
<title>Representantes sindicais da APROFEM decidem por paralisação do dia 28/04/14</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Representantes sindicais da APROFEM decidem por paralisação do dia 28/04/14</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Representantes sindicais da APROFEM decidem por paralisação do dia 28/04/14</h4>
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
			<div>Durante a Reunião de Representantes Sindicais da <b>APROFEM</b>, ocorrida em 24/04/2014, após ouvirem a explanação detalhada de todas as propostas do Governo para a data-base de maio de 2014, bem como dos encaminhamentos feitos pelos Sindicatos, nas Mesas Central e Setoriais da Educação e dos avanços conseguidos através do processo de negociação, deliberou-se, por ampla maioria, pelo seguinte:</div><div><br></div><div>No dia 25/04/14: em suas respectivas Unidades Educacionais, os Representantes Sindicais esclarecerão seus pares sobre a deliberação havida em relação aos rumos da Campanha Salarial 2014;</div><div><br></div><div>No dia 28/04/14: paralisação, com manifestação em frente ao Gabinete do Prefeito, com início às 14 horas, em conjunto com as demais Entidades que compõem o Fórum de Entidades Sindicais do Município;</div><div><br></div><div>No ato do dia 28/04/14, a <b>APROFEM</b> acolherá as deliberações da categoria, lá representada. </div>
		</div>
	</div>
</div>
@endsection