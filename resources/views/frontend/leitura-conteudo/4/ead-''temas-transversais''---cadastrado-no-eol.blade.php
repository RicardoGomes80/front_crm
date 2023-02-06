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
<title>EAD ''Temas Transversais'' - Cadastrado no EOL</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">EAD ''Temas Transversais'' - Cadastrado no EOL</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>EAD ''Temas Transversais'' - Cadastrado no EOL</h4>
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
			<div>Os Certificados do Curso "Temas Transversais No Corpo Da Ldb: Conceito E Operacionalização" estão cadastrados no Sistema EOL, sob código 2410 - PMSP Legislação, concluído em 01/11/2013.</div><div><br></div><div>Os Certificados serão encaminhados, via correio, para a residência dos concluintes, gradativamente.</div>
		</div>
	</div>
</div>
@endsection