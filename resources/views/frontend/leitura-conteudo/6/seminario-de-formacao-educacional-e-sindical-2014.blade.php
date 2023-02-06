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
<title>Seminário de Formação Educacional e Sindical 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Seminário de Formação Educacional e Sindical 2014</span></h2>
	</div>
</section>
<div class="container pb-5 mb-5">
	<div class="row">
		<div class="col-sm">
			<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/014000000970001_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970002_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970003_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970004_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970005_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970006_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970007_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970008_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970009_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970010_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970011_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970012_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970013_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970014_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970015_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970016_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970017_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000000970018_0.jpg')}}" alt="Seminario APROFEM" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970001_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970002_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970003_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970004_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970005_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970006_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970007_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970008_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970009_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970010_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970011_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970012_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970013_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970014_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970015_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970016_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970017_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000097/014000000970018_0.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
		</div>
	</div>
</div>
@endsection