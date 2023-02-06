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
<title>Saúde - Pauta do dia 15/08/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 15/08/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 15/08/2014</h4>
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
			<div>A representação do Governo, por sua vez, esquivou-se, alegando que o PL ainda não está concluído, com algumas pendências a serem resolvidas.</div><div><br></div><div>Como havia sido acertado, anteriormente, que haveria uma apresentação da proposta completa, para apreciação e discussão, as entidades manifestaram seu desagrado frente ao que foi considerado um descaso da Administração.</div><div><br></div><div>E assim, mais uma vez, a reunião encerrou-se com o compromisso do Governo em mandar, via e-mail, toda a proposta, ainda no mesmo dia, e com a marcação de nova reunião para o dia 26/8/2014. </div>
		</div>
	</div>
</div>
@endsection