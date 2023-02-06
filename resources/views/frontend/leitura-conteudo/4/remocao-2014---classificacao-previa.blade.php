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
<title>Remoção 2014 - Classificação Prévia</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Remoção 2014 - Classificação Prévia</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Remoção 2014 - Classificação Prévia</h4>
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
			<div>Foi publicada no DOC de 05/11/2014, da pág. 37 à pág. 121, a classificação prévia dos candidatos inscritos no Concurso de Remoção 2014, que procederam à indicação de Unidade(s).</div><div><br></div><div>Os dias para interposição de recursos são: 06, 07 e 10 de novembro, das 10h às 16h na Divisão de Recursos Humanos - CONAE 2.</div><div><br></div><div><b>Consulte a publicação!</b> Não perca prazo para recurso, se necessário!</div>
		</div>
	</div>
</div>
@endsection