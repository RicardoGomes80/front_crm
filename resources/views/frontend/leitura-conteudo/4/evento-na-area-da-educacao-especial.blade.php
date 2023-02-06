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
<title>Evento na área da Educação Especial</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Evento na área da Educação Especial</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Evento na área da Educação Especial</h4>
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
			<div>A educação que pretende ser inclusiva, de qualidade e para todos, ganha diferentes formas de materialização em contextos sociais e culturais. As transformações sociais e a aparente aceitação das diferenças ampliam a diversidade existente nas salas de aula, constituindo-se em uma possibilidade de aprendizagem e de desenvolvimento para todos, bem como em um desafio para os educadores.</div><div><br></div><div><b>Outras informações:</b> fabiojuniosilvasantos@gmail.com</div>
		</div>
	</div>
</div>
@endsection