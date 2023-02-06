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
<title>Passadas as eleições...</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Passadas as eleições...</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Passadas as eleições...</h4>
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
			<div>Os brasileiros que compareceram às urnas sufragaram, por estreita margem de votos, a continuidade da presidente Dilma Rousseff por mais um mandato. Para o governo paulista também foi reconduzido o governador Geraldo Alckmin, eleito no primeiro turno com folgada maioria de votos.</div><div><br></div><div>Para os legislativos, os paulistas protagonizaram uma acanhada renovação. Dentre os (re)eleitos, pouquíssimos são os que assumiram compromissos exequíveis em relação às lutas dos servidores públicos e, também, aos interesses específicos dos professores e demais educadores das redes públicas.</div><div><br></div><div>As estratégias das campanhas foram pródigas na divulgação do grotesco, do ataque inconsequente (e que se revelou eficaz!) que direcionou o sentimento de grande parte da população para um preocupante antagonismo de classes sócio-econômicas, repercutido à exaustão nas redes sociais.</div><div><br></div><div>Ao cidadão brasileiro cabe acatar e respeitar o democrático resultado das urnas, continuar cumprindo com as suas obrigações e acompanhar criticamente a concretização das promessas de campanha... E que Deus, brasileiro, nos proteja e ainda faça chover nas cabeceiras de nossas represas.</div>
		</div>
	</div>
</div>
@endsection