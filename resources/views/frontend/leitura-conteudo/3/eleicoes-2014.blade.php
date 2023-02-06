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
<title>Eleições 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Eleições 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Eleições 2014</h4>
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
			<div>Aproximam-se as eleições majoritárias, onde o povo brasileiro escolherá os governantes e os legisladores responsáveis pelo destino dos estados e do país pelos próximos quatro anos e, a partir de sua atuação, por lapso temporal que poderá perpassar gestões, e até gerações.</div><div><br></div><div>A APROFEM, não obstante seu rígido compromisso de atuação baseada nos princípios de apartidarismo e independência, mais uma vez submete aos seus 55.000 filiados, aos seus familiares e integrantes do seu círculo de relacionamento, bem como aos demais cidadãos que se dispuserem a ler e ponderar acerca dessas ponderações, que refletem considerações recorrentes mas não menos importantes e necessárias para que o democrático ato de votar signifique, de fato, a contribuição de cada um para a eleição dos que realmente representem as aspirações majoritárias da população e, onde couber, também defensores dos interesses corporativos dos servidores públicos.</div><div><br></div><div>Para tanto, é imperativo que o voto seja tão consciente quanto possível, inteirando-se previamente o eleitor das propostas e compromissos dos postulantes. Deparando-se com a mesmice dos discursos, é relevante a troca de impressões e informações com interlocutores qualificados, auscultando precedentes dos candidatos nas vidas pública, profissional e privada. O acompanhamento do noticiário, dos editoriais e das opiniões divulgadas pela mídia escrita, falada ou televisiva também é interessante, apesar da tendenciosidade explícita ou subliminar quase sempre presente, exigindo uma filtragem crítica do eleitor.</div><div><br></div><div>Agindo dessa forma, daremos nossa contribuição para que Presidente da República, Governadores, Senadores, Deputados Federais, Estaduais e Distritais, uma vez eleitos, possam trabalhar, de fato, em prol da população e, em especial, respeitando e valorizando os servidores públicos.</div>
		</div>
	</div>
</div>
@endsection