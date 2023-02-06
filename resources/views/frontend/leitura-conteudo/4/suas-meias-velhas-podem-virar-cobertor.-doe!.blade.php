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
<title>Suas meias velhas podem virar cobertor. Doe!</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Suas meias velhas podem virar cobertor. Doe!</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Suas meias velhas podem virar cobertor. Doe!</h4>
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
			<div><b>Dá pra você fazer alguém feliz com um par de meia?</b></div><div><b><br></b></div><div>Dá! Principalmente quando você doa essa meia com amor. Essas são as palavras de Kaká Ferreira, Presidente da ONG Anjos da Noite e parceiro do projeto "Meias do Bem", encabeçado pela marca Puket.</div><div><br></div><div>A ideia é simples e, por isso mesmo, genial a marca Puket já fazia reaproveitamento de sobras de tecido para a criação de cobertores para moradores de rua, e então surgiu a vontade de estimular também os consumidores a ajudarem na doação de meias, pois viram que muitas pessoas doam roupas usadas, mas dificilmente meias.</div><div><br></div><div>O desafio começou aí, com meias velhas de qualquer tipo (rasgadas, gastas, tudo) e, para cada meia doada, a ONG oferece um par de meias novo para moradores de rua. As meias velhas angariadas serão então lavadas, esterilizadas, e servirão de matéria-prima para a construção de cobertores. Ao fim de 40 meias doadas, nasce um novo cobertor.</div><div><br></div><div>Acesse o site <b><a href="http://www.meiasdobem.com.br/" target="blank">MEIAS DO BEM</a> </b>e veja!</div>
		</div>
	</div>
</div>
@endsection