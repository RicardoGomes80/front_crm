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
<title>Publicada a Promoção por Antiguidade</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Publicada a Promoção por Antiguidade</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Publicada a Promoção por Antiguidade</h4>
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
			<div>O Diário Oficial da Cidade, em sua edição do dia 28/06/2014, a partir da página 70, publicou a relação dos servidores municipais efetivos que foram promovidos de grau, por antiguidade.</div><div><br></div><div>Para concorrer à Promoção por Antiguidade, o servidor precisa contar com, pelo menos, três anos de efetivo exercício no grau (letra) em que se encontra, completados até 31 de dezembro do ano anterior à promoção. Anualmente, no mês de abril, é publicada a listagem prévia de todos os servidores efetivos que cumpriram esse requisito mínimo. Abre-se, então, um prazo de 10 dias para eventuais recursos e, no final do mês de junho, é publicada a listagem definitiva dos promovidos.</div><div><br></div><div>De todos os que atingiram o tempo exigido, para cada cargo e cada grau, apenas 16% (dezesseis por cento), por rigorosa ordem de antiguidade, são realmente promovidos.</div><div><br></div><div>Os efeitos pecuniários da Promoção vigoram a partir da data da publicação no Diário Oficial (neste ano, 28/06).</div><div><br></div>
		</div>
	</div>
</div>
@endsection