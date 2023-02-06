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
<title>Procedimento para Realização da Avaliação Presencial - EAD</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Procedimento para Realização da Avaliação Presencial - EAD</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Procedimento para Realização da Avaliação Presencial - EAD</h4>
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
			<div>Atendendo aos apelos e utilizando de nossa prerrogativa, a<b> APROFEM</b> resolveu reconsiderar sua decisão de não permitir a consulta do material.</div><div>Desta forma, a avaliação presencial, que corresponde a 2h do curso, poderá ser com consulta. Os filiados participantes que desejarem, deverão levar o seu material de estudo (proibida a utilização de qualquer meio eletrônico - tablet, smartphone, celular, notebook etc).</div><div><br></div><div><b>Lembre-se das demais orientações:</b></div><div><br></div><div><ul><li>É obrigatória a apresentação de documento com foto.</li><li>É obrigatória a apresentação de holerite recente.</li><li>Durante a prova, o celular deverá estar desligado. </li><li>É proibida a consulta a qualquer meio eletrônico, tais como: tablet, smartphone, celular, notebook etc.</li></ul></div><div><br></div><div>Contamos com a sua colaboração, contribuindo para que não ocorram constrangimentos desnecessários.</div><div><br></div><div><b>Consulte em anexo os Postos de Avaliação</b></div>
		</div>
	</div>
</div>
@endsection