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
<title>O fim... e o recomeço</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">O fim... e o recomeço</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>O fim... e o recomeço</h4>
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
			<p><em><sup>Publicado em 14/12/2012</sup></em></p><p><br></p><p class="text-justify">Mais um ano que se finda, e já estamos mirando o começar de um Novo Ano e de uma nova Gestão Municipal na Capital.</p><p class="text-justify">Em nome da APROFEM, agradeço aos filiados da Entidade, aos nossos parceiros e colaboradores, enfim, a todos que confiaram em nosso trabalho e contribuíram para o crescimento e consolidação da Entidade.</p><p class="text-justify">No decorrer de 2012, foram centenas de milhares de telefonemas, acessos ao Portal APROFEM e às redes sociais que compartilhamos; milhares de quilômetros percorridos pelas nossas Equipes de Assessoria, em visitas às Unidades Municipais; milhares de atendimentos pessoais aos filiados que acorreram à nossa Sede.</p><p class="text-justify">E o afluxo às nossas Colônias de Férias? Altíssimo grau de satisfação por parte dos usuários.</p><p class="text-justify">Nossas lutas? Se mais não conquistamos, deveu-se à insensibilidade do Governo Municipal.</p><p class="text-justify">Nesta saudação, renovo o nosso compromisso de atuação incansável na defesa das conquistas dos servidores municipais, sempre fiéis aos princípios de independência e apartidarismo da Entidade.</p>
		</div>
	</div>
</div>
@endsection