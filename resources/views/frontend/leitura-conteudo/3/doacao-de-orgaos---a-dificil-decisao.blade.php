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
<title>Doação de órgãos - a difícil decisão</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Doação de órgãos - a difícil decisão</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Doação de órgãos - a difícil decisão</h4>
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
			<p class="text-justify">A Lei Municipal n.º 14.680, de 30/01/2008 e o Decreto n.º 49.400, de 11/04/2008, tratam da Semana de Incentivo à doação de órgãos para transplante e do Dia do Doador de órgãos para transplante e dispõem sobre realização de palestras de conscientização nas escolas da Rede Municipal de Ensino.</p><p class="text-justify">O assunto é delicado e muitos preferem manter-se alheios a ele; entretanto, é fundamental que as pessoas conscientes engajem-se num movimento amplo de divulgação e conscientização junto à população que, invariavelmente, desconhece os procedimentos necessários para assegurar a doação.</p><p class="text-justify">Como a autorização para a retirada dos órgãos deve ser dada pela família, ao ocorrer a morte cerebral do potencial doador - ocasião de extrema emoção e dor, é fundamental que a pessoa avise a sua família de sua intenção de tornar-se um doador de órgãos. Esse gesto, revestido de extrema relevância e nobreza, assegurará qualidade de vida para muitos outros seres humanos, demonstração concreta do preceito bíblico "ama o teu próximo como a ti mesmo".</p><p class="text-justify">A APROFEM está engajada nesta luta e disponibiliza, neste Portal, mais informações e formas de contato para aprofundamento de informações sobre tão relevante tema. VAMOS ADERIR?</p>
		</div>
	</div>
</div>
@endsection