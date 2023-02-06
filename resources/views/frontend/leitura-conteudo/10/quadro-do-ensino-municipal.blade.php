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
<title>Quadro do Ensino Municipal</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Quadro do Ensino Municipal</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Quadro do Ensino Municipal</h4>
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
			<p><strong>Quadro do Ensino Municipal Jornada em Tempo Parcial</strong><br></p><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr class="active"><th class="text-left"><strong>REF/GRAUS</strong></th><th class="text-center"><strong>A</strong></th><th class="text-center"><strong>B</strong></th><th class="text-center"><strong>C</strong></th><th class="text-center"><strong>D</strong></th><th class="text-center"><strong>E</strong></th></tr></thead><tbody><tr><td><strong>EM - 01</strong></td><td class="text-right">267,29</td><td class="text-right">280,673</td><td class="text-right">294,69</td><td class="text-right">309,43</td><td class="text-right">324,91</td></tr><tr><td><strong>EM - 02</strong></td><td class="text-right">280,67</td><td class="text-right">294,69</td><td class="text-right">309,43</td><td class="text-right">324,91</td><td class="text-right">341,15</td></tr><tr><td><strong>EM - 03</strong></td><td class="text-right">294,69</td><td class="text-right">309,43</td><td class="text-right">324,91</td><td class="text-right">341,15</td><td class="text-right">358,23</td></tr><tr><td><strong>EM - 04</strong></td><td class="text-right">309,43</td><td class="text-right">324,91</td><td class="text-right">341,15</td><td class="text-right">358,23</td><td class="text-right">376,14</td></tr><tr><td><strong>EM - 05</strong></td><td class="text-right">324,91</td><td class="text-right">341,15</td><td class="text-right">358,23</td><td class="text-right">376,14</td><td class="text-right">394,97</td></tr><tr><td><strong>EM - 06</strong></td><td class="text-right">341,15</td><td class="text-right">358,23</td><td class="text-right">376,14</td><td class="text-right">394,97</td><td class="text-right">414,69</td></tr><tr><td><strong>EM - 07</strong></td><td class="text-right">358,23</td><td class="text-right">376,14</td><td class="text-right">394,97</td><td class="text-right">414,69</td><td class="text-right">435,43</td></tr><tr><td><strong>EM - 08</strong></td><td class="text-right">376,14</td><td class="text-right">394,97</td><td class="text-right">414,69</td><td class="text-right">435,43</td><td class="text-right">457,23</td></tr><tr><td><strong>EM - 09</strong></td><td class="text-right">394,97</td><td class="text-right">414,69</td><td class="text-right">435,43</td><td class="text-right">457,23</td><td class="text-right">480,10</td></tr><tr><td><strong>EM - 10</strong></td><td class="text-right">414,69</td><td class="text-right">435,43</td><td class="text-right">457,23</td><td class="text-right">480,10</td><td class="text-right">504,11</td></tr><tr><td><strong>EM - 11</strong></td><td class="text-right">435,43</td><td class="text-right">457,23</td><td class="text-right">480,10</td><td class="text-right">504,11</td><td class="text-right">529,30</td></tr><tr><td><strong>EM - 12</strong></td><td class="text-right">457,23</td><td class="text-right">480,10</td><td class="text-right">504,11</td><td class="text-right">529,30</td><td class="text-right">555,83</td></tr></tbody></table></div><p><strong>Quadro do Ensino Municipal Jornada em Tempo Integral</strong></p><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr class="active"><th class="text-left"><strong>REF/GRAUS</strong></th><th class="text-center"><strong>A</strong></th><th class="text-center"><strong>B</strong></th><th class="text-center"><strong>C</strong></th><th class="text-center"><strong>D</strong></th><th class="text-center"><strong>E</strong></th></tr></thead><tbody><tr><td><strong>EM - 01</strong></td><td class="text-right">534,54</td><td class="text-right">561,33</td><td class="text-right">589,40</td><td class="text-right">618,84</td><td class="text-right">649,83</td></tr><tr><td><strong>EM - 02</strong></td><td class="text-right">561,33</td><td class="text-right">589,40</td><td class="text-right">618,84</td><td class="text-right">649,83</td><td class="text-right">682,36</td></tr><tr><td><strong>EM - 03</strong></td><td class="text-right">589,40</td><td class="text-right">618,84</td><td class="text-right">649,83</td><td class="text-right">682,36</td><td class="text-right">716,42</td></tr><tr><td><strong>EM - 04</strong></td><td class="text-right">618,84</td><td class="text-right">649,83</td><td class="text-right">682,36</td><td class="text-right">716,42</td><td class="text-right">752,26</td></tr><tr><td><strong>EM - 05</strong></td><td class="text-right">649,83</td><td class="text-right">682,36</td><td class="text-right">716,42</td><td class="text-right">752,26</td><td class="text-right">789,92</td></tr><tr><td><strong>EM - 06</strong></td><td class="text-right">682,36</td><td class="text-right">716,42</td><td class="text-right">752,26</td><td class="text-right">789,92</td><td class="text-right">829,38</td></tr><tr><td><strong>EM - 07</strong></td><td class="text-right">716,42</td><td class="text-right">752,26</td><td class="text-right">789,92</td><td class="text-right">829,38</td><td class="text-right">870,90</td></tr><tr><td><strong>EM - 08</strong></td><td class="text-right">752,26</td><td class="text-right">789,92</td><td class="text-right">829,38</td><td class="text-right">870,90</td><td class="text-right">914,42</td></tr><tr><td><strong>EM - 09</strong></td><td class="text-right">789,92</td><td class="text-right">829,38</td><td class="text-right">870,90</td><td class="text-right">914,42</td><td class="text-right">960,21</td></tr><tr><td><strong>EM - 10</strong></td><td class="text-right">829,38</td><td class="text-right">870,90</td><td class="text-right">914,42</td><td class="text-right">960,21</td><td class="text-right">1.008,19</td></tr><tr><td><strong>EM - 11</strong></td><td class="text-right">870,90</td><td class="text-right">914,42</td><td class="text-right">960,21</td><td class="text-right">1.008,19</td><td class="text-right">1.058,60</td></tr><tr><td><strong>EM - 12</strong></td><td class="text-right">914,42</td><td class="text-right">960,21</td><td class="text-right">1.008,19</td><td class="text-right">1.058,60</td><td class="text-right">1.111,59</td></tr></tbody></table></div><p><strong>Quadro do Ensino Municipal</strong></p><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr class="active"><th class="text-left"><strong>REF/GRAUS</strong></th><th class="text-center"><strong>VALOR</strong></th></tr></thead><tbody><tr><td><strong>EMS - 01</strong></td><td class="text-right">89,11</td></tr><tr><td><strong>EMS - 03</strong></td><td class="text-right">98,24</td></tr><tr><td><strong>EMS - 04</strong></td><td class="text-right">103,15</td></tr></tbody></table></div><p>Decreto nº 54.030, de 21 de junho de 2013</p><p><br><br> <br></p>
		</div>
	</div>
</div>
@endsection