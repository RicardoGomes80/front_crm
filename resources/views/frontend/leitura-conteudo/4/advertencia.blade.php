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
<title>Advertência</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Advertência</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Advertência</h4>
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
			<div><span style="line-height: 1.2;">A <b>APROFEM</b> foi comunicada de que servidores municipais estão sendo abordados, nas Unidades de Exercício, por pessoas que, afirmando ter credenciamento/parceria com a APROFEM, oferecem empréstimo consignado, cartão de crédito e outros serviços correlatos.</span><br></div><div><span style="line-height: 1.2;"><br></span></div><div>A <b>APROFEM</b> desautoriza qualquer menção ao seu nome, porque não há qualquer empresa e/ou pessoa credenciada/autorizada pela Entidade para visitar as Unidades e oferecer serviços daquela natureza.</div><div><br></div><div>Reitera aos seus representados, para sua segurança, que só tratem desse assunto em agências bancárias ou em escritórios de correspondentes bancários, preferencialmente após obterem referências positivas quanto à sua idoneidade.</div>
		</div>
	</div>
</div>
@endsection