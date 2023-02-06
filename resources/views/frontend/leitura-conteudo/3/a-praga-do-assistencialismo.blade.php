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
<title>A praga do assistencialismo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">A praga do assistencialismo</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>A praga do assistencialismo</h4>
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
			<p class="text-justify">Entra prefeito, sai prefeito... e o problema permanece.</p><p class="text-justify">Desde quando certos políticos descobriram que "dar o peixe ao invés de ensinar a pescar" (prática indiscriminada do assistencialismo) rende mais votos junto à população social, cultural e economicamente desfavorecida, passou-se à utilização distorcida dos recursos destinados à Educação na Capital.</p><p class="text-justify">Para demonstrar o que aconteceu em 2008:<br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify"><span rel="line-height: 1.2;">R$ 171 milhões foram gastos no Programa de Garantia da Renda Familiar Mínima (o pai ou responsável ganha um valor mensal, pela contrapartida de colocar o filho na escola!).</span></li><li class="text-justify"><span rel="line-height: 1.2;">R$ 169 milhões no Programa Leve-Leite (distribuição de Leite Ninho para as famílias, com o critério único de assiduidade do aluno). Em tempo: este ano, o valor gasto poderá aumentar R$ 34 milhões, para que a entrega seja feita pelos Correios.</span></li><li class="text-justify"><span rel="line-height: 1.2;">R$ 45 milhões em uniformes escolares e R$ 100 milhões em transporte escolar.</span></li><li class="text-justify"><span rel="line-height: 1.2;">TOTAL: R$ 485 milhões (quase meio bilhão de reais!), e não tratamos da terceirização da alimentação escolar e dos serviços operacionais, para não polemizar ainda mais.</span></li></ul></div><div class="text-justify"><span rel="line-height: 1.2;">Nosso questionamento originou-se, basicamente, da inexistência de um critério seletivo para oferecer o alimento, o uniforme e o material escolar, para quem realmente deles precisa; no caso da Renda Mínima, além da discordância quanto à sua concepção, resta nossa indignação pela utilização da verba da Educação Municipal para este fim, nunca suficiente quando se fala em revalorizar salarialmente os seus Profissionais. </span></div><div class="text-justify"><span rel="line-height: 1.2;"><br></span></div><div class="text-justify"><span rel="line-height: 1.2;"><b>QUEM DEMONSTRARÁ CORAGEM PARA REVERTER ESTE QUADRO?</b></span></div>
		</div>
	</div>
</div>
@endsection