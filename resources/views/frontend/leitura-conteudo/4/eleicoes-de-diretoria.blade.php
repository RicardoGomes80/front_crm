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
<title>Eleições de Diretoria</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Eleições de Diretoria</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Eleições de Diretoria</h4>
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
			<div>As eleições de Diretoria e Conselho Fiscal da<b> APROFEM,</b> para o triênio 2015 - 2018, ocorrerão no mês de junho próximo, em dia a ser divulgado oportunamente.</div><div> </div><div>O Regulamento Eleitoral encontra-se à disposição para consulta dos filiados interessados, na Sede da Entidade, das 8h às 17h. A entrega das inscrições de chapas, nos termos do Estatuto da Entidade e do Regulamento Eleitoral, ocorrerá exclusivamente nos dias 10 e 11 de abril de 2014, das 8h às 17h, na Sede da Entidade (Praça da Sé, 371, 10º andar, São Paulo).</div>
		</div>
	</div>
</div>
@endsection