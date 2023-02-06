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
<title>Republicação da Portaria de Dispensa de Ponto para os Eventos Sindicais da APROFEM e providências urgentes de eleição / escolha dos Representantes Sindicais da Entidade</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Republicação da Portaria de Dispensa de Ponto para os Eventos Sindicais da APROFEM e providências urgentes de eleição / escolha dos Representantes Sindicais da Entidade</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Republicação da Portaria de Dispensa de Ponto para os Eventos Sindicais da APROFEM e providências urgentes de eleição / escolha dos Representantes Sindicais da Entidade</h4>
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
			<div>A APROFEM postará nos correios, nesta 3Âª feira (25/02), correspondência endereçada às Chefias das Unidades Educacionais (UEs) e das Unidades Regionais e Centrais da SME, composta da carta e informações complementares cujos teores seguem em anexo, juntamente com uma versão ampliada da Ata da Eleição de Representantes Sindicais 2014 para ser preenchida, já adequada à eleição / escolha de 3 (três) Representantes por Unidade de Trabalho.</div><div>Atenção! Agora serão três por Unidade Educacional!</div><div><br></div><div>Solicitamos o exame atento e imediato destes anexos e, também, o seu empenho e colaboração para envolver os interessados da Equipe Escolar no atendimento das providências solicitadas, em caráter emergencial, para assegurar a plena representatividade da sua UE na Reunião de Representantes Sindicais da APROFEM, no dia 06 de março próximo. Lembramos que serão tratados, nesse evento, assuntos de interesse geral, muitos dos quais estão afligindo parcela significativa da Rede.</div><div>Contando com a sua indispensável colaboração, subscrevemo-nos.</div>
		</div>
	</div>
</div>
@endsection