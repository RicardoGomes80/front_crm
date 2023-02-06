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
<title>Saúde - Pauta do dia 09/09/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 09/09/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 09/09/2014</h4>
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
			<div>Que reestruturará o Quadro dos Profissionais de Saúde, indicando que o próximo passo será a preparação de um texto para o Protocolo, a ser apresentado na próxima  Reunião, agendada para o dia 19/09/2014, versando sobre o possível acordo entre as bancadas para o registro da negociação sobre o tema.</div><div><br></div><div>O representante do governo informou que a tramitação do PL pelas diversas instâncias administrativas, que precedem o seu envio à Câmara Municipal de São Paulo poderá levar algum tempo ainda,  mas afirmou que procurarão agilizar ao máximo.</div>
		</div>
	</div>
</div>
@endsection