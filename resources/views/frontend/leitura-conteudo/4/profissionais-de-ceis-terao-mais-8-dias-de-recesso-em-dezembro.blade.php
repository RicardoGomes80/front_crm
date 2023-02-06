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
<title>Profissionais de CEIs terão mais 8 dias de recesso em dezembro</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Profissionais de CEIs terão mais 8 dias de recesso em dezembro</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Profissionais de CEIs terão mais 8 dias de recesso em dezembro</h4>
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
			<div><b>Concedidos mais 8 dias de recesso para os Profissionais dos CEIs.</b></div><div><br></div><div>Após reunião com a chefia de Assessoria Técnica de Planejamento da Secretaria Municipal de Educação, que tratou da questão do recesso nos Centros de Educação Infantil da Rede Municipal, na qual a APROFEM reivindicou igualdade de tratamento entre os Profissionais de Educação que atuam nos CEIs e os das demais Unidades Educacionais, foi publicada, na edição de 16/05/2014, a Portaria SME nº2.963, de 15/05/2014, que altera a Portaria nº 6.448, de 14/11/2013 (e alterações posteriores) para fazer constar que o período de recesso de dezembro iniciar-se-á em 16/12/2014 e não mais no dia 24, como anteriormente previsto.</div><div><br></div><div>Com esta medida, que acrescenta oito dias ao recesso de dezembro,  o governo equaliza a quantidade de dias de recesso concedida aos Profissionais de Educação, independentemente do tipo de Unidade Educacional em que atuam.</div><div> </div><div>Ainda não foi publicada, porém, a Portaria que deverá regulamentar o recesso de junho/julho nos CEIs, e que, pela minuta apresentada e discutida, deverá propiciar diferentes situações em cada DRE, ou dentro até da mesma DRE.</div><div> </div><div>De acordo com a minuta apresentada aos Sindicatos, o período de 12/06 a 11/07/2014 poderá ser dividido em dois períodos de 15 dias, sendo que as Diretorias Regionais de Educação terão três opções para organizar suas unidades, definindo pelo fechamento de uma parte dos CEIs a cada 15 dias, ou mantendo todos em funcionamento com 50% do seu quadro de docentes ou combinando as opções anteriores.</div><div> </div><div>A <b>APROFEM</b> observou que haverá inúmeros problemas com essa disparidade de critérios, gerando grande insatisfação para os Professores e Gestores.</div>
		</div>
	</div>
</div>
@endsection