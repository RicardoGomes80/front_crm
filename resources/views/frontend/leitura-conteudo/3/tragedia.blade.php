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
<title>Tragédia</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Tragédia</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Tragédia</h4>
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
			<p><em><sup>Publicado em 13/04/2011</sup></em></p><p class="text-justify">Todos assistimos, estupefatos, a tragédia que se abateu sobre a comunidade escolar da escola municipal de Realengo, na cidade do Rio de Janeiro e, por extensão, sobre toda e qualquer pessoa do bem.</p><p class="text-justify">O desafio que ora se apresenta para as equipes escolares de todo o país é de como proceder para que o brutal e inusual atentado, perpetrado por um desequilibrado mental e espiritual, não comprometa o acesso dos pais ou responsáveis pelas nossas crianças e jovens à unidade educacional, para participar de reuniões ou outros eventos, conversar com os Profissionais de Educação, participando ativamente da ação educativa.</p><p class="text-justify">Que a tragédia de Realengo, por cujas vítimas devemos orar, oportunize uma reflexão sobre as formas de violência que assolam o Brasil e o restante do planeta, e adoção de medidas inibidoras eficazes, prevalecendo o bom senso, harmonia, integração e respeito nas relações entre os educadores e o restante da população.</p>
		</div>
	</div>
</div>
@endsection