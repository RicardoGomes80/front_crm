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
<title>Audiência Pública sobre o Plano Municipal de Educação da Cidade de São Paulo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Audiência Pública sobre o Plano Municipal de Educação da Cidade de São Paulo</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Audiência Pública sobre o Plano Municipal de Educação da Cidade de São Paulo</h4>
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
			<div>Conforme cronograma estabelecido para a realização de Audiências Públicas, iniciou-se, em 16 de agosto de 2014, um ciclo de Audiências referentes ao Plano Municipal de Educação da Cidade de São Paulo. Nessa primeira Audiência realizada na Câmara Municipal de São Paulo (mesmo local de realização das próximas), os trabalhos limitaram-se à apresentação do Substitutivo ao PL 415/2012, pelo Relator, e às considerações feitas pelos presentes inscritos para falar sobre o Substitutivo. </div><div><br></div><div>A <b> APROFEM</b>, presente ao evento, conclama seus filiados à participação e registra o reduzidíssimo número de interessados presentes: aproximadamente 60 pessoas, entre servidores e não servidores públicos municipais! </div><div><br></div><div>Segue o cronograma das Audiências:<br></div>
		</div>
	</div>
</div>
@endsection