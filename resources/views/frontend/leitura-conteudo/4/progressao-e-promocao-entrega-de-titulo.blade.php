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
<title>Progressão e Promoção/Entrega de Título</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Progressão e Promoção/Entrega de Título</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Progressão e Promoção/Entrega de Título</h4>
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
			<div><b>ATENÇÃO! SOMENTE PARA SERVIDORES DA SECRETARIA MUNICIPAL DE SEGURANÇA URBANA</b></div><div><br></div><div>Foi publicado no DOC de 19/09/2014, na página 32, o Comunicado 004 SMSU/DTRH/TD/2014, que estabelece o período de 22/09 a 03/10/2014, para entrega de títulos para Progressão e Promoção Funcional/2015 dos Servidores do PCCS de Nível Básico / Nível Médio/ Nível Superior.</div><div><br></div><div><b>Não perca o prazo!</b></div><div><br></div><div><b><a href="http://diariooficial.imprensaoficial.com.br/nav_v4/index.asp?c=1&e=20140919&p=1">Leia aqui</a></b> o Comunicado!</div>
		</div>
	</div>
</div>
@endsection