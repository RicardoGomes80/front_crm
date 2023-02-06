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
<title>Pedagogia do Cuidado - Casa do Zezinho</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Pedagogia do Cuidado - Casa do Zezinho</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/014000002550001_0.jpg')}}" alt="Pedagogia do Cuidado - Casa do Zezinho" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000255/014000002550001_0.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Pedagogia do Cuidado - Casa do Zezinho</h4>
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
			<div><span style="line-height: 1.2;">Nesta tarde, todos os presentes no XVII Congresso da <b>APROFEM</b> puderam conhecer o incrível trabalho da "Casa do Zezinho", ONG fundada em 1994 pela educadora Dagmar Garroux (tia Dag), que tem uma crença inabalável numa educação de reciprocidade e escuta.</span><br></div><div><br></div><div>Foi emocionante ouvir as histórias, conhecer a "Pedagogia do Arco-íris" e tudo que a Casa do Zezinho proporciona, para transformar a vida de crianças e adolescentes na região do Capão Redondo.</div><div><br></div>
		</div>
	</div>
</div>
@endsection