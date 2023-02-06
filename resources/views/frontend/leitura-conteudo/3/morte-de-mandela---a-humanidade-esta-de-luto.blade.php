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
<title>Morte de Mandela - a humanidade está de luto</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Morte de Mandela - a humanidade está de luto</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Morte de Mandela - a humanidade está de luto</h4>
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
			<div>A morte de Nelson Mandela, ex-presidente da África do Sul e Prêmio Nobel da Paz (1993), decorrente de problemas respiratórios causados por uma tuberculose contraída durante o longo período (27 anos) em que permaneceu preso, deverá sinalizar um marco indelével na mobilização contra qualquer tipo de discriminação.</div><div><br></div><div>Sua luta contra o apartheid - a brutal segregação a que era submetida a população negra do seu país e o calvário a que foi submetido até ser libertado, em 1990, fê-lo conhecido e respeitado mundialmente. Em liberdade, adotou um discurso e uma postura de conciliação e tolerância. No fim de seu mandato presidencial, renunciou a uma reeleição praticamente certa - o exemplo de desprendimento de um estadista.</div><div><br></div><div>Seu semblante irradiava simpatia, simplicidade, honestidade e cortesia. Admirado e respeitado pelos demais líderes mundiais e idolatrado pelo povo, sua trajetória de vida e atuação deverá permanecer, para sempre, como paradigma de postura àqueles que aspiram dedicar-se a servir a população, através da política. E como estamos precisando disso, já cansados de tanta insensibilidade, hipocrisia e desonestidade!</div><div><br></div><div>Que a saga de Mandela, largamente publicizada com a sua morte, contribua efetivamente para inspirar as consciências e atos de nossos mandatários, fazendo de 2014 o início de uma época com menos injustiças, discriminações e violência.</div><div><br></div><div>Feliz Ano Novo!</div>
		</div>
	</div>
</div>
@endsection