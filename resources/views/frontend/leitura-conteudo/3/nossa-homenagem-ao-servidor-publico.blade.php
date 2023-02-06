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
<title>Nossa homenagem ao Servidor Público</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nossa homenagem ao Servidor Público</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nossa homenagem ao Servidor Público</h4>
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
			<p class="text-justify">O mês de outubro é emblemático, sobretudo para nós, da APROFEM: comemora-se o Dia da Criança e da Padroeira do Brasil, o Dia do Professor, o Aniversário da APROFEM (28 anos de salutar e combativa existência) e o Dia do Servidor Público.</p><p class="text-justify">O nosso sentimento é perene: o que resta para comemorar? No que concerne aos nossos governantes (patrões), nada há que se comemorar.</p><p class="text-justify">Afinal, os professores e, de resto, o conjunto do funcionalismo público municipal e estadual, não são salarialmente valorizados há muito tempo. Homenagens esfarrapadas e desculpas ainda mais não deixarão de aparecer, realçando a hipocrisia e falsidade que as permeiam.</p><p class="text-justify">A APROFEM reitera sua honra e seu compromisso na representação da categoria, assegurando que não esmorecerá na luta pela defesa das conquistas do servidor e para que ele receba, mais que afagos e circo, a real recompensa pelo seu nobre trabalho.</p>
		</div>
	</div>
</div>
@endsection