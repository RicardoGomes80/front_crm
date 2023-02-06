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
<title>Mobilização histórica</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mobilização histórica</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mobilização histórica</h4>
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
			<p><em><sup>Publicado em 19/06/2013</sup></em></p><p class="text-justify"><br>Recém-saídos de um emblemático movimento grevista, sob a liderança das suas duas maiores Entidades Sindicais representativas, os Profissionais de Educação Municipais da Capital asseguraram algumas conquistas funcionais e o compromisso, por parte do Governo Municipal, do prosseguimento das negociações visando o aperfeiçoamento da legislação salarial vigente e a revisão das diversas carreiras municipais, que poderá resultar em benefícios para todo o funcionalismo municipal.</p><p class="text-justify">Também relevante foi a atuação conjunta e harmônica das duas Entidades (APROFEM e Sinpeem), defendendo os interesses de seus representados junto ao Governo e acatando as deliberações dos Profissionais presentes aos Atos, de forma democrática e transparente. Foi uma demonstração inconteste da capacidade de pressão por conquistas, decorrente da união dos manifestantes.</p><p class="text-justify">Nos últimos dias, defrontamo-nos com um movimento nacional histórico, naturalmente destacado em São Paulo, onde cidadãos brasileiros de todas as idades, profissões, vertentes e convicções irmanaram-se, reivindicando dos nossos governantes aquilo que entendem nos ser devido por eles, para além do prometido nos respectivos programas eleitorais. Esse movimento, cujos efeitos poderão extrapolar as expectativas mais otimistas, merece o nosso apoio integral. Não sem razão, os políticos, na sua prudência ou afoiteza, também apressaram-se em manifestar apoio e reconhecimento ao pétreo direito dos cidadãos às manifestações dessa natureza.</p><p class="text-justify">O que temos que repudiar e lamentar é a movimentação dos oportunistas que, inclusive afrontando as orientações das lideranças naturais do movimento, aproveitam para tumultuar, agredir, depredar, saquear e perpetrar tantas outras ações impertinentes, potencialmente capazes de macular e distorcer o relevante escopo da mobilização. Em nossos encaminhamentos de mobilização, corporativos e específicos, as preocupações dessa natureza não são menores.</p>
		</div>
	</div>
</div>
@endsection