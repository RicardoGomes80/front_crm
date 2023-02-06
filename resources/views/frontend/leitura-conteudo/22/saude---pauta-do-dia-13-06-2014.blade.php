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
<title>Saúde - Pauta do dia 13/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 13/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 13/06/2014</h4>
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
			<div>O representante do Governo anunciou que o Projeto de Lei sobre a reestruturação das carreiras da Saúde já se encontra na Procuradoria Geral do Município para análise final e eventuais correções, do ponto de vista jurídico.</div><div><br></div><div>Por ser um projeto muito amplo, com características peculiares, ficou acertado que as Entidades receberiam uma cópia no dia 18/06, quarta-feira, por meio eletrônico.</div><div><br></div><div>Nova Reunião ficou marcada para o dia 24/06, quando as Entidades já terão tido oportunidade de enviar suas considerações sobre o Projeto de Lei.</div><div><br></div><div>Ficou também acordado que o PL deverá dar entrada na Câmara até o dia 27/06.</div>
		</div>
	</div>
</div>
@endsection