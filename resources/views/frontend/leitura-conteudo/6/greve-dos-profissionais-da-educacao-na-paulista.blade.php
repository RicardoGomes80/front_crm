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
<title>Greve dos Profissionais da Educação na Paulista</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Greve dos Profissionais da Educação na Paulista</span></h2>
	</div>
</section>
<div class="container pb-5 mb-5">
	<div class="row">
		<div class="col-sm">
			<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/014000001000001_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000001000002_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000001000003_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000001000004_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000001000005_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000001000006_0.jpg')}}" alt="Greve dos Profissionais da Educação na Paulista" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000001_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000002_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000003_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000004_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000005_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000100/014000001000006_0.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
		</div>
	</div>
</div>
@endsection