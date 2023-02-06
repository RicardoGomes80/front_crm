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
<title>Filiados Contemplados no Sorteio da Campanha de Atualização de Dados Cadastrais</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Filiados Contemplados no Sorteio da Campanha de Atualização de Dados Cadastrais</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Filiados Contemplados no Sorteio da Campanha de Atualização de Dados Cadastrais</h4>
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
			<div>Os filiados sorteados terão direito a Estadias (*)nas <b>COLÔNIAS/POUSADA DA APROFEM</b> nos períodos de :</div><div><br></div><div>Maio /agosto/ setembro/outubro/novembro/2014 (exceto em períodos destinados a pacotes e sorteios).</div><div>(*)estas estadias se referem a períodos mínimos (duas diárias).</div><div><br></div><div>Para maiores informações, entrar em contato com o Setor de Convênios da <b>APROFEM</b>.</div><div><br></div><div><ul><li>RF: 316.581.7</li><li>RF: 537.989.0</li><li>RF: 586.969.2</li><li>RF: 597.037.7</li><li>RF: 601.128.4</li><li>RF: 606.579.1</li><li>RF: 626.168.0</li><li>RF: 627.957.1</li><li>RF: 630.939.9</li><li>RF: 638.026.3</li><li>RF: 638.725.0</li><li>RF: 644.329.0</li><li>RF: 660.564.8</li><li>RF: 682.915.5</li><li>RF: 690.721.1</li><li>RF: 692.719.0</li><li>RF: 693.544.3</li><li>RF: 693.952.0</li><li>RF: 694.677.1</li><li>RF: 695.455.3</li><li>RF: 713.412.6</li><li>RF: 718.508.1</li><li>RF: 720.160.5</li><li>RF: 722.348.0</li><li>RF: 723.843.6</li><li>RF: 729.862.5</li><li>RF: 732.461.8</li><li>RF: 734.894.1</li><li>RF: 736.081.9</li><li>RF: 744.843.1</li><li>RF: 745.697.2</li><li>RF: 746.033.3</li><li>RF: 753.776.0</li><li>RF: 756.479.1</li><li>RF: 774.662.8</li><li>RF: 780.171.8</li><li>RF: 781.760.6</li><li>RF: 783.210.9</li><li>RF: 783.843.3</li><li>RF: 787.811.7</li><li>RF: 790.671.4</li><li>RF: 795.049.7</li><li>RF: 795.248.1</li><li>RF: 798.113.9</li><li>RF: 800.132.4</li><li>RF: 801.408.6</li><li>RF: 803.524.5</li><li>RF: 803.577.6</li><li>RF: 804.943.2</li><li>RF: 807.469.1</li></ul></div>
		</div>
	</div>
</div>
@endsection